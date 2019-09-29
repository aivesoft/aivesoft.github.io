			
			<!-- Slider Starts -->
			
			<div class="slim-slider slim-outer">
			
					<!-- Carousel starts -->
					
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
								<!-- Caption -->
								<div class="carousel-caption c-middle-left">
									<!-- Heading -->
									<h4><a href="/games/view/flowfly">FlowFly</a></h4>
									<!-- Para -->
									<p>Avoid blocks! Collect coins! <br>Unlock all Characters!</p>
								</div>
							</div>
							<div class="item">
								<img src="/assets/img/my_images/flowfly_promotion2.png" alt="">
								<!-- Caption -->
								<div class="carousel-caption c-middle-left">
									<!-- Heading -->
									<h4><a href="/games/view/flowfly">FlowFly</a></h4>
									<!-- Para -->
									<p>Avoid blocks! Collect coins!</p>
								</div>
							</div>
							<div class="item">
								<img src="/assets/img/my_images/flowfly_promotion3.png" alt="">
								<!-- Caption -->
								<div class="carousel-caption c-middle-left">
									<!-- Heading -->
									<h4><a href="/games/view/flowfly">FlowFly</a></h4>
									<!-- Para -->
									<p>Unlock all Characters!</p>
								</div>
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
					
					<!-- Carousel ends -->
				
			</div>
			
			<!-- Home Ends -->
			
			
			
			
			
			
			
			
			
			<!-- Service Starts -->
			
			<div class="slim-service">
				<!-- Container -->
				<div class="container">
					<!-- Heading -->
					<div class="slim-heading">
						<h2>Our Games</h2>
						<a href="/games/listing" style="font-size:9pt;" class="pull-right">+all</a>
						<p>Enjoy!</p>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<!-- Service Item -->
							<div class="service-item">
								<a href="/games/view/flowfly"><img src="/assets/img/my_images/flowfly_icon.png" alt="" class="img-responsive" /></a>
								<h4>FlowFly</h4>
								<p>Avoid blocks! Collect coins! <br>Unlock all Characters!</p>
								<div>
									<a href="https://itunes.apple.com/kr/app/flowfly/id1111882280?mt=8" target="_blank">
			                            <img class="img-responsive app-download-image" src="/assets/img/my_images/app_download_link_apple.svg">
			                        </a>
			                        
			                        <a href="https://play.google.com/store/apps/details?id=com.aivesoft.FlowFly" target="_blank">
			                            <img class="img-responsive app-download-image" src="/assets/img/my_images/app_download_link_google.png">
			                        </a>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<!-- Service Item -->
							<div class="service-item">
								<a href="#"><img src="/assets/img/flat-icons/5.png" alt="" class="img-responsive" /></a>
								<h4>Second Game</h4>
								<p>Currently under development!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Service Ends -->
			
			
			
			
			
			
			
			
			
			<?php if(isset($hidethis)) { ?>
			
			
			
			
			
			
			
			
			<!-- Feature Starts -->
			
			<div class="slim-feature">
				<!-- Container -->
				<div class="container">
					<!-- Heading -->
					<div class="slim-heading">
						<h2>Features</h2>
						<p> The wise man therefore always holds in these matters to this principle of selection he rejects perspiciatis pleasures to secure.</p>
					</div>
					<!-- Feature Content -->
					<div class="feature-content">
						<ul class="list-unstyled">
							<li><a href="#">Mistaken denouncing pleasure voluptates autem pleasure pain complete</a></li>
							<li><a href="#">Deleniti atqueesrt corrupti voluptates autem quiblanditiis praesentium</a></li>
							<li><a href="#">Laborum etdolorum fugaeste voluptates autem quibusdam etaut officiis </a></li>
							<li><a href="#">Temporibus autem voluptates quibusdam autem voluptatibus maiores alias</a></li>
							<li><a href="#">Doloribus asperiores voluptates saepe eveniet voluptates repudiandae</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- Feature Ends -->
			
			
			
			
			
			
			<?php } ?>
			
			
			
			<!-- Blog Starts -->
			
			<div class="slim-blog" style="background:#fff">
				<!-- Container -->
				<div class="container">
					<!-- Heading -->
					<div class="slim-heading">
						<h2>News</h2>
						<a href="/news/listing" style="font-size:9pt;" class="pull-right">+all</a>
						<p>Meet our games firstly!</p>
					</div>
					<!-- Blog Item -->
					<div class="blog-item">
						<h4><a href="/news/view/1">FlowFly Released!</a></h4>
						<!-- Blog meta -->
						<div class="blog-meta">
							<!-- Meta Icons -->
							<i class="fa fa-calendar lblue"></i> 08/05/2016 &nbsp;
							<!-- 
							<i class="fa fa-user lblue"></i> User &nbsp;
							<i class="fa fa-folder-open lblue"></i> <a href="#">General</a> &nbsp;
							<i class="fa fa-comment lblue"></i> <a href="#">8 Comments</a>
							 -->
						</div>
						<a href="/news/view/1"><img src="/assets/img/my_images/flowfly_promotion1.png" alt="" class="img-responsive" /></a>
						<p>Avoid blocks! Collect coins! <br>Unlock all Characters!</p>
					</div>
				</div>
			</div>
			
			<!-- Blog Ends -->
			
			
			
			
			
			<?php if(isset($hidethis)) { ?>
			
			
			
			
			<!-- Gallery Starts -->
			
			<div class="slim-gallery">
				<div class="slim-outer">
					<!-- Container -->
					<div class="container">
						<!-- Heading -->
						<div class="slim-heading">
							<h2>Gallery</h2>
							<p> The wise man therefore always holds in these matters to this principle of selection he rejects perspiciatis pleasures to secure.</p>
						</div>
						<!-- Gallery Content -->
						<div class="gallery-content">
						
							<div class="row">
							
								<div class="col-md-4 col-sm-4">
									<div class="image-style-three gallery-item">
										<!-- Image -->
										<img class="img-responsive" src="/assets/img/gallery/small/1.jpg" alt="" />
										<!-- image hover style for image #3 -->
										<div class="image-hover bg-color">
											<!-- Image Caption -->
											<div class="image-caption">
												<!-- Heading -->
												<h4><a href="#">Some Heading</a></h4>
												<!-- Paragraph -->
												<p>Neque porro quisquam est qui dolorem.</p>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-4 col-sm-4">
									<div class="image-style-three gallery-item">
										<!-- Image -->
										<img class="img-responsive" src="/assets/img/gallery/small/2.jpg" alt="" />
										<!-- image hover style for image #3 -->
										<div class="image-hover bg-color">
											<!-- Image Caption -->
											<div class="image-caption">
												<!-- Heading -->
												<h4><a href="#">Some Heading</a></h4>
												<!-- Paragraph -->
												<p>Neque porro quisquam est qui dolorem.</p>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-4">
									<div class="image-style-three gallery-item">
										<!-- Image -->
										<img class="img-responsive" src="/assets/img/gallery/small/3.jpg" alt="" />
										<!-- image hover style for image #3 -->
										<div class="image-hover bg-color">
											<!-- Image Caption -->
											<div class="image-caption">
												<!-- Heading -->
												<h4><a href="#">Some Heading</a></h4>
												<!-- Paragraph -->
												<p>Neque porro quisquam est qui dolorem.</p>
											</div>
										</div>
									</div>
								</div>							
								
							</div>
							
							<div class="row">
							
								<div class="col-md-4 col-sm-4">
									<div class="image-style-three gallery-item">
										<!-- Image -->
										<img class="img-responsive" src="/assets/img/gallery/small/4.jpg" alt="" />
										<!-- image hover style for image #3 -->
										<div class="image-hover bg-color">
											<!-- Image Caption -->
											<div class="image-caption">
												<!-- Heading -->
												<h4><a href="#">Some Heading</a></h4>
												<!-- Paragraph -->
												<p>Neque porro quisquam est qui dolorem.</p>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-4 col-sm-4">
									<div class="image-style-three gallery-item">
										<!-- Image -->
										<img class="img-responsive" src="/assets/img/gallery/small/5.jpg" alt="" />
										<!-- image hover style for image #3 -->
										<div class="image-hover bg-color">
											<!-- Image Caption -->
											<div class="image-caption">
												<!-- Heading -->
												<h4><a href="#">Some Heading</a></h4>
												<!-- Paragraph -->
												<p>Neque porro quisquam est qui dolorem.</p>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-4">
									<div class="image-style-three gallery-item">
										<!-- Image -->
										<img class="img-responsive" src="/assets/img/gallery/small/6.jpg" alt="" />
										<!-- image hover style for image #3 -->
										<div class="image-hover bg-color">
											<!-- Image Caption -->
											<div class="image-caption">
												<!-- Heading -->
												<h4><a href="#">Some Heading</a></h4>
												<!-- Paragraph -->
												<p>Neque porro quisquam est qui dolorem.</p>
											</div>
										</div>
									</div>
								</div>							
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<!-- Gallery Ends -->
			
			<!-- FAQ Starts -->
			
			<div class="slim-faq">
				<!-- Container -->
				<div class="container">
					<!-- Heading -->
					<div class="slim-heading">
						<h2>FAQ</h2>
						<p> The wise man therefore always holds in these matters to this principle of selection he rejects perspiciatis pleasures to secure.</p>
					</div>
					<!-- FAQ Item -->
					<div class="faq-item">
						<span class="bg-color">01</span>
						<!-- FAQ Content -->
						<div class="faq-content">
							<h4>Dignissimos Ducimus Praesentium?</h4>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
						</div>
						<!-- Clearfix -->
						<div class="clearfix"></div>
					</div>	
					<div class="faq-item">
						<span class="bg-color">02</span>
						<div class="faq-content">
							<h4>Nostrum Exercitationem Corporis?</h4>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
						</div>
						<div class="clearfix"></div>
					</div>	
					<div class="faq-item">
						<span class="bg-color">03</span>
						<div class="faq-content">
							<h4>Quamnihil Molestiae Consequatur?</h4>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
						</div>
					</div>	
					<div class="faq-item">
						<Span class="bg-color">04</span>
						<div class="faq-content">
							<h4>Inventore Veritatis Architecto?</h4>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
						</div>
					</div>	
				</div>
			</div>
			
			<!-- FAQ Ends -->
			
			<!-- Client Starts -->
			
			<div class="slim-client">
				<div class="slim-outer">
					<!-- Container -->
					<div class="container">
						<!-- Heading -->
						<div class="slim-heading">
							<h2>Clients</h2>
							<p> The wise man therefore always holds in these matters to this principle of selection he rejects perspiciatis pleasures to secure.</p>
						</div>
						<!-- Client Content -->
						<div class="client-content">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<!-- Client Item -->
									<div class="client-item">
										<img src="/assets/img/clients/c2-1.png" alt="" class="img-responsive" />
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<!-- Client Item -->
									<div class="client-item">
										<img src="/assets/img/clients/c2-2.png" alt="" class="img-responsive" />
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<!-- Client Item -->
									<div class="client-item">
										<img src="/assets/img/clients/c2-3.png" alt="" class="img-responsive" />
									</div>
								</div>
								<div class="clearfix hidden-xs"></div> 
								<div class="col-md-4 col-sm-4">
									<!-- Client Item -->
									<div class="client-item">
										<img src="/assets/img/clients/c2-4.png" alt="" class="img-responsive" />
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<!-- Client Item -->
									<div class="client-item">
										<img src="/assets/img/clients/c2-5.png" alt="" class="img-responsive" />
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<!-- Client Item -->
									<div class="client-item">
										<img src="/assets/img/clients/c2-6.png" alt="" class="img-responsive" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Client Ends -->
			
			
			
			
			<?php } ?>
			
			
			
			<!-- About Starts -->
			
			<div class="slim-about">
				<!-- Container -->
				<div class="container">
					<!-- Heading -->
					<div class="slim-heading">
						<h2>About Us</h2>
						<p>
							<img src="/assets/img/my_images/logo_ver2.png" class="img-responsive">
							<br>
							We Make Funniest Games
						</p>
					</div>
					
					
					
					
					
					
					
					<?php if(isset($hidethis)) { ?>
					
					<hr />
					<!-- Our Team -->
					<div class="our-team">
						<h3>Our Team</h3>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="our-team-item">
									<!-- Team Image -->
									<div class="team-img">
										<a href="#"><img src="/assets/img/user/1.jpg" alt="" class="img-responsive" /></a>
									</div>
									<!-- Team Content -->
									<div class="team-content">
										<h4>Frank Mas <span>Canada</span></h4>
										<h6>UI Developer</h6>
									</div>
									<!-- Clearfix -->
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="our-team-item">
									<!-- Team Image -->
									<div class="team-img">
										<a href="#"><img src="/assets/img/user/2.jpg" alt="" class="img-responsive" /></a>
									</div>
									<!-- Team Content -->
									<div class="team-content">
										<h4>Peter Helo <span>USA</span></h4>
										<h6>.Net Developer</h6>
									</div>
									<!-- Clearfix -->
									<div class="clearfix"></div>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="our-team-item">
									<!-- Team Image -->
									<div class="team-img">
										<a href="#"><img src="/assets/img/user/3.jpg" alt="" class="img-responsive" /></a>
									</div>
									<!-- Team Content -->
									<div class="team-content">
										<h4>John Mark <span>London</span></h4>
										<h6>PHP Developer</h6>
									</div>
									<!-- Clearfix -->
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="our-team-item">
									<!-- Team Image -->
									<div class="team-img">
										<a href="#"><img src="/assets/img/user/4.jpg" alt="" class="img-responsive" /></a>
									</div>
									<!-- Team Content -->
									<div class="team-content">
										<h4>Harry Coer <span>India</span></h4>
										<h6>UX Developer</h6>
									</div>
									<!-- Clearfix -->
									<div class="clearfix"></div>
								</div>
							</div>
						</div>	
					</div>
					
					<?php } ?>
					
					
					
				</div>
			</div>
			
			<!-- About Ends -->
			
			
			<!-- Contact Starts -->
			
			<div class="slim-contact">
				<!-- Container -->
				<div class="container">
					
					
					
					<?php if(isset($hidethis)) { ?>
					<!-- Heading -->
					<div class="slim-heading">
						<h2>Clients</h2>
						<p> The wise man therefore always holds in these matters to this principle of selection he rejects perspiciatis pleasures to secure.</p>
					</div>
					<!-- Contact Map -->
					<div class="contact-map">
						<!-- Map Link -->
						<iframe src="https://maps.google.co.in/?ie=UTF8&amp;ll=12.956215,77.593517&amp;spn=0.10188,0.169086&amp;t=m&amp;z=13&amp;output=embed"></iframe>
					</div>
					<hr />
					
					<?php } ?>
					
					
					
					<!-- Contact Form -->
					<div class="contact-form">
						<h4>Contact Us</h4>
						<!-- Form -->
						<form enctype="multipart/form-data" method="post" action="/servlet/send_email" id="frm_send_email">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<!-- Form Group -->
									<div class="form-group">
										<input type="text" class="form-control" name="name" id="name" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="form-group">
										<input type="text" class="form-control" name="email" id="email" placeholder="Email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="title" id="title" placeholder="Title">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="content" id="content" rows="10" placeholder="Messages"></textarea>
							</div>
							<div class="form-group">
								<label for="attach_file">첨부파일</label>
								<input type="file" id="attach_file" name="attach_file">
							</div>
							<div class="text-center">
								<div class="g-recaptcha" data-sitekey="6LckZSITAAAAAItlvTbH2WDImQSAC0kld-yl7-Fm"></div>
							</div>
							<!-- Button -->
							<button type="submit" class="btn btn-red pull-right">Send <i class="fa fa-send"></i></button>
							<div class="clearfix"></div>
						</form>
					</div>
					<hr />
					<!-- Contact Detail -->
					<div class="contact-detail">
						<h4>Contact Details</h4>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- <p><i class="fa fa-building bg-red"></i> #89, chamber Street, London</p> -->
								<p><i class="fa fa-envelope bg-lblue"></i>contact@aivesoft.com</p>
							</div>
							<!-- <div class="col-md-6 col-sm-6">
								<p><i class="fa fa-phone bg-green"></i>+ (838) 838 943 8429</p>
								<p><i class="fa fa-calendar bg-purple"></i>Mon-Fri ( 9:00 to 18:00 )</p>
							</div>-->
						</div>
						<hr />
						<!-- Social -->
						<div class="brand-bg text-center">
							<!-- Brand Icons -->
							<a href="http://facebook.com/aivesoft" class="facebook" target="_blank"><i class="fa fa-facebook circle-3"></i></a>
							<a href="http://twitter.com/aivesoft" class="twitter" target="_blank"><i class="fa fa-twitter circle-3"></i></a>
							<a href="https://plus.google.com/103449851283023704322" class="google-plus" target="_blank"><i class="fa fa-google-plus circle-3"></i></a>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Contact Ends -->
			