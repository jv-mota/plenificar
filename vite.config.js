import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // CSS
                'resources/css/app.css',
                'resources/css/index.css',
                'resources/css/navbar.css',
                'resources/css/footer.css',

                // JavaScript
                'resources/js/app.js',
                'resources/js/index.js',
                'resources/js/navbar.js',
                'resources/js/footer.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});
