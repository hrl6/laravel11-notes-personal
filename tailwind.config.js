import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#F1FAEE',
                secondary: '#A8DADC',
                tertiary: '#1D3557',
                
                textlight: '#EDF6F9',
                textdark: '#14213D',

                boxlight: '#F0F9F9',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                gummy: ['Sour Gummy', 'sans-serif'], 
                heading: ['Poppins', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
