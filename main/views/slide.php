         
    
            <div class="hero-slider">
                <!-- Start Single Slider -->
                <?php
                    foreach($arr_slide as $row){
                        echo '
                        <div class="single-slider" style="background-image:url(img/slide/'.$row['image'].'); color:#fff;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="text">
                                            <h2></h2>
                                            <p> </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }

                ?>
               
                <!-- Start End Slider -->
                <!-- Start Single Slider -->
                
                <!-- End Single Slider -->
            </div>