<?php
/*
  Template Name: toys
*/
?>

<?php
  get_header();
?>

  <div class="toys">
    <div class="container">
      <h2 class="subtitle">М'які іграшки</h2>
      <div class="toys__wrapper">
        <?php 
          $posts = get_posts( [
            'numberposts' => -1,
            'category_name' => 'soft_toys',
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'post',
            'suppress_filters' => true,
          ] );

          foreach($posts as $post) {
            setup_postdata( $post ); ?>
              <div class="toys__item" style="background-image: url(<?php 
                if(has_post_thumbnail()) {
                 the_post_thumbnail_url();
                } else {
                  echo get_template_directory_uri() . '/assets/img/not-found.webp';
                }
              ?>)">
                <div class="toys__item-info">
                  <div class="toys__item-title"><?php the_title(); ?></div>
                  <div class="toys__item-descr">
                    <?php the_field('toy_card_description'); ?>
                  </div>
                  <div class="minibutton toys__trigger">Детальніше</div>
                </div>
              </div>
            <?php
          }
          wp_reset_postdata(); // reset $post
        ?>
      </div>


      <h2 class="subtitle">Развиваючі іграшки</h2>
      <div class="toys__wrapper">
        <?php 
          $posts = get_posts( [
            'numberposts' => -1,
            'category_name' => 'education_toys',
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'post',
            'suppress_filters' => true,
          ] );

          foreach($posts as $post) {
            setup_postdata( $post ); ?>
              <div class="toys__item" style="background-image: url(<?php the_field('toy_card_image');?>)">
                <div class="toys__item-info">
                  <div class="toys__item-title"><?php the_title(); ?></div>
                  <div class="toys__item-descr">
                    <?php the_field('toy_card_description'); ?>
                  </div>
                  <div class="minibutton toys__trigger">Детальніше</div>
                </div>
              </div>
            <?php
          }
          wp_reset_postdata(); // reset $post
        ?>
      </div>
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="toys__alert">
             <?php the_field('educational_toys_description'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php 
  get_footer();
?>