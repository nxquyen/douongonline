<section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản Phẩm</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                foreach ($cartItems as $cartItem)
                                {
                                echo'
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/sanpham/'.$cartItem['hinhanh'].'" alt="">
                                        <h5>'.$cartItem['tensanpham'].'</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    '.$cartItem['giaca'].' VNĐ
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="'.$cartItem['quantity'].'">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>                                   
                                </tr>
                                ';
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Mã Giảm Giá</h5>
                            <form action="#">
                                <input type="text" placeholder="Nhập code giảm giá">
                                <button type="submit" class="site-btn">NHận</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Tổng Tiền</h5>
                        <ul>
                            <li>Tổng Tiền <span>145.000 VNĐ</span></li>
                            <li>Thành Tiền <span>145.000 VNĐ</span></li>
                        </ul>
                        <a href="#" class="primary-btn">Đặt Hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </section>