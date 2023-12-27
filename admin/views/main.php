<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin quản lý</title>
    <link rel="stylesheet" href="../../fonts/fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="stylesheet" href="../../js/jsweb.js">
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/jsweb.js"></script>
    <script src="http://cdn.ckeditor.com/4.7.1/full-all/ckeditor.js"></script>
</head>
<body>
<?php 
                $_SESSION['linkdouongonline']  = $_SERVER['HTTP_HOST'];
                $_SESSION['uridouongonline']  = $_SERVER['REQUEST_URI'];
                $_SESSION['lastlogindouongonline'] = strtotime(date("YmdHis"));
    ?>
    <div class="web">
        <div class="grid wide dt-12 mtb-12">
            <div class="grow">
                <div class="header-be">
                    <div class="max-width-be">
                        <div class="fix-menu-be">
                            <a href="./index.html" class="img-user-be1">
                                <img src="../../img/logo.png" alt="" class="img-logo-be">
                                <p class="name-user-be">Admin</p>
                            </a>
                            <div class="search-be">
                                <input type="text" class="btnsearch-be">
                                <div class="icon-search-be">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                            <div class="right-bell-user-be">
                                <a href="" class="bell-be">Thông báo <i class="fa-solid fa-bell"></i></a>
                            <div class="user-avt">
                                <img src="../../img/logo.png" alt="" class="img-user-icon">
                                <ul class="block-tk-admin">
                                    <li class="tt-tttk">Thông tin tài khoản</li>
                                    <li class="dx-tttk">Đăng xuất</li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="left-block-be">
                    <?php require 'menu.php';?>
                    </div>
                    <div class="right-block-be">
                    <?php require 'content.php';?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <script>
        var xValues = ["Tháng 1","Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6","Tháng 7", "Tháng 8", "Tháng 9","Tháng 10", "Tháng 11", "Tháng 12"];
        var yValues = [55, 49, 44, 24, 15,11,11,111,11,11,11,11];
        var barColors = ["red", "green","blue","orange","brown","red", "green","blue","orange","brown","red", "green"];
        
        new Chart("myChart", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            legend: {display: false},
            title: {
              display: true,
              text: "Biểu đồ thống kê doanh thu năm 2022"
            }
          }
        });
        </script>
        
    <script src="../../js/jsweb.js"></script>
</body>
</html>