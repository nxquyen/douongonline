                <script type="text/javascript">
                    function duyet()
                    {
                        // UPDATE donhang SET tinhtrang='1' WHERE id =clicked_id ;
                        mysql_query("UPDATE donhang SET tinhtrang = "1" WHERE id = 11");
                        // return TRUE;
                    }
                </script>
                
                <div class="block-table-dsdm">
                    <div class="in-title-dsdm">
                        <p class="title-name-dsdm">
                            Danh sách đơn hàng
                        </p>
                        
                    </div>   
                    <form method="POST" action="" enctype="multipart/form-data"> 
                    <table cellspacing=0 class="table1">
                        <thead >
                          <tr>
                            <th class="item-table-be item-table-be1">STT</th>
                            <th class="item-table-be item-table-be1">Mã Đơn</th>
                            <th class="item-table-be item-table-be1">Khách Hàng</th>
                            <th class="item-table-be item-table-be1">Ngày Đặt</th>
                            <th class="item-table-be item-table-be1">Tình Trạng</th>
                            <th class="item-table-be item-table-be1">Thao Tác</th>
                          </tr>
                        </thead>
                        <thead>  
                        <?php 
                            foreach($array_dh as $row){
                            echo '                     
                            <tr>
                                <td class="item-table-be item-table-be1" ><input  type="checkbox" name="arrayID[]" id="arrayID" value="'.$row ['id'].'" width="10%"/></td>
                                
                                <td class="item-table-be">'.$row ['id'].'</td>
                                <td class="item-table-be">'.$tintuc->getNameKhachHang($row ['id_khach']).' </td>
                                <td class="item-table-be">'.$row ['ngaydat'].'</td>
                                <td class="item-table-be ">
                            ';
                                
                                    if($row ['tinhtrang'] == 1)
                                        {
                                        echo' <p class="item-table-be-duyet">Đã Duyệt <i class="fa-solid fa-check"></i></p>';
                                        }
                                    else
                                        {
                                        echo'<a href="?act=duyetdonhang&id='.$row ['id'].'" class="item-table-be-nduyet" name ="btnDuyet">  Chưa Duyệt </button>';
                                        //echo' <button class="item-table-be-nduyet" name ="btnDuyet" onclick="" id="11"> Chưa Duyệt</button>';
                                        }
                               
                            echo'
                                </td>
                                <td class="item-table-be">
                                    <a href="?act=ttdonhang&id='.$row ['id'].'" title="Xem chi tiết" class="show-sp-all-be"><i class="fa-regular fa-file"></i></a>  
                                    <a href="?act=huydonhang&id='.$row ['id'].'"  title="Xóa đơn hàng" class="delete-sp-be"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            ';
                            }
                            ?>
                          </thead>
                    </table>
                    <button class="delete-many" name="btnHuy"> Hủy nhiều </button>
                        </form>
                        <div class=".list-number-page">
                                <ul class="numberpage">
                                    <li class="item-page-number">
                                        <a class="item-page-number1" href=""><i class="fa-solid fa-chevron-left"></i></a>
                                        <a class="item-page-number1 color-number-page" href="">1</a>
                                        <a class="item-page-number1" href="">2</a>
                                        <a class="item-page-number1" href="">...</a>
                                        <a class="item-page-number1" href="">4</a>
                                        <a class="item-page-number1" href="">5</a>
                                        <a class="item-page-number1" href=""><i class="fa-solid fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                    </div>
