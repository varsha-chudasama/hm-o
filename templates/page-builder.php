<?php
/* Template Name: Page Builder */
?>


<?php if (have_rows("flexible_content")):
    while (have_rows("flexible_content")):
        the_row(); ?>
        <?php if (get_row_layout() == "hero_section"):
            $hero_title = get_sub_field('hero_title');
            $content = get_sub_field('content');
            $button = get_sub_field('button');
            $media_type = get_sub_field('media_type');
            $hero_image = get_sub_field('hero_image');
            $hero_video = get_sub_field('hero_video');
            $hero_vimeo = get_sub_field('hero_vimeo');
            $hero_youtube = get_sub_field('hero_youtube');
        ?>
            <section class="hero-section dpt-215 tpt-165">
                <div class="container">
                    <div class="hero-content col-8 mx-auto dmb-60 text-center">
                        <?php if (!empty($hero_title)): ?>
                            <div class="rale-medium font61 leading70 text-capitalize text-F7F5F6 wow animated animate__fadeInUp res-font24 res-leading28" data-wow-duration="1.5s">
                                <?php echo $hero_title; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($content)): ?>
                            <div class="basker font72 leading70 text-capitalize text-F7F5F6 dmb-30 wow animated animate__fadeInUp res-font34 res-leading40" data-wow-duration="1.5s">
                                <?php echo $content; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($button)): ?>
                            <a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>" class="btnA color-F7F5F6-btn text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill wow animated animate__fadeInUp" data-wow-duration="1.5s"><?php echo $button['title']; ?> </a>
                        <?php endif; ?>
                    </div>
                    <div class="hero-img radius20 overflow-hidden wow animated animate__fadeInUp" data-wow-duration="1.5s">
                        <?php if ($media_type == 'image'):  ?>
                            <img src="<?php echo $hero_image['sizes']['fullscreen'] ?>" alt="<?php echo $hero_image['title'] ?>" class="w-100 h-100 object-cover">
                        <?php elseif ($media_type == 'video'): ?>
                            <video loop autoplay muted playsinline data-wf-ignore="true"
                                preload="none" class="w-100 h-100 object-cover" data-object-fit="cover">
                                <source src="<?php echo $hero_video; ?>" data-wf-ignore="true" />
                            </video>
                        <?php elseif ($media_type == 'vimeo'): ?>
                            <iframe class="w-100 h-100 object-cover"
                                src="<?php echo $hero_vimeo; ?>?autoplay=1&loop=1&background=1&controls=0&rel=0&mute=1" allow="autoplay" allowfullscreen>
                            </iframe>
                        <?php elseif ($media_type == 'youtube'): ?>
                            <iframe class="w-100 h-100 object-cover"
                                src="<?php echo $hero_youtube; ?>?playlist=<?php echo basename($hero_youtube); ?>&autoplay=1&loop=1&background=1&controls=0&rel=0&mute=1"
                                allow="autoplay; fullscreen">
                            </iframe>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if (get_row_layout() == "left_content"):
            $content = get_sub_field('content');
            $button = get_sub_field('button');
        ?>
            <section class="left-content-section">
                <div class="container">
                    <div class="col-10">
                        <?php if (!empty($content)): ?>
                            <div class="basker font52 leading60 text-30264B dmb-20 wow animated animate__fadeInUp" data-wow-duration="1.5s"><?php echo $content; ?> </div>
                        <?php endif; ?>
                        <?php if (!empty($button)): ?>
                            <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="btnA color-30264B-btn text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill wow animated animate__fadeInUp" data-wow-duration="1.5s"><?php echo $button['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if (get_row_layout() == "service_card"):
            $service_group = get_sub_field('service_group');
        ?>
            <section class="service-cards-section">
                <div class="container">
                    <div class="row row15">

                        <?php if (!empty($service_group)):
                            foreach ($service_group as $services):
                                $service_button = $services['button'];
                        ?>
                                <div class="col-6  wow animated animate__fadeInUp" data-wow-duration="1.5s">
                                    <div class="service-cards radius15 dpt-115 dpb-100 <?php echo $services['background_color'] == 'purple' ? 'bg-30264B-cards' : ''; ?>">
                                        <div class="col-9 mx-auto text-center">
                                            <?php if (!empty($services['title'])): ?> <div class="service-heading basker font46 leading50 dmb-20"><?php echo $services['title'] ?></div><?php endif; ?>
                                            <?php if (!empty($services['content'])): ?><div class="service-description rale-normal font20 leading26 dmb-30 col-11 px-2 mx-auto"><?php echo $services['content'] ?></div><?php endif; ?>
                                            <?php if (!empty($service_button)): ?> <a href="<?php echo $service_button['url'] ?>" target="<?php echo $service_button['target'] ?>"
                                                    class="btnA text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill"><?php echo $service_button['title'] ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_row_layout() == "left_right_content"):
            $image_postion = get_sub_field('image_postion');
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $sub_title = get_sub_field('sub_title');
            $content = get_sub_field('content');
            $button = get_sub_field('button');
            $button_style = get_sub_field('button_style');
            $font_size = get_sub_field('font_size');
        ?>
            <section class="left-right-section">
                <div class="container">
                    <div class="row align-items-center">
                        <?php if ($image_postion == 'left'): ?>
                            <div class="col-6 px-5">
                                <div class="left-right-img radius15 overflow-hidden ms-2 wow animated animate__fadeInUp" data-wow-duration="1.5s">
                                    <?php if (!empty($image)): ?>
                                        <img src="<?php echo $image['sizes']['medium']; ?>" class="w-100 h-100 object-cover" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-6">
                            <div class="<?php echo $font_size == 'large' ? 'col-10 ' : 'col-9' ?> mx-auto wow animated animate__fadeInUp" data-wow-duration="1.5s">
                                <?php if (!empty($title)): ?><div class="rale-normal <?php echo $font_size == 'large' ? 'font48' : 'font36' ?> leading50 text-30264B"><?php echo $title; ?></div><?php endif; ?>
                                <?php if (!empty($sub_title)): ?><div class="basker <?php echo $font_size == 'large' ? 'font48' : 'font36' ?> leading50 text-30264B"><?php echo $sub_title; ?></div><?php endif; ?>
                                <?php if (!empty($content)): ?> <div class="rale-normal dmt-30 <?php echo $font_size == 'large' ? 'font20 pe-5' : 'font16' ?>  leading26 text-30264B dmb-30"><?php echo $content;  ?></div> <?php endif; ?>
                                <?php if (!empty($button)): ?>
                                    <a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>"
                                        class="btnA text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill <?php echo $button_style == 'outline' ? 'color-30264B-btn' : 'bg-30264B-BFA8E5-btn' ?>"> <?php echo $button['title'] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if ($image_postion == 'right'): ?>
                            <div class="col-6 px-5">
                                <div class="left-right-img radius15 overflow-hidden ms-2">
                                    <?php if (!empty($image)): ?>
                                        <img src="<?php echo $image['sizes']['medium'] ?>" class="w-100 h-100 object-cover" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_row_layout() == "view_vacancies"):

            $left_main_title = get_sub_field('left_main_title');
            $left_sub_title = get_sub_field('left_sub_title');
            $right_content = get_sub_field('right_content');
            $button = get_sub_field('button');
        ?>
            <section class="view-vacancies-section bg-0E3823 position-relative">
                <div class="d-flex align-items-end h-100 w-100">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/04/Intersection-1-1.svg" class="intersection-img w-100" alt="">
                </div>
                <div class="position-absolute top-left-center radius20 w-100">
                    <div class="container">
                        <div class="col-11 mx-auto px-3">
                            <div class="bg-F7F5F6 radius20 view-vacancies-box">
                                <div class="d-flex">
                                    <div class="col-6">
                                        <?php if (!empty($left_main_title)): ?> <div class="rale-normal font42 leading55 text-0E3823   wow animated animate__fadeInUp" data-wow-duration="1.5s"><?php echo $left_main_title; ?></div>
                                        <?php endif; ?>
                                        <?php if (!empty($left_sub_title)): ?>
                                            <div class="basker font48 leading55 text-0E3823   wow animated animate__fadeInUp" data-wow-duration="1.5s"><?php echo  $left_sub_title; ?></div>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-6 ps-3">
                                        <?php if (!empty($right_content)): ?><div class="rale-normal font20 leading28 text-0E3823 dmb-20 pe-4   wow animated animate__fadeInUp" data-wow-duration="1.5s"><?php echo $right_content; ?></div>
                                        <?php endif; ?>
                                        <?php if (!empty($button)): ?>
                                            <a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>"
                                                class="btnA color-0E3823-btn text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill   wow animated animate__fadeInUp" data-wow-duration="1.5s"><?php echo $button['title'] ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if (get_row_layout() == "related_services"):
            $title = get_sub_field('title');
            $service_select = get_sub_field('service_select');
        ?>
            <section class="related-section dpt-130 dpb-180">
                <div class="container">
                    <?php if (!empty($title)): ?><div class="rale-normal font30 leading40 text-30264B dmb-30"><?php echo $title; ?></div> <?php endif; ?>
                    <?php if (!empty($service_select)): ?>
                        <div class="row row15">
                            <?php foreach ($service_select as $service_data) :
                                $service_id = $service_data->ID;
                                $image = get_the_post_thumbnail_url($service_id);
                                $title = get_the_title($service_id);
                                $link = get_permalink($service_id);
                            ?>
                                <div class="col-4">
                                    <div class="d-inline-block w-100 related-cards">
                                        <div class="related-cards-img radius5 overflow-hidden dmb-30">
                                            <img src="<?php echo $image; ?> " class="w-100 h-100 object-cover" alt="">
                                        </div>
                                        <div class="rale-medium font18 leading20 text-capitalize text-30264B dmb-10"><?php echo $title; ?></div>
                                        <a href="<?php echo $link; ?>"
                                            class="rale-medium font16 leading20 text-30264B text-capitalize d-inline-block">Learn
                                            More</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_row_layout() == "sticky_logo"):
            $image = get_sub_field('image');
        ?>
            <img src="<?php echo $image['sizes']['medium']; ?>" alt="">
        <?php endif; ?>
        <?php if (get_row_layout() == "our_fees"):
            $our_fees_title = get_sub_field('title');
            $fees_content = get_sub_field('fees_content');
            $fees_button = get_sub_field('button');
        ?>
            <section class="our-fees-section bg-3C3938 dpt-165">
                <div class="container">
                    <?php if (!empty($our_fees_title)): ?><div class="basker font100 leading115 text-capitalize text-0E3823 dmb-65"><?php echo $our_fees_title; ?></div> <?php endif; ?>
                    <div class="row flex-column flex-lg-row">
                        <div class="col-lg-3 col-12 privacy-left-content mt-3">
                            <div class="position-sticky privacy-links">
                                <?php if (!empty($fees_content)): ?>
                                    <ul class="list-none ps-0 dmb-30" id="privacy-links">
                                        <?php foreach ($fees_content as $key => $fee_data): ?>
                                            <?php if (!empty($fee_data['left_title'])): ?>
                                                <li class="dmb-10">
                                                    <a class="rale-medium font14 leading18 text-0E3823 transition text-decoration-none d-inline-block"
                                                        href="#our-fee<?php echo $key + 1; ?>">
                                                        <?php echo $fee_data['left_title']; ?>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                                <?php if (!empty($fees_button)): ?>
                                    <a href="<?php echo $fees_button['url'] ?>" class="btnA bg-0E3823-B6EDC6-btn text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill"> <?php echo $fees_button['title'] ?> </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if (!empty($fees_content)): ?>
                            <div class="col-lg-9 col-12 privacy-right-content mx-auto">
                                <?php foreach ($fees_content as $key => $fee_data): ?>
                                    <div class="single-content dpt-75 tpt-55 pe-5" id="our-fee<?php echo $key + 1; ?>">
                                        <div class="col-lg-11 col-12 single-content-line dpb-80">
                                            <?php if (!empty($fee_data['right_title'])): ?>
                                                <div class="basker font36 leading55 text-0E3823 dmb-40">
                                                    <?php echo $fee_data['right_title']; ?></div>
                                            <?php endif; ?>
                                            <?php if (!empty($fee_data['right_content'])): ?>
                                                <div class="rale-normal font16 leading26 text-0E3823 pe-5">
                                                    <?php echo $fee_data['right_content']; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_row_layout() == "left_small_content"):
            $content = get_sub_field('content');
        ?>
            <section class="small-left-content-section">
                <div class="container">
                    <div class="col-8 pe-4">
                        <?php if (!empty($content)): ?>
                            <div class="basker font38 leading40 text-30264B">
                                <?php echo $content; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

        <?php endif; ?>
        <?php if (get_row_layout() == "title_with_content"):
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            $button = get_sub_field('button');
            $text_color = get_sub_field('text_color');
        ?>
            <section lang="title-with-content">
                <div class="container">
                    <div class="row">
                        <div class="col-5 wow animated animate__fadeInUp" data-wow-duration="1.5s">
                            <?php if (!empty($title)): ?>
                                <div class="<?php echo $text_color == 'purple' ? 'text-30264B' : 'text-0E3823' ?> font100 basker lh-1"> <?php echo $title; ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-7 pe-3 wow animated animate__fadeInUp" data-wow-duration="1.5s">
                            <?php if (!empty($content)): ?>
                                <div class="rale-medium font16 leading26 <?php echo $text_color == 'purple' ? 'text-30264B' : 'text-0E3823' ?> pe-5 dmb-40">
                                    <?php echo $content; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($button)): ?>
                                <a href="<?php echo $button['url']; ?>"
                                    target="<?php echo $button['target']; ?>"
                                    class=" <?php echo $text_color == 'purple' ? 'bg-30264B-BFA8E5-btn' : 'bg-0E3823-B6EDC6-btn' ?>  btnA  text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill">
                                    <?php echo $button['title']; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>


        <?php if (get_row_layout() == "our_values"):
            $our_values_title = get_sub_field('title');
            $values_cards = get_sub_field('values_cards');
        ?>
            <section class="our-values-section">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center dmb-35">
                        <?php if (!empty($our_values_title)): ?>
                            <div class="basker font36 leading40 text-30264B"><?php echo $our_values_title; ?></div>
                        <?php endif; ?>
                        <div class="slick-arrow">
                            <div class="d-flex">
                                <div
                                    class="prev-arrow rounded-circle transition d-flex align-items-center bg-BFA8E5 justify-content-center cursor-pointer rotate-circle-active">
                                    <img src="assets/images/off-white-arrow.svg" alt="" class="" />
                                </div>
                                <div
                                    class="next-arrow rounded-circle transition d-flex align-items-center bg-BFA8E5 ms-3 justify-content-center cursor-pointer">
                                    <img src="assets/images/off-white-arrow.svg" alt="" class="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (!empty($values_cards)): ?>
                        <div class="our-values-slider">
                            <?php foreach ($values_cards as $values): ?>
                                <a href="<?php echo !empty($values['link']['url']) ? $values['link']['url'] : '#'; ?>"
                                    class="our-values-cards text-decoration-none d-inline-block position-relative radius15 overflow-hidden">
                                    <img src="<?php echo $values['image']['sizes']['medium'] ?>" class="w-100 h-100 object-cover" alt="">
                                    <div
                                        class="px-4 position-absolute top-0 start-0 w-100 d-flex flex-column justify-content-between h-100 dpt-60 dpb-40">
                                        <?php if (!empty($values['title'])): ?> <div class="basker font30 leading35 text-FFFCF0"> <?php echo $values['title']; ?> </div><?php endif; ?>
                                        <div class="d-flex align-items-center">
                                            <?php if (!empty($values['description'])): ?>
                                                <div class="rale-medium font14 leading20 text-FFFCF0 col-8 truncate" data-max-length="120">
                                                    <?php echo $values['description']; ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="col-4 d-flex justify-content-end">
                                                <div
                                                    class="value-cards-arrow bg-E9E9F0 rounded-circle d-flex justify-content-center align-items-center">
                                                    <img src="assets/images/off-white-arrow.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_row_layout() == "our_leadership"):
            $type = get_sub_field('type');
            $our_leadership_title = get_sub_field('title');
            $button = get_sub_field('button');
            $team_master = array(
                'order' => 'DESC',
                'orderby' => 'date',
                'post_type' => 'team',
                'posts_per_page' => -1,
            );
            $team_all = new WP_Query($team_master);

            $team_select = get_sub_field('team_select');
        ?>
            <section class="our-leadership-section">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">
                        <?php if (!empty($our_leadership_title)): ?>
                            <div class="basker font36 leading40 text-30264B"><?php echo $our_leadership_title; ?></div>
                        <?php endif; ?>
                        <?php if (!empty($button)): ?>
                            <a href="<?php echo $button['url']; ?>"
                                target="<?php echo $button['target']; ?>"
                                class="btnA bg-30264B-BFA8E5-btn  text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill"><?php echo $button['title']; ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="row row15">
                        <?php if ($type == 'all'): ?>
                            <?php if ($team_all->have_posts()) :
                                while ($team_all->have_posts()) :
                                    $team_all->the_post();
                                    $id = get_the_ID(); ?>
                                    <a href="#memberModalToggle-<?php echo $id; ?>" data-bs-toggle="modal" class="dmb-130 text-decoration-none our-leadership col-3 dmt-35 wow animated animate__fadeInUp" data-wow-duration="1.5s">
                                        <div class="our-leadership-img radius10 dmb-20 overflow-hidden">
                                            <?php if (!empty(get_the_post_thumbnail_url())): ?>
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 h-100 object-cover" alt="team-member">
                                            <?php endif; ?>
                                        </div>
                                        <?php if (!empty(get_the_title())): ?>
                                            <div class="rale-medium font20 leading28 text-30264B dmb-5"><?php echo get_the_title(); ?></div>
                                        <?php endif; ?>
                                        <?php if (!empty(get_the_excerpt())): ?>
                                            <div class="rale-normal font14 leading26 text-30264B opacity-50"> <?php echo get_the_excerpt(); ?></div>
                                        <?php endif; ?>
                                    </a>

                                    <div class="modal member-modal fade text-center" data-bs-backdrop="static" id="memberModalToggle-<?php echo $id; ?>" aria-hidden="true"
                                        aria-labelledby="memberModalToggleLabel" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content bg-white radius10 overflow-hidden">
                                                <div class="close-div position-absolute">
                                                    <button type="button"
                                                        class="btn-close p-0 close-round d-flex align-items-center justify-content-center rounded-circle"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <img src="assets/images/close.svg" alt="">
                                                    </button>
                                                </div>
                                                <div class="w-100 d-inline-flex flex-column flex-lg-row align-items-center h-100">
                                                    <div
                                                        class="modal-member-img h-100 bg-ExtraLightGray d-flex align-items-center justify-lg-content-end justify-content-center">
                                                        <?php if (!empty(get_the_post_thumbnail_url())): ?>
                                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="team-member" class="h-100 w-100 object-cover">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="modal-member-content text-start w-auto h-100 d-flex">
                                                        <div class=" position-relative">
                                                            <?php if (!empty(get_the_title())): ?>
                                                                <div class="rale-medium font30 leading35 text-30264B dmb-5">
                                                                    <?php echo get_the_title(); ?>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if (!empty(get_the_excerpt())): ?>
                                                                <div class="rale-normal font14 leading26 text-30264B opacity-50 dmb-35">
                                                                    <?php echo get_the_excerpt(); ?>
                                                                </div>
                                                            <?php endif; ?>

                                                            <div class="modal-member-desc dmb-30 res-h-fit">
                                                                <?php if (!empty(get_the_content())): ?>
                                                                    <div class="rale-medium font16 leading28 space-0_16 text-0D2033">
                                                                        <?php echo get_the_content(); ?>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php endwhile;
                                wp_reset_postdata();
                            endif; ?>
                        <?php elseif ($type == 'select'): ?>
                            <?php if (!empty($team_select)):
                                foreach ($team_select as $team):
                                    $team_id = $team->ID;
                                    $team_name = get_the_title($team_id);
                                    $team_position = get_the_excerpt($team_id);
                                    $team_image = get_the_post_thumbnail_url($team_id);
                            ?>
                                    <div class="our-leadership col-3 dmt-35">
                                        <div class="our-leadership-img radius10 dmb-20 overflow-hidden">
                                            <?php if (!empty($team_image)): ?>
                                                <img src="<?php echo $team_image; ?>" class="w-100 h-100 object-cover" alt="team-member">
                                            <?php endif; ?>
                                        </div>
                                        <?php if (!empty($team_name)): ?>
                                            <div class="rale-medium font20 leading28 text-30264B dmb-5"><?php echo $team_name; ?></div>
                                        <?php endif; ?>
                                        <?php if (!empty($team_position)): ?>
                                            <div class="rale-normal font14 leading26 text-30264B opacity-50"><?php echo $team_position; ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                            <?php endforeach;
                            endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_row_layout() == "small_image"):
            $small_image = get_sub_field("image");
        ?>
            <section class="small-image-section">
                <?php if (!empty($small_image)): ?>
                    <img src="<?php echo $small_image['sizes']['fullscreen'] ?>" class="w-100 h-100 object-cover" alt="">
                <?php endif; ?>
            </section>
        <?php endif; ?>
        <?php if (get_row_layout() == "enquire_cards"):
            $enquire_group = get_sub_field('enquire_group');
        ?>
            <section class="enquire-card-section">
                <div class="container">
                    <div class="enquire-cards-group">
                        <?php if (!empty($enquire_group)):
                            foreach ($enquire_group as $key => $enquire): ?>
                                <div class="enquire-cards radius20 d-flex flex-column flex-lg-row bg-white dpt-100 dpb-105 dmb-35 wow animated animate__fadeInUp" data-wow-duration="1.5s">
                                    <div class="left-content">
                                        <?php if (!empty($enquire['date'])): ?>
                                            <div class="rale-normal font14 leading26 text-0D2033 opacity-50 dmb-15"><?php echo $enquire['date']; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($enquire['title'])): ?>
                                            <div class="basker font40 leading46 text-black dmb-10"><?php echo $enquire['title']; ?></div>
                                        <?php endif; ?>
                                        <?php if (!empty($enquire['location'])): ?>
                                            <div class="rale-normal font14 leading20 text-0D2033 dmb-35">Location: <?php echo $enquire['location']; ?></div>
                                        <?php endif; ?>
                                        <?php if (!empty($enquire['button_text'])): ?>
                                            <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight-<?php echo $key + 1 ?>"
                                                aria-controls="offcanvasRight"
                                                class="btnA bg-0E3823-B6EDC6-btn text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill"><?php echo $enquire['button_text']; ?></a>
                                            <?php endif; ?>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="col-10 right-content">
                                            <?php if (!empty($enquire['description'])): ?>
                                                <div class="rale-medium font16 leading30 text-0D2033 dmb-30 vacancies-content">
                                                    <?php echo $enquire['description']; ?>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>

                                <!-- enquire offacnvas -->

                                <div class="offcanvas offcanvas-end bg-white" tabindex="-1" id="offcanvasRight-<?php echo $key + 1 ?>"
                                    aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header p-0">
                                        <button type="button" class="btn-close text-reset bg-B6EDC6 rounded-circle m-3" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body p-0 d-flex align-items-center">
                                        <div class="col-9 px-2 mx-auto text-center">
                                            <div class="rale-normal font17 leading20 text-30264B opacity-50 dmb-10">Enquire about</div>
                                            <?php if (!empty($enquire['title'])): ?>
                                                <div class="basker font40 leading40 text-0E3823 dmb-20"><?php echo $enquire['title']; ?></div>
                                            <?php endif; ?>

                                            <?php echo do_shortcode('[contact-form-7 id="0ddbe46" title="Enquire"]'); ?>
                                        </div>

                                    </div>
                                </div>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_row_layout() == "get_in_touch_content"):
            $get_in_content = get_sub_field('content');
            $get_in_button = get_sub_field('button');
        ?>
            <section class="get-in-touch-section">
                <div class="container">
                    <div class="col-8 pe-5">
                        <?php if (!empty($get_in_content)): ?>
                            <div class="basker font48 leading55 text-0E3823 dmb-25  wow animated animate__fadeInUp" data-wow-duration="1.5s"><?php echo $get_in_content; ?></div>
                        <?php endif; ?>
                        <?php if (!empty($get_in_button)): ?>
                            <a href="<?php echo $get_in_button['url']; ?>"
                                target="<?php echo $get_in_button['target']; ?>"
                                class="btnA color-0E3823-btn text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill  wow animated animate__fadeInUp" data-wow-duration="1.5s"><?php echo $get_in_button['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (get_row_layout() == "contact_us"):
            $contact_us_title = get_sub_field('title');
            $address_group = get_sub_field('address_group');
            $social_links = get_sub_field('social_links');
        ?>
            <section class="contact-us-section">
                <div class="container">
                    <div class="row">
                        <div class="col-5  wow animated animate__fadeInUp" data-wow-duration="1.5s">
                            <?php if (!empty($contact_us_title)): ?>
                                <div class="basker font52 leading55 text-30264B dmb-40 col-11"><?php echo $contact_us_title; ?></div>
                            <?php endif; ?>
                            <div class="d-flex dmb-55">
                                <?php if(!empty($address_group)) : foreach($address_group as $address_group_data) :
                                        $location = $address_group_data['location'];
                                        $address = $address_group_data['address'];
                                        $phone_no = $address_group_data['phone_no'];
                                ?>
                                <div class="col-6">
                                    <div class="rale-medium font20 leading26 text-30264B dmb-20"><?php echo $location; ?></div>
                                    <div class="rale-medium font16 leading26 text-201E4A dmb-20 col-4 pe-2"><?php echo $address; ?></div>
                                    <div class="rale-medium font16 leading26 text-201E4A"><?php echo $phone_no; ?></div>
                                </div>
                                <?php endforeach; endif; ?>
                            </div>
                            <div class="d-flex social-icon-hroup">
                                <?php if(!empty($social_links)) : foreach($social_links as $social_links_data) :
                                        $image = $social_links_data['image'];
                                        $link = $social_links_data['link'];
                                ?>
                                <a href="<?php echo $link; ?>"  target="_blank"
                                    class="social-icon d-inline-flex justify-content-center align-items-center rounded-circle"><img
                                        src="<?php echo $image['sizes']['medium']; ?>" class="img" alt=""></a>
                                <?php endforeach; endif; ?>
                            </div>
                        </div>
                        <div class="col-7 contact-form  wow animated animate__fadeInUp" data-wow-duration="1.5s">
                            <?php echo do_shortcode('[contact-form-7 id="0678dc8" title="Contact Form"]'); ?>
                        </div>
                    </div>
                </div>
            </section>

        <?php endif; ?>

        <?php if (get_row_layout() == "page_links"):
            $title = get_sub_field('title');
            $page_cards = get_sub_field('page_cards');
        ?>
            <section class="related-section dpt-130 dpb-180">
                <div class="container">
                    <?php if (!empty($title)): ?><div class="rale-normal font30 leading40 text-30264B dmb-30 wow animated animate__fadeInUp" data-wow-duration="1.5s"><?php echo $title; ?></div> <?php endif; ?>
                    <?php if (!empty($page_cards)): ?>
                        <div class="row row15">
                            <?php foreach ($page_cards as $page_cards_data) :
                               $images = $page_cards_data['page_image'];
                               $title = $page_cards_data['title'];
                               $link = $page_cards_data['link'];
                            ?>
                                <div class="col-4 wow animated animate__fadeInUp" data-wow-duration="1.5s">
                                    <div class="d-inline-block w-100 related-cards">
                                        <div class="related-cards-img radius5 overflow-hidden dmb-30">
                                            <img src="<?php echo $images['sizes']['medium']; ?> " class="w-100 h-100 object-cover" alt="">
                                        </div>
                                        <div class="rale-medium font18 leading20 text-capitalize text-30264B dmb-10"><?php echo $title; ?></div>
                                        <a href="<?php echo $link['url']; ?>"
                                            class="rale-medium font16 leading20 text-30264B text-capitalize d-inline-block"><?php echo $link['title']; ?></a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>

        

        <?php endif; ?>

        <?php if (get_row_layout() == "make_a_payment"):
            $title = get_sub_field('title');
            $payment_card = get_sub_field('payment_card');
        ?>

        <section class="payment-card-section bg-B6EDC6 dpt-220 dpb-210">
            <div class="container">
                <?php if(!empty($title)) :?>
                    <div class="basker font100 leading115 text-0E3823 dmb-40 wow animated animate__fadeInUp" data-wow-duration="1.5s"><?php echo $title; ?></div>
                <?php endif; ?>
                <div class="row row15">
                    <?php foreach ($payment_card as $payment_card_data) :
                        $left_title = $payment_card_data['left_title'];
                        $content = $payment_card_data['content'];
                        $button = $payment_card_data['button'];
                    ?>
                        <div class="col-6 wow animated animate__fadeInUp" data-wow-duration="1.5s">
                            <div class="d-flex bg-0E3823 radius15 dpt-60 dpb-60 px-5">
                                <div class="col-6">
                                    <?php if(!empty($left_title)) :?>
                                        <div class="basker font36 leading40 text-F7F5F6"><?php echo $left_title; ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-6">
                                <?php if(!empty($left_title)) :?>
                                    <div class="rale-medium font14 leading20 text-F7F5F6 dmb-15"><?php echo $content; ?></div>
                                <?php endif; ?>
                                <?php if(!empty($button)) :?>
                                    <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target'] ?>"
                                        class="btnA color-F7F5F6-btn text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill"><?php echo $button['title']; ?></a>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?php endif; ?>

        <?php if (get_row_layout() == "pay_an_invoice"):
            $title = get_sub_field('title');
        ?>

        <section class="invoice-form-section bg-B6EDC6 dpt-220 dpb-90">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="left-side-content d-flex flex-column justify-content-between position-sticky">
                            <div class="basker font100 leading115 text-0E3823"><?php echo $title; ?></div>
                            <a href="/make-a-payment/" class="rale-medium font16 leading20 text-0E3823 d-inline-block">Go back</a>
                        </div>
                    </div>
                    <div class="col-6 invoice-form">
                        <?php echo do_shortcode('[contact-form-7 id="07898cf" title="Untitled"]'); ?>
                    </div>
                </div>
            </div>
        </section>

        <?php endif; ?>

        <?php if (get_row_layout() == "privacy_policy"):
            $privacy_policy_title = get_sub_field('privacy_policy_title');
            $privacy_policy_content = get_sub_field('privacy_policy_content');
        ?>

        <section class="privacy-section bg-30264B dpt-175 dpb-105">
            <div class="container">
                <div class="basker font100 leading115 text-capitalize text-BFA8E5 dmb-55"><?php echo $privacy_policy_title; ?></div>
                <div class="row flex-column flex-lg-row">
                    <div class="col-lg-3 col-12 privacy-left-content">
                        <div class="position-sticky privacy-links">
                            <ul class="list-none ps-0 dmb-30" id="privacy-links">
                            <?php foreach ($privacy_policy_content as $key => $privacy_policy_content_data) :
                                $title = $privacy_policy_content_data['title'];
                            ?>
                                <li class="dmb-10 col-8"><a
                                        class="rale-medium font14 leading26 text-F7F5F6 transition text-decoration-none d-inline-block"
                                        href="#key<?php echo $key + 1; ?>"><?php echo $title; ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12 privacy-right-content mx-auto">
                        <?php foreach ($privacy_policy_content as $key => $privacy_policy_content_data) :
                            $title = $privacy_policy_content_data['title'];
                            $content = $privacy_policy_content_data['content'];
                            $button = $privacy_policy_content_data['button'];
                        ?>
                        <div class="single-content dpt-75 tpt-55 pe-5" id="key<?php echo $key + 1; ?>">
                            <div class="col-lg-11 col-12 single-content-line dpb-75">
                                <?php if(!empty($title)) :?>
                                    <div class="basker font36 leading55 text-F7F5F6 dmb-40">
                                        <?php echo $title; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if(!empty($content)) :?>
                                <div class="rale-normal font16 leading26 text-F7F5F6 pe-5 privacy-content dmb-30">
                                    <?php echo $content; ?>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($button)) :?>
                                    <a href="<?php echo $button['url']; ?>"
                                        class="btnA color-F7F5F6-btn text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill">
                                        <?php echo $button['title']; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <?php endif; ?>
        

        <?php if (get_row_layout() == "spacing"):
            $desktop = get_sub_field("desktop");
            $tablet = get_sub_field("tablet");
            $mobile = get_sub_field("mobile");
            $desktop_mb = $desktop["margin_bottom"];
            $desktop_mb_main = !empty($desktop["margin_bottom"]) ? " dpb-" : "";
            $tablet_mb = $tablet["margin_bottom"];
            $tablet_mb_main = !empty($tablet["margin_bottom"]) ? " tpb-" : "";
            $mobile_mb = $mobile["margin_bottom"];
            $mobile_mb_main = !empty($mobile["margin_bottom"]) ? " mpb-" : "";
            $paddingPosition = get_sub_field("padding_position");
        ?>
            <div
                class="spacing 
                <?php
                echo $desktop_mb_main;
                echo $desktop_mb;
                echo $tablet_mb_main;
                echo $tablet_mb;
                echo $mobile_mb_main;
                echo $mobile_mb; ?>"
                id="<?php
                    echo $paddingPosition == "top"
                        ? "spacing-$paddingPosition"
                        : "spacing-$paddingPosition"; ?>">
            </div>
        <?php endif; ?>
<?php endwhile;
endif; ?>