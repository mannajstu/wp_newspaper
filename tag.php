<?php
/**
 * Template Name: Single Newspaper Page
 *
 * @package WordPress

 */
?>
<?php get_header(); ?>



<!-- /////////////////////////////////////////Content -->
<div id="page-content" class="featured container" >

	<div class="row">
		<div id="main-content" class="col-md-12" ><!-- background not working -->
			<div class="col-md-8">



				<?php

				$post_tags = get_the_tags();

				if ( $post_tags ) {
					foreach( $post_tags as $tag ) {
						echo $tag->name. ', ';
					}
				}?>


            </div>




			<div id="sidebar" class="col-md-4">



				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
