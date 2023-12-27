<div class="block-table-dsdm">
                            <div class="in-title-dsdm">
                                <d class="title-name-dsdm">
                                    Sửa tài khoản
                                </d>
                            </div>
                            <form class="form-them-be" method="POST" action="" enctype="multipart/form-data">
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Tên tài khoản: </p>
                                    <input type="text" class="in-item-them-be" name="name" value="<?php echo $row_dm['username']?>">
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Mật khẩu: </p>
                                    <input type="text" class="in-item-them-be" name="pass" value="<?php echo $row_dm['password']?>">
                                </div>

                            <button class="btn-submit-be" type="submit" name="btnSua">Sửa</button>
                            </form>
                        </div>