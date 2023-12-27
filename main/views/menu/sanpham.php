<li ><a href="?act=trang-chu.html">TRANG CHỦ</a></li>
                <li><a href="?act=gioi-thieu.html">GIỚI THIỆU</a></li>
                <li><a href="?act=tin-tuc.html">TIN TỨC</a></li>
                <li class="active"><a href="#">SẢN PHẨM</a>
                    <ul class="header__menu__dropdown">
                        <?php
                            $arr_sploai=$xuat->LoaiSanPham();
                            foreach($arr_sploai as $row_loai){
                                echo '<li><a href="?act=san-pham&rellsp='.$row_loai['id'].'-'.$row_loai['name_link'].'.html">'.$row_loai['name'].'</a></li>';
                            }
                        ?>
                    </ul>
                </li>
                <li><a href="?act=tuyen-dung.html">TUYỂN DỤNG</a></li>
                <li><a href="?act=lien-he.html">LIÊN HỆ</a></li>