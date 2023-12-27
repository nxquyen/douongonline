<!-- Hero Section Begin -->
    <section class="hero hero-normal">
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
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 0938.623.463 - 0822.007.107</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg" data-setbg="img/blog/details/details-hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2>Giới thiệu</h2>
                        <ul>
                            <li><?php echo $row_user['name']?></li>
                            <li><?php echo ngaythang($row['daycreate'])?></li>
                            <li><i class="fa fa-eye"></i> <?php echo $row['view']?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                       
                        
                        <p ><?php echo $row['info'];?></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>