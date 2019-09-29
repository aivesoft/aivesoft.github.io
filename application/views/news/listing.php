<!-- Outer Starts -->
		<div class="outer">
			
			
			<!-- Main content starts -->
	
			<div class="main-block">
				<div class="container">
					
					<!-- blog three -->
					<div class="blog-three">
						<div class="row">
							<!-- Mainbar column -->
							<div class="col-md-12">
							
								<!-- Blog item starts -->
								<div class="blog-three-item">
									<!-- blog three slider -->

									<!-- Carousel -->
										
									<!-- Bootstrap carousel usage 
										Bootstrap carousel should have id. Below i am using "bs-carousel-X". Where "X" denotes number". If a page has more than 1 carousel, then add the new carousel with the id "bs-carousel-1", "bs-carousel-2". You also need to update the id in, "carousel indicators" section and "carousel control" section.  
										
										Carousel comes with 3 main data attributes which you can customize. They are...
										data-interval - Time delay between item cycle. Default value "5000".
										data-pause - Pause on hover. Default value "pause".
										data-wrap - Continues cycle or stop at the end. Default value "true".
									-->
								
									<!-- Outer layer -->
									<div id="bs-carousel-1" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="hover" data-wrap="true">
										<!-- Bootstrap indicators. If you don't need indicators, remove the below section -->
										<ol class="carousel-indicators">
											<li data-target="#bs-carousel-1" data-slide-to="0" class="active"></li>
											<li data-target="#bs-carousel-1" data-slide-to="1"></li>
											<li data-target="#bs-carousel-1" data-slide-to="2"></li>
										</ol>
										<!-- Slides. You can also add captions -->
										<div class="carousel-inner">
											<!-- Item, First item should have extra class "active" -->
											<div class="item active">
												<!-- Image -->
												<img src="/assets/img/my_images/flowfly_promotion1.png" alt="">
											</div>
											<div class="item">
												<img src="/assets/img/my_images/flowfly_promotion2.png" alt="">
											</div>
											<div class="item">
												<img src="/assets/img/my_images/flowfly_promotion3.png" alt="">
											</div>
										</div>
										<!-- Carousel controls (arrows). If you don't need controls, remove the below section -->
										<a class="left carousel-control" href="#bs-carousel-1" role="button" data-slide="prev">
											<span class="fa fa-chevron-left"></span>
										</a>
										<a class="right carousel-control" href="#bs-carousel-1" role="button" data-slide="next">
											<span class="fa fa-chevron-right"></span>
										</a>
									</div>
									
									<!-- blog three Content -->
									<div class="blog-three-content">
										<!-- Heading -->
										<h3><a href="/games/view/flowfly">FlowFly Released!</a></h3>
										<!-- Blog meta -->
										<div class="blog-meta">
											<!-- Date -->
											<a href="#"><i class="fa fa-calendar"></i> &nbsp; 08/05/2016</a> &nbsp;
										</div>
										<!-- Paragraph -->
										<p>Avoid blocks! Collect coins! Unlock all Characters!</p>
									</div>
								</div>
								<!-- Blog item ends -->
								
								
								
								
								<!-- Pagination -->
								<?php if(isset($hidethis)) { ?>
								<ul class="pagination">
									<!-- List -->
									<li><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
								<?php } ?>
							</div>
							
						</div>
					</div>
									
				</div>
			</div>