<?php get_header();?>
 
  <body >
   <div class="container">
		<div class="row">
		<div class="col-xs-12 col-sm-12">
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
				 <?php the_content(); ?>
				 </article>
				 <!-- Post -->
				<?php
				}
				}
				?>
				</div><!-- /.blog-post -->
		</div>
		
	</div>
	</div>
	</div>
	 </div>
<!--/.fluid-container-->
<?php get_footer();?>