<!DOCTYPE html>
<html class="no-js" lang=" <?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body<?php body_class(); ?>>
  <?php
  wp_body_open();
  ?>
  <section class=" header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="header-left">

            <?php
             $config = get_option('halim_options');
            ?>
            <?php
            if($config['header_email']){
              ?>
            <a href="mailto:<?php echo esc_url($config['header_email']); ?>"><i class="fa fa-envelope"></i>
              <?php echo esc_html($config['header_email']); ?></a>
            <?php } ?>

            <?php
            if($config['header_phone']){
              ?>
            <a href="tel:<php echo $config['header_phone']; ?>"><i class="fa fa-phone"></i>
              <?php echo esc_url($config['header_phone']); ?></a>
            <?php } ?>

          </div>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
          <div class="header-social">
            <?php
              if( $header_icons = $config['header_icons']){
                foreach($header_icons as $header_icon){
            ?>
            <a href="<?php echo esc_url($header_icon['social_link']);?>"
              target="<?php echo esc_url($config['header_link_target']);?>"><i
                class=" <?php echo esc_attr($header_icon['social_icon']);?>"></i></a>
            <?php } }?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Header Area Start -->
  <header class="header header-fixed">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <nav class="navbar navbar-expand-md navbar-light">
            <?php
            if($logo = $config['logo']){
            ?>
            <a href="<?php echo esc_url(home_url());?>"><img src="<?php echo esc_url($logo['url']);?>"
                alt="<?php the_title(); ?>"></a>

            <?php } ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id="navbarNav">
              <?php 
              wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_class' => 'navbar-nav ml-auto',
              ));
              
              ?>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Header Area Start -->