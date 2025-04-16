<?php 
    $top_header = get_field('top_header','option');
    $white_logo = get_field('white_logo','option');
    $black_logo = get_field('black_logo','option');
    $menu_links = get_field('menu_links','option');
    $contact_link = get_field('contact_link','option');
    $header_color = get_field('header_color');
?>

<!-- <header class="header position-fixed top-0 w-100 <?php echo $header_color == 'dark-logo' ? 'bg-30264B-header' : '' ?>">
    <div class="header-contact bg-BFA8E5 py-2">
      <div class="container">
        <div class="d-flex justify-content-between">
            <?php if(!empty($top_header)) : ?>
               <div class="d-flex">
                    <?php foreach($top_header['phone_no'] as $phone_no_data) :
                        $name = $phone_no_data['name'];
                        $number = $phone_no_data['number'];
                    ?>
                        <div class="rale-medium font12 leading18 text-F7F5F6 text-capitalize top-header-link">
                        <?php echo $name; ?>  <?php echo $number; ?>
                        </div>
                    <?php endforeach; ?>
               </div>
            <?php endif; ?>
            <div class="d-flex">
                <?php foreach($top_header['links'] as $phone_no_data) :
                    $link = $phone_no_data['link'];
                ?>
                <a href="<?php echo $link['url']; ?>"
                class="rale-medium font12 leading20 text-capitalize text-F7F5F6 d-inline-block text-decoration-none top-header-link"><?php echo $link['title']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
      </div>
    </div>
    <div class="header-section py-3 transition">
      <div class="container">
        <div class="d-flex align-items-center">
          <div class="col-2">
            <a href="" class="d-inline-block header-logo">
              <img src="<?php echo $white_logo['sizes']['medium']; ?>" class="white-logo" alt="">
              <img src="<?php echo $black_logo['sizes']['medium']; ?>" class="black-logo" alt="">
            </a>
          </div>
          <div class="col-8">
            <ul class="list-none ps-0 mb-0 d-flex justify-content-center">
            <?php foreach($menu_links as $menu_links_data) :
                 $link_type = $menu_links_data['link_type'];
                 $link = $menu_links_data['link'];
                 $mega_link_type = $menu_links_data['mega_link_type'];
                 $mega_menu_links = $menu_links_data['mega_menu_links'];
                 $service_category = $menu_links_data['service_category'];
                 if ( $service_category && is_object( $service_category ) ) {

                    $args = array(
                        'post_type' => 'post', // Change to your post type if it's custom
                        'tax_query' => array(
                            array(
                                'taxonomy' => $service_category->taxonomy, // 'category' or custom taxonomy
                                'field'    => 'slug',
                                'terms'    => $service_category->slug,
                            ),
                        ),
                    );

                    $query = new WP_Query( $args );
                } 
            ?>
            <?php if($link_type == 'sublink') : ?>
              <li class="menu-item position-relative d-flex justify-content-center transition">
                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"
                  class="text-decoration-none rale-medium font14 leading18 text-F7F5F6 d-inline-block menu-item-a transition"><?php echo $link['title']; ?> <img src="assets/images/off-white-arrow.svg" class="menu-arrow ms-1" alt=""></a>
                <div class="sub-menu position-absolute top-100 dmt-10 transition">
                  <div class="menu-box bg-F7F5F6 radius15">
                    <?php if($mega_link_type == 'links') : ?>
                        <?php foreach($mega_menu_links as $mega_menu_links_data) :
                            $mega_link = $mega_menu_links_data['mega_link'];
                        ?>
                        <a href="<?php echo $mega_link['url']; ?>"
                        class="d-flex text-decoration-none rale-medium font14 leading20 text-30264B dmb-25 menu-box-a position-relative transition"><?php echo $mega_link['title']; ?></a>
                        <?php endforeach; ?>
                        <?php else : ?>

                        <?php  if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                        ?>

                            <a href="<?php the_permalink(); ?>" class="d-flex text-decoration-none rale-medium font14 leading20 text-30264B dmb-25 menu-box-a position-relative transition"><?php the_title(); ?></a>
                        <?php endwhile; endif; wp_reset_query(); ?>
                    <?php endif; ?>
                  </div>
                </div>
              </li>
            <?php else : ?>
                <li class="menu-item d-flex">
                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"
                class="text-decoration-none rale-medium font14 leading18 text-F7F5F6 d-inline-block menu-item-a transition"><?php echo $link['title']; ?> <img src="assets/images/off-white-arrow.svg" class="menu-arrow ms-1" alt=""></a>
              </li>
            <?php endif; ?>
            <?php endforeach; ?>
            </ul>
          </div>
          <?php if(!empty($contact_link)) :?>
          <div class="col-2 d-flex justify-content-end">
              <a href="<?php echo $contact_link['url']; ?>" target="<?php echo $contact_link['target']; ?>"
              class="btnA color-F7F5F6-btn text-decoration-none rale-semibold font14 leading18 d-inline-flex align-items-center rounded-pill"><?php echo $contact_link['title']; ?></a>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
</header> -->