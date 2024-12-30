<?php

/**
 * Template Name: Home Template
 * 
 * @package X_MARG_DESTINATION
 */

get_header();

// Get Process Fields
$process_h1 = get_field('process_h1');
$process_h6 = get_field('process_h6');
?>
<?php get_template_part('template-parts/about-section'); ?>
<?php get_template_part('template-parts/services-section'); ?>
<!-- Process Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-info px-3"><?= $process_h6 ?></h6>
            <h1 class="mb-5"><?= $process_h1 ?></h1>
        </div>
        <div class="row gy-5 gx-4 justify-content-center">
            <?php
          
            // Check rows exists.
            if (have_rows('process_repater')):
                // Loop through rows.
                while (have_rows('process_repater')):
                    the_row();

                    // Load sub field value.
                    $process_icon = get_sub_field('process_icon');
                    $process_h3 = get_sub_field('process_h3');
                    $process_content = get_sub_field('process_content');
                    ?>
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative border border-info pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-info rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                                style="width: 100px; height: 100px;">
                                <?= $process_icon ?>
                            </div>
                            <h5 class="mt-4"><?= $process_h3 ?></h5>
                            <hr class="w-25 mx-auto bg-info mb-1">
                            <hr class="w-50 mx-auto bg-info mt-0">
                            <p class="mb-0"><?= $process_content ?></p>
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
<!-- Process Start -->
<?php get_template_part( 'template-parts/travel-section' ); ?>
<?php get_template_part( 'template-parts/testimonial-section' ); ?>

<?php
get_footer();
?>