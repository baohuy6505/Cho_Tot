ĐỒ ÁN CUỐI KỲ: CHỢ TỐT CLONE
Môn học:Thiết kế & Lập trình Web sử dụng Laravel
Giảng viên hướng dẫn: Nguyễn Hoàng Hải
Nhóm: 3

1. GIỚI THIỆU DỰ ÁN
   Chợ Tốt Rút Gọn là nền tảng thương mại điện tử C2C (Customer to Customer) cho phép người dùng đăng tin rao vặt, trao đổi và mua bán các sản phẩm đã qua sử dụng. Hệ thống tập trung vào việc xây dựng độ uy tín và đảm bảo an toàn giao dịch thông qua các cơ chế kiểm duyệt tự động.

Tính năng nổi bật :

1. Login bằng tài khoảng Google
   2.Trao đổi trực tiếp người mua và người bán
   3.Kiểm duyệt bài đăng của người dùng
   4.Giao diện được xây dựng với tỉ lệ tương đồng với giao diện thật cao
   5.Thanh toán & Nạp tiền tự động có tích hợp Sepay và VietQR
   6.Deloy trang web lên Server //đang update dần lên

2. THÀNH VIÊN NHÓM & PHÂN CÔNG
   Nguyễn Khả Dương
   Nguyễn Bảo Huy
   Phan Xuân Trung
   Trương Tấn Quang Vũ
   Nguyễn Vinh Hà

3. CÔNG NGHỆ SỬ DỤNG

- Backend: PHP , Laravel Framework
- Database: MySQL
- Frontend: Blade Templates, Bootstrap 5, HTML5 CSS3, SCSS, ChartJS
- Công cụ khác:

* Google OAuth 2.0 (Đăng nhập)
* VietQR API (Tạo mã QR thanh toán)
* Git/GitHub (Quản lý mã nguồn)
* Postman (Kiểm thử API/Webhook)

4. HƯỚNG DẪN CÀI ĐẶT
   Yêu cầu môi trường

- PHP >= 8.1
- Composer
- NodeJS & NPM
- MySQL

Để giảng viên có thể chạy dự án, vui lòng thực hiện theo các bước sau:

- Bước 1: Clone dự án ( git clone https://github.com/baohuy6505/Cho_Tot.git )
- Bước 2: cd Cho_Tot
- Bước 3: Cài thư viện Laravel ( composer install )
- Bước 4: Cài thư viện SCSS ( npm install )
- Bước 5: Tạo .ENV ( copy .env.example .env )
- Bước 6: Tạo key ứng dụng ( php artisan key:generate )
- Bước 7: Nhập cấu hình Login bằng Google vào .env
  GOOGLE_CLIENT_ID=1035572953448-kj5cgob4s4r6lcpptntt5lthnauh4ldj.apps.googleusercontent.com
  GOOGLE_CLIENT_SECRET= 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
  GOOGLE_REDIRECT_URL=http://localhost:8000/auth/google/callback

- Bước 8: Nhập cấu hình Database vào .env
  DB_DATABASE=cho_tot
  DB_USERNAME=root
  DB_PASSWORD=

- Bước 9: Tạo bảng trong database ( php artisan migrate )
- Bước 10: Tạo Seeder ( php artisan db:seed )
- Bước 11: Khởi chạy lệnh link ảnh ( php artisan storage:link )
- Bước 12: Khởi chạy dự án Laravel ( php artisan serve )
- Bước 13: Khởi chạy SCSS ( npm run dev )

5. TÀI KHOẢN
   ADMIN:  
   Email: Admin@gmail.com  
   Password: 12345678

CLIENT:  
Email: Client@gmail.com  
Password: 12345678
