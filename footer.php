<!-- Footer Area End -->
<?php

$config = get_option('halim_options');

if($config['cta_switch']){

?>
<!-- CTA Area Start -->
<section class="cta">
  <div class="container">
    <div class="row">
      <div class="col-md-6 wow fadeInLeft">
        <h4><?php echo esc_html($config['cta_subtitle']);?><span><?php echo esc_html($config['cta_title']);?></span>
        </h4>
      </div>
      <div class="col-md-6 text-center wow fadeInRight">
        <a href="<?php echo esc_url($config['cta_btn_url']);?>" class="box-btn">
          <?php echo esc_html($config['cta_btn_txt']);?>
          <i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>
  </div>
</section>
<!-- CTA Area End -->
<?php } ?>

<footer class="footer-area pt-50 pb-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 wow fadeInUp">

        <div class="single-footer footer-logo">
          <?php dynamic_sidebar('footer_sidebar1');?>
        </div>

      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp">
        <div class="single-footer">
          <?php dynamic_sidebar('footer_sidebar2');?>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp">
        <div class="single-footer">
          <?php dynamic_sidebar('footer_sidebar3');?>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp">
        <div class="single-footer contact-box">
          <?php dynamic_sidebar('footer_sidebar4');?>
        </div>
      </div>
    </div>
    <div class="row copyright">
      <div class="col-md-6 wow fadeInUp">
        <p><?php echo $config['copyright_text']; ?> </p>
      </div>
      <div class="col-md-6 text-right wow fadeInUp">
        <ul>
          <?php
          
            if( $footer_socials = $config['copyright_social']){
             foreach($footer_socials as $footer_social){
        
          ?>
          <li><a href="<?php echo esc_url($footer_social['copyright_social_url']);?>"
              target="<?php echo esc_attr($config['copyroght_link_target']);?>"><i
                class="<?php echo esc_attr($footer_social['copyright_social_icon']);?>"></i></a></li>

          <?php } }?>


        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- Footer Area End -->

<?php wp_footer(); ?>
</body>


</html>