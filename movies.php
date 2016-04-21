<?php
require_once("header.php");
?>
			<div class="clearfix"></div>
			<div class="main-content">		
				<div class="col-md-9 total-news">
					<div class="slider">
						<script src="./js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  $("#conference-slider").responsiveSlides({
								auto: true,
								manualControls: '#slider3-pager',
							  });
							});
						</script>
						 <div class="conference-slider">
							<!-- Slideshow 3 -->
							<ul class="conference-rslide" id="conference-slider">
							  <li><img src="./images/m3.jpg" alt=""></li>
							  <li><img src="./images/m2.jpg" alt=""></li>
							  <li><img src="./images/m1.jpg" alt=""></li>
							  <li><img src="./images/m4.jpg" alt=""></li>
							</ul>
							<!-- Slideshow 3 Pager -->
							<ul id="slider3-pager">
							  <li><a href="#"><img src="./images/m3.jpg" alt=""></a></li>
							  <li><a href="#"><img src="./images/m2.jpg" alt=""></a></li>
							  <li><a href="#"><img src="./images/m1.jpg" alt=""></a></li>
							  <li><a href="#"><img src="./images/m4.jpg" alt=""></a></li>
							</ul>
							<div class="breaking-news-title">
								<p>Lorem ipsum dolor sit amet, consectetur Nulla quis lorem neque, mattis venenatis lectus. </p>
							</div>
						</div> 
						<h5 class="breaking">Breaking news</h5>
					</div>	
				<div class="posts">
					<div class="mright-posts">
						<div class="desk-grid">
							<h3>FROM   THE   desk</h3>
							<div class="desk">
								<a href="#" class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit </a>
								<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
								<p><a href="single.html">Read More</a><span>3 hours ago</span></p>
							</div>
							<div class="desk">
								<a href="#" class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit </a>
								<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
								<p><a href="single.html">Read More</a><span>3 hours ago</span></p>
							</div>
							<div class="desk">
								<a href="#" class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit </a>
								<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
								<p><a href="single.html">Read More</a><span>3 hours ago</span></p>
							</div>
							<a class="more" href="#">More  +</a>
						</div>
						<div class="editorial">
							<h3>editorial</h3>
							<div class="editor">
								<a href="single.html"><img src="./images/e1.jpg" alt="" /></a>
								<a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
							</div>
							<div class="editor">
								<a href="single.html"><img src="./images/e2.jpg" alt="" /></a>
								<a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
							</div>
							<div class="editor">
								<a href="single.html"><img src="./images/e1.jpg" alt="" /></a>
								<a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
							</div>
							<div class="editor">
								<a href="single.html"><img src="./images/e3.jpg" alt="" /></a>
								<a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
							</div>
						</div>
					</div>
					<div class="mleft-posts">
						<div class="mlatest-articles">
							<div class="main-title-head">
								<h3>latest    articles</h3>
								<a href="single.html">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
								<div class="world-news-grid">
									<a href="single.html"><img src="./images/ma1.jpg" alt="" /></a>
									<a href="#" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="single.html">Read More</a>
								</div>
								<div class="world-news-grid">
									<a href="single.html"><img src="./images/a2.jpg" alt="" /></a>
									<a href="#" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="single.html">Read More</a>
								</div>
								<div class="world-news-grid">
									<a href="single.html"><img src="./images/a3.jpg" alt="" /></a>
									<a href="#" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="single.html">Read More</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="world-news">
							<div class="main-title-head">
								<h3>from   around   the   world</h3>
								<a href="single.html">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
								<div class="world-news-grid">
									<a href="single.html"><img src="./images/n1.jpg" alt="" /></a>
									<a href="#" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="single.html">Read More</a>
								</div>
								<div class="world-news-grid">
									<a href="single.html"><img src="./images/n2.jpg" alt="" /></a>
									<a href="#" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="single.html">Read More</a>
								</div>
								<div class="world-news-grid">
									<a href="single.html"><img src="./images/n3.jpg" alt="" /></a>
									<a href="#" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="single.html">Read More</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="gallery">
							<div class="main-title-head">
								<h3>gallery</h3>
								<a href="single.html">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="gallery-images">
								<div class="course_demo1">
								  <ul id="flexiselDemo1">	
									 <li>
										<a href="single.html"><img src="./images/mg1.jpg" alt="" /></a>
									 </li>
									 <li>
										<a href="single.html"><img src="./images/mg2.jpg" alt="" /></a>
									  </li>	
									 <li>
										<a href="single.html"><img src="./images/mg3.jpg" alt="" /></a>
									 </li>	
									 <li>
										<a href="single.html"><img src="./images/mg4.jpg" alt="" /></a>
									 </li>	
								 </ul>
							 </div>
							 <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
								<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="./js/jquery.flexisel.js"></script>
						 </div>
						 <div class="course_demo1">
								  <ul id="flexiselDemo">	
									 <li>
										<a href="single.html"><img src="./images/mg7.jpg" alt="" /></a>
									 </li>
									 <li>
										<a href="single.html"><img src="./images/mg5.jpg" alt="" /></a>
									  </li>	
									 <li>
										<a href="single.html"><img src="./images/mg6.jpg" alt="" /></a>
									 </li>	
									 <li>
										<a href="single.html"><img src="./images/mg8.jpg" alt="" /></a>
									 </li>	
									 <li>
										<a href="single.html"><img src="./images/g2.jpg" alt="" /></a>
									 </li>	
								 </ul>
							 </div>
							 <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
								<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="./js/jquery.flexisel.js"></script>

							</div>
						<div class="tech-news">
							<div class="main-title-head">
								<h3>tech     news</h3>
								<a href="single.html">More  +</a>
								<div class="clearfix"></div>
							</div>	
							<div class="tech-news-grids">
								<div class="left-tech-news">
									<div class="tech-news-grid span_66">
										<a href="#">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...by <a href="#">John Doe </a>  |  29 comments</p>
									</div>
									<div class="tech-news-grid">
										<h4>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </h4>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...by <a href="#">John Doe </a>  |  29 comments</p>
									</div>
								</div>
								<div class="right-tech-news">
									<div class="tech-news-grid span_66">
										<a href="#">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...by <a href="#">John Doe </a>  |  29 comments</p>
									</div>
									<div class="tech-news-grid">
										<a href="#">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...by <a href="#">John Doe </a>  |  29 comments</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>	
				</div>
				</div>	
				<div class="col-md-3 side-bar">
				<div class="might">
				<h4>You might also like</h4>
				<div class="might-grid">
					<div class="grid-might">
						<a href="single.html"><img src="./images/mi.jpg" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply typesetting industry.</p> 
						<a href="single.html">Lorem Ipsum <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="might-grid">
					<div class="grid-might">
						<a href="single.html"><img src="./images/mi1.jpg" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply typesetting industry.</p> 
						<a href="single.html">Lorem Ipsum <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="might-grid">
					<div class="grid-might">
						<a href="single.html"><img src="./images/mi2.jpg" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply typesetting industry.</p> 
						<a href="single.html">Lorem Ipsum <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="might-grid">
					<div class="grid-might">
						<a href="single.html"><img src="./images/mi3.jpg" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply typesetting industry.</p> 
						<a href="single.html">Lorem Ipsum <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
			</div>
				<div class="featured">
							<h3>Featured Today in Movie Reviews</h3>
							<ul>
								<li>
									<a href="single.html"><img src="./images/f1.jpg" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="single.html"><img src="./images/f2.jpg" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="single.html"><img src="./images/f3.jpg" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="single.html"><img src="./images/f4.jpg" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="single.html"><img src="./images/f5.jpg" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="single.html"><img src="./images/f6.jpg" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<div class="clearfix"></div>
							</ul>
						</div>
						<div class="clearfix"></div>

					<div class="popular mpopular">
						<div class="main-title-head">
							<h5>popular</h5>
							<h4> Most    read</h4>
							<div class="clearfix"></div>
						</div>		
						<div class="popular-news">
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="#">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="#">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="#">Read More</a></p>
							</div>
							<a class="more" href="#">More  +</a>
						</div>
					</div>
					<div class="subscribe-now">
						<div class="discount">
							<a href="#">
								<div class="save">
									<p>Save</p>
									<p>upto</p>
								</div>
								<div class="percent">
									<h2>50%</h2>
								</div>
								<div class="clearfix"></div>
						</div>						
						<h3 class="sn">subscribe     now</h3>
							</a>
					</div>
					<div class="clearfix"></div>
					<div class="grid-top">
				<h4>Archives</h4>
				<ul>
					<li><a href="single.html">Lorem Ipsum is simply dummy text of the printing  industry. </a></li>
					<li><a href="single.html">Lorem Ipsum has been the industry's text ever since the 1500s</a></li>
					<li><a href="single.html">When an unknown printer took a galley scrambled it to make a type  </a> </li>
					<li><a href="single.html">It has survived not, but also the leap into electronic typesetting</a> </li>
					<li><a href="single.html">Letraset sheets containing Lorem Ipsum  with desktop publishing </a> </li>
					<li><a href="single.html">Software like Aldus versionsof Lorem Ipsum.</a> </li>
				</ul>
				</div>

				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="footer text-center">
				<div class="bottom-menu">
					<ul>                 
						<li><a href="index.html">World  News</a></li> |
						<li><a href="sports.html">Sports</a></li> |
						<li><a href="tech.html">Techology</a></li> |
						<li><a href="business.html">Business</a></li> |
						<li><a href="movies.php">Movies</a></li> |
						<li><a href="movies.php">Entertainment</a></li> |
						<li><a href="books.html">Books</a></li> |
						<li><a href="movies.php">Culture</a></li> |
						<li><a href="classifieds.html">Classifieds</a></li> |
						<li><a href="blog.html">Blogs</a></li>							
					</ul>
				</div>
				<div class="copyright text-center">
					<p>The News Reporter &copy; 2015 All rights reserved | Template by  <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>