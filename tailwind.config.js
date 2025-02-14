/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./app/Filament/**/*.php",
        "./resources/**/*.blade.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: "15px",
            },
        },
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1300px",
        },
        extend: {
            colors: {
                primary: "#101828",
                secondary: "#667885",
                accent: {
                    DEFAULT: "#ed1d24",
                    hover: "#dd242a",
                },
                body: "#dedede",
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            },
        },
    },
    plugins: [],
};