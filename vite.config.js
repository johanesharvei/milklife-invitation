import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',  // Ensure this points to your main CSS file
                'resources/js/app.js',    // Ensure this points to your main JS file
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build',  // Ensure the output directory is set correctly
        manifest: true,          // Enable manifest generation
        rollupOptions: {
            input: 'resources/js/app.js',  // Make sure this matches your main JS entry point
        },
    },
});
