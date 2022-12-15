<?php get_header(); ?>
<section class="breadcumb-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="breadcumb">
          <?php
          while(have_posts()){
            the_post();
            ?>
          <h4><?php the_title();?></h4>
          <ul>
            <li><a href="<?php echo esc_url(home_url()); ?>">
                <?php esc_html_e('Home', 'halim')?>
              </a>
            </li>
            <li><?php the_title();?>
            </li>
          </ul>
          <?php } 
          wp_reset_postdata();
          ?>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="blog-single pt-100 pb-100">
  <div class="container">
    <div class="row">
      <div class="col-xl-8">

        <?php 
         while(have_posts()){
           the_post();
           get_template_part('template-parts/content');
          };
        ?>

      </div>
      <div class="col-xl-4">
        <?php dynamic_sidebar('main_sidebar')?>
      </div>
    </div>
  </div>
</section>
<!-- Calling main template footer -->
<?php get_footer();?>