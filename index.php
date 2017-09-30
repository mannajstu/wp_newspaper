<?php get_header(); ?>

<div class="featured container">
    <div class="row">
        <div class="col-sm-8">
            <!-- Carousel -->
            <?php
            $args = array('post_type' => 'slider', 'posts_per_page' => 10);
            $loop = new WP_Query($args);
            ?>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <?php
                    global $redux_demo;
                    $sliders = $redux_demo['home-slider'];
                    echo $sliders['title'];
                    foreach ($sliders as $slider) :
                        ?>
                        <li data-target="#carousel-example-generic" data-slide-to="
                        <?php
                        $i = 0;
                        echo $i;
                        $i++;
                        ?>" class="active"></li>

                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">



                        <div class="item <?php echo $active; ?>">

                            <img src="<?php echo $slider['image']; ?>" />

                            <div class="header-text hidden-xs">
                                <div class="col-md-12 text-center">
                                    <h2><?php echo $slider['title']; ?> </h2>
                                    <br>
                                    <h3><?php echo $slider['description']; ?></h3>
                                    <br>
                                </div>
                            </div> 
                        </div>
                    <?php endforeach; ?>
                    <!--                   end slider-->
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div><!-- /carousel -->
        </div>
        <div class="col-sm-4" >
            <div id="owl-demo-1" class="owl-carousel">
                <img src="images/slide-2.jpg" />
                <img src="images/slide-1.jpg" />
                <img src="images/slide-3.jpg" />
            </div>
            <img src="images/banner.jpg" />
        </div>
    </div>
</div>

<!-- /////////////////////////////////////////Content -->
<div id="page-content" class="index-page container">

    <div class="row">
        <div id="main-content" class="col-md-12" ><!-- background not working -->
            <div class="col-md-6">
                <?php
                global $redux_demo;
                $the_feature_query = new WP_Query(array(
	                'cat' => $redux_demo['first_section'],
	                'posts_per_page' => 1
                ))
                ?>
<!--	            --><?php //         echo "<pre>";
//	            echo $the_feature_query->query->cat;
//	            var_dump($the_feature_query);
//	            echo "</pre>"; ?>



                <div class="box wrap-vid">

                        <div class="box-header header-natural">

                            <h2><?php $n=new WP_Query(array(
		                            'cat' => $redux_demo['first_section'],

	                            ));
	                            $row=mysqli_fetch_row($n);
	                            var_dump($row);
                                ?></h2>


                        </div>


	                <?php if ($the_feature_query->have_posts()) : $the_feature_query->the_post(); ?>
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
		            'cat' => $redux_demo['second_section'],
		            'posts_per_page' => 2
	            ))
	            ?>
                <div class="box">
                    <div class="box-header header-natural">
                        <h2></h2>
                    </div>
                    <div class="box-content">
                        <div class="row">
	                        <?php if ($the_top_news_category->have_posts()) : ?>
				            <?php while ($the_top_news_category->have_posts()) : $the_top_news_category->the_post(); ?>
                                <div class="col-md-6">
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" />
                                    <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3>
                                    <span> <i class="fa fa-calendar"></i> <?php echo get_the_date() ?> ></i> 1007</span>

                                    <p><?php $content=get_the_content();
		                                $content=wp_trim_words("$content",'20');
		                                echo $content; ?></p></div>
				            <?php endwhile;?>
	                        <?php endif; ?>
                        </div>
                    </div>
                </div>

	            <?php wp_reset_query(); ?>


	            <?php
	            $the_natural_category = new WP_Query(array(
		            'cat' => $redux_demo['third_section'],
		            'posts_per_page' => 2
	            ))
	            ?>
                <div class="box">
                    <div class="box-header header-natural">
                        <h2></h2>
                    </div>
                    <div class="box-content">
                        <div class="row">
	                        <?php while ($the_natural_category->have_posts())  : $the_natural_category->the_post(); ?>

                            <div class="col-md-6">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" />
                                <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3>
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

	                        <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
	        <?php wp_reset_query(); ?>



        <div id="sidebar" class="col-md-6">
            <div class="col-md-6">

                <!---- Start Widget ---->
                <div class="widget wid-new-post">
                    <div class="heading"><h4>New Posts</h4></div>
                    <div class="content">

		                    <?php
		                    $args = array( 'numberposts' => '5' );
		                    $recent_posts = wp_get_recent_posts($args);
		                    foreach( $recent_posts as $recent ){?>

<a href="<?php echo get_permalink($recent['ID'])?>">
                        <h6> <?php echo $recent['post_title']?></h6>
                                <p style="text-align: justify ; color:black"><?php $content=wp_trim_words("$recent[post_content]",'20');
                                    echo $content;
                                    ?></p> <ul class="list-inline">
                            <li style=" color:black"><i class="fa fa-calendar" ></i><?php echo get_the_date('',"$recent[ID]") ?></li>

                        </ul>
</a>



                        <?php }
		                    wp_reset_query();?>

                    </div>
                </div>
                <!---- Start Widget ---->

            </div>
	        <?php get_sidebar(); ?>
        </div>
    </div>
</div>
</div>

<?php get_footer(); ?>
	