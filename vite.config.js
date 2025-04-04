import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '0.0.0.0', // для доступа из контейнеров
        port: 5174,
        strictPort: true,
        hmr: {
            host: 'localhost', // или IP машины, если Laravel в контейнере
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
