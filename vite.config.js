import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
// import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/scss/main.scss",
                "resources/css/app.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
        // tailwindcss(),
    ],
    build: {
        // Chỉ định thư mục đầu ra trong public (để tránh public/build/...)
        outDir: "public",

        // Điều chỉnh tên file để tránh các tên ngẫu nhiên (hash) khi build
        rollupOptions: {
            output: {
                // Đặt file CSS vào thư mục 'css/' trong outDir (public)
                assetFileNames: (assetInfo) => {
                    if (assetInfo.name === "main.scss") {
                        return "css/styles.css";
                    }
                    return "assets/[name]-[hash][extname]"; // Giữ nguyên cho các tài sản khác
                },
            },
        },
    },
});
