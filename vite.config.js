import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss','resources/scss/aspel.scss','resources/css/catalogos.css','resources/scss/card.scss',
                'resources/js/app.js','resources/js/catalogo.js','resources/scss/formulario.scss'
            ],
            refresh: true,
        }),
    ],
});
