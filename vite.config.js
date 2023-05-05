import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss','resources/scss/aspel.scss','resources/scss/card.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
