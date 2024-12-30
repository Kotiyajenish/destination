
<?php 

$about_page_id = '13';
$about_h6 = get_field('about_h6', $about_page_id);
$about_h1 = get_field('about_h1', $about_page_id);
$about_content = get_field('about_content',$about_page_id);
$about_icon = get_field('about_icon',$about_page_id);
$about_btn = get_field('about_btn',$about_page_id);
$about_image = get_field('about_image',$about_page_id);
?>



<!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?php echo $about_image['url']; ?>" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-info pe-3"><?php echo $about_h6; ?></h6>
                    <h1 class="mb-4"><?php echo $about_h1;?></h1>
                    <p class="mb-4"><?php echo $about_content; ?></p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i>150 Premium City Tours</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <a class="btn btn-info py-3 px-5 mt-2 text-white" href="">Read More<span><i class="fa fa-arrow-right text-white ms-2"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->