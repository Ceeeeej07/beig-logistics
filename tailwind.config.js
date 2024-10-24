import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            backgroundColor: {
                custom: "#f0f0f0", // Set your custom background color here
            },
            fontSize: {
                custom: ["20px", "30px"], // Custom size with line height
            },
            textColor: {
                "yellow-500": "#ffa500",
            },
        },
    },
    plugins: [],
};
