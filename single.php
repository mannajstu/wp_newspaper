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

				$the_single_post = new WP_Query(array(
					'p'=>get_the_ID(),
				))


				;
				?>




                <div class="box wrap-vid">
					<?php if ($the_single_post->have_posts()) : $the_single_post->the_post(); ?>
                        <div class="box-header header-natural">

                        </div>
                        <div class="zoom-container">
                            <div class="zoom-caption">

                                <a href="<?php echo get_the_permalink() ?>">
                                </a>

                            </div>
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" />
                        </div>
                        <h3 class="vid-name"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3>
                        <div class="info">
                            <h5>By <?php echo get_the_author() ?></h5>
                            <span><i class="fa fa-calendar"></i><?php echo get_the_date() ?></span>

                        </div>
                        <p class="more " style="text-align: justify"><?php echo get_the_content() ?></p>


					<?php endif; ?>
					<?php wp_reset_query(); ?>

                </div>

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
                        <h2><?php
							while($the_related_post->have_posts()) {
								$the_related_post->the_post();

								$category = get_the_category($the_related_post->the_post()->ID);
								echo $category[0]->cat_name;}

							?></h2>
                    </div>
                    <div class="box-content">
                        <div class="row">
							<?php while ($the_related_post->have_posts()) : $the_related_post->the_post(); ?>
                                <div class="col-md-6">
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" />
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
