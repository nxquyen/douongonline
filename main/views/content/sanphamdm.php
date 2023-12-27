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
                    <h4 class="title-fo-listsp">
                    <?php echo $dm_arr['tendanhmuc']?>
                    </h4>
                    <div class="row featured__filter">
                        <?php
                        foreach($rowspdm as $spdm)
                        {
                            echo'
                        <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                            <div class="featured__item">
                                <a href="?act=ttsanpham&id='.$spdm['id'].'" class="featured__item__pic ">
                                    <img class="img-product-tc" src="img/sanpham/'.$spdm['hinhanh'].'"></td>
                                </a>
                                <div class="featured__item__text">
                                    <h6><a href="?act=ttsanpham&id='.$spdm['id'].'">'.$spdm['tensanpham'].'</a></h6>
                                    <h5>'.gia($spdm['giaca'],'.').' VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        ';
                        }
                        ?>                  
                    </div>
                    <div class="product__pagination">
                        <a href="?act=sanpham&num=1"><span aria-hidden="true"><i class="fa fa-long-arrow-left"></i></a>
                        <a <?php if(($num-4)<1){echo 'style="display:none;"';}?> href="?act=sanpham&num=<?php echo $num-4;?>"><?php echo $num-4;?></a>
                        <a <?php if(($num-3)<1){echo 'style="display:none;"';}?> href="?act=sanpham&num=<?php echo $num-3;?>"><?php echo $num-3;?></a>
                        <a <?php if(($num-2)<1){echo 'style="display:none;"';}?> href="?act=sanpham&num=<?php echo $num-2;?>"><?php echo $num-2;?></a>
                        <a <?php if(($num-1)<1){echo 'style="display:none;"';}?> href="?act=sanpham&num=<?php echo $num-1;?>"><?php echo $num-1;?></a>
                        <a class="color-number-page"   href="?act=sanpham&num=<?php echo $num;?>"><?php echo $num;?></a>
                        <a <?php if(($num+1)<1){echo 'style="display:none;"';}?> href="?act=sanpham&num=<?php echo $num+1;?>"><?php echo $num+1;?></a>
                        <a <?php if(($num+2)<1){echo 'style="display:none;"';}?> href="?act=sanpham&num=<?php echo $num+2;?>"><?php echo $num+2;?></a>
                        <a <?php if(($num+3)<1){echo 'style="display:none;"';}?> href="?act=sanpham&num=<?php echo $num+3;?>"><?php echo $num+3;?></a>
                        <a <?php if(($num+4)<1){echo 'style="display:none;"';}?> href="?act=sanpham&num=<?php echo $num+4;?>"><?php echo $num+4;?></a>
                        <a href="?act=sanphamdm&num=<?php echo $pages;?>"><span aria-hidden="true"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>