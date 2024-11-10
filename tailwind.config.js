import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
            optimal: {
            light: '#3bb3c2',
            DEFAULT: '#3bb3c2',
            dark: '#3bb3c2',
            },},
            container:{
                center:true,
                padding:{
                default:"1rem",
                sm:"2rem",
                lg:"4rem",
                xl:"5rem",
                "2xl":"6rem"
                }
            },
        },
    },

    plugins: [forms],
};
