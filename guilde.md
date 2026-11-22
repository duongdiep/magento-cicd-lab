1. kiểm tra synctax
   php -l app/code/Training/Cicd/registration.php

2. khởi tạo Git

   git init
   git add .
   git commit -m "Initial Magento CI/CD lab"

   Nếu Git yêu cầu cấu hình tên và email, bạn có thể thiết lập riêng cho repository:
   git config user.name "Duong Van Diep"
   git config user.email "YOUR_GITHUB_EMAIL"

3. tạo githug repository và token key

4. kiểm tra trạng thái :
   git status
   git log -1 --oneline

5. đặt tên nhánh chính là main :
   git branch -M main

6. thêm địa chỉ Git :
   git remote add origin https://github.com/YOUR_USERNAME/magento-cicd-lab.git
   git remote set-url origin https://github.com/duongdiep/magento-cicd-lab.git

7. kiểm tra :
   git remote -v

8. push code :
   git push -u origin main

9. commit and push :
   git add .
   git commit -m "Test CI failure"
   git push

10. chọn branch :
    git branch -M main
    git push -u origin main

11. tạo branch test :
    git switch -c test/ci-failure

12. commit va push :
    git add .
    git commit -m "Test CI syntax error"
    git push -u origin test/ci-failure

13. kiểm tra branch hiện tại :
    git branch --show-current

    # Kiểm tra cú pháp
    php -l app/code/Training/Cicd/registration.php

    # Xem các thay đổi
    git diff

    # Commit
    git add app/code/Training/Cicd/registration.php
    git commit -m "Fix PHP syntax error"

    # Push lên branch test
    git push origin test/ci-failure
