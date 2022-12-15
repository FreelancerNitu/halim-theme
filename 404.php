<!-- Calling Header -->
<?php get_header(); ?>

<section class="breadcumb-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="breadcumb">
          <h4 class="page-title">
            <?php esc_html_e('404 Not Found', 'halim');?>
          </h4>
          <ul>
            <li><a href="<?php echo esc_url(home_url());?>"> <?php esc_html_e('Home', 'halim');?></a></li> /
            <li>404</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-404 pt-100 pb-100">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="page-404-content">
          <h4><?php esc_html_e('404 Error - Sorry Not Found!', 'halim');?></h4>
          <h1><?php esc_html_e('Looks Like Something was wrong', 'halim');?></h1>
          <div class="error_search">
            <?php get_search_form(); ?>
          </div>
          <a href="<?php echo home_url(); ?>" class="homepage"><?php echo esc_html_e('Homepage', 'nitu121');?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Calling Footer -->
<?php get_footer(); ?>