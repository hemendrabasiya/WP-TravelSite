<?php get_header(); ?>

<main class="landing-page container">

    <section class="main-section">
        <div class="content-section">
            <h1>Embark on Your Ultimate Journey with Us</h1>
            <p>Craft Your Dream Vacation with Expert Advice, Travel Tips, Destination Info, and Inspiring Ideas from Our
                Travel Enthusiasts.</p>
            <button>Reveal Now</button>
        </div>
        <div class="main-bg">
            <video playsinline autoplay muted loop>
                <source src="./wp-content/themes/dreamfly-theme/images/vid_1.mp4" type="video/mp4">
            </video>
        </div>
    </section>
    <section class="special-packages">
        <h1 class="heading">Special Packages</h1>
        <div class="packages-container">



            <?php

            $offerEvents = new WP_QUERY(
                array(
                    "post_type" => "package"
                )
            );


            while ($offerEvents->have_posts()) {
                $offerEvents->the_post();
                ?>
                <div class="package-box">
                    <div class="image-wrapper">
                        <h1>
                            <?php echo wp_trim_words(get_the_title(), 4); ?>
                        </h1>
                        <img src="<?php the_post_thumbnail_url('packageLandscape') ?>" alt="">

                    </div>
                    <h3>
                        <?php if (get_the_content()) {
                            echo wp_strip_all_tags(get_the_content());
                        } else
                            the_title(); ?>
                    </h3>
                    <i class="fa-solid fa-location-dot"></i>
                    <p style="font-size: 14px">
                        <?php echo get_field('package_location'); ?>
                    </p>
                    <div class="price-container">
                        <p class="price">
                            <?php echo "$" . get_field('package_price'); ?>
                        </p>
                    </div>
                </div>
            <?php }


            ?>











        </div>
    </section>





</main>



<?php get_footer(); ?>