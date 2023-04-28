/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                "primary-color": "#180d51",
                "secondary-color": "#f5821f",
                "bg-primary": "#e8e7ee",
            },
        },
    },
    plugins: [],
};
