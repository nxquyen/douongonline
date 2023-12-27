<div class="block-table-dsdm">
                            <div class="in-title-dsdm">
                                <d class="title-name-dsdm">
                                    Thêm danh mục
                                </d>
                            </div>
                            <form class="form-them-be" method="POST" action="" enctype="multipart/form-data">
                                <div class="form-them-item-be">
                                    <p class="title-item-them-be"> Tên danh mục: </p>
                                    <input type="text" class="in-item-them-be" name="name">
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