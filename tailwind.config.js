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
            height: {
                hero: "768px",
                slider: "350px",
                banner: "669px",
                "card-artikel": "400px",
            },
            width: {
                banner: "1208px",
            },
            screens: {
                phone: { max: "390px" },
                // => @media (min-width: 640px) { ... }
                tab: { max: "820px" },
            },
        },
    },
    plugins: [],
};
