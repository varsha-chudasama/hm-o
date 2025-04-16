<?php
/**
 * Template Name: About
 */

?>

<main class="about-container bg-primary">
    <div class="container about-welcome relative text-center text-white">
        <h1 class="pb-2">
            <?php if ( $page_title = get_field( 'page_title' ) ) : ?>
            <?php echo esc_html( $page_title ); ?>
            <?php endif; ?>
        </h1>
        <?php
        $link = get_field( 'top_button' );
        if ( $link ) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
        <a class="button-hero hero--primary mt-4" href="<?php echo esc_url( $link_url ); ?>"
            target="<?php echo esc_attr( $link_target ); ?>">


            <div class="d-flex">
                <p>
                    <?php echo esc_html( $link_title ); ?>
                </p>
                <div class="svg-wrapper wrapper--primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.501" height="22.2" viewBox="0 0 30.501 22.2">
                        <g id="Group_5846" data-name="Group 5846" transform="translate(29.751 1.06) rotate(90)">
                            <path id="Path_15929" data-name="Path 15929"
                                d="M10.195,29V0L20.389,10.728,10.195,0,0,10.728" transform="translate(0 0)" fill="none"
                                stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
        </a>
        <?php endif; ?>

    </div>
    <?php if ( have_rows( 'my_story' ) ) : ?>
    <?php while ( have_rows( 'my_story' ) ) :
            the_row(); ?>


    <div class="about-content--wrapper mt-5 py-0 py-md-5">
        <div class="about-content container bg-secondary text-white">
            <h2 class="my-3">
                <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                <?php echo esc_html( $title ); ?>
                <?php endif; ?>
            </h2>

            <div class="about-content--text">
                <?php if ( $content = get_sub_field( 'content' ) ) : ?>
                <?php echo $content; ?>
                <?php endif; ?>
            </div>

            <?php if ( have_rows( 'image_box' ) ) : ?>
            <?php while ( have_rows( 'image_box' ) ) :
                                the_row(); ?>

            <div class="about-content--image d-flex align-items-center mt-5">
                <?php
                                        $image = get_sub_field( 'image' );
                                        if ( $image ) : ?>
                <img class="img-fluid" src="<?php echo esc_url( $image['url'] ); ?>"
                    alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>

                <div class="about-content--image__name d-flex flex-column">

                    <span>
                        <?php if ( $name = get_sub_field( 'name' ) ) : ?>
                        <?php echo esc_html( $name ); ?>
                        <?php endif; ?>
                    </span>

                    <span>
                        <?php if ( $role = get_sub_field( 'role' ) ) : ?>
                        <?php echo esc_html( $role ); ?>
                        <?php endif; ?>
                    </span>


                </div>


            </div>

            <?php endwhile; ?>
            <?php endif; ?>


        </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>


    <!-- Gallery -->
    <div class="about-gallery">
        <?php if ( have_rows( 'gallery' ) ) : ?>
        <?php while ( have_rows( 'gallery' ) ) :
            the_row(); ?>


        <?php
                $image = get_sub_field( 'image' );
                if ( $image ) : ?>
        <div class="about-gallery--item">
            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
        </div>
        <?php endif; ?>


        <?php endwhile; ?>
        <?php endif; ?>
    </div>


    <!-- Testimonial container -->
    <section class="testimonial-container testimonial-about bg-eight">
        <div class="container">
            <h2 class="text-center text-secondary">Don't just take our word for it</h2>


            <div class="testimonial--scroll__container bg-white">

                <?php if ( have_rows( 'testimonials' ) ) : ?>
                <?php while ( have_rows( 'testimonials' ) ) :
		        the_row(); ?>


                <?php if ( have_rows( 'review_item' ) ) : ?>
                <?php while ( have_rows( 'review_item' ) ) :
                the_row(); ?>


                <!-- Review Item -->
                <div class="testimonial--scroll__item">

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
    <section class="bg-secondary contact-section text-white section--padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact--form">
                        <h2>
                            Let's <span class="primary-clr">talk.</span>
                        </h2>
                        <div>
                            <p class="pb-3">If you have any questions about Soleze please feel free to ge in touch
                                below. We will respond
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
</main>