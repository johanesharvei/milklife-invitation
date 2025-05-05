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
      input: [
	'resources/css/app.css',  // Ensure this points to your main CSS file
        'resources/js/app.js',    // Ensure this points to your main JS file
      ],
    },
  },
  server: {
    host: '0.0.0.0',  // Ensures it's accessible externally
    port: 5173,        // Keep the port for development
    open: false,       // Prevents auto-opening the browser
    hmr: {
      host: 'jelajahmilklife.com',  // Use your public domain
      port: 5173,
    },
    https: true,
  },
  base: '/',  // Make sure the base URL is correct
});
