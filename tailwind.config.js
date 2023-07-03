/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {},
        colors: {
            main: '#a10000',
            custom: '#a10000',
            custom_black: '#0d0d0d',
        },
    },

    plugins: [
        require('flowbite/plugin')
    ],
}
