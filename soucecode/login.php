<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../asset/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css
    ">
    <link rel="stylesheet" href="../asset/font/fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
    <div class="wrapper">
    <form action="login-check.php" class="form-login" method="POST">
        <h1 class="form-heading">ĐĂNG NHẬP</h1>
        <div class="form-group">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="username" class="form-input" placeholder="Tên đăng nhập">
        </div>
        <div class="form-group">
            <i class="fa-solid fa-key"></i>
            <input type="password" name="password" class="form-input" placeholder="Mật khẩu">
            <i class="fa-solid fa-eye eye"></i>
        </div>
        <div class="form-group">
            <i class="fa-solid fa-shop "></i>
            <input type="text" class="form-input" name="shopcode" placeholder="Nhập mã cửa hàng của bạn">
        </div>
        <div class="form-group">
            <i class="fa-solid fa-users-between-lines"></i>
            <input type="password" class="form-input" name="code" placeholder="Nhập mã nhân viên/admin của bạn">
        </div>
        <button type="submit" class="form-submit" name="submit">Đăng Nhập</button>
        <h1 class="form__contact">Liên hệ với chúng tôi nếu gặp sự cố</h3>
        <div class="form__contact-icon">
            <a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa-solid fa-envelope"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100039390703889"><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-solid fa-phone"></i></a>
        </div>
    </form>
    </div>
</body>
</html>