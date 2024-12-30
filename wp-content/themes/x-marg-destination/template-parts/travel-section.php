<!-- Team Start -->
<?php
$travel_page_id = '27';
$travel_h6 = get_field('travel_h6',$travel_page_id);
$travel_h1 = get_field('travel_h1',$travel_page_id);

?>


<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-info px-3"><?= $travel_h6 ?></h6>
            <h1 class="mb-5"><?= $travel_h1 ?></h1>
        </div>
        <div class="row g-4">

            <?php

            // Check rows exists.
            if (have_rows('travel_repeater',$travel_page_id)):

                // Loop through rows.
                while (have_rows('travel_repeater',$travel_page_id)):
                    the_row();

                    // Load sub field value.
                    $travel_image = get_sub_field('travel_image',$travel_page_id);
                    $travel_people_name = get_sub_field('travel_people_name',$travel_page_id);
                    $travel_people_position = get_sub_field('travel_people_position',$travel_page_id);
                    $travel_social_icon = get_sub_field('travel_social_icon',$travel_page_id);
                    
                    ?>


                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="<?php echo $travel_image['url']; ?>" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0"><?= $travel_people_name ?></h5>
                                <small><?= $travel_people_position ?></small>
                            </div>
                        </div>
                    </div>
                    <?php
                    
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<!-- Team End -->