import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    // If you are deploying on sub directory, you need to uncomment below line 
    // and specify the sub directory name + 'build' folder name where you are deploying.
    // For example if subdirectory name is dashui, the base path will be....
    // base : '/dashui/build',
    // base : "/",  
    plugins: [
        laravel({
            input: [
                "resources/scss/theme.scss", 
                "resources/js/app.js"
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions:{
            scss:{
                silenceDeprecations:['import','color-functions','global-builtin']
            }
        }
    },
});
