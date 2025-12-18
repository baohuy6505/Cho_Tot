# --- Giai đoạn 1: Dùng Node để build CSS/JS (Vite) ---
FROM node:18-alpine as build-stage
WORKDIR /app
COPY . .
# Cài đặt thư viện Node và Build
RUN npm install
RUN npm run build

# --- Giai đoạn 2: Dùng PHP để chạy Laravel ---
FROM richarvey/nginx-php-fpm:3.1.6

# Copy toàn bộ code vào
COPY . /var/www/html

# Copy phần CSS/JS đã build ở Giai đoạn 1 sang
COPY --from=build-stage /app/public/build /var/www/html/public/build

# Cấu hình cho Render
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV SKIP_COMPOSER=0
ENV WEBROOT=/var/www/html/public
ENV PHP_ERRORS_STDERR=1
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV REAL_IP_HEADER=1

# Cho phép chạy các lệnh cần thiết
ENV RUN_SCRIPTS=1

# Cấp quyền ghi cho thư mục storage (để upload ảnh, log)
RUN chmod -R 777 /var/www/html/storage