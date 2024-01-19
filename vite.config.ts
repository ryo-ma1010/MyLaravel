import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react'

export default defineConfig({
    plugins: [
        laravel([
            'resources/react/src/main.tsx',
            'resources/react/src/pdfme.tsx',
        ]),
        react(),
    ],
    server: {
        port: 8081
    }
});