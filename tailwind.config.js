import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#8C1010'
                },
                secondary: {
                    DEFAULT: '#E8C2D3'
                },
                tertiary: {
                    DEFAULT: '#FC814A'
                },
                quaternary: {
                    DEFAULT: '#564256'
                },
                quinary: {
                    DEFAULT: '#E8E8E8'
                }
            }
        },
        
    },

    plugins: [forms, typography],
};
