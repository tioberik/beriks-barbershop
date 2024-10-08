import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                "poppins": ["Poppins", "sans-serif"],
            },

        },

        plugins: [forms,
            require("tw-elements/plugin.cjs"),
            require('@tailwindcss/forms'),
        ],
    }
}
