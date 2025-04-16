<?php

/*

  * Template Name: Homepage

  */

?>

<?php while (have_posts()) : the_post(); ?>

<div class="padding-top--100px">

</div>

<div class="container">
    <div class="row">
        <?php get_template_part('templates/parts/block-popup'); ?>
    </div>
</div>



<?php endwhile; ?>



