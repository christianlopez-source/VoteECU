const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php"
    ],

    theme: {
        extend: {
            backgroundImage: theme => ({
                "login-bg": "url('/images/login.jpg')"
            }),
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans]
            },

            gridTemplateRows: {
                // Simple 8 row grid
                "8": "repeat(8, minmax(0, 1fr))",

                // Complex site-specific row configuration
                layout: "200px minmax(900px, 1fr) 100px"
            }
        }
    },

    variants: {
        opacity: ["responsive", "hover", "focus", "disabled"]
    },

    plugins: [require("@tailwindcss/ui")]
};
