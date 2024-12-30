<?php

$service_post_id = '15';
$service_h6 = get_field('service_h6', $service_post_id);
$service_h1 = get_field('service_h1', $service_post_id);

?>

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-info px-3"><?= $service_h6 ?></h6>
            <h1 class="mb-5"><?= $service_h1 ?></h1>
        </div>
        <div class="row g-4">
            <?php

            // Check rows exists.
            if (have_rows('service_repeater', $service_post_id)):

                // Loop through rows.
                while (have_rows('service_repeater',$service_post_id)):
                    the_row();
                    $service_icon = get_sub_field('service_icon');
                    $service_h5 = get_sub_field('service_h5');
                    $service_box_content = get_sub_field('service_box_content');

                    ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <?=  $service_icon ?>
                                <h5><?= $service_h5 ?></h5>
                                <p><?= $service_box_content ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    // End loop.
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<!-- Service End -->