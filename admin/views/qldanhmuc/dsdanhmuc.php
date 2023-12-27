<div class="block-table-dsdm">
                            <div class="in-title-dsdm">
                                <d class="title-name-dsdm">
                                    Danh sách danh mục
                                </d>
                                <a href="?act=themdanhmuc.html" class="btn-add-tdm-be">
                                    Thêm <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                            <form method="POST" action="" enctype="multipart/form-data">     
                            <table cellspacing=0 class="table1">
                                <thead >
                                  <tr>
                                    <th class="item-table-be item-table-be1">STT</th>
                                    <th class="item-table-be item-table-be1">Tên danh mục</th>
                                    <th class="item-table-be item-table-be1">Mô Tả danh mục</th>
                                    <th class="item-table-be item-table-be1">Thao Tác</th>
                                  </tr>
                                </thead>
                                <thead>
                                    <?php 
                                        foreach($array_dsdm as $row){
                                            echo '  
                                            <tr>
                                            <td class="item-table-be item-table-be1" ><input  type="checkbox" name="arrayID[]" id="arrayID" value="'.$row ['id'].'" width="10%"/></td>
                                                <th class="item-table-be">'.$row ['tendanhmuc'].'</th>
                                                <th class="item-table-be">'.$row ['mota'].'</th>
                                                <th class="item-table-be">
                                                    <a href="?act=ttdanhmuc&id='.$row ['id'].'" title="Xem chi tiết" class="show-sp-all-be"><i class="fa-regular fa-file"></i></a>  
                                                    <a href="?act=suadanhmuc&id='.$row ['id'].'" title="Sửa danh mục" class="edit-sp-be"><i class="fa-regular fa-pen-to-square"></i></a>
                                                    <a href="?act=xoadanhmuc&id='.$row ['id'].'" onclick="return confirm("Bạn có muốn xóa danh mục này không?");" title="Xóa danh mục" class="delete-sp-be"><i class="fa-solid fa-trash"></i></a>
                                                </th>
                                            </tr>
                                                ';
                                        }
                                        ?>
                                </thead>
                            </table>
                            <button class="delete-many" name="btnXoa"> Xóa nhiều </button>
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