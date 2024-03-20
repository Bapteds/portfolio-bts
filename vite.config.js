import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/img/background.jpg', 'resources/img/photodemoi.jpg', 'resources/img/carte.jpeg'],
            refresh: true,
        }),
    ],
});
