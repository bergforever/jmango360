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
            main: '#c4ad8f',
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
