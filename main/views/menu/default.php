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