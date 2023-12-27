    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Các Loại Sản Phẩm</span>
                        </div>
                        <ul>
                            <?php
                            foreach($arr_dm as $dmsp)
                            {
                            echo'
                            <li><a href="?act=sanphamdm&id='.$dmsp['id'].'">'.$dmsp['tendanhmuc'].'</a></li>
                            ';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="Nhập tên sản phẩm muốn tìm?">
                                <button type="submit" class="site-btn">Tìm Kiếm</button>
                            </form>
                        </div>
                    </div>
                    <h4 class="title-fo-listsp">Sản Phẩm Bán Chạy</h4>
                    <div class="row featured__filter">
                        <?php
                        foreach($arr_sp as $row)
                        {
                        echo'
                        <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                            <div class="featured__item">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <a href="?act=ttsanpham&id='.$row['id'].'" class="featured__item__pic ">
                                    <img class="img-product-tc" src="img/sanpham/'.$row['hinhanh'].'"></td>
                                </a>
                                <div class="featured__item__text">
                                    <h6><a href="?act=ttsanpham&id='.$row['id'].'">'.$row['tensanpham'].'</a></h6>
                                    <h5>'.gia($row['giaca'],'.').' VNĐ</h5>
                                </div>
                            </form>
                            </div>
                        </div>
                        ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h5>Sản Phẩm Mới</h5>
                            <div class="latest-prdouct__slider__item">
                                <?php
                                $x = 0;
                                foreach($arr_sptop as $arrt)
                                {
                                    $x = $x +1;
                                echo'
                                <a href="?act=ttsanpham&id='.$arrt['id'].'" class="latest-product__item">
                                    <div class="number-top-fo"> '.$x.' </div>
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/'.$arrt['hinhanh'].'" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>'.$arrt['tensanpham'].'</h6>
                                        <span>'.gia($arrt['giaca'],'.').'</span>
                                    </div>
                                </a>
                                ';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h5>Sản Phẩm Mua Nhiều</h5>
                        <div class="latest-prdouct__slider__item">
                        <?php
                                $x = 0;
                                foreach($arr_spbc as $arrbc)
                                {
                                    $x = $x +1;
                                echo'
                                <a href="?act=ttsanpham&id='.$arrbc['id'].'" class="latest-product__item">
                                    <div class="number-top-fo"> '.$x.' </div>
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/'.$arrbc['hinhanh'].'" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>'.$arrbc['tensanpham'].'</h6>
                                        <span>'.gia($arrbc['giaca'],'.').'</span>
                                    </div>
                                </a>
                                ';
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h5>Top Hôm Nay</h5>
                        <div class="latest-prdouct__slider__item">
                        <?php
                                $x = 0;
                                foreach($arr_spn as $arrn)
                                {
                                    $x = $x +1;
                                echo'
                                <a href="?act=ttsanpham&id='.$arrn['id'].'" class="latest-product__item">
                                    <div class="number-top-fo"> '.$x.' </div>
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/'.$arrn['hinhanh'].'" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>'.$arrn['tensanpham'].'</h6>
                                        <span>'.gia($arrn['giaca'],'.').'</span>
                                    </div>
                                </a>
                                ';
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>