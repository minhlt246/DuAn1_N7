Cách sử dụng github

Đăng nhập vào trang github : https://github.com/
Chưa có tài khoản thì đăng ký
Sau đó đăng vào và vô project của nhóm có tên là: DuAn1_N7

Download source về bằng cách dùng
https://github.com/chuong-lee/DuAn1_N7.git

//////////////////////////////////////////////////
Và code như bình thường
Lưu ý: Phải checkout từ nhánh main và tạo 1 nhánh theo tên chức năng mình làm
Ví dụ: Nếu đang làm chức năng show sp thì đặt tên như Sau
    func/ten_chuc_nang
Code xong thì up code lên trên dự án bằng cú pháp
    git push origin ten_nhanh_hien_tai
Lưu ý: Trước khi viết code mới luôn checkout về nhánh main và thực hiện lệnh
update code mới
    git fetch (kiểm tra sự thay đổi)
    git pull origin main

Kiểm tra trạng thái của code
    git status
Add hết code đã làm vào nhánh hiện tại 
    git add .
Ghi chú code làm những gì (viết ngắn gọn code đã làm)
    git commit -m "nội dung của những thứ đã làm"

Để checkout sang nhánh khác dùng lệnh (Phải làm theo quy tắc)
    git checkout -b ten_nhanh