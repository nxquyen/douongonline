<p class="tittle-ttsanpham-tittle-be">Thông tin chi tiết sản phẩm</p>
                        <div class="ttsanpham-block-be">
                            <div class="item-ttsanpham-be">
                                <p class="title-ttsanpham-be">Tên sản phẩm: </p>
                                <p class="title-tttsanpham-be"><?php echo $row['tensanpham']?></p>
                            </div>
                            <div class="item-ttsanpham-be">
                                <p class="title-ttsanpham-be">Mô tả sản phẩm: </p>
                                <p class="title-tttsanpham-be"><?php echo $row['mota']?></p>
                            </div>
                            <div class="item-ttsanpham-be">
                                <p class="title-ttsanpham-be">Số lượng sản phẩm: </p>
                                <p class="title-tttsanpham-be"><?php echo $row['soluongton']?></p>
                            </div>
                            <div class="item-ttsanpham-be">
                                <p class="title-ttsanpham-be">Giá sản phẩm: </p>
                                <p class="title-tttsanpham-be"><?php echo gia($row['giaca'],'.')?> VNĐ</p>
                            </div>
                            <div class="item-ttsanpham-be">
                                <p class="title-ttsanpham-be">Danh mục sản phẩm: </p>
                                <p class="title-tttsanpham-be"><?php echo $row['id_danhmuc']?></p>
                            </div>
                            <div class="item-ttsanpham-be">
                                <p class="title-ttsanpham-be">Hình ảnh sản phẩm: </p>
                                <img src="../../img/sanpham/<?php echo $row['hinhanh']?>" alt="" class="img-tttsanpham-be">
                            </div>
                        </div>