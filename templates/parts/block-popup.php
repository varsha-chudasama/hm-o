<?php $i = 0;
if (have_rows('popup_blocks')): ?>

    <?php while (have_rows('popup_blocks')): the_row();

        // vars

        $image = get_sub_field('image');
        $tagline = get_sub_field('tagline');
        $title = get_sub_field('title');
        $info = get_sub_field('info');
        ?>
        <div style="display:none;">
            <div id="info--popup__<?php echo $i; ?>" class="info--popup">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5 info--popup__image">
                            <img src="<?php echo $image['url']; ?>" alt="">
                        </div>
                        <div class="col-md-5 mx-auto info--popup__text">
                            <div class="headingM"><?php echo $title; ?></div>
                            <?php echo $info; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-4 col-6">
            <a href="#info--popup__<?php echo $i; ?>" data-fancybox class="popup--block color--black">
                <div class="popup--block__image"
                     style="background: url('<?php echo $image['url']; ?>')  center /cover no-repeat;"></div>
                <div class="padding-top--20px"></div>
                <div class="tagline"><?php echo $tagline; ?></div>
                <div class="headingXS"><?php echo $title; ?></div>
            </a>
        </div>
        <?php $i++; endwhile; ?>

<?php endif;
wp_reset_query(); ?>
