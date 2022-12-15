<?php
/*
Template Name: Home
*/
// Calling Header
get_header(); ?>

<!-- Slider Area Start -->
<section class="slider-area" id="home">
  <div class="slider owl-carousel">

    <?php 
    $args = array(
      'post_type' => 'sliders',
      'posts_per_page' => 3,
    );
    $query = new WP_Query($args);
    while($query->have_posts()){
      $query->the_post();
      
      $sub_heading = get_field('sub_heading');
      $btn_text = get_field('btn_text');
      $btn_link = get_field('btn_link');
   ?>
    <div class="single-slide" style="background-image:url('<?php the_post_thumbnail_url();?>)">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 wow fadeInUp">
            <div class="slide-table">
              <div class="slide-tablecell">
                <?php
                 if($sub_heading){
                  ?>
                <h4><?php echo $sub_heading; ?></h4>
                <?php } ?>
                <h2><?php the_title();?>
                </h2>
                <p><?php the_content();?></p>
                <?php
                 if($btn_text){
                  ?>
                <a href="<?php echo $btn_link; ?>" class="box-btn">
                  <?php echo $btn_text; ?> <i class="fa fa-angle-double-right"></i>
                </a>
                <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php 
    } 
    wp_reset_postdata();
    ?>

  </div>
</section>
<!-- Slider Area Start -->

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
  <div class="container">

    <?php
       $config = get_option('halim_options');
        if($config['about_sec_title']){
    ?>
    <div class="row section-title wow fadeInUp">
      <div class="col-md-6 text-right">
        <h3><span><?php echo $config['about_sec_subtitle'];?></span> <?php echo $config['about_sec_title'];?></h3>
      </div>
      <div class="col-md-6">
        <p><?php echo $config['about_sec_desc'];?></p>
      </div>
    </div>

    <?php } ?>

    <div class="row">
      <div class="col-md-7 wow fadeInLeft">
        <div class="about">
          <div class="page-title">
            <h4><?php echo $config['about_page_title'];?></h4>
          </div>
          <p><?php echo $config['about_page_desc'];?></p>
          <a href="<?php echo $config['about_sec_btn'];?>" class="box-btn">
            <?php echo esc_html__('read more', 'halim');?> <i class="fa fa-angle-double-right"></i>
          </a>
        </div>
      </div>
      <div class="col-md-5">
        <?php
         $about_features = $config['about_page_features'];
         if($about_features){
         foreach($about_features as $about_feature){
          ?>
        <div class="single_about wow zoomIn">
          <i class="<?php echo $about_feature['about_features_icon'];?>"></i>
          <h4><?php echo $about_feature['about_features_title'];?></h4>
          <p><?php echo $about_feature['about_features_desc'];?></p>
        </div>
        <?php } } ?>

      </div>
    </div>
  </div>
</section>
<!-- About Area End -->

<!-- Choose Area End -->
<section class="choose">
  <div class="container">
    <div class="row pt-100 pb-100">
      <div class="col-md-6">
        <div class="faq">
          <div class="page-title wow fadeInUp">
            <h4><?php echo esc_html_e('faq', 'halim')?></h4>
          </div>
          <div class="accordion" id="accordionExample">
            <?php 
            $about_accordians = $config['about_faq-list'];
            if( $about_accordians){
              $i = 0;
             foreach($about_accordians as $about_accordian){
              $i++;
              ?>
            <div class="card wow zoomIn">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse"
                    data-target="#collapse-<?php echo $i;?>" aria-expanded="true"
                    aria-controls="collapse-<?php echo $i;?>">
                    <?php echo $about_accordian['faq_title']?>
                  </button>

                </h5>
              </div>
              <div id="collapse-<?php echo $i;?>" class="collapse <?php if($i == 1){echo 'show';}?>"
                aria-labelledby="heading-<?php echo $i;?>" data-parent="#accordionExample">
                <div class="card-body">
                  <?php echo $about_accordian['faq_desc']?>
                </div>
              </div>
            </div>
            <?php } }?>


          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="skills">
          <div class="page-title wow fadeInUp">
            <h4><?php echo esc_html_e('our skills','halim')?></h4>
          </div>
          <?php
          
          $about_skills = $config['about_skill-list'];
          if( $about_skills){
            foreach($about_skills as $about_skill){
              ?>
          <div class="single-skill wow wow fadeInUp">
            <h4><?php echo $about_skill['skill_title']?></h4>
            <div class="progress-bar" role="progressbar" style="width: <?php echo $about_skill['skill_number']?>%;"
              aria-valuenow="<?php echo $about_skill['skill_number']?>"
              aria-valuemin="<?php echo $about_skill['skill_number']?>" aria-valuemax="100">
              <?php echo $about_skill['skill_number']?>%
            </div>
          </div>
          <?php } } ?>


        </div>
      </div>
    </div>
  </div>
</section>
<!-- Choose Area End -->

<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
  <div class="container">
    <?php
       $config = get_option('halim_options');
    ?>
    <div class="row section-title wow fadeInUp">
      <div class="col-md-6 text-right">

        <h3><span><?php echo $config['service_sec_subtitle'];?></span> <?php echo $config['service_sec_title'];?>
        </h3>
      </div>
      <div class="col-md-6">
        <p><?php echo $config['service_sec_desc'];?></p>
      </div>
    </div>
    <div class="row">
      <?php
      $args = array(
        'post_type' => 'services',
        'posts_per_page' => 6,
      );
      $query = new WP_Query($args);
      while($query->have_posts()){
        $query->the_post();
        
        $services_icon = get_field('service_icon');
      ?>

      <div class="col-lg-4 col-md-6 wow zoomIn">
        <!-- Single Service -->
        <div class="single-service">
          <i class="<?php echo $services_icon; ?>"></i>
          <h4> <?php the_title(); ?> </h4>
          <p><?php the_content(); ?></p>
        </div>
      </div>

      <?php 
      } 
      wp_reset_postdata();
      ?>

    </div>
  </div>
</section>
<!-- Services Area End -->

<!-- Counter Area Start -->
<?php 
  $conter_lists = $config['counter_list'];
  if($conter_lists){
?>
<section class="counter-area">
  <div class="container-fluid">
    <div class="row">
      <?php
       foreach($conter_lists as $conter_list){
       ?>
      <div class="col-md-3 wow zoomIn">
        <div class="single-counter">
          <h4><i class="<?php echo $conter_list['counter_icon'];?>"></i><span
              class="counter"><?php echo $conter_list['counter_number'];?></span><?php echo $conter_list['counter_title'];?></span>
          </h4>
        </div>
      </div>
      <?php }  } ?>
    </div>
  </div>
</section>
<!-- Counter Area End -->

<!-- Team Area Start -->
<section class="team-area pb-100 pt-100" id="team">
  <div class="container">
    <div class="row section-title wow fadeInUp">
      <div class="col-md-6 text-right">
        <?php
        $config = get_option('halim_options');
         ?>
        <h3><span> <?php echo $config['team_sec_subtitle'];?></span>
          <?php echo $config['team_sec_title'];?></h3>
      </div>
      <div class="col-md-6">
        <p> <?php echo $config['team_sec_desc'];?></p>
      </div>
    </div>
    <div class="row">
      <?php 
      $args = array(
        'post_type' => 'teams',
        'posts_per_page' => 3,
        'order_by' => 'menu_order',
        'order' => 'ASC',
      );
      $query = new WP_Query($args);
      while($query->have_posts()){
        $query->the_post();
        
        $team_facebook = get_field('team_facebook');
        $team_youtube = get_field('team_youtube');
        $team_linkdin = get_field('team_linkdin');
        $team_google = get_field('team_google');
        ?>

      <div class="col-md-4">
        <div class="single-team">
          <?php the_post_thumbnail(); ?>
          <div class="team-hover">
            <div class="team-content">
              <h4> <?php the_title(); ?><span><?php the_content(); ?></span>
              </h4>
              <ul>
                <?php
                if($team_facebook){
                  ?>
                <li><a href="<?php echo $team_facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                <?php 
                } 
                ?>

                <?php
                if($team_youtube){
                  ?>
                <li><a href="<?php echo $team_youtube; ?>"><i class="fa fa-youtube"></i></a></li>
                <?php 
                } 
                ?>

                <?php
                if($team_linkdin){
                  ?>
                <li><a href="<?php echo $team_linkdin; ?>"><i class="fa fa-linkedin"></i></a></li>
                <?php 
                } 
                ?>

                <?php
                if( $team_google){
                  ?>
                <li><a href="<?php echo  $team_google; ?>"><i class="fa fa-google-plus"></i></a></li>
                <?php 
                } 
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php }
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
<!-- Team Area End -->

<!-- Testimonials Area Start -->
<section class="testimonial-area pb-100 pt-100" id="testimonials">
  <div class="container">
    <div class="row section-title white-section wow fadeInUp ">
      <div class="col-md-6 text-right">
        <?php
        $config = get_option('halim_options');
        if($config['testimonial_sec_title']){
         ?>
        <h3><span>
            <?php echo $config['testimonial_sec_subtitle'];?>
          </span> <?php echo $config['testimonial_sec_title'];?></h3>
      </div>
      <div class="col-md-6">
        <p><?php echo $config['testimonial_sec_desc'];?></p>
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 wow fadeInUp">
        <div class="testimonials owl-carousel">
          <?php
          $args = array(
            'post_type' => 'testimonials',
            'posts_per_page' => 6,
          );
          $query = new WP_Query($args);
          while($query->have_posts()){
            $query->the_post();
            
            $name = get_field('name');
            $designation = get_field('designation');
            $description = get_field('description');
            ?>
          <div class="single-testimonial">
            <div class="testi-img">
              <?php the_post_thumbnail(); ?>
            </div>
            <p><?php echo $description ?></p>
            <h4> <?php echo $name ?> <span> <?php echo $designation ?></span></h4>
          </div>

          <?php  } wp_reset_postdata(); ?>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Testimonilas Area End -->

<!-- Latest News Area Start -->
<section class="blog-area pb-100 pt-100" id="blog">
  <div class="container">
    <div class="row section-title wow fadeInUp">
      <div class="col-md-6 text-right">
        <?php
        $config = get_option('halim_options');
        if($config['latest_sec_title']){
         ?>
        <h3><span><?php echo $config['latest_sec_subtitle'];?></span> <?php echo $config['latest_sec_title'];?></h3>
      </div>
      <div class="col-md-6">
        <p><?php echo $config['latest_sec_desc'];?></p>
      </div>

      <?php } ?>

    </div>
    <div class="row">

      <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
          );
          $query = new WP_Query($args);
          while($query->have_posts()){
            $query->the_post();
      ?>
      <div class="col-md-4 wow fadeInUp">
        <div class="single-blog">
          <?php the_post_thumbnail(); ?>
          <div class="post-content">
            <div class="post-title">
              <h4><a href="<?php the_permalink(); ?>"> <?php the_title();?></a>
              </h4>
            </div>
            <div class="pots-meta">
              <ul>
                <li><a href="#"> <?php echo get_the_date(); ?> </a>
                </li>
                <li><a href="#"><?php the_author(); ?> </a></li>
              </ul>
            </div>
            <p><?php the_excerpt(); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="box-btn">
              <?php echo esc_html_e('read more', 'halim')?> <i class="fa fa-angle-double-right"></i>
            </a>
          </div>
        </div>
      </div>

      <?php 
     } 
     wp_reset_postdata();
    ?>

    </div>
  </div>
</section>
<!-- Latest News Area End -->

<!-- Calling Footer -->

<?php get_footer(); ?>