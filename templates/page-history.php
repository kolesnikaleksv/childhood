<?php
/*
Template Name: history
*/
?>

<?php
  get_header();
?>

  <div class="aboutus">
    <div class="container">
      <h1 class="title"><?php the_field('our_history_title'); ?></h1>
      <div class="row">
        <div class="col-lg-6">
          <div class="subtitle">
            <?php the_field('our_history_subtitle'); ?>
          </div>
          <div class="aboutus__text">
            <?php the_field('our_history_description'); ?>
          </div>
        </div>
        <div class="col-lg-6">
          <?php 
            $image = get_field('our_history_image');
              if(!empty($image)):?>
              <img 
                src="<?php echo $image['url']; ?>" 
                alt="<?php echo $image['alt']; ?>"
                class="aboutus__img">
              <?php endif;
            ?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <?php
            $image = get_field('kind_image');
            if(!empty($image)): ?>
            <img 
              src="<?php echo $image['url']; ?>" 
              alt="<?php echo $image['alt']; ?>"
              class="aboutus__img">
              <?php endif;
          ?>
        </div>
        <div class="col-lg-6">
          <div class="subtitle">
            <?php the_field('kind_title'); ?>
          </div>
          <div class="aboutus__text">
           <?php the_field('kind_description'); ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="subtitle">
            <?php the_field('techno_title'); ?>
          </div>
          <div class="aboutus__text">
          <?php the_field('techno_description'); ?>
          </div>
        </div>
        <div class="col-lg-6">
          <?php
            $image = get_field('techno_image');
            if(!empty($image)): ?>
            <img 
              src="<?php echo $image['url']; ?>" 
              alt="<?php echo $image['alt']; ?>"
              class="aboutus__img">
              <?php endif;
              ?>
        </div>
      </div>
    </div>
  </div>

<?php
  get_footer();
?>