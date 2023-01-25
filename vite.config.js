import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/js/app.js',
                'resources/js/admin.js',
                'resources/css/admin.css',
                'resources/css/index.css',
                'resources/js/index.js',
                'resources/css/auth.css',
                'resources/css/products.css',
                'resources/css/single_product.css',
                'resources/css/bascket.css'
            ],
            publicDirectory: 'public_html',
            refresh: true,
        }),
    ],
});
