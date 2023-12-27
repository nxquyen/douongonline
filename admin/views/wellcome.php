
<?php
				$account = new Account;
				$tintuc = new TinTuc;
				$username = $_SESSION['userdouongonline'];			
				unset($account);unset($tintuc);
			?>
			<div class="page-heading-be">
                            <p>TRANG CHỦ</p>
                        </div>
                        <div class="page-content-be">
                            <div class="block-thongke-be">
                                    <img src="../../img/anhtien.png" alt="" class="icon-be-dl">
                                    <div class="title-doanhthu-today-be">
                                        <p class="title-doanhthu-today">Doanh thu hôm nay</p>
                                        <p class="title-doanhthu-be">7.000.000 VNĐ</p>
                                    </div>
                            </div>
                            <div class="block-thongke-yes-be">
                                    <img src="../../img/anhtien.png" alt="" class="icon-be-yes-dl">
                                    <div class="title-doanhthu-yes-be">
                                        <p class="title-doanhthu-yes">Doanh thu tháng này</p>
                                        <p class="title-doanhthu-be">70.000.000 VNĐ</p>
                                    </div>
                            </div>
                            <div class="block-admin-be">
                                    <img src="../../img/anhtien.png" alt="" class="icon-be-user-admin">
                                    <div class="title-admin-be">
                                        <p class="title-admin-name">Boss</p>
                                        <p class="title-admin-quyen">Admin</p>
                                    </div>
                            </div>  
                        </div>
                        <div class="bieudothongke">
                            <p class="tittle-thongke-bieudo">Thống kê</p>
                            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                        </div>