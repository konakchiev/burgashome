import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/animation.css',
                'resources/css/nouislider.min.css',
                'resources/css/nice-select.css',
                'resources/css/bootstrap.css',
                'resources/css/bootstrap-select.min.css',
                'resources/css/swiper-bundle.min.css',
                'resources/css/magnific-popup.min.css',
                'resources/css/ytp.css',
                'resources/css/mmenu.css',
                'resources/css/style.css',
                'resources/css/custom.css',
                'resources/js/app.js',
                'resources/js/jquery.min.js',
                'resources/js/bootstrap.min.js',
                'resources/js/bootstrap-select.min.js',
                'resources/js/swiper-bundle.min.js',
                'resources/js/swiper.js',
                'resources/js/rangle-slider.js',
                'resources/js/mmenu.js',
                'resources/js/wow.min.js',
                'resources/js/scrollmagic.js',
                'resources/js/main.js',
                ],
            refresh: true,
        }),
    ],
});