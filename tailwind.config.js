import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', 
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
            colors: {
                // Ajoutez les couleurs personnalisées pour le thème clair et sombre si nécessaire
                light: {
                    background: '#ffffff',
                    text: '#1a202c',
                },
                dark: {
                    background: '#1a202c',
                    text: '#a0aec0',
                },
            },
        },
    },

    plugins: [forms],
};
