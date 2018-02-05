<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/intranet-header.php' ); ?>

<div class="hero__slides hero__slides--secondary fine-print">
	<div class="l-constrained--site row">
		<div class="main__message main__message--transparent">
			<h1 class="main__heading">Department Name</h1>
		</div>
		<div class="twelve columns hero__content hidden">
			<div id="hero__slides--secondary" class="hero__slides--content">
				<ul class="slides">
					<li>
						<p class="main__content">Get your event permit today.</p>
						<h1 class="main__heading">Nam et nulla in nulla fermentum. </h1>
					</li>

					<li>
						<p class="main__content">Lorem ipsum dolor sit amet.</p>
						<h1 class="main__heading">Nam et nulla in nulla fermentum. </h1>
					</li>
				</ul>
			</div>

			<div class="custom-navigation custom-navigation--secondary">
				<a href="#" class="flex-prev"><i class="icon-chevron-left"></i></a>
				<a href="#" class="flex-next"><i class="icon-chevron-right"></i></a>
			</div>
		</div>

	</div>

	<div class="hero__slides--img">
		<ul class="slides">
			<li>
				<div class="hero__bg" style="background-image:url('../assets/dist/img/bigstock-Sunset-Cliffs-Panorama-cityhub.jpg');"/>
				<div class="hero--credit hidden">
					<p>Image by Cindy Devin</p>
				</div>
			</li>
		</ul>
	</div>
</div>
<div class="l-constrained l-constrained--main l-padding-mobile-hd background-white" role="main">
	<div class="row">
		<div class="twelve columns no-gutters">
			<div class="l-container navigation__wrap">
				<!--<div class="menu-btn menu-btn--open">
					<a id="nav-open-btn" class="menu-toggle js-menu-toggle" href="#nav" style="top: 1em;"><span class="">Menu</span><span class="menu-toggle__line"></span></a>
				</div>-->
				<nav id="nav" class="main__navigation main-navigation nav-primary hide-on-mobile role-main" style="z-index:6;margin-top:0;">
					<ul>
						<li>
							<a href="intranet-dept.php" class="dropdown-parent">Department Home</a>
						</li>
						<li class="has__dropdown">
							<a href="citynet-dept.php" class="dropdown-parent">
								<i class="icon-chevron-right hide-on-desktop"></i>Category 1 <i class="icon-chevron-down hide-on-mobile"></i>
							</a>
							<div class="dropdown">
								<div class="row">
									<div class="four columns">
										<div class="field-collection-container clearfix">
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
										</div>
									</div>
									<div class="four columns">
										<div class="field-collection-container clearfix">
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
										</div>
									</div>
									<div class="four columns">
										<div class="field-collection-container clearfix">
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="has__dropdown">
							<a href="citynet-dept.php" class="dropdown-parent">
								<i class="icon-chevron-right hide-on-desktop"></i>Category 2 <i class="icon-chevron-down hide-on-mobile"></i>
							</a>
							<div class="dropdown">
								<div class="row">
									<div class="four columns">
										<div class="field-collection-container clearfix">
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
										</div>
									</div>
									<div class="four columns">
										<div class="field-collection-container clearfix">
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
										</div>
									</div>
									<div class="four columns">
										<div class="field-collection-container clearfix">
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
											<div class="row border">
												<div class="twelve columns">
													<h4><a href="">Topic</a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</nav>
		
				<nav class="sub-navigation hide-on-desktop">
					<ul>
						<li><a href="citynet-dept.php">Department Home</a></li>
						<li><a href="citynet-dept.php">Category 1</a></li>
						<li><a href="citynet-dept.php">Category 2</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="row">
		<main role="main" style="margin-top:0;">
		
			<div class="nine columns no-gutters">
				<div class="l-constrained l-padding-mobile-hd background-white">
					<div class="l-container l-padding-desktop-ad">
						<div class="row">
							<div class="twelve columns">
								<h2>Section Title</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris. Nunc vitae mollis orci. In lectus est, sollicitudin sagittis augue ut, elementum feugiat tellus. In eu laoreet quam. Nam et nulla in nulla fermentum euismod vel quis orci. Suspendisse ut lectus aliquam, ultricies nulla eu, facilisis quam. Vestibulum justo leo, posuere at lacinia vestibulum, pellentesque eget tortor.</p>
								<p>Phasellus ligula ipsum, blandit et mi eu, pretium aliquet urna. Maecenas ultricies erat eu justo vehicula placerat. Maecenas placerat ex lorem, sed auctor dui pretium sed. Nunc justo orci, gravida in justo id, convallis vestibulum ligula. Cras aliquam sodales sem, vitae elementum arcu tincidunt convallis. Praesent commodo leo turpis, non viverra dui ultricies sit amet. </p>
							</div>
						</div>
						
					</div>

					<div class="l-container background-white l-padding-desktop-hd">
						<div class="row">
							<div class="twelve columns">
								<h2>Heading</h2>
								<p>Proin in nunc mauris. Nunc vitae mollis orci. In lectus est, sollicitudin sagittis augue ut, elementum feugiat tellus. In eu laoreet quam. Nam et nulla in nulla fermentum euismod vel quis orci.</p>
							</div>

							<div class="twelve columns">
								<div class="accordions js-toggle-accordion">
									<div class="accordion">
										<p class="accordion__heading"><a class="accordion__link" href="#">Question <span class="toggle-icon"></span></a></p>
										<div class="accordion__drawer" style="display: none;">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>

									<div class="accordion">
										<p class="accordion__heading"><a class="accordion__link" href="#">Question <span class="toggle-icon"></span></a></p>
										<div class="accordion__drawer" style="display: none;">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>
								</div>
								
							</div>
						</div>

					</div>
					
				</div>
			</div>
		</main>
		<aside class="l-margin-mobile-vd l-margin-bm l-padding-mobile-hd">
			<div class="three columns role-main l-padding-desktop-td l-padding-mobile-bd">
				
				<div class="widget l-margin-bd">
					<h4 class="h2">Heading</h4>
					<ul>
						<li><a href="">Link to Page</a></li>
						<li><a href="">Link to Page</a></li>
						<li><a href="">Link to Page</a></li>
						<li><a href="">Link to Page</a></li>
					</ul>
				</div>

				<div class="card card__cta card__cta--graphic" style="background-image:url(../assets/dist/img/cta-graphic.jpg);">
					<a href="">
						<p>Signup for a Program</p>
						<span href="" class="btn btn--secondary">Signup Today</span>
					</a>
				</div>
			</div>
		</aside>
	</div>
</div>

<?php
require_once( ABSPATH . PARTIALS . '/intranet-footer.php' ); ?>