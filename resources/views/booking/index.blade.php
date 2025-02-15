<x-app-layout>
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Daftar Booking Saya</h2>

        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @forelse ($bookings as $booking)
            <div class="bg-white shadow-md rounded-lg p-6 mb-4">
                <div class="flex flex-col md:flex-row justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">{{ $booking->car->name }}</h3>
                        <p class="text-gray-600 text-sm">Rp{{ number_format($booking->car->price_per_day, 0, ',', '.') }}
                            / hari</p>

                        <p class="mt-2 text-gray-600">Tanggal Sewa:</p>
                        <p class="font-semibold">{{ date('d M Y', strtotime($booking->start_date)) }} -
                            {{ date('d M Y', strtotime($booking->end_date)) }}</p>

                        <p class="mt-2 text-gray-600">Total Harga:</p>
                        <p class="font-semibold text-green-600">
                            Rp{{ number_format($booking->total_price, 0, ',', '.') }}</p>
                    </div>

                    <div class="flex flex-col items-end">
                        <p class="text-gray-600">Status:</p>
                        <span
                            class="px-3 py-1 rounded-lg text-white text-sm font-semibold
                            {{ $booking->status === 'confirmed' || $booking->status === 'done'
                                ? 'bg-green-500'
                                : ($booking->status === 'pending'
                                    ? 'bg-yellow-500'
                                    : 'bg-red-500') }}">
                            {{ ucfirst($booking->status) }}
                        </span>
                        <div class="mt-4 flex space-x-2">
                            <a href="{{ route('booking.show', $booking->id) }}"
                                class="bg-violet-500 text-white px-4 py-2 rounded-md text-sm">
                                Lihat Detail
                            </a>

                            @if ($booking->status === 'done' && !$booking->review)
                                <button onclick="openReviewModal({{ $booking->id }})"
                                    class="bg-yellow-500 text-white px-4 py-2 rounded-md text-sm">
                                    Beri Review
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center p-6 bg-white shadow-md rounded-lg text-gray-500">
                Belum ada booking yang dibuat.
            </div>
        @endforelse

        <!-- Custom Pagination -->
        @if ($bookings->hasPages())
            <div class="mt-6 flex justify-center">
                @if ($bookings->onFirstPage())
                    <span class="px-4 py-2 mx-1 bg-gray-300 text-gray-500 rounded-lg cursor-not-allowed">Previous</span>
                @else
                    <a href="{{ $bookings->previousPageUrl() }}"
                        class="px-4 py-2 mx-1 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                        Previous
                    </a>
                @endif

                @foreach ($bookings->getUrlRange(1, $bookings->lastPage()) as $page => $url)
                    <a href="{{ $url }}"
                        class="px-4 py-2 mx-1 {{ $bookings->currentPage() == $page ? 'bg-violet-500 text-white' : 'bg-gray-200 text-gray-700' }} rounded-lg hover:bg-violet-500 hover:text-white">
                        {{ $page }}
                    </a>
                @endforeach

                @if ($bookings->hasMorePages())
                    <a href="{{ $bookings->nextPageUrl() }}"
                        class="px-4 py-2 mx-1 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                        Next
                    </a>
                @else
                    <span class="px-4 py-2 mx-1 bg-gray-300 text-gray-500 rounded-lg cursor-not-allowed">Next</span>
                @endif
            </div>
        @endif
    </div>
    <script>
        let currentRating = 0;

        function openReviewModal(bookingId) {
            Swal.fire({
                title: 'Berikan Review',
                html: `
                    <div class="mb-4">
                        <div class="flex justify-center space-x-2 text-2xl mb-4">
                            ${[1, 2, 3, 4, 5].map(num => `
                                        <button type="button" 
                                            onclick="setRating(${num})" 
                                            class="star-rating focus:outline-none">
                                            ★
                                        </button>
                                    `).join('')}
                        </div>
                        <textarea id="review-comment" 
                            class="w-full px-3 py-2 border rounded-lg" 
                            placeholder="Tulis komentar Anda..."
                            rows="3"></textarea>
                    </div>
                `,
                showCancelButton: true,
                confirmButtonText: 'Kirim Review',
                cancelButtonText: 'Batal',
                confirmButtonColor: '#8B5CF6', // violet-500
                cancelButtonColor: '#6B7280', // gray-500
                customClass: {
                    popup: 'swal-wide'
                },
                didOpen: () => {
                    // Reset rating when modal opens
                    currentRating = 0;
                    updateStars();
                },
                preConfirm: () => {
                    if (currentRating === 0) {
                        Swal.showValidationMessage('Silakan berikan rating');
                        return false;
                    }
                    return {
                        rating: currentRating,
                        comment: document.getElementById('review-comment').value
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    submitReview(bookingId, result.value);
                }
            });

            // Add styles for stars
            const style = document.createElement('style');
            style.textContent = `
                .star-rating {
                    color: #D1D5DB; /* gray-300 */
                    transition: color 0.2s;
                }
                .star-rating.active {
                    color: #F59E0B; /* yellow-500 */
                }
                .swal-wide {
                    width: 500px !important;
                }
            `;
            document.head.appendChild(style);
        }

        function setRating(rating) {
            currentRating = rating;
            updateStars();
        }

        function updateStars() {
            const stars = document.querySelectorAll('.star-rating');
            stars.forEach((star, index) => {
                if (index < currentRating) {
                    star.classList.add('active');
                } else {
                    star.classList.remove('active');
                }
            });
        }

        function submitReview(bookingId, reviewData) {
            const formData = new FormData();
            formData.append('rating', reviewData.rating);
            formData.append('comment', reviewData.comment);

            fetch(`/bookings/${bookingId}/reviews`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: 'Review Anda telah berhasil dikirim',
                            confirmButtonColor: '#8B5CF6'
                        }).then(() => {
                            window.location.reload();
                        });
                    } else {
                        throw new Error(data.message || 'Terjadi kesalahan');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi kesalahan saat mengirim review',
                        confirmButtonColor: '#8B5CF6'
                    });
                });
        }
    </script>
</x-app-layout>
