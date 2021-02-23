<?php
/*
 * Template Name: Index
 */
get_header(); ?>

<section class="content">
  <div class="container">
    <?php the_content(); ?>
    <img src="<?php echo IMG; ?>/babulia.jpg" class="babulia">
    <a href="#" class="btn">NEXT STEP</a>
  </div>
</section>

<?php get_footer();