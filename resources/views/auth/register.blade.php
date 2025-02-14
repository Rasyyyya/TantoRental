@extends('layouts.auth')
@section('title', 'Register')

@section('content')
    <h2 class="mb-6 text-2xl font-bold text-center md:text-3xl text-primary">Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- First Name & Last Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700 md:text-base">Name</label>
            <input id="name" type="text" placeholder="John Doe"
            class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary"
            name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 md:text-base">Email</label>
            <input id="email" type="email" placeholder="example@example.com"
                class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary"
                name="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <!-- Phone -->
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700 md:text-base">Phone</label>
            <input id="phone" type="text" placeholder="08123456789"
                class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary"
                name="phone" value="{{ old('phone') }}" required>
            @error('phone')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700 md:text-base">Password</label>
            <input id="password" type="password"
                class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary"
                name="password" required>
            @error('password')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <!-- Confirm Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 md:text-base">Confirm
                Password</label>
            <input id="password_confirmation" type="password"
                class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary"
                name="password_confirmation" required>
        </div>
        <button type="submit"
            class="w-full py-3 text-white transition rounded-md bg-primary hover:bg-primary-light focus:outline-none focus:ring-2 focus:ring-primary">
            Register
        </button>
    </form>
    <div class="mt-6 text-center">
        <p class="text-sm">Already have an account? <a href="{{ route('login') }}"
                class="font-medium text-primary hover:text-primary-light">Login</a></p>
    </div>
@endsection
