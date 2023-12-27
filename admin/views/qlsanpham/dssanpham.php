<div class="block-table-dsdm">
                            <div class="in-title-dsdm">
                                <d class="title-name-dsdm">
                                    Danh sách sản phẩm
                                </d>
                                <a href="?act=themsanpham.html" class="btn-add-tdm-be">
                                    Thêm <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>   
                            <form method="POST" action="" enctype="multipart/form-data"> 
                            <table cellspacing=0 class="table1">
                                <thead >
                                  <tr>
                                    <th class="item-table-be item-table-be1">STT</th>
                                    <th class="item-table-be item-table-be1">Tên sản phẩm</th>
                                    <th class="item-table-be item-table-be1">Mô Tả</th>
                                    <th class="item-table-be item-table-be1">Hình Ảnh</th>
                                    <th class="item-table-be item-table-be1">Thao Tác</th>
                                  </tr>
                                </thead>
                                <thead>  
                                    <?php 
                                    foreach($array_dm as $row){
                                        echo '                      
                                    <tr>
                                        <td class="item-table-be item-table-be1" ><input  type="checkbox" name="arrayID[]" id="arrayID" value="'.$row ['id'].'" width="10%"/></td>
                                        
                                        <th class="item-table-be">'.$row ['tensanpham'].'</th>
                                        <th class="item-table-be">'.$row ['mota'].'</th>
                                        <td><img class="item-table-be item-table-be-img" src=../../img/sanpham/'.$row ['hinhanh'].'></td>
                                        <td class="item-table-be">
                                            <a href="?act=ttsanpham&id='.$row ['id'].'" title="Xem chi tiết" class="show-sp-all-be"><i class="fa-regular fa-file"></i></a>  
                                            <a href="?act=suasanpham&id='.$row ['id'].'" title="Sửa danh mục" class="edit-sp-be"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <a href="?act=xoasanpham&id='.$row ['id'].'"  title="Xóa danh mục" class="delete-sp-be"><i class="fa-solid fa-trash"></i></a>
                                        </td>
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
                                        <a class="item-page-number1" href="?act=qlsanpham&num=1"><span aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></a>
                                        <a class="item-page-number1" <?php if(($num-4)<1){echo 'style="display:none;"';}?> href="?act=qlsanpham&num=<?php echo $num-4;?>"><?php echo $num-4;?></a>
                                        <a class="item-page-number1" <?php if(($num-3)<1){echo 'style="display:none;"';}?> href="?act=qlsanpham&num=<?php echo $num-3;?>"><?php echo $num-3;?></a>
                                        <a class="item-page-number1"  <?php if(($num-2)<1){echo 'style="display:none;"';}?> href="?act=qlsanpham&num=<?php echo $num-2;?>"><?php echo $num-2;?></a>
                                        <a class="item-page-number1"  <?php if(($num-1)<1){echo 'style="display:none;"';}?> href="?act=qlsanpham&num=<?php echo $num-1;?>"><?php echo $num-1;?></a>
                                        <a class="item-page-number1 color-number-page"   href="?act=qlsanpham&num=<?php echo $num;?>"><?php echo $num;?></a>
                                        <a class="item-page-number1"  <?php if(($num+1)<1){echo 'style="display:none;"';}?> href="?act=qlsanpham&num=<?php echo $num+1;?>"><?php echo $num+1;?></a>
                                        <a class="item-page-number1"  <?php if(($num+2)<1){echo 'style="display:none;"';}?> href="?act=qlsanpham&num=<?php echo $num+2;?>"><?php echo $num+2;?></a>
                                        <a class="item-page-number1"  <?php if(($num+3)<1){echo 'style="display:none;"';}?> href="?act=qlsanpham&num=<?php echo $num+3;?>"><?php echo $num+3;?></a>
                                        <a class="item-page-number1"  <?php if(($num+4)<1){echo 'style="display:none;"';}?> href="?act=qlsanpham&num=<?php echo $num+4;?>"><?php echo $num+4;?></a>
                                        <a class="item-page-number1"  href="?act=qlsanpham&num=<?php echo $pages;?>"><span aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>