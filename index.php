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
        <div id="main-content"><!-- background not working -->
            <div class="col-md-6">
                <?php
                global $redux_demo;
                $the_feature_query = new WP_Query(array(
                    'cat' => $redux_demo['feature_category'],
                    'posts_per_page ' => 1
                        ))


                ;
                ?>




                <div class="box wrap-vid">
                    <?php if ($the_feature_query->have_posts()) : $the_feature_query->the_post(); ?>
                        <div class="box-header header-natural">
                            <h2><?php
                                global $post;
                                $category = get_the_category($post->ID);
                                echo $category[0]->cat_name;
                                ?></h2>
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

	                        ?></h2></h2>
                    </div>
                    <div class="box-content">
                        <div class="row">
	                        <?php while ($the_natural_category->have_posts()) : $the_natural_category->the_post(); ?>
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
            </div>
        </div>
        <div id="sidebar">
            <div class="col-md-3">
                <!---- Start Widget ---->
                <div class="widget wid-vid">
                    <div class="heading">
                        <h4>Videos</h4>
                    </div>
                    <div class="content">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#most">Most Plays</a></li>
                            <li><a data-toggle="tab" href="#popular">Popular</a></li>
                            <li><a data-toggle="tab" href="#random">Random</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="most" class="tab-pane fade in active">
                                <div class="post wrap-vid">
                                    <div class="zoom-container">
                                        <div class="zoom-caption">
                                            <span class="youtube">Youtube</span>
                                            <a href="single.html">
                                                <i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
                                            </a>
                                            <p>Video's Name</p>
                                        </div>
                                        <img src="images/4.jpg" />
                                    </div>
                                    <div class="wrapper">
                                        <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                        <div class="info">
                                            <h6>By <a href="#">Kelvin</a></h6>
                                            <span><i class="fa fa-heart"></i>1,200 / <i class="fa fa-calendar"></i>25/3/2015</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post wrap-vid">
                                    <div class="zoom-container">
                                        <div class="zoom-caption">
                                            <span class="vimeo">Vimeo</span>
                                            <a href="single.html">
                                                <i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
                                            </a>
                                            <p>Video's Name</p>
                                        </div>
                                        <img src="images/4.jpg" />
                                    </div>
                                    <div class="wrapper">
                                        <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                        <div class="info">
                                            <h6>By <a href="#">Kelvin</a></h6>
                                            <span><i class="fa fa-heart"></i>1,200 / <i class="fa fa-calendar"></i>25/3/2015</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post wrap-vid">
                                    <div class="zoom-container">
                                        <div class="zoom-caption">
                                            <span class="youtube">Youtube</span>
                                            <a href="single.html">
                                                <i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
                                            </a>
                                            <p>Video's Name</p>
                                        </div>
                                        <img src="images/4.jpg" />
                                    </div>
                                    <div class="wrapper">
                                        <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                        <div class="info">
                                            <h6>By <a href="#">Kelvin</a></h6>
                                            <span><i class="fa fa-heart"></i>1,200 / <i class="fa fa-calendar"></i>25/3/2015</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="popular" class="tab-pane fade">
                                <div class="post wrap-vid">
                                    <div class="zoom-container">
                                        <div class="zoom-caption">
                                            <span class="youtube">Youtube</span>
                                            <a href="single.html">
                                                <i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
                                            </a>
                                            <p>Video's Name</p>
                                        </div>
                                        <img src="images/4.jpg" />
                                    </div>
                                    <div class="wrapper">
                                        <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                        <div class="info">
                                            <h6>By <a href="#">Kelvin</a></h6>
                                            <span><i class="fa fa-heart"></i>1,200 / <i class="fa fa-calendar"></i>25/3/2015</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post wrap-vid">
                                    <div class="zoom-container">
                                        <div class="zoom-caption">
                                            <span class="youtube">Youtube</span>
                                            <a href="single.html">
                                                <i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
                                            </a>
                                            <p>Video's Name</p>
                                        </div>
                                        <img src="images/4.jpg" />
                                    </div>
                                    <div class="wrapper">
                                        <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                        <div class="info">
                                            <h6>By <a href="#">Kelvin</a></h6>
                                            <span><i class="fa fa-heart"></i>1,200 / <i class="fa fa-calendar"></i>25/3/2015</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post wrap-vid">
                                    <div class="zoom-container">
                                        <div class="zoom-caption">
                                            <span class="vimeo">Vimeo</span>
                                            <a href="single.html">
                                                <i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
                                            </a>
                                            <p>Video's Name</p>
                                        </div>
                                        <img src="images/4.jpg" />
                                    </div>
                                    <div class="wrapper">
                                        <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                        <div class="info">
                                            <h6>By <a href="#">Kelvin</a></h6>
                                            <span><i class="fa fa-heart"></i>1,200 / <i class="fa fa-calendar"></i>25/3/2015</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="random" class="tab-pane fade">
                                <div class="post wrap-vid">
                                    <div class="zoom-container">
                                        <div class="zoom-caption">
                                            <span class="vimeo">Vimeo</span>
                                            <a href="single.html">
                                                <i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
                                            </a>
                                            <p>Video's Name</p>
                                        </div>
                                        <img src="images/4.jpg" />
                                    </div>
                                    <div class="wrapper">
                                        <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                        <div class="info">
                                            <h6>By <a href="#">Kelvin</a></h6>
                                            <span><i class="fa fa-heart"></i>1,200 / <i class="fa fa-calendar"></i>25/3/2015</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post wrap-vid">
                                    <div class="zoom-container">
                                        <div class="zoom-caption">
                                            <span class="vimeo">Vimeo</span>
                                            <a href="single.html">
                                                <i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
                                            </a>
                                            <p>Video's Name</p>
                                        </div>
                                        <img src="images/4.jpg" />
                                    </div>
                                    <div class="wrapper">
                                        <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                        <div class="info">
                                            <h6>By <a href="#">Kelvin</a></h6>
                                            <span><i class="fa fa-heart"></i>1,200 / <i class="fa fa-calendar"></i>25/3/2015</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post wrap-vid">
                                    <div class="zoom-container">
                                        <div class="zoom-caption">
                                            <span class="vimeo">Vimeo</span>
                                            <a href="single.html">
                                                <i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
                                            </a>
                                            <p>Video's Name</p>
                                        </div>
                                        <img src="images/4.jpg" />
                                    </div>
                                    <div class="wrapper">
                                        <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                        <div class="info">
                                            <h6>By <a href="#">Kelvin</a></h6>
                                            <span><i class="fa fa-heart"></i>1,200 / <i class="fa fa-calendar"></i>25/3/2015</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---- Start Widget ---->
                <div class="widget wid-gallery">
                    <div class="heading"><h4>Gallery</h4></div>
                    <div class="content">
                        <div class="col-md-4">
                            <div class="row">
                                <a href="#"><img src="images/14.jpg" /></a>
                                <a href="#"><img src="images/15.jpg" /></a>
                                <a href="#"><img src="images/20.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <a href="#"><img src="images/16.jpg" /></a>
                                <a href="#"><img src="images/17.jpg" /></a>
                                <a href="#"><img src="images/21.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <a href="#"><img src="images/18.jpg" /></a>
                                <a href="#"><img src="images/19.jpg" /></a>
                                <a href="#"><img src="images/14.jpg" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!---- Start Widget ---->
                <div class="widget wid-new-post">
                    <div class="heading"><h4>New Posts</h4></div>
                    <div class="content">
                        <h6>Lorem Ipsum is simply dummy</h6>
                        <img src="images/22.jpg" />
                        <ul class="list-inline">
                            <li><i class="fa fa-calendar"></i>25/3/2015</li> 
                            <li><i class="fa fa-comments"></i>1,200</li>
                        </ul>
                        <p>Title should not overflow the content area A few things to check for: Non-breaking text in the...</p>
                        <h6>Lorem Ipsum is simply dummy</h6>
                        <img src="images/23.jpg" />
                        <ul class="list-inline">
                            <li><i class="fa fa-calendar"></i>25/3/2015</li> 
                            <li><i class="fa fa-comments"></i>1,200</li>
                        </ul>
                        <p>Title should not overflow the content area A few things to check for: Non-breaking text in the...</p>
                        <h6>Lorem Ipsum is simply dummy</h6>
                        <img src="images/24.jpg" />
                        <ul class="list-inline">
                            <li><i class="fa fa-calendar"></i>25/3/2015</li> 
                            <li><i class="fa fa-comments"></i>1,200</li>
                        </ul>
                        <p>Title should not overflow the content area A few things to check for: Non-breaking text in the...</p>
                    </div>
                </div>
                <!---- Start Widget ---->
                <div class="widget wid-recent-post">
                    <div class="heading"><h4>Recent Posts</h4></div>
                    <div class="content">
                        <span>Creativity is about the journey <a href="#">your mind takes</a></span>
                        <span>About the journey <a href="#">your mind</a></span>
                        <span>The journey <a href="#">your</a></span>
                        <span>Journey is about the journey <a href="#">your mind mind</a></span>
                        <span>Creativity is about the journey <a href="#">your mind takes</a></span>
                        <span>About the journey <a href="#">your mind</a></span>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!---- Start Widget ---->
                <div class="widget wid-tags">
                    <div class="heading"><h4>Search</h4></div>
                    <div class="content">
                        <form role="form" class="form-horizontal" method="post" action="">
                            <input type="text" placeholder="Enter Search Keywords" value="" name="v_search" id="v_search" class="form-control">
                        </form>
                    </div>
                </div>
                <!---- Start Widget ---->
                <div class="widget wid-tags">
                    <div class="heading"><h4>Tags</h4></div>
                    <div class="content">
                        <a href="#">animals</a>
                        <a href="#">cooking</a>
                        <a href="#">countries</a>
                        <a href="#">home</a>
                        <a href="#">likes</a>
                        <a href="#">photo</a>
                        <a href="#">link</a>
                        <a href="#">video</a>
                        <a href="#">travel</a>
                        <a href="#">images</a>
                        <a href="#">love</a>
                        <a href="#">lists</a>
                        <a href="#">makeup</a>
                        <a href="#">media</a>
                        <a href="#">password</a>
                        <a href="#">pagination</a>
                        <a href="#">pictures</a>
                    </div>
                </div>
                <!---- Start Widget ---->
                <div class="widget wid-comment">
                    <div class="heading"><h4>Top Comments</h4></div>
                    <div class="content">
                        <div class="post">
                            <a href="single.html">
                                <img src="images/ava-1.jpg" class="img-circle"/>
                            </a>
                            <div class="wrapper">
                                <a href="#"><h5>Curabitur tincidunt porta lorem.</h5></a>
                                <ul class="list-inline">
                                    <li><i class="fa fa-calendar"></i>25/3/2015</li> 
                                    <li><i class="fa fa-thumbs-up"></i>1,200</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post">
                            <a href="single.html">
                                <img src="images/ava-2.png" class="img-circle"/>
                            </a>
                            <div class="wrapper">
                                <a href="#"><h5>Curabitur tincidunt porta lorem.</h5></a>
                                <ul class="list-inline">
                                    <li><i class="fa fa-calendar"></i>25/3/2015</li> 
                                    <li><i class="fa fa-thumbs-up"></i>1,200</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post">
                            <a href="single.html">
                                <img src="images/ava-3.jpeg" class="img-circle"/>
                            </a>
                            <div class="wrapper">
                                <a href="#"><h5>Curabitur tincidunt porta lorem.</h5></a>
                                <ul class="list-inline">
                                    <li><i class="fa fa-calendar"></i>25/3/2015</li> 
                                    <li><i class="fa fa-thumbs-up"></i>1,200</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post">
                            <a href="single.html">
                                <img src="images/ava-4.jpg" class="img-circle"/>
                            </a>
                            <div class="wrapper">
                                <a href="#"><h5>Curabitur tincidunt porta lorem.</h5></a>
                                <ul class="list-inline">
                                    <li><i class="fa fa-calendar"></i>25/3/2015</li> 
                                    <li><i class="fa fa-thumbs-up"></i>1,200</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!---- Start Widget ---->
                <div class="widget wid-banner">
                    <div class="content">
                        <img src="images/banner-2.jpg" class="img-responsive"/>
                    </div>
                </div>
                <!---- Start Widget ---->
                <div class="widget wid-categoty">
                    <div class="heading"><h4>Category</h4></div>
                    <div class="content">
                        <select class="col-md-12">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                </div>
                <!---- Start Widget ---->
                <div class="widget wid-calendar">
                    <div class="heading"><h4>Calendar</h4></div>
                    <div class="content">
                        <center><form action="" role="form">        
                                <div class="">
                                    <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">                </div>
                                    <input type="hidden" id="dtp_input2" value="" /><br/>
                                </div>
                            </form></center>
                    </div>
                </div>
                <!---- Start Widget ---->
                <div class="widget wid-tweet">
                    <div class="heading"><h4>Tweet</h4></div>
                    <div class="content">
                        <div class="tweet-item">
                            <p><i class="fa fa-twitter"></i> TLAS - Coming Soon PSD Mockup</p>
                            <a>https://t.co/dLsNZYGVbJ</a>
                            <a>#psd</a>
                            <a>#freebie</a>
                            <a>#freebie</a>
                            <a>#dribbble</a>
                            <span>July 15th, 2015</span>
                        </div>
                        <div class="tweet-item">
                            <p><i class="fa fa-twitter"></i> Little Dude Character With Multiple Hairs</p>
                            <a>https://t.co/dLsNZYGVbJ</a>
                            <a>#freebie</a>
                            <a>#design</a>
                            <a>#illustrator</a>
                            <a>#dribbble</a>
                            <span>June 23rd, 2015</span>
                        </div>
                        <div class="tweet-item">
                            <p><i class="fa fa-twitter"></i> Newsletter Subscription Form Mockup</p>
                            <a>https://t.co/dLsNZYGVbJ</a>
                            <a>#psd</a>
                            <a>#freebie</a>
                            <a>#freebie</a>
                            <a>#dribbble</a>
                            <span>June 22nd, 2015</span>
                        </div>
                        <p>Marshall, Will, and Holly on a routine expedition, met the greatest earthquake ever known. High on the rapids, it struck their tiny raft...</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
	