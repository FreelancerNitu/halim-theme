<!-- Calling Header -->
<?php get_header();?>

<section class="breadcumb-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <?php get_template_part('inc/breadcumb'); ?>
      </div>
    </div>
  </div>
</section>

<section class="portfolio-single pt-100 pb-100">
  <div class="container">
    <div class="row">
      <div class="col-xl-8">
        <?php
        while(have_posts()){
          the_post();
          ?>
        <h2><?php the_title();?></h2>
        <?php the_post_thumbnail();?>
        <p><?php the_content();?></p>
        <?php } ?>

        <div class="row">
          <div class="col-xl-12">
            <h4><?php echo esc_html_e('project gallery', 'halim')?></h4>
          </div>
          <?php
             $project_gallery_one = get_field('project_gallery_one');
             $project_gallery_two = get_field('project_gallery_two');
            ?>
          <div class="col-xl-4">
            <?php
            if($project_gallery_one && $project_gallery_two){
              ?>
            <div class="project-gallery">
              <img src="<?php echo $project_gallery_one['url'];?>" alt="<?php the_title();?>">
              <img src="<?php echo $project_gallery_two['url'];?>" alt="<?php the_title();?>">
            </div>
            <?php }else{
              echo '<p>Images Not Found</p>';
            } ?>
          </div>
          <?php  ?>


        </div>
      </div>
      <div class="col-xl-4">
        <div class="portfolio-sidebar">
          <?php
            $technology_lists = get_field('technology_used');
            if($technology_lists){
              ?>
          <h4><?php echo esc_html_e('Technology Used', 'halim')?></h4>
          <ul>
            <?php
            foreach($technology_lists as $technology_list){
              ?>
            <li><i class="fa fa-arrow-right"></i>
              <?php echo $technology_list; ?>
            </li>
            <?php } ?>

          </ul>
          <?php } ?>

        </div>
        <div class="portfolio-sidebar">
          <?php
            $project_features = get_field('project_features');
            if($project_features){
              ?>
          <h4><?php echo esc_html_e('Project Features', 'halim');?></h4>
          <ul>
            <?php
            foreach($project_features as $project_feature){
              ?>
            <li><i class="fa fa-arrow-right"></i>
              <?php echo $project_feature; ?>
            </li>
            <?php } ?>

          </ul>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Calling Footer -->
<?php get_footer();?>