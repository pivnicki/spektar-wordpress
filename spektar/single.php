<?php get_header();?>
 
  <body>
   <div class="container">
		<div class="row">
		<div class="col-xs-12">
		<div class="well" style="overflow:auto;">
			<h1 class="text-center text-uppercase  fw-800 ">
			<?php echo get_the_title();?>
			</h1>
		</div>
		</div>
		</div>
	 
    <div class="row">
		 <div class="well" style="overflow:auto;">
		
		 <div class="col-sm-12">
			<div class="blog-post">
           <?php if(have_posts()){
			 while(have_posts()){
				 the_post();
					 ?>
					 <!-- Post -->
				 <article class="col-sm-12">
				 <header> 
				 <span class="date"><?php the_time('d M Y G:i'); ?></span> 
				 <?php the_author(); ?></a></span>
				 </header>
				 <p class="image featured text-center">
				  <?php
				 if(has_post_thumbnail()){
					 the_post_thumbnail('medium');
					 }
					 ?>
				  </p>
				 <?php the_content();?>
				 <?php wp_link_pages();?>
				 <?php the_tags();?>
											
				 <?php comments_template();?>
				 </article>
				 <!-- Post -->
				<?php
				}
				}
				?></div><!-- /.blog-post -->
		</div>
		 
	</div>
	</div>
	</div>
	 </div>
<!--/.fluid-container-->
<?php get_footer();?>