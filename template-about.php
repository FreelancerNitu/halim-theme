<?php
/*
 Template Name: About Us
*/
// Calling Header
get_header();

?>
<section class="breadcumb-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <?php get_template_part('inc/breadcumb');?>
      </div>
    </div>
  </div>
</section>

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="about">
          <?php
            $config = get_option('halim_options');
          ?>
          <div class="page-title">
            <h4><?php echo $config['about_page_title'];?></h4>
          </div>
          <p><?php echo $config['about_page_desc'];?></p>
        </div>
      </div>
      <div class="col-md-5">
        <?php
         $about_features = $config['about_page_features'];
         foreach($about_features as $about_feature){
          ?>
        <div class="single_about">
          <i class="<?php echo esc_html($about_feature['about_features_icon']);?>"></i>
          <h4><?php echo esc_html($about_feature['about_features_title']);?></h4>
          <p><?php echo esc_html($about_feature['about_features_desc']);?></p>
        </div>

        <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- Calling Footer -->
<?php get_footer();?>