<div class="block-table-dsdm">
                            <div class="in-title-dsdm">
                                <d class="title-name-dsdm">
                                    Sửa danh mục
                                </d>
                            </div>
                            <form class="form-them-be" method="POST" action="" enctype="multipart/form-data">
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Tên danh mục: </p>
                                    <input type="text" class="in-item-them-be" name="name" value="<?php echo $row_dm['tendanhmuc']?>">
                                </div>
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Mô tả: </p>
                                    <textarea cols="310" id="mota" name="mota" rows="10"><?php echo $row_dm['mota']?></textarea>
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

                            <button class="btn-submit-be" type="submit" name="btnSua">Sửa</button>
                            </form>
                        </div>