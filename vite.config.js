import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/validateCompanyForm.js',
                'resources/js/validateEmail.js',
                'resources/js/validateEmployeeForm.js',
                'resources/js/validateLenght.js',
            ],
            refresh: true,
        }),
    ],
});
