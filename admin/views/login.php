<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Đồ uống online</title>
    <link rel="stylesheet" href="../font/fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../js/jsweb.js">
    <script src="../js/jsweb.js"></script>
</head>

<body>

    <div class="block-be-login">
        <div class="background-hide-be-login">
            <div class="background-login">
                <form method="POST" action="controllers/login.php" enctype="multipart/form-data">
                <div class="title-out">
                    <p class="login-dn">đăng nhập</p>
                </div>
                    <div class="login-tk">
                        <input type="text" name="username" class="name-login login-both" placeholder="Nhập email hoặc số điện thoại">
                        <input type="password" name="password" class="password-login login-both" placeholder="Nhập mật khẩu">
                    </div>
                    <button class=" btn-login" name="btLog">đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>