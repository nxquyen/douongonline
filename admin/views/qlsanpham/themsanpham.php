<div class="block-table-dsdm">
                            <div class="in-title-dsdm">
                                <d class="title-name-dsdm">
                                    Thêm sản phẩm
                                </d>
                            </div>
                            <form class="form-them-be" method="POST" action="" enctype="multipart/form-data">
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Tên sản phẩm: </p>
                                    <input type="text" class="in-item-them-be" name="name">
                                </div>
                                
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Số lượng: </p>
                                    <input type="text" class="in-item-them-be" name="soluongnhap">
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Giá: </p>
                                    <input type="text" class="in-item-them-be" name="gia">
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Danh mục: </p>
                                    <select class="form-select-be" aria-label="Danh mục sản phẩm" name="iddanhmuc">
                                    <option value="0">Chọn danh muc</option>
                                                    <?php
                                                        foreach ($arr_loai as $row_loai) {
                                                            echo '<option value="'.$row_loai['id'].'">'.$row_loai['tendanhmuc'].'</option>';
                                                        }
                                                    ?> 
                                        
                                        
                                    </select>
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Hình ảnh: </p>
                                    <input type="file" class="in-item-them-be1" name="image" >
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Mô tả: </p>
                                    <textarea cols="310" id="mota" name="mota" rows="10"></textarea>
                                    <script>
                                                    CKEDITOR.replace( 'mota', {
                                                        toolbarLocation: 'top',
                                                        width:737,
                                                        height:200,
                                                        // Remove some plugins that would conflict with the bottom
                                                        // toolbar position.
                                                        removePlugins: 'elementspath,resize'
                                                    } );
                                                </script>
                                </div>

                            <button class="btn-submit-be" type="submit" name="btnThem">Thêm</button>
                            </form>
                        </div>