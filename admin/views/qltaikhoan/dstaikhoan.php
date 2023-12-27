<div class="block-table-dsdm">
                            <div class="in-title-dsdm">
                                <d class="title-name-dsdm">
                                    Danh sách tài khoản
                                </d>
                            </div>    
                            <form method="POST" action="" enctype="multipart/form-data"> 
                            <table cellspacing=0 class="table1">
                                <thead >
                                  <tr>
                                    <th class="item-table-be item-table-be1">STT</th>
                                    <th class="item-table-be item-table-be1">Tên tài khoản</th>
                                    <th class="item-table-be item-table-be1">Mật khẩu</th>
                                    <th class="item-table-be item-table-be1">Thao tác</th>
                                  </tr>
                                </thead>
                                <thead>
                                <?php 
                                    foreach($array_tk as $row){
                                        echo '
                                    <tr>
                                    <td class="item-table-be item-table-be1" ><input  type="checkbox" name="arrayID[]" id="arrayID" value="'.$row ['id'].'" width="10%"/></td>
                                        <th class="item-table-be">'.$row ['username'].'</th>
                                        <th class="item-table-be">'.$row ['password'].'</th>
                                        <th class="item-table-be">
                                            <a href="?act=tttaikhoan&id='.$row ['id'].'" title="Xem chi tiết" class="show-sp-all-be"><i class="fa-regular fa-file"></i></a>  
                                            <a href="?act=suataikhoan&id='.$row ['id'].'" title="Sửa tài khoản" class="edit-sp-be"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <a href="?act=xoataikhoan&id='.$row ['id'].'" onclick="return confirm("Bạn có muốn xóa tài khoản này không?");" title="Xóa tài khoản" class="delete-sp-be"><i class="fa-solid fa-trash"></i></a>
                                        </th>
                                    </tr>
                                    ';
                                    }
                                    ?>
                                  </thead>
                            </table>
                            <button class="delete-many"> Xóa nhiều </button>
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