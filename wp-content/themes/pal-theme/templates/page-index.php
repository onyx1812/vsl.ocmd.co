<?php
/*
 * Template Name: Index
 */
get_header(); ?>

<section class="content">
  <div class="container">
    <h1><?php the_field('headline'); ?></h1>
    <div class="video">
      <button class="video-btn" id="play" title="Unmute video">
        <img src="<?php echo IMG; ?>/mute.svg" alt="">
      </button>
      <video class="video-player" id="video" width="800" loop muted webkit-playsinline playsinline autoplay >
        <source src="<?php the_field('video'); ?>" type="video/mp4">
      </video>
    </div>
    <a href="<?php the_field('cta'); ?>" class="btn btn-next">NEXT STEP</a>
  </div>
</section>

<?php get_footer();