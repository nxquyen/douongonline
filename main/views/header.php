<header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> nxquyen@gmail.com</li>
                                <li>Cửa Hàng Bán Đồ Uống Online</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            
                            <div class="header__top__right__auth">

                            <div class="background-hide" id="hide-show-login">
                                <div class="background-login">
                                    <div class="title-out">
                                        <p class="login-dn">đăng nhập</p>
                                        <button class="login-out" id="hide-login" onclick="hide_login()">
                                            <i class="fa-solid fa-xmark login-out1"></i>
                                        </button>
                                    </div>
                                    <form method="POST" action="main/controllers/content/login.php" >
                                    <div class="login-tk">
                                        <input type="text" name= "username" class="name-login login-both" placeholder="Nhập email hoặc số điện thoại">
                                        <input type="password" name="password" class="password-login login-both" placeholder="Nhập mật khẩu">
                                    </div>
                                    <button class=" btn-login" name="btdn">đăng nhập</button>
                                    </form>
                                    <div class="forget-password">
                                        <a class="forgetpass" id="forgetacc" onclick="quenacc()">Quên mật khẩu?</a>
                                        <a class="noacc" id="creatacc" onclick="taoacc()">Tạo tài khoản</a>
                                    </div>
                                </div>
                            </div>
                            <div class="background-hide" id="hide-show-signup">
                                <div class="background-signin">
                                    <div class="title-out">
                                        <p class="signin-dn" >đăng Ký</p>
                                        <button class="signin-out" id="hide-signin" onclick="hide_signup()">
                                            <i class="fa-solid fa-xmark signin-out1"></i>
                                        </button>
                                    </div>
                                    <div class="signin-tk">
                                        <input type="text" class="name-signin signin-both" placeholder="Nhập email hoặc số điện thoại">
                                        <input type="text" class="password-signin signin-both" placeholder="Nhập mật khẩu">
                                        <input type="text" class="password-signin signin-both" placeholder="Nhập lại mật khẩu">
                                    </div>
                                    <button type = "button" class=" btn-signin" onclick="alert('dang ki thanh cong')">đăng ký</button>
                                    <div class="forget-password">
                                        <p>Đã có tài khoản?</p>
                                        <a  class="noacc" id="loginacc" onclick="dnacc()">Đăng Nhập</a>
                                    </div>
                                    <p class="signin-or1">---------------- Hoặc ---------------</p>
                                    <div class="signin-gg-fb-zl1">
                                        <a class="signin-gg">
                                            <img src="./img/logo-google.png" alt="" class="signin-gg-logo">
                                            <p class="signin-text-gg">Google</p>
                                        </a>
                                        <a class="signin-fb"> 
                                            <img src="./img/logo-facebook.png" alt="" class="signin-fb-logo">
                                            <p class="signin-text-gg">FaceBook</p>
                                        </a>
                                        <a class="signin-zl">
                                            <img src="./img/logo-zalo.jpg" alt="" class="signin-zl-logo">
                                            <p class="signin-text-gg">Zalo</p>
                                        </a>
                                    </div>  
                                </div>
                            </div>
                            <div class="background-hide" id="hide-show-forget">
                                <div class="background-forget">
                                    <div class="title-out">
                                        <p class="login-dn">Quên mật khẩu</p>
                                        <button class="login-out" id="hide-forget" onclick="hide_forget()">
                                            <i class="fa-solid fa-xmark login-out1"></i>
                                        </button>
                                    </div>
                                    <div class="forget-tk">
                                        <input type="text" class="name-login login-both" placeholder="Nhập email hoặc số điện thoại">
                                    </div>
                                    <button type = "button" class=" btn-forget" onclick="login1()">Nhận mã</button>
                                    <div class="forget-password">
                                        <a  class="forgetpass" id="haveacc" onclick="coacc()">Đã có tài khoản?</a>
                                        <a class="noacc" id="creatacc1" onclick="taoacc1()">Tạo tài khoản</a>
                                    </div>
                                </div>
                            </div>
                            <div class="login login-space" >
                            <?php
                                if(isset($_SESSION['userdouongonline'])){
                                    
                                    $userr = new Xuat;
                                    $user_login = $_SESSION['userdouongonline'];
                                    $row_acc = $userr->getAccount($user_login);

                                    echo '<div class="login-button" >Xin Chào, '.$row_acc['name'].'</div>
                                    <a href="main/controllers/content/logout.php"><i  class="fas fa-power-off"></i></a>';
                                }
                                else{
                                    echo ' <p class="login-button" id="show-login" onclick="hide_login()"><i class = " fa fa-user"></i> ĐĂNG NHẬP</p>';
                                }
                            ?>
                                
                        
                            </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">Trang Chủ</a></li>
                            <li><a class = "dmfo" >Danh Mục</a>
                                <ul class="header__menu__dropdown">
                                    <?php
                                    foreach($arr_dmpages as $arr_dmp)
                                    {
                                    echo'
                                        <li><a href="?act=sanphamdm&id='.$arr_dmp['id'].'">'.$arr_dmp['tendanhmuc'].'</a></li>
                                    ';
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li><a href="?act=lienhe.html">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="?act=gio-hang"><i class="fa-solid fa-cart-shopping"></i> <span>3</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>