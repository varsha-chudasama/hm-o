<?php 
    $first_address = get_field('first_address','option');
    $second_address = get_field('second_address','option');
    $footer_links = get_field('footer_links','option');
    $social_links = get_field('social_links','option');
    $footer_logo = get_field('footer_logo','option');
    $client_logo = get_field('client_logo','option');
    $copyrights_footer = get_field('copyrights_footer','option');
?>

<footer class="bg-B6EDC6 dpt-85 dpb-25">
    <div class="container">
      <div class="row dmb-100">
        <div class="col-3">
            <?php if(!empty($first_address)) :?>
                <?php if(!empty($first_address)) :?>
                    <div class="rale-normal font30 leading50 text-0E3823 dmb-25"><?php echo $first_address['title']; ?></div>
                <?php endif; ?>
                <?php if(!empty($first_address)) :?>
                    <div class="rale-medium font16 leading20 text-0E3823 dmb-10"><?php echo $first_address['address']; ?></div>
                <?php endif; ?>
                <?php if(!empty($first_address)) :?>
                    <a href="<?php echo $first_address['link']['url'];?>" target="<?php echo $first_address['link']['target'] ?>" class="rale-medium font16 leading20 text-0E3823"><?php echo $first_address['link']['title']; ?></a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="col-3">
        <?php if(!empty($second_address)) :?>
                <?php if(!empty($second_address)) :?>
                    <div class="rale-normal font30 leading50 text-0E3823 dmb-25"><?php echo $second_address['title']; ?></div>
                <?php endif; ?>
                <?php if(!empty($second_address)) :?>
                    <div class="rale-medium font16 leading20 text-0E3823 dmb-10"><?php echo $second_address['address']; ?></div>
                <?php endif; ?>
                <?php if(!empty($second_address)) :?>
                    <a href="<?php echo $second_address['link']['url'];?>" class="rale-medium font16 leading20 text-0E3823"><?php echo $second_address['link']['title']; ?></a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="col-4">
          <div class="d-flex justify-content-end">
            <div class="footer-link-group">
                <?php if(!empty($footer_links)) : foreach($footer_links as $footer_links_data) :
                    $link = $footer_links_data['link'];
                ?>
                    <a href="<?php echo $link['url']; ?>" class="rale-medium font16 leading20 text-0E3823 d-flex dmb-20 "><?php echo $link['title']; ?></a>
                 <?php endforeach; endif; ?>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="d-flex justify-content-end">
                 <?php if(!empty($social_links)) : foreach($social_links as $social_links_data) :
                    $image = $social_links_data['image'];
                    $link = $social_links_data['link'];
                ?>
                    <a href="<?php echo $link; ?>"
                    class="footer-icon d-inline-flex justify-content-center align-items-center rounded-circle me-2"><img
                        src="<?php echo $image; ?>" alt=""></a>
                <?php endforeach; endif; ?>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between align-items-end">
        <div class="footer-logo">
            <img src="<?php echo $footer_logo['url']; ?>" class="h-100" alt="">
        </div>
        <div class="d-flex">
            <?php foreach($client_logo as $client_logo_data) : ?>
                <div class="client-logo">
                    <img src="<?php echo $client_logo_data['sizes']['medium'];  ?>" class="h-100" alt="">
                </div>
            <?php endforeach; ?>
        </div>
      </div>
      <div class="footer-line dmt-50 dmb-40"></div>
      <?php if(!empty($copyrights_footer)) :?>
      <div class="rale-medium font12 leading20 text-0E3823 pe-5 dmb-30 footer-description">
            <?php echo $copyrights_footer['description']; ?>
      </div>
      <div class="d-flex justify-content-between">
        <div class="rale-medium font12 leading20 text-0E3823 opacity70"><?php echo $copyrights_footer['content']; ?></div>
        <div class="rale-medium font12 leading20 text-0E3823 opacity70"><?php echo $copyrights_footer['developed_by']; ?></div>
      </div>
      <?php endif; ?>
    </div>
  </footer>