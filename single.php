<?php
$categories = get_the_category();
$category_names = array();

if (!empty($categories)) {
    foreach ($categories as $category) {
        $category_names[] = $category->name; // Collect category names
    }
}

$category_names_string = implode(', ', $category_names);

$hero_button = get_field('hero_button', get_the_ID());
$service_group = get_field('service_group', get_the_ID());
?>

<section class="sub-hero-section position-relative">
    <?php if (!empty(get_the_post_thumbnail_url(get_the_ID()))): ?>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" class="h-100 w-100 object-cover" alt="">
    <?php endif; ?>
    <div class="sub-hero-content position-absolute bottom-0 w-100 d-flex align-items-center">
        <div class="container">
            <div class="col-6 sub-hero-bg pe-5">
                <div class="bg-30264B radius20 bg-box">
                    <div class="rale-medium font12 leading26 text-uppercase text-F7F5F6 dmb-10"><?php echo $category_names_string; ?></div>
                    <div class="basker font38 leading50 text-F7F5F6 dmb-10"><?php echo get_the_title(get_the_ID()) ?></div>
                    <div class="rale-normal font16 leading26 text-F7F5F6 dmb-20 pe-5"> <?php echo get_the_content(get_the_ID()) ?> </div>
                    <?php if (!empty($hero_button)): ?>
                        <a href="<?php echo $hero_button['url'] ?>" target="<?php echo $hero_button['target'] ?>" class="btnA border-F7F5F6-BFA8E5-btn text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill"><?php echo $hero_button['title'] ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="spacing dpt-100"></div>

<?php if (!empty($service_group)): ?>
    <section class="service-content-section">
        <div class="container">
            <div class="row">
                <div class="col-8 pe-5">
                    <?php if (!empty($service_group['left_title'])): ?>
                        <div class="basker font50 leading55 text-30264B dmb-30 pe-3"><?php echo $service_group['left_title'] ?></div> <?php endif; ?>
                    <?php if (!empty($service_group['description'])): ?> <div class="rale-normal font16 leading26 text-30264B dmb-20 col-11 pe-5"><?php echo $service_group['description'] ?></div>
                    <?php endif; ?>
                    <?php if (!empty($service_group['button'])): ?>
                        <a href="<?php echo $service_group['button']['url'] ?>"
                            target="<?php echo $service_group['button']['target'] ?>"
                            class="btnA bg-30264B-BFA8E5-btn  text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill"><?php echo $service_group['button']['title'] ?></a>
                    <?php endif; ?>

                </div>
                <div class="col-4">
                    <div class="col-11 ps-4 ms-auto">
                        <?php if (!empty($service_group['right_title'])): ?>
                            <div class="rale-medium font18 leading20 text-30264B dmb-40"><?php echo $service_group['right_title'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($service_group['team_select'])):
                            $team_select = $service_group['team_select'];
                        ?>
                            <div class="service-right-content bg-white radius5">
                                <?php if (!empty($team_select)):
                                    foreach ($team_select as $team):
                                        $id = $team->ID;
                                        $title = get_the_title($id);
                                        $img = get_the_post_thumbnail_url($id);
                                        $content = get_the_excerpt($id);
                                        $mobile_no = get_field('number', $id);
                                        $email = get_field('email', $id);
                                ?>
                                        <div class="d-flex align-items-center service-right-item dmb-40">
                                            <div class="col-4 pe-1">
                                                <div class="service-right-img radius10 overflow-hidden">
                                                    <img src="<?php echo $img; ?>" class="w-100 h-100 object-cover" alt="">
                                                </div>
                                            </div>
                                            <div class="col-8 ps-4">
                                                <div class="rale-medium font18 leading28 text-30264B"><?php echo $title; ?></div>
                                                <div class="rale-medium font14 leading20 text-30264B opacity60 dmb-10"> <?php echo $content; ?> </div>
                                                <a href="tel:<?php echo $mobile_no; ?>"
                                                    class="rale-medium font14 leading20 text-30264B text-decoration-none d-flex"><?php echo $mobile_no; ?></a>
                                                <a href="mailto:<?php echo $email; ?>"
                                                    class="rale-medium font14 leading20 text-30264B text-decoration-none d-flex"><?php echo $email ?></a>
                                            </div>
                                        </div>
                                <?php endforeach;
                                endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="service-bottom-border dpt-125"></div>
        </div>
    </section>
<?php endif; ?>

<?php include 'templates/page-builder.php'; ?>
