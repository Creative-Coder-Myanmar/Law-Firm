import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors : {
                'primary' : '#4c1d95',
                'secondary' : '#5b21b6',
                'warning' : '#ca8a04',
                'light': '#FFFFFF',
                'dark': '#1e293b',
                'danger' : '#dc2626',
                'smoke' : '#4b5563',
            }
        },
    },

    plugins: [forms],
};
