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
                "bg-primary": "#f7fafc",
                primary: "#283681",
                secondary: "#283681",
                "text-primary-mtma": "#101924",
                "bg-primary-mtma": "#283681",
                "primary-color-mtma": "#2185C5",
                "secondary-color-mtma": "#00BA9B",
            },
        },
    },
    plugins: [],
};
