<div <?php if (is_front_page()||is_home()){echo "class='col-md-6'";} elseif (is_single()){echo "class='col-md-12'";}?>>
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
           <?php
           if(is_single()){ $posttags = get_the_tags();}
else{
	$posttags = get_tags();
}

            $count=0;
            if ($posttags) {
            foreach($posttags as $tag) {
            $count++;
            echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a> ';
            if( $count >10 ) break;
            }
            }?>
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
            <ol class="commentlist">
				<?php
				//Gather comments for a specific page/post
				$comments = get_comments(array(

					'status' => 'approve' //Change this to the type of comments to be displayed
				));

				//Display the list of comments
				wp_list_comments(array(
					'per_page' => 10, //Allow comment pagination
					'reverse_top_level' => false //Show the oldest comments at the top of the list
				), $comments);
				?>
            </ol>
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

			<select class="col-md-12" id="category">
				<?php
				$categories = get_categories( array(
					'orderby' => 'name',
					'order'   => 'ASC'
				) );
				echo '<option>'.'All Category'.'</option>';
				foreach( $categories as $category ) {

					echo '<option value="'.get_category_link( $category->term_id ).'">' .$category->name.'('. $category->count.')'.'</a>'. '</option> ';




				}
				?>
</select>
		</div>
	</div>
    <script>
        document.getElementById("category").onchange = function() {
            if (this.selectedIndex!==0) {
                window.location.href = this.value;
            }
        };
    </script>
	<!---- Start Widget ---->
	<div class="widget wid-calendar">
		<div class="heading"><h4>Calendar</h4></div>
		<div class="content">
			<?php get_calendar(true); ?>
		</div>
	</div>
	<!---- Start Widget ---->


</div>
