<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/dangnhap.css">
    <title>Đăng nhập </title>
</head>
<body>
    <div class="container">
        <div class="signin-signup">
            <form action="pages/xulydangnhap.php" class="sign-in-form" method="POST">
                <h2 class="title">Đăng nhập sinh viên</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="taikhoansv" placeholder="Tài khoản Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="matkhausv" placeholder="Mật khẩu">
                </div>
                <input type="submit" value="Đăng nhập" name="dangnhapsv" class="btn">
                <p class="account-text">Bạn muốn đăng nhập với vai trò quản lý? <a href="#" id="sign-up-btn2" style="color: red;">Quản lý</a></p>
            </form>
            <form action="pages/xulydangnhap.php" class="sign-up-form" method="POST">
                <h2 class="title">Đăng nhập quản lý</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="email" name="taikhoanql" placeholder="Tài khoản Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="matkhauql" placeholder="Mật khẩu">
                </div>
                <input type="submit" value="Đăng nhập" name="dangnhapquanly" class="btn">
                <p class="account-text">Bạn muốn đăng nhập vai trò sinh viên?<a href="#" id="sign-in-btn2" style="color: red;">Sinh viên</a></p>
            </form>
        </div>
        <div class="panel-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Đăng nhập với vai trò là quản lý</h3>
                    <p>Vui lòng đăng nhập đúng tài khoản và mật khẩu mà chúng tôi đẫ cung cấp trong hồ sơ để truy cập vào trang web với quyền quản lý của bạn. Nếu đăng nhập dưới vai trò là sinh viên vui lòng kích vào nút bên dưới.</p>
                    <button class="btn" id="sign-in-btn">Sinh viên</button>
                </div>
                <img src="undraw_sign_in_re_o58h.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                <h3>Đăng nhập với vai trò là sinh viên</h3>
                    <p>Vui lòng đăng nhập đúng tài khoản và mật khẩu mà chúng tôi đẫ cung cấp trong hồ sơ để truy cập vào trang web với quyền quản lý của bạn. Nếu đăng nhập dưới vai trò là quản lý vui lòng kích vào nút bên dưới.</p>
                    <button class="btn" id="sign-up-btn">Quản lý</button>
                </div>
                <img src="undraw_sign_up_n6im.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="js/dangnhap.js"></script>
</body>
</html>