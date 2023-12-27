<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Sản phẩm </h2>
                        <div class="breadcrumb__option">
                            <a href="?act=trang-chu.html">Trang chủ</a>
                            <span>Sản phẩm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Dư aaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Sản phẩm</span>
                        </div>
                        <ul>
                            <?php
                            $arr_sploai=$xuat->LoaiSanPham();
                            foreach($arr_sploai as $row_loai){
                                echo '<li> <a href="?act=san-pham&rellsp='.$row_loai['id'].'-'.$row_loai['name_link'].'.html"><i class="icon_check_alt2"></i> '.$row_loai['name'].'</a></li>';
                            }
                        ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <?php
                                if($idloaisp!=0){
                                        $row_loai=$xuat->detailLoaiSanPham($idloaisp);
                                        echo '<h2>'.$row_loai['name'].'</h2>';   
                                }
                            ?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <?php
                            foreach($arr_tt as $row){
                                echo '
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/sanpham/'.$row['image'].'">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="?act=gioi-hang.html"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">
                                                <h6><a href="?act=thong-tin-san-pham&relsp='.$row['id'].'-'.$row['name_link'].'.html">'.$row['name'].'</a></h6>
                                                <h5>'.gia($row['gia'],'.').'</h5>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }
                        ?>
                        
                        
                    </div>
                    <div class="product__pagination">
                        <a href="?act=san-pham&rellsp=<?php echo $idloaisp;?>&num=<?php echo $num;?>" ><?php echo $num;?></a>       
                                <a <?php if(($num+1)>$pages){echo 'style="display:none;"';}?> href="?act=san-pham&rellsp=<?php echo $idloaisp;?>&num=<?php echo $num+1;?>" ><?php echo $num+1;?></a>
                                <a <?php if(($num+2)>$pages){echo 'style="display:none;"';}?> href="?act=san-pham&rellsp=<?php echo $idloaisp;?>&num=<?php echo $num+2;?>" ><?php echo $num+2;?></a>
                                <a <?php if(($num+3)>$pages){echo 'style="display:none;"';}?> href="?act=san-pham&rellsp=<?php echo $idloaisp;?>&num=<?php echo $num+3;?>"><?php echo $num+3;?></a>
                                <a <?php if(($num+4)>$pages){echo 'style="display:none;"';}?> href="?act=san-pham&rellsp=<?php echo $idloaisp;?>&num=<?php echo $num+4;?>"><?php echo $num+4;?></a>
                                <a href="?act=san-pham&rellsp=<?php echo $idloaisp;?>&num=<?php echo $pages;?>"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>