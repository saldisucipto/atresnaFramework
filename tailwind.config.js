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
                "bg-primary": "#f1f1f1",
                "text-primary": "#283681",
                "text-cta": "#F5844B",
            },
            height: {
                hero: "389px",
                "artikel-terbaru": "290px",
                "small-artikel-card": "84px",
                "medium-artikel-card": "170px",
            },
            width: {
                hero: "850px",
                "artikel-terbaru": "500px",
                "small-artikel-card": "112px",
                "medium-artikel-card": "228px",
            },
            fontSize: {
                tiny: "10px",
            },
        },
    },
    plugins: [],
};
