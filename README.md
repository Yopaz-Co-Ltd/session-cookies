# PHP Login Demo: So sánh Cookie vs Session

## 🚀 Cách chạy từng demo

### 1. Demo **không dùng Cookie/Session**

```bash
make run-no-cookie
```
Truy cập: http://localhost:8000

Dữ liệu login không được lưu sau khi chuyển trang. Mỗi trang phải truyền thủ công thông tin người dùng.

### 2. Demo có dùng Cookie

```bash
make run-with-cookie
```
Truy cập: http://localhost:8001
🔹 Cookie được dùng để lưu user_id phía client.
🔹 Trình duyệt tự gửi cookie trong mỗi request.

### 3. Demo có dùng Cookie & Session

```bash
make run-with-cookie-session
```
Truy cập: http://localhost:8002
🔹 PHP sử dụng PHPSESSID trong cookie để map với file session trên server.
🔹 Dữ liệu người dùng được lưu hoàn toàn ở server qua $_SESSION.

### 💡 Mục tiêu
So sánh ứng dụng thực tế của Cookie và Session

Giải thích cách duy trì trạng thái đăng nhập

Làm rõ vai trò của từng phương pháp trong lập trình web bằng PHP

### 📜 Tài liệu kèm theo
File trình chiếu LaTeX: session_cookies_presentation.tex và bản PDF tương ứng