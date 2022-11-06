import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','resources/js/admin.js','resources/css/admin.css','resources/css/index.css','resources/js/index.js'],
            refresh: true,
        }),
    ],
});
