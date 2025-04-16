<?php
/**
 * Template Name: Front Page
 */

?>

<?php
    $landing_image = get_field( 'landing_image' );
?>
<div class="landing-container" style="background-image: url(<?php echo $landing_image['url'] ?>);"></div>



<?php if ( have_rows( 'cta_section' ) ) : ?>
<?php while ( have_rows( 'cta_section' ) ) :
		the_row(); ?>











<!-- CTA section -->
<section class="bg-secondary cta-container section--padding text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4 order-2 order-md-0">
                <?php
                $cta_image = get_sub_field( 'cta_image' );
                if ( $cta_image ) : ?>
                <div class="cta-image--wrapper">
                    <img class="img-fluid" src="<?php echo esc_url( $cta_image['url'] ); ?>"
                        alt="<?php echo esc_attr( $cta_image['alt'] ); ?>">
                </div>
                <?php endif; ?>
            </div>

            <?php if ( have_rows( 'cta_content' ) ) : ?>
            <?php while ( have_rows( 'cta_content' ) ) :
                    the_row(); ?>

            <div class="col-md-5 order-1 order-md-0 pb-5 pb-md-0">
                <div class="cta-content--wrapper">
                    <div class="cta-product--content__text">
                        <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                        <h2 class="pb-2"><?php echo $title; ?></h2>
                        <?php endif; ?>

                        <div class="mt-3 mt-md-0">
                            <p>
                                <?php if ( $body_text = get_sub_field( 'body_text' ) ) : ?>
                                <?php echo $body_text; ?>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                    <?php
                    $link = get_sub_field( 'button_link' );
                    if ( $link ) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>

                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"
                        class="button-hero hero--secondary">
                        <div class="d-flex">
                            <p><?php echo esc_html( $link_title ); ?></p>
                            <div class="svg-wrapper wrapper--secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.501" height="22.2"
                                    viewBox="0 0 30.501 22.2">
                                    <g id="Group_5846" data-name="Group 5846"
                                        transform="translate(29.751 1.06) rotate(90)">
                                        <path id="Path_15929" data-name="Path 15929"
                                            d="M10.195,29V0L20.389,10.728,10.195,0,0,10.728" transform="translate(0 0)"
                                            fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2.5"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- CTA Content ends -->

            <div class="col-md-3 order-3 order-md-0">
                <div class="cta-statistics--wrapper">
                    <?php if ( have_rows( 'cta_statistic_1' ) ) : ?>
                    <?php while ( have_rows( 'cta_statistic_1' ) ) :
                        the_row(); ?>
                    <div class="cta-statistics--wrapper__item">
                        <?php if ( $top = get_sub_field( 'top' ) ) : ?>
                        <strong><?php echo esc_html( $top ); ?></strong>
                        <?php endif; ?>
                        <?php if ( $bottom = get_sub_field( 'bottom' ) ) : ?>
                        <small><?php echo esc_html( $bottom ); ?></small>
                        <?php endif; ?>

                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if ( have_rows( 'cta_statistic_2' ) ) : ?>
                    <?php while ( have_rows( 'cta_statistic_2' ) ) :
                        the_row(); ?>
                    <div class="cta-statistics--wrapper__item --statistics__border py-md-5">
                        <?php if ( $top = get_sub_field( 'top' ) ) : ?>
                        <strong><?php echo esc_html( $top ); ?></strong>
                        <?php endif; ?>
                        <?php if ( $bottom = get_sub_field( 'bottom' ) ) : ?>
                        <small><?php echo esc_html( $bottom ); ?></small>
                        <?php endif; ?>
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if ( have_rows( 'cta_statistic_3' ) ) : ?>
                    <?php while ( have_rows( 'cta_statistic_3' ) ) :
                        the_row(); ?>

                    <div class="cta-statistics--wrapper__item">
                        <?php if ( $top = get_sub_field( 'top' ) ) : ?>
                        <strong><?php echo esc_html( $top ); ?></strong>
                        <?php endif; ?>
                        <?php if ( $bottom = get_sub_field( 'bottom' ) ) : ?>
                        <small><?php echo esc_html( $bottom ); ?></small>
                        <?php endif; ?>
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>



                </div>
            </div>
        </div>
    </div>
</section>





<?php endwhile; ?>
<?php endif; ?>





<!-- Hero badges -->

<?php if ( have_rows( 'hero_badges' ) ) : ?>
<?php while ( have_rows( 'hero_badges' ) ) :
		the_row(); ?>

<div class="container hero-container section--padding">
    <div class="row">

        <?php if ( have_rows( 'first_badge' ) ) : ?>
        <?php while ( have_rows( 'first_badge' ) ) :
                    the_row(); ?>

        <?php
        $first_badge_image = get_sub_field( 'first_badge_image' );
        if ( $first_badge_image ) : ?>
        <div class="col-6 col-md-3 pb-5 pb-md-0 mb-5 mb-md-0">
            <!-- 1 in 3 -->
            <div class="hero-container--item">

                <div class="--item__icon">
                    <img class="img-fluid" src="<?php echo esc_url( $first_badge_image['url'] ); ?>"
                        alt="<?php echo esc_attr( $first_badge_image['alt'] ); ?>">
                </div>



                <?php if ( $first_badge_text = get_sub_field( 'first_badge_text' ) ) : ?>

                <div class="text-center">
                    <p><?php echo esc_html( $first_badge_text ); ?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <?php endif; ?>

        <?php endwhile; ?>
        <?php endif; ?>

        <?php if ( have_rows( 'second_badge' ) ) : ?>
        <?php while ( have_rows( 'second_badge' ) ) :
		the_row(); ?>
        <?php
        $second_badge_image = get_sub_field( 'second_badge_image' );
        if ( $second_badge_image ) : ?>



        <div class="col-6 col-md-3">
            <!-- Plant-->
            <div class="hero-container--item">
                <div class="--item__icon x">
                    <img src="<?php echo esc_url( $second_badge_image['url'] ); ?>"
                        alt="<?php echo esc_attr( $second_badge_image['alt'] ); ?>" />
                </div>
                <?php if ( $second_badge_text = get_sub_field( 'second_badge_text' ) ) : ?>

                <div class="text-center">
                    <p><?php echo esc_html( $second_badge_text ); ?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>





        <?php if ( have_rows( 'third_badge' ) ) : ?>
        <?php while ( have_rows( 'third_badge' ) ) :
                the_row(); ?>
        <?php
                $third_badge_image = get_sub_field( 'third_badge_image' );
                if ( $third_badge_image ) : ?>


        <div class="col-6 col-md-3">
            <!-- Hand -->
            <div class="hero-container--item">
                <div class="--item__icon">
                    <img class="img-fluid" src="<?php echo esc_url( $third_badge_image['url'] ); ?>"
                        alt="<?php echo esc_attr( $third_badge_image['alt'] ); ?>">
                </div>
                <?php if ( $third_badge_text = get_sub_field( 'third_badge_text' ) ) : ?>

                <div class="text-center">
                    <p><?php echo esc_html( $third_badge_text ); ?></p>
                </div>
                <?php endif; ?>

            </div>
        </div>
        <?php endif; ?>

        <?php endwhile; ?>
        <?php endif; ?>

        <?php if ( have_rows( 'fourth_badge' ) ) : ?>
        <?php while ( have_rows( 'fourth_badge' ) ) :
            the_row(); ?>
        <?php
            $fourth_image = get_sub_field( 'fourth_image' );
            if ( $fourth_image ) : ?>


        <div class="col-6 col-md-3">
            <!-- Spray -->
            <div class="hero-container--item">
                <div class="--item__icon">
                    <img src="<?php echo esc_url( $fourth_image['url'] ); ?>"
                        alt="<?php echo esc_attr( $fourth_image['alt'] ); ?>" />
                </div>
                <?php if ( $fourth_text = get_sub_field( 'fourth_text' ) ) : ?>


                <div class="text-center">
                    <p><?php echo esc_html( $fourth_text ); ?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <?php endif; ?>

        <?php endwhile; ?>
        <?php endif; ?>


    </div>
</div>

<?php endwhile; ?>
<?php endif; ?>


<!-- WHY ACFs start here -->



<?php if ( have_rows( 'why_section' ) ) : ?>
<?php while ( have_rows( 'why_section' ) ) :
		the_row(); ?>

<main class="container info-container">


    <!-- IMAGE RIGHT -->

    <?php if ( have_rows( 'image_on_the_right' ) ) : ?>
    <?php while ( have_rows( 'image_on_the_right' ) ) :
                the_row(); ?>

    <div class="row">
        <div class="col-md-6">
            <div class="info-container--md-flex mr-0 mr-md-5">
                <h2 class="mb-4">

                    <?php if ( $heading = get_sub_field( 'heading' ) ) : ?>
                    <?php echo $heading; ?>
                    <?php endif; ?>

                </h2>
                <div class="mt-4 mt-md-3 mb-md-3">

                    <?php if ( $text = get_sub_field( 'text' ) ) : ?>
                    <?php echo $text; ?>
                    <?php endif; ?>

                </div>

                <?php
                            $link = get_sub_field( 'button' );
                            if ( $link ) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                <a class="button-hero hero--primary mb-5 mb-md-0" href="<?php echo esc_url( $link_url ); ?>"
                    target="<?php echo esc_attr( $link_target ); ?>">
                    <div class="d-flex">
                        <p>
                            <?php echo esc_html( $link_title ); ?>
                        </p>
                        <div class="svg-wrapper wrapper--primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.501" height="22.2"
                                viewBox="0 0 30.501 22.2">
                                <g id="Group_5846" data-name="Group 5846" transform="translate(29.751 1.06) rotate(90)">
                                    <path id="Path_15929" data-name="Path 15929"
                                        d="M10.195,29V0L20.389,10.728,10.195,0,0,10.728" transform="translate(0 0)"
                                        fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2.5"></path>
                                </g>
                            </svg>
                        </div>
                    </div>

                </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-6 d-md-flex justify-content-md-end align-items-md-start">
            <div class="info-container--image">

                <?php
                                $image = get_sub_field( 'image' );
                                if ( $image ) : ?>
                <img class="img-fluid w-100" src="<?php echo esc_url( $image['url'] ); ?>"
                    alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>

            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <!-- IMAGE RIGHT END -->

    <!-- IMAGE LEFT -->
    <?php if ( have_rows( 'image_on_the_left' ) ) : ?>
    <?php while ( have_rows( 'image_on_the_left' ) ) :
                the_row(); ?>


    <div class="row pt-5 mt-5">
        <div class="col-md-6 order-2 order-md-0 d-md-flex justify-content-md-end align-items-md-start">
            <div class="info-container--image">
                <?php
                        $image = get_sub_field( 'image' );
                        if ( $image ) : ?>
                <img class="img-fluid w-100" src="<?php echo esc_url( $image['url'] ); ?>"
                    alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-6 order-1 order-md-0">
            <div class="text-balance info-container--md-flex pl-md-5">
                <h2 class="mb-4">

                    <?php if ( $heading = get_sub_field( 'heading' ) ) : ?>
                    <?php echo $heading; ?>
                    <?php endif; ?>

                </h2>
                <div class="mt-4 mt-md-3 mb-md-3">

                    <?php if ( $text = get_sub_field( 'text' ) ) : ?>
                    <?php echo $text; ?>
                    <?php endif; ?>

                </div>
                <?php
                            $link = get_sub_field( 'button' );
                            if ( $link ) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                <a class="button-hero hero--primary mb-5 mb-md-0" href="<?php echo esc_url( $link_url ); ?>"
                    target="<?php echo esc_attr( $link_target ); ?>">
                    <div class="d-flex">
                        <p>
                            <?php echo esc_html( $link_title ); ?>
                        </p>
                        <div class="svg-wrapper wrapper--primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.501" height="22.2"
                                viewBox="0 0 30.501 22.2">
                                <g id="Group_5846" data-name="Group 5846" transform="translate(29.751 1.06) rotate(90)">
                                    <path id="Path_15929" data-name="Path 15929"
                                        d="M10.195,29V0L20.389,10.728,10.195,0,0,10.728" transform="translate(0 0)"
                                        fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2.5"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </a>
                <?php endif; ?>
            </div>


        </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>

    <!-- IMAGE LEFT END -->



</main>
<?php endwhile; ?>
<?php endif; ?>

<!-- Testimonial container -->
<section class="testimonial-container bg-secondary section--padding">
    <div class="container">
        <h2 class="text-center text-white">Don't just take our word for it</h2>


        <div class="testimonial--scroll__container">

            <?php if ( have_rows( 'testimonials' ) ) : ?>
            <?php while ( have_rows( 'testimonials' ) ) :
		the_row(); ?>


            <?php if ( have_rows( 'review_item' ) ) : ?>
            <?php while ( have_rows( 'review_item' ) ) :
                    the_row(); ?>


            <!-- Review Item -->
            <div class="testimonial--scroll__item bg-white">

                <blockquote>

                    <?php if ( $review_title = get_sub_field( 'review_title' ) ) : ?>
                    <?php echo esc_html( $review_title ); ?>
                    <?php endif; ?>

                </blockquote>

                <div class="testimonial-scroll__body">
                    <p>
                        <?php if ( $review_body = get_sub_field( 'review_body' ) ) : ?>
                        <?php echo $review_body; ?>
                        <?php endif; ?>
                    </p>
                </div>

                <cite>
                    <strong>
                        <p>-
                            <?php if ( $review_by = get_sub_field( 'review_by' ) ) : ?>
                            <?php echo esc_html( $review_by ); ?>
                            <?php endif; ?>
                        </p>
                    </strong>
                </cite>

            </div>

            <!-- Review Item Ends -->
            <?php endwhile; ?>
            <?php endif; ?>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Testimonial container ENDS -->


<!-- Contact -->
<section class="bg-secondary contact-section text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact--form">
                    <h2>
                        Let's <span class="primary-clr">talk.</span>
                    </h2>
                    <div>
                        <p class="pb-3">If you have any questions about Soleze please feel free to ge in touch below. We will respond
                            within 24 hours.</p>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="11fa6e0" title="Contact form 1"]'); ?>
                </div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-center">
                    <div class="contact--form__image mt-5 mt-md-0 h-100">
                        <?php
                        $contact_image = get_field( 'contact_image', 'options' );
                        if ( $contact_image ) : ?>
                        <img class="img-fluid w-100" src="<?php echo esc_url( $contact_image['url'] ); ?>"
                            alt="<?php echo esc_attr( $contact_image['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
        </div>
    </div>
</section>