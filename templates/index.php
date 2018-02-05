<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/header.php' ); ?>

        <div class="l-constrained row patterns background-white l-padding-mobile-hd">
            <aside>
                <div class="three columns">
                    <?php require_once( ABSPATH . PARTIALS . '/patterns-nav.php' ); ?>
                </div>
            </aside>
            <div class="nine columns">
                <h1>Templates</h1>

                <div class="l-container l-margin-tm row">
					<div class="six columns">
						<h2>SanDiego.gov</h2>
						<ul>
							<li><a href="home.php">Home</a></li>
							<li><a href="bucket.php">Bucket</a></li>
							<li><a href="department-parent.php">Department Parent</a></li>
							<li><a href="department.php">Department</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="blog-detail-1-column.php">Blog Detail 1 Column</a></li>
							<li><a href="blog-detail-2-column.php">Blog Detail 2 Column</a></li>
							<li><a href="blog-detail-3-column.php">Blog Detail 3 Column</a></li>
							<li><a href="cards.php">Cards</a></li>
							<li><a href="dashboard.php">Dashboard</a></li>
							<li><a href="directory.php">Directory</a></li>
							<li><a href="events.php">Events Calendar</a></li>
							<li><a href="faqs.php">FAQs</a></li>
							<li><a href="location.php">Location</a></li>
							<li><a href="outreach.php">Outreach</a></li>
							<li><a href="portal.php">Portal</a></li>
							<!--<li><a href="landing.php">Landing</a></li>-->
							<li><a href="web-application.php">Web Application</a></li>
						</ul>
					</div>
					<div class="six columns">
						<h2>CityNet</h2>
						<ul class="l-margin-desktop-bx">
							<li><a href="citynet.php">CityNet - Main Home</a></li>
							<li><a href="citynet-bucket.php">CityNet - Bucket</a></li>
							<li><a href="citynet-dept.php">CityNet - Department</a></li>
						</ul>
						<h2>Inside San Diego</h2>
						<ul>
							<li><a href="insidesd-home.php">Inside San Diego - Home</a></li>
							<li><a href="insidesd-articles.php">Inside San Diego - All Articles</a></li>
							<li><a href="insidesd-article.php">Inside San Diego - Article</a></li>
						</ul>
					</div>
                </div>

            </div> <!-- Nine columns -->
        </div> <!-- row -->
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>