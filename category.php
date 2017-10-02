<?php
/**
 * Template Name: Single Newspaper Page
 *
 * @package WordPress

 */
?>
<?php get_header(); ?>



<!-- /////////////////////////////////////////Content -->
<div id="page-content" class="index-page container"  >

	<div class="row">
		<div id="main-content" class="col-md-12" ><!-- background not working -->
			<div class="col-md-8">


				<?php
				$post_id= get_the_ID();
				$post_category=get_the_category($post_id);
				$post_category_id=$post_category[0]->cat_ID;
				$the_related_post = new WP_Query(array(
					'cat'=> $post_category_id,
					'posts_per_page'=> 4,
				))
				?>

				<div class="box">
					<div class="box-header header-natural">
						<h2><?php      $post_id= get_the_ID();
							echo get_the_category( $post_id )[0]->name;
							?></h2>
						<?php wp_reset_query(); ?>
					</div>
					<div class="box-content">
						<div class="row">
							<?php while ($the_related_post->have_posts()) : $the_related_post->the_post(); ?>

								<div class="col-md-6">
									<div class="zoom-container"><img src="<?php echo get_the_post_thumbnail_url() ?>" /></div>
									<h3><a href="<?php echo get_post_permalink() ?>"><?php echo get_the_title() ?></a></h3>
									<span> <i class="fa fa-calendar"></i> <?php echo get_the_date() ?>  </span>

									<p><?php $content=get_the_content();
										$content=wp_trim_words("$content",'20');
										echo $content; ?></p></div>
							<?php endwhile;?>
						</div>
					</div>
				</div>

				<?php wp_reset_query(); ?>



			</div>




			<div id="sidebar" class="col-md-4">



				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
