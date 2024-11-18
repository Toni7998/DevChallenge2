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
            colors: {
                light: {
                    50: '#0f172a',
                    100: '#1e293b',
                    200: '#334155',
                    300: '#475569',
                    400: '#64748b',
                    500: '#94a3b8',
                    600: '#cbd5e1',
                    700: '#e2e8f0',
                    800: '#f1f5f9',
                    900: '#f8fafc',
                },
                dark: {
                    DEFAULT: '#ffffff', // Fondo blanco predeterminado para modo oscuro
                },
            },
        },
    },

    darkMode: 'class', // Usa 'class' para habilitar el modo oscuro manualmente

    plugins: [forms],
};
