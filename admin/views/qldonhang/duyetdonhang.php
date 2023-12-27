<div class="block-table-dsdm">
                            <div class="in-title-dsdm">
                                <d class="title-name-dsdm">
                                    Duyệt Đơn Hàng
                                </d>
                            </div>
                            <form class="form-them-be" method="POST" action="" enctype="multipart/form-data">
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Mã Đơn Hàng: </p>
                                    <p class="title-item-them-be"> <?php echo $row_dh['mahd']?> </p>
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Tên Khách Hàng: </p>
                                    <p class="title-item-them-be"> <?php echo $row_dh['tenkhachhang']?> </p>
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Địa Chỉ: </p>
                                    <p class="title-item-them-be"> <?php echo $row_dh['diachi']?> </p>
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Tổng Tiền: </p>
                                    <p class="title-item-them-be"> <?php echo $row_dh['tongtien']?> </p>
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Ngày Tạo: </p>
                                    <p class="title-item-them-be"> <?php echo $row_dh['ngaytao']?> </p>
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Tình Trạng </p>
                                    <select class="form-select-be" aria-label="Tình Trạng" name="tinhtrang" >
                                        <?php
                                        if($row ['tinhtrang'] == 1)
                                            {
                                            echo '<option value ="0" selected="selected" >Chưa Duyệt</option>';
                                            echo '<option value ="1" selected="selected"> Đã Duyệt </option>';
                                            }
                                        else
                                            {
                                            echo '<option value ="1" selected="selected"> Đã Duyệt </option>';
                                            echo '<option value ="0" selected="selected">Chưa Duyệt</option>';
                                            }
                                        ?> 
                                    </select>
                                </div>
                                

                            <button class="btn-submit-be" type="submit" name="btnDuyet">Duyệt</button>
                            </form>
                        </div>