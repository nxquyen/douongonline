<p class="tittle-ttsanpham-tittle-be">Thông Tin Chi Tiết Đơn Hàng</p>
                        <div class="ttsanpham-block-be">
                        <div class="form-them-item-be">
                                    <p class="title-item-them-be-bold"> Mã Đơn Hàng: </p>
                                    <p class="title-item-them-be"> <?php echo $row['id']?> </p>
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be-bold"> Tên Khách Hàng: </p>
                                    <p class="title-item-them-be"> <?php echo $row_khach['name']?> </p>
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be-bold"> Địa Chỉ: </p>
                                    <p class="title-item-them-be"> <?php echo $row_khach['diachi']?> </p>
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be-bold"> Phone: </p>
                                    <p class="title-item-them-be"> <?php echo $row_khach['phone']?> </p>
                                </div>
                                <table cellspacing=0 class="table1">
                        <thead >
                          <tr>
                            <th class="item-table-be-bold item-table-be1">STT</th>
                            <th class="item-table-be-bold item-table-be1">Tên sản phẩm</th>
                            <th class="item-table-be-bold item-table-be1">Số Lượng</th>
                            <th class="item-table-be-bold item-table-be1">Đơn Giá</th>
                            <th class="item-table-be-bold item-table-be1">Thành tiền</th>
                          </tr>
                        </thead>
                        <thead>  
                        <?php 
                            $x = 0;
                            foreach($arr_ctdh as $rowctdh){ 
                            $x=$x+1;
                            echo '                     
                            <tr>
                                <td class="item-table-be item-table-be1" >'.$x.'</td>';
                                $rowsp=$tintuc->detailSanPham($rowctdh ['id_sp']);
                                echo '
                                <td class="item-table-be">'. $rowsp ['tensanpham'].'</td>
                                <td class="item-table-be">'.$rowctdh ['soluong'].' </td>
                                <td class="item-table-be">'.$rowsp['giaca'].'</td>
                                <td class="item-table-be ">'.$rowctdh ['soluong']*$rowsp['giaca'].'
                                </td>
                                
                                </tr>';
                               
                            }
                            ?>
                            <?php 
                            $x = array();
                            foreach($arr_ctdh as $rowctdh){   
                                $rowsp=$tintuc->detailSanPham($rowctdh ['id_sp']);
                                    $y=$rowctdh ['soluong']*$rowsp['giaca'];
                                    $x[] =$y;  
                                }
                                echo'            
                                <tr>
                                <td class="item-table-be item-table-be1" ></td>
                                <td class="item-table-be"></td>
                                <td class="item-table-be"> </td>
                                <td class="item-table-be-bold">Tổng Tiền: </td>';
                                echo'
                                <td class="item-table-be ">'.array_sum($x).'</td>
                                
                                </tr>';
                            
                            ?>
                            </thead>
                    </table>



                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Ngày Đặt: </p>
                                    <p class="title-item-them-be"> <?php echo $row['ngaydat']?> </p>
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Tình Trạng </p>
                                    <p class="title-item-them-be">
                                        <?php
                                        if($row['tinhtrang'] == 0)
                                            {
                                            echo '<option value ="0" selected="selected" >Chưa Duyệt</option>';
                                            }
                                        else
                                            {
                                            echo '<option value ="1" selected="selected"> Đã Duyệt </option>';
                                            }
                                        ?>
                                    </p>
                                    </select>
                                </div>
                        </div>