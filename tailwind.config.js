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
                philosopher : ['Philosoper', 'sans-serif'],
                jakarta : ['Plus Jakarta Sans', 'sans-serif'],
                poppins : ['Poppins', 'sans-serif']
            },
            container: {
                padding: {
                    DEFAULT: "1rem",
                    sm: "2rem",
                    lg: "4rem",
                    xl: "5rem",
                    "2xl": "6rem",
                },
            },
            colors:{
                green : '#32524E',
                yellow : '#F3BC2C',
                purple : '#8A5780',
                purpleSoft : '#BD8FB4',

            }
        },
    },

    plugins: [forms],
};
