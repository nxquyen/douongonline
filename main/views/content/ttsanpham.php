<section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Các Loại Sản Phẩm</span>
                        </div>
                        <ul>
                            <li><a href="#">Nước Ngọt</a></li>
                            <li><a href="#">Trà Sữa</a></li>
                            <li><a href="#">Trà</a></li>
                            <li><a href="#">Cà Phê</a></li>
                            <li><a href="#">Nước Ngọt</a></li>
                            <li><a href="#">Đồ Uống Lạnh</a></li>
                            <li><a href="#">Đồ Uống Nóng</a></li>
                            <li><a href="#">Nước Ép</a></li>
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
                </div>
            </div>
        </div>
    </section>
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="img/sanpham/<?php echo $row['hinhanh']?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $row['tensanpham']?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price"><?php echo gia($row['giaca'],'.')?> VNĐ</div>
                        <ul>
                            <li><b>Size</b>
                                <div class="share">
                                    <a class="size" href="#">S</a>
                                    <a class="size" href="#">M</a>
                                    <a class="size" href="#">L</a>
                                    <a class="size" href="#">XL</a>
                                </div>
                            </li>
                            <li><b>Shipping</b> Free Ship</samp></span></li>
                            <li><b>Số Lượng</b> <?php echo $row['soluongton']?> </li>
                            <li><b>Chia sẻ</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                        <div id="message-container"></div>
                        <form method="POST" action="?act=gio-hang" enctype="multipart/form-data">
                        <div class="product__details__quantity">
                            <div class="quantity">
                                    <input type="number" name= "soluong" value="1" min = "1" >
                            </div>
                        </div>
                            <input type="hidden" name = "productID" value="<?= $row['id']; ?>">
                            <input type="hidden" name = "soluong" value="soluong">
                            <input type="submit" name = "add_to_cart" class="primary-btn" value="Thêm vào giỏ hàng">
                        </form>
                        <script>
                            $(document).ready(function() {
                                $('#add-to-cart').click(function() {
                                    $.ajax({
                                        url: 'add_to_cart.php',
                                        method: 'POST',
                                        data: { product_id: '.$row['id'].' }, // Thay '.$row['id'].' bằng ID sản phẩm thực tế
                                        success: function(response) {
                                            alert('Sản phẩm đã được thêm vào giỏ hàng!');
                                        },
                                        error: function() {
                                            $("#message").text(response.message).removeClass("success").addClass("error");
                                        }
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Mô Tả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Thông Tin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Mô Tả</h6>
                                    <p><?php echo $row['mota']?></p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Thông Tin</h6>
                                    <p><?php echo $row['mota']?>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Reviews</h6>
                                    <p><?php echo $row['mota']?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản Phẩm Liên Quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                foreach($arrdx as $dx)
                {
                    if($row['id']!=$dx['id']){
                echo'
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges ">
                            <div class="featured__item">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <a href="?act=ttsanpham&id='.$dx['id'].'" class="featured__item__pic ">
                                    <img class="img-product-tc" src="img/sanpham/'.$dx['hinhanh'].'"></td>
                                </a>
                                <div class="featured__item__text">
                                    <h6><a href="?act=ttsanpham&id='.$dx['id'].'">'.$dx['tensanpham'].'</a></h6>
                                    <h5>'.gia($dx['giaca'],'.').' VNĐ</h5>
                                </div>
                            </form>
                            </div>
                        </div>
                ';
                    }
                }
                ?>
            </div>
        </div>
    </section>

    