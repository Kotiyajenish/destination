<?php

$testimonial_page_id = '29';
$testimonial_h6 = get_field('testimonial_h6', $testimonial_page_id);
$testimonial_h1 = get_field('testimonial_h1', $testimonial_page_id);

?>
<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-info px-3"><?= $testimonial_h6 ?></h6>
            <h1 class="mb-5"><?= $testimonial_h1 ?></h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <?php

            // Check rows exists.
            if (have_rows('testimonial_repeater', $testimonial_page_id)):

                // Loop through rows.
                while (have_rows('testimonial_repeater', $testimonial_page_id)):
                    the_row();

                    // Load sub field value.
                    $testimonial_image = get_sub_field('testimonial_image', $testimonial_page_id);
                    $testimonial_clinet_name = get_sub_field('testimonial_clinet_name', $testimonial_page_id);
                    $testimonial_client_place = get_sub_field('testimonial_client_place', $testimonial_page_id);
                    $testimonial__client_content = get_sub_field('testimonial__client_content', $testimonial_page_id);
                    ?>
                    <div class="testimonial-item bg-white text-center border p-4">
                        <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="<?= $testimonial_image['url']; ?>"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0"><?= $testimonial_clinet_name ?></h5>
                        <p><?= $testimonial_client_place ?></p>
                        <p class="mb-0"><?= $testimonial__client_content ?></p>
                    </div>
                    <?php

                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->