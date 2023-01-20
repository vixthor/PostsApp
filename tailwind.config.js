const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                tangerine: ['Tangerine'],
            },
            colors: {
                'sky_blue' : '#659DBD',
                'forest-green' : '#8D8741',
                'light-brown' : '#DAAD86',
                'dark-brown' : '#BC986A',
                'biege' : '#FBEEC1',

            },
        },
    },

    plugins: [ 
                require('@tailwindcss/forms'),
            ],
    
};
