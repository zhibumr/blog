@extends("home.menu")

@section('title')
	博客
@endsection
@section('script')
@parent
	<script type="text/javascript" src="js/contact_form.js"></script>
@endsection


@section('content')
	<div id="content">
		<h1 align="center">博客主页</h1>
		
		<div class="hr"></div>
		
		<!-- FOOTER -->
		<div id="footer_widget_area">
			<!-- FIRST FOOTER AREA / POPULAR POSTS -->
			<div id="first">
				<h3>个人博客</h3>	
				
				<ul class="posts_list">
					<li>
						<p class="posts_list_pic">
							<a href="post.html"><img src="images/post-tn1.jpg" alt="" /></a>
						</p>
						
						<p class="posts_list_excerpt">
							<a href="post.html"><strong>Praesent vitae velit convallis</strong></a>
							<br />February 22, 2012
						</p>
					</li>
						
					<li>
						<p class="posts_list_pic">
							<a href="post.html"><img src="images/post-tn1.jpg" alt="" /></a>
						</p>
						
						<p class="posts_list_excerpt">
							<a href="post.html"><strong>Lorem ipsum dolor sit amet</strong></a>
							<br />January 28, 2012
						</p>
					</li>

					<li>
						<p class="posts_list_pic">
							<a href="post.html"><img src="images/post-tn1.jpg" alt="" /></a>
						</p>
						
						<p class="posts_list_excerpt">
							<a href="post.html"><strong>Mauris nec velit tortor quis </strong></a>
							<br />March 14, 2012
						</p>
					</li>
				</ul>
			</div>
			<div id="first">
				<h3>转载博客</h3>	
				
				<ul class="posts_list">
					<li>
						<p class="posts_list_pic">
							<a href="post.html"><img src="images/post-tn1.jpg" alt="" /></a>
						</p>
						
						<p class="posts_list_excerpt">
							<a href="post.html"><strong>Praesent vitae velit convallis</strong></a>
							<br />February 22, 2012
						</p>
					</li>
						
					<li>
						<p class="posts_list_pic">
							<a href="post.html"><img src="images/post-tn1.jpg" alt="" /></a>
						</p>
						
						<p class="posts_list_excerpt">
							<a href="post.html"><strong>Lorem ipsum dolor sit amet</strong></a>
							<br />January 28, 2012
						</p>
					</li>

					<li>
						<p class="posts_list_pic">
							<a href="post.html"><img src="images/post-tn1.jpg" alt="" /></a>
						</p>
						
						<p class="posts_list_excerpt">
							<a href="post.html"><strong>Mauris nec velit tortor quis </strong></a>
							<br />March 14, 2012
						</p>
					</li>
				</ul>
			</div>

			
			<!-- SECOND FOOTER AREA / ARCHIVES -->
			<div id="second">
				<h3>Archives</h3>		
				
				<ul class="archives">
					<li><a href="#" title="March 2012">March 2012</a></li>
					<li><a href="#" title="February 2012">February 2012</a></li>
					<li><a href="#" title="January 2012">January 2012</a></li>
					<li><a href="#" title="December 2011">December 2011</a></li>
				</ul>					
			</div>
			
			<!-- THIRD FOOTER AREA / CONTACT FORM -->
			<div id="third">
				<h3>Contact Form</h3>		
			
				<form action="" id="contact_form" method="post">
				<ul class="contact_form">		
					<li><input type="text" id="ub_w_cf1" name="ub_w_cf_name" /><label>Name</label></li>
					<li><input type="text" id="ub_w_cf2" name="ub_w_cf_email" /><label>Email</label></li>
					<li><textarea id="ub_w_cf3" rows="" cols="" name="ub_w_cf_msg" class="required"></textarea></li>
					<li><input type="text" id="ub_w_cf4" name="ub_w_cf_captcha" class="required" maxlength="4" /><img src="captcha.php" id="captcha" alt="" /><label>Captcha</label></li>
					<li id="ub_w_cf_sbtn"><input class="send_button" type="submit" value="OK" /></li>		
				</ul>	
				</form>	
			</div>				
		</div>
	
	
	</div><!-- #content ends -->
@endsection
		
		