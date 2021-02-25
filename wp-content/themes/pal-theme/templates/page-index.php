<?php
/*
 * Template Name: Index
 */
get_header(); ?>

<section class="content">
  <div class="container">
    <h1><?php the_field('headline'); ?></h1>
    <div class="video">
      <button class="video-btn" id="play_vimeo" title="Unmute video">
        <img src="<?php echo IMG; ?>/mute.svg" alt="">
      </button>
      <iframe class="video-player" id="video_vimeo" src="<?php the_field('video'); ?>?title=0&byline=0&portrait=0&sidedock=0&controls=0" width="800" height="450" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    </div>
    <a href="<?php the_field('cta'); ?>" class="btn btn-next">NEXT STEP</a>
  </div>
</section>

<?php get_footer();