<div <?php if (is_home()){echo "class='col-md-6'";} elseif (is_single()){echo "class='col-md-12'";}?>>
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
