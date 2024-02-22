

    <div class="gallery-area overflow-hidden default-padding">
        <!-- Shape -->
        <div class="fixed-shape">
            <img src="img/shape/5.png" alt="Shape">
        </div>
        <!-- Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Our Gallery</h4>
                        <h2>Latest projects showcase</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container wow slideInUp">
            <div class="case-items-area">
                <div class="masonary">
                    <div id="portfolio-grid" class="gallery-items colums-2">
                        <?php for ($b=1; $b <=4; $b++) {?>
                            <!-- Single Item -->
                            <div class="pf-item">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="img/gallery/<?php echo $b;?>.png" alt="Thumb">
                                        <a href="img/gallery/<?php echo $b;?>.png" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a href="gallery.php"></a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->
