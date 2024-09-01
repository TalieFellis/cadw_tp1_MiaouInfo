/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'custom-pink': '#F2C2CB',
                'custom-blue': '#0468BF',
                'custom-white': '#FAF9F6',
                'custom-black': '#1B1212',
                'custom-brown': '#A68A80',
            },
            fontFamily: {
                raleway: ['Raleway', 'sans-serif'],
                dm: ['DM Serif Text', 'serif'],
            }
        },
    },
    plugins: [],
};
