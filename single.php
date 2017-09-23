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
				$the_top_news_category = new WP_Query(array(
					'cat' => $redux_demo['top_news_category'],
					'posts_per_page' => 2
				))
				?>
                <div class="box">
                    <div class="box-header header-natural">
                        <h2><?php
							while($the_top_news_category->have_posts()) {
								$the_top_news_category->the_post();

								$category = get_the_category($the_top_news_category->the_post()->ID);
								echo $category[0]->cat_name;}

							?></h2>
                    </div>
                    <div class="box-content">
                        <div class="row">
							<?php while ($the_top_news_category->have_posts()) : $the_top_news_category->the_post(); ?>
                                <div class="col-md-6">
                                    <img src="images/7.jpg" />
                                    <h3><a href="#"><?php echo get_the_title() ?></a></h3>
                                    <span><i class="fa fa-heart"></i> 1,200 / <i class="fa fa-calendar"></i> 25/3/2015 / <i class="fa fa-comment-o"> / </i> 3 <i class="fa fa-eye"></i> 1007</span>
                                    <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </span>
                                    <p>There once was a story about a man who could turn invisible. I thought it was only a story??? until it happened to me. Ok, so here???s how it works: there???s this stuff called...</p>
                                </div>
							<?php endwhile;?>
                        </div>
                    </div>
                </div>

				<?php wp_reset_query(); ?>


				<?php
				$the_natural_category = new WP_Query(array(
					'cat' => $redux_demo['natural_category'],
					'posts_per_page' => 2
				))
				?>
                <div class="box">
                    <div class="box-header header-natural">
                        <h2><?php
							while($the_natural_category->have_posts()) {
								$the_natural_category->the_post();

								$category = get_the_category($the_natural_category->the_post()->ID);
								echo $category[0]->cat_name;}

							?></h2>
                    </div>
                    <div class="box-content">
                        <div class="row">
							<?php while ($the_natural_category->have_posts()) : $the_natural_category->the_post(); ?>
                                <div class="col-md-6">
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" />
                                    <h3><a href="#"><?php echo get_the_title() ?></a></h3>
                                    <span><i class="fa fa-heart"></i> 1,200 / <i class="fa fa-calendar"></i> 25/3/2015 / <i class="fa fa-comment-o"> / </i> 3 <i class="fa fa-eye"></i> 1007</span>
                                    <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </span>
                                    <p>There once was a story about a man who could turn invisible. I thought it was only a story??? until it happened to me. Ok, so here???s how it works: there???s this stuff called...</p>
                                </div>
							<?php endwhile;?>
                        </div>
                    </div>
                </div>
            </div>




            <div id="sidebar" class="col-md-4">



				<?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
