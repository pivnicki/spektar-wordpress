<?php
/*
Template Name: Page Blog
*/
 
get_header(); 
?>
<div class="text-center container top30">
  <h2>Blog</h2><br> 
  <div class="line-holder">
    <div class="the-line">
    </div>
  </div>
  <?php 
      $the_band = new WP_Query(array( 
       'posts_per_page' => 3, 
       )); 
      while ( $the_band->have_posts() ) : 
      $the_band->the_post();
     ?>
     <div class="col-sm-4">
      <div class="thumbnail">
      <a class="active-link" href="<?php the_permalink();?>">
      <?php the_post_thumbnail('thumbnail',['class' => 'img-circle' ]);?> 
      </a>
      <br>
          <a class="btn" href="<?php the_permalink();?>">Vise</a>
        </div>
      
    </div>
    <?php endwhile; ?>
</div>

<?php 
get_footer();
?>