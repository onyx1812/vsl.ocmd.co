<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="keywords" content="<?php bloginfo('keywords'); ?>"/>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <meta name="copyright" content="<?php bloginfo('copyright'); ?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 user-scalable=0">
    <meta name="author" content="MaxGloba">
    <meta name="theme-color" content="#ffffff">

    <title><?php echo get_bloginfo('name'); ?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico?v=1.00" />

    <script>
      const vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);
      const pageID = <?php echo get_the_ID(); ?>;
    </script>

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js'
    );
      fbq('init', '2456495754645366');
      fbq('init', '3443645445747695');
      fbq('init', '767835227441749');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2456495754645366&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >

    <header class="main-header">
      <div class="container">
        <a target="_blank" href="https://ocmd.co" title="OCMD"><img src="<?php echo IMG.'/logo.svg'; ?>" alt="" class="logo logo-post" width="160px"></a>
      </div>
    </header>