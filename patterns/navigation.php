<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/header.php' ); ?>

        <div class="l-constrained">
            <div class="l-container">
                <div class="menu-btn menu-btn--open">
                    <a id="nav-open-btn" class="menu-toggle js-menu-toggle" href="#nav"><span class="menu-toggle__line"></span><span class="visuallyhidden">Open Menu</span></a>
                </div>

                <nav id="nav" class="main__navigation main-navigation nav-primary" role="navigation">
                    <ul>
						<li style="width: auto;"><a href="/" style="padding-top:18px;"><i class="icon-home hide-on-desktop"></i><span class="hide-on-desktop" style="font-size:18px;text-transform:uppercase;font-weight:600;">Home</span><i class="icon-home hide-on-mobile" style="color:black;font-size:24px;"></i></a></li>
                        <li class="has__dropdown"><a href="">Leisure <i class="icon-chevron-down"></i><span>Explore, Play + Events</span></a>
                            <div class="dropdown">
                                <div class="row hide-on-mobile nav__heading">
                                    <div class="twelve columns">
                                        <p class="l-margin-bn">Leisure</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="four columns hide-on-mobile">
                                        <p>With its great weather, miles of sandy beaches, and major attractions, San Diego is known worldwide as one of the best tourist destinations and a great place for residents to relax year round.</p>
                                    </div>
                                    <div class="four columns">
                                        <div class="row border border--bottom">
                                            <div class="six columns">
                                                <a href=""><h4>Parks</h4></a>
                                            </div>
                                            <div class="six columns">
                                                <ul>
                                                    <li><a href="">Community Parks</a></li>
                                                    <li><a href="">Recreation Centers</a></li>
                                                    <li><a href="">Book an Event</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row border border--bottom">
                                            <div class="six columns">
                                                <a href=""><h4>Outdoors</h4></a>
                                            </div>
                                            <div class="six columns">
                                                <ul>
                                                    <li><a href="">Beaches</a></li>
                                                    <li><a href="">Lakes</a></li>
                                                    <li><a href="">Golf</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="six columns">
                                                <a href=""><h4>Things to Do</h4></a>
                                            </div>
                                            <div class="six columns">
                                                <ul>
                                                    <li><a href="">Balboa Park</a></li>
                                                    <li><a href="">Festivals and Parades</a></li>
                                                    <li><a href="">Special Events</a></li>
                                                    <li><a href="">Visitor Resources</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="four columns hide-on-mobile">
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-1.jpg" width="74" height="74" alt="Event 1">
                                            <p>Celebrate the Balboa Park Centennial <a href="">Learn More</a></p>
                                        </div>
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-2.jpg" width="74" height="74" alt="Event 2">
                                            <p>Get an Event Permit <a href="">Learn More</a></p>
                                        </div>
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-3.jpg" width="74" height="74" alt="Event 3">
                                            <p>Book Your Tee Time <a href="">Learn More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="has__dropdown"><a href="">Resident Resources <i class="icon-chevron-down"></i><span>Pay Now, Parking + Help</span></a>

                            <div class="dropdown">
                                <div class="row hide-on-mobile nav__heading">
                                    <div class="twelve columns">
                                        <p class="l-margin-bn">Resident Resources</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="four columns hide-on-mobile">
                                        <p>Maecenas maximus enim quis pulvinar condimentum. Vestibulum turpis ex, ultrices nec velit quis, mattis suscipit diam. Nunc sed felis sed odio interdum viverra.</p>
                                    </div>
                                    <div class="four columns">
                                        <div class="row border border--bottom">
                                            <div class="twelve columns">
                                                <a href=""><h4>Website Tools</h4></a>
                                            </div>
                                        </div>
                                        <div class="row border border--bottom">
                                            <div class="twelve columns">
                                                <a href=""><h4>Indexes</h4></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="twelve columns">
                                                <a href=""><h4>Account Management</h4></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="four columns hide-on-mobile">
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-1.jpg" width="74" height="74" alt="Event 1">
                                            <p>Make a Payment <a href="">Learn More</a></p>
                                        </div>
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-2.jpg" width="74" height="74" alt="Event 2">
                                            <p>Order Trash Cans <a href="">Learn More</a></p>
                                        </div>
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-3.jpg" width="74" height="74" alt="Event 3">
                                            <p>Get a Permit <a href="">Learn More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="has__dropdown"><a href="">Doing Business <i class="icon-chevron-down"></i><span>Fix, Plan + Build</span></a>

                            <div class="dropdown">
                                <div class="row hide-on-mobile nav__heading">
                                    <div class="twelve columns">
                                        <p class="l-margin-bn">Doing Business</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="four columns hide-on-mobile">
                                        <p>Maecenas maximus enim quis pulvinar condimentum. Vestibulum turpis ex, ultrices nec velit quis, mattis suscipit diam. Nunc sed felis sed odio interdum viverra.</p>
                                    </div>
                                    <div class="four columns">
                                        <div class="row border border--bottom">
                                            <div class="twelve columns">
                                                <a href=""><h4>Forums</h4></a>
                                            </div>
                                        </div>
                                        <div class="row border border--bottom">
                                            <div class="twelve columns">
                                                <a href=""><h4>Neighborhoods & Council Districts</h4></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="twelve columns">
                                                <a href=""><h4>Initiatives</h4></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="four columns hide-on-mobile">
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-1.jpg" width="74" height="74" alt="Event 1">
                                            <p>Signup for a Class <a href="">Learn More</a></p>
                                        </div>
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-2.jpg" width="74" height="74" alt="Event 2">
                                            <p>Search for a Job <a href="">Learn More</a></p>
                                        </div>
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-3.jpg" width="74" height="74" alt="Event 3">
                                            <p>See Business Events <a href="">Learn More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li><a href="">Library <span>Learn, Connect + Grow</span></a></li>

                        <li class="has__dropdown"><a href="">Public Safety <i class="icon-chevron-down"></i><span>Police, Fire + Lifeguards</span></a>

                            <div class="dropdown">
                                <div class="row hide-on-mobile nav__heading">
                                    <div class="twelve columns">
                                        <p class="l-margin-bn">Public Safety</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="four columns hide-on-mobile">
                                        <p>Maecenas maximus enim quis pulvinar condimentum. Vestibulum turpis ex, ultrices nec velit quis, mattis suscipit diam. Nunc sed felis sed odio interdum viverra.</p>
                                    </div>
                                    <div class="four columns">
                                        <div class="row border border--bottom">
                                            <div class="six columns">
                                                <a href=""><h4>Police</h4></a>
                                            </div>
                                            <div class="six columns">
                                                <ul>
                                                    <li><a href="">Subsection</a></li>
                                                    <li><a href="">Another Subsection</a></li>
                                                    <li><a href="">Subsection</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row border border--bottom">
                                            <div class="six columns">
                                                <a href=""><h4>Fire</h4></a>
                                            </div>
                                            <div class="six columns">
                                                <ul>
                                                    <li><a href="">Subsection</a></li>
                                                    <li><a href="">Another Subsection</a></li>
                                                    <li><a href="">Subsection</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="six columns">
                                                <a href=""><h4>Lifeguards</h4></a>
                                            </div>
                                            <div class="six columns">
                                                <ul>
                                                    <li><a href="">Subsection</a></li>
                                                    <li><a href="">Another Subsection</a></li>
                                                    <li><a href="">Subsection</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="four columns hide-on-mobile">
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-1.jpg" width="74" height="74" alt="Event 1">
                                            <p>Read the Safety Forum <a href="">Learn More</a></p>
                                        </div>
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-2.jpg" width="74" height="74" alt="Event 2">
                                            <p>Safety Events and Training <a href="">Learn More</a></p>
                                        </div>
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-3.jpg" width="74" height="74" alt="Event 3">
                                            <p>File a Complaint or Report <a href="">Learn More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="has__dropdown"><a href="">City Hall <i class="icon-chevron-down"></i><span>Governing, News + Initiatives</span></a>

                            <div class="dropdown">
                                <div class="row hide-on-mobile nav__heading">
                                    <div class="twelve columns">
                                        <p class="l-margin-bn">City Hall</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="four columns hide-on-mobile">
                                        <p>Maecenas maximus enim quis pulvinar condimentum. Vestibulum turpis ex, ultrices nec velit quis, mattis suscipit diam. Nunc sed felis sed odio interdum viverra.</p>
                                    </div>
                                    <div class="four columns">
                                        <div class="row border border--bottom">
                                            <div class="twelve columns">
                                                <a href=""><h4>Mayor</h4></a>
                                            </div>
                                        </div>
                                        <div class="row border border--bottom">
                                            <div class="twelve columns">
                                                <a href=""><h4>Community Board</h4></a>
                                            </div>
                                        </div>
                                        <div class="row border border--bottom">
                                            <div class="twelve columns">
                                                <a href=""><h4>Employment</h4></a>
                                            </div>
                                        </div>
                                        <div class="row border border--bottom">
                                            <div class="twelve columns">
                                                <a href=""><h4>Cost of Living</h4></a>
                                            </div>
                                        </div>
                                        <div class="row border border--bottom">
                                            <div class="twelve columns">
                                                <a href=""><h4>Long-Term Planning</h4></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="twelve columns">
                                                <a href=""><h4>Planning Initiatives</h4></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="four columns hide-on-mobile">
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-1.jpg" width="74" height="74" alt="Event 1">
                                            <p>See Town Hall Events and Community Forums <a href="">Learn More</a></p>
                                        </div>
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-2.jpg" width="74" height="74" alt="Event 2">
                                            <p>Track an Issue You Submitted <a href="">Learn More</a></p>
                                        </div>
                                        <div class="nav__event">
                                            <img src="/assets/dist/img/nav-event-3.jpg" width="74" height="74" alt="Event 3">
                                            <p>Search City Hall News <a href="">Learn More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="l-constrained row patterns background-white l-padding-mobile-hd">
            <aside>
                <div class="three columns">
                    <?php require_once( ABSPATH . PARTIALS . '/patterns-nav.php' ); ?>
                </div>
            </aside>
            <div class="nine columns">

                <h1>Navigation</h1>
                <div class="sub__nav--library">
                    <ul class="sub__nav">
                        <li><a href="#primary">Primary</a></li>
                        <li><a href="#footer">Footer</a></li>
                        <li><a href="#breadcrumbs">Breadcrumbs</a></li>
                        <li><a href="#pagination">Pagination</a></li>
                        <li><a href="#tabs">Tabs</a></li>
                        <li><a href="#sidebar">Sidebar</a></li>
                        <li><a href="#micro">Microsite</a></li>
                        <li><a href="#department">Department</a></li>
                        <li><a href="#appheader">Application Header</a></li>
                        <li><a href="#quicknav">Quick Nav</a></li>
                        <li><a href="#quicklinks">Quicklinks</a></li>
                        <li><a href="#social">Social</a></li>
                        <li><a href="#tags">Tags</a></li>
                    </ul>
                </div>

                <div id="primary" class="l-container l-margin-tm">
                    <div class="l-container">
                        <h2 class="l-margin-bn">Primary with Advanced Dropdown</h2>
                        <p class="subheading"><em>See above</em></p>

                        <div class="row">
                            <div class="twelve columns">
                                <p>The main navigation has quite a bit of content. Utilize the <strong>.hide-on-mobile</strong> class for content that should only display on desktop.</p>
                            </div>
                            <div class="twelve columns">
                                <div class="code__examples">
                                <form><textarea class="pattern" id="nav-code-1" name="code">
<nav id="nav" class="main__navigation main-navigation nav-primary" role="navigation">
    <ul>
        <li class="has__dropdown"><a href="">Leisure <i class="icon-chevron-down"></i><span>Explore, Play + Events</span></a>
            <div class="dropdown">
                <div class="row hide-on-mobile nav__heading">
                    <div class="twelve columns">
                        <p class="l-margin-bn">Leisure</p>
                    </div>
                </div>
                <div class="row">
                    <div class="four columns hide-on-mobile">
                        <p>With its great weather, miles of sandy beaches, and major attractions, San Diego is known worldwide as one of the best tourist destinations and a great place for residents to relax year round.</p>
                    </div>
                    <div class="four columns">
                        <div class="row border border--bottom">
                            <div class="six columns">
                                <a href=""><h4>Parks</h4></a>
                            </div>
                            <div class="six columns">
                                <ul>
                                    <li><a href="">Community Parks</a></li>
                                    <li><a href="">Recreation Centers</a></li>
                                    <li><a href="">Book an Event</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="four columns hide-on-mobile">
                        <div class="nav__event">
                            <img src="/assets/dist/img/nav-event-1.jpg" width="74" height="74" alt="Event 1">
                            <p>Celebrate the Balboa Park Centennial <a href="">Learn More</a></p>
                        </div>
                        <div class="nav__event">
                            <img src="/assets/dist/img/nav-event-2.jpg" width="74" height="74" alt="Event 2">
                            <p>Get an Event Permit <a href="">Learn More</a></p>
                        </div>
                        <div class="nav__event">
                            <img src="/assets/dist/img/nav-event-3.jpg" width="74" height="74" alt="Event 3">
                            <p>Book Your Tee Time <a href="">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav></textarea> </form> </div>
                            </div>
                        </div>

                        <div class="row l-margin-tm">
                            <div class="six columns">
                                <div class="code__examples">
                                    <form><textarea class="pattern" id="nav-code-btn" name="code">
<div class="menu-btn menu-btn--open">
    <a id="nav-open-btn" class="menu-toggle js-menu-toggle" href="#nav"><span class="">Menu</span><span class="menu-toggle__line"></span></a>
</div></textarea> </form> </div>
                            </div>
                            <div class="six columns">
                                The <strong>.menu-toggle</strong> icon displays on smaller viewports to access the off-canvas navigation. This element must be placed <strong>directly above</strong> the &lt;nav&gt;.
                            </div>
                        </div>

                    </div>
                </div>

                    <!-- Footer -->
                    <div id="footer" class="l-container l-margin-vm">
                        <h2>Footer</h2>
                        <footer>
                            <div class="row">
                                <div class="four columns footer--left l-padding-ad l-padding-vm">

                                    <div class="row l-padding-hs">
                                        <div class="twelve columns no-gutters">
                                            <img src="/assets/dist/img/logo--white--sm.png" alt="The City of San Diego - logo" width="49" height="39">
                                            <ul class="socials">
                                                <li><a href=""><i class="icon-googleplus"></i></a></li>
                                                <li><a href=""><i class="icon-facebook"></i></a></li>
                                                <li><a href=""><i class="icon-youtube"></i></a></li>
                                                <li><a href=""><i class="icon-twitter"></i></a></li>
                                                <li><a href=""><i class="icon-dribbble"></i></a></li>
                                                <li><a href=""><i class="icon-rss"></i></a></li>
                                            </ul>
                                            <p class="copyright">
                                            Copyrighted © 2002-2015<br>
                                            City of San Diego. All rights reserved.</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="eight columns background--dark footer--right l-padding-vm">

                                    <div class="row">
                                        <div class="six columns">
                                            <p class=""><strong>Council Districts</strong></p>
                                            <ul class="two-columns">
                                                <li><a href="">Council District 1</a></li>
                                                <li><a href="">Council District 1</a></li>
                                                <li><a href="">Council District 1</a></li>
                                                <li><a href="">Council District 1</a></li>
                                                <li><a href="">Council District 1</a></li>
                                                <li><a href="">Council District 1</a></li>
                                                <li><a href="">Council District 1</a></li>
                                                <li><a href="">Council District 1</a></li>
                                                <li><a href="">Council District 1</a></li>
                                            </ul>
                                        </div>
                                        <div class="six columns">
                                            <p class=""><strong>City Officials</strong></p>
                                            <ul>
                                                <li><a href="">Office of the City Attorney</a></li>
                                                <li><a href="">Office of the City Clerk</a></li>
                                                <li><a href="">Office of the City Auditor</a></li>
                                                <li><a href="">Office of the Independent Budget Analyst</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </footer>

                        <div class="row l-margin-vm">
                            <div class="twelve columns">
                                <p class="l-margin-bn"><strong>Notes</strong></p>
                                <p>Within the footer is a <strong>.row</strong> set to flexbox, to account for the <strong>.footer--left</strong> background color.</p>
                                <div class="code__examples">
                                <form><textarea class="pattern" id="nav-code-2" name="code">
<footer>
    <div class="row">
        <div class="four columns footer--left l-padding-ad l-padding-vm">

            <div class="row l-padding-hd">
                <div class="twelve columns no-gutters">
                    <img src="/assets/dist/img/logo--white--sm.png" alt="The City of San Diego - logo" width="49" height="39">
                    <ul class="socials">
                        <li><a href=""><i class="icon-dribbble"></i></a></li>
                        <li><a href=""><i class="icon-dribbble"></i></a></li>
                        <li><a href=""><i class="icon-dribbble"></i></a></li>
                    </ul>
                    <p class="copyright">
                    Copyrighted © 2002-2015<br>
                    City of San Diego. All rights reserved.</p>
                </div>
            </div>
        </div>
        <div class="eight columns background--dark footer--right l-padding-vm">

            <div class="row">
                <div class="six columns">
                    <p class=""><strong>Council Districts</strong></p>
                    <ul class="two-columns">
                        <li><a href="">Council District 1</a></li>
                        <li><a href="">Council District 1</a></li>
                        <li><a href="">Council District 1</a></li>
                    </ul>
                </div>
                <div class="six columns">
                    <p class=""><strong>City Officials</strong></p>
                    <ul>
                        <li><a href="">Office of the City Attorney</a></li>
                        <li><a href="">Office of the City Clerk</a></li>
                        <li><a href="">Office of the City Auditor</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer></textarea> </form> </div>
                            </div>
                        </div>
                    </div>

                    <!-- Breadcrumbs -->
                    <div id="breadcrumbs" class="l-container l-margin-vm">
                        <h2>Breadcrumbs</h2>
                        <div class="l-container breadcrumbs">
                            <a href="" class="breadcrumbs__link">Home</a>
                            <span class="breadcrumbs__divider">&#62;</span>
                            <a href="" class="breadcrumbs__link">Secondary</a>
                            <span class="breadcrumbs__divider">&#62;</span>
                            <a href="" class="breadcrumbs__link">Tertiary</a>
                            <span class="breadcrumbs__divider">&#62;</span>
                            <span class="breadcrumbs__current">Current Page</span>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div id="pagination" class="l-container l-margin-vm">
                        <h2>Pagination</h2>
                        <div class="item-list">
                            <ul class="pager">
                                <li class="pager-first first"><a title="Go to first page" href="">« first</a></li>
                                <li class="pager-previous"><a title="Go to previous page" href="">‹ previous</a></li>
                                <li class="pager-item"><a title="Go to page 1" href="">1</a></li>
                                <li class="pager-item"><a title="Go to page 2" href="">2</a></li>
                                <li class="pager-current">3</li>
                                <li class="pager-item"><a title="Go to page 4" href="">4</a></li>
                                <li class="pager-item"><a title="Go to page 5" href="">5</a></li>
                                <li class="pager-item"><a title="Go to page 6" href="">6</a></li>
                                <li class="pager-item"><a title="Go to page 7" href="">7</a></li>
                                <li class="pager-item"><a title="Go to page 8" href="">8</a></li>
                                <li class="pager-item"><a title="Go to page 9" href="">9</a></li>
                                <li class="pager-ellipsis">…</li>
                                <li class="pager-next"><a title="Go to next page" href="">next ›</a></li>
                                <li class="pager-last last"><a title="Go to last page" href="">last »</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tabs -->
                    <div id="tabs" class="l-container l-margin-vm">
                        <h2>Tabs</h2>
                        
                        <div class="l-container">
                            <div class="row">
                                <div class="twelve columns">
                                    <div id="tab-group" class="tabs">
                                        <ul class="tabs-list js-tabs-list">
                                            <li class="tabs-list__item is-active"><a class="tabs-list__link" href="#tab-item-1">Tab Content 1</a></li>
                                            <li class="tabs-list__item"><a class="tabs-list__link" href="#tab-item-2">Tab Content 2</a></li>
                                            <li class="tabs-list__item"><a class="tabs-list__link" href="#tab-item-3">Tab Content 3</a></li>
                                            <li class="tabs-list__item"><a class="tabs-list__link" href="#tab-item-4">Tab Content 4</a></li>
                                        </ul>

                                        <div class="tabs-container">

                                            <div id="tab-item-1" class="tabs__bucket is-active">
                                                <h3 class="tab-header l-margin-vn">Tab Content 1</h3>
                                                <div class="l-container">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </div>

                                            <div id="tab-item-2" class="tabs__bucket">
                                                <h3 class="tab-header l-margin-vn">Tab Content 2</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>

                                            <div id="tab-item-3" class="tabs__bucket">
                                                <a id="docs-downloads"></a>
                                                <h3 class="tab-header l-margin-vn">Tab Content 3</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>

                                            <div id="tab-item-4" class="tabs__bucket">
                                                <h3 class="tab-header l-margin-vn">Tab Content 4</h3>
                                                <div class="l-container">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row l-margin-td">
                                <div class="twelve columns">
                                    <p>The tab group must have a unique ID to ensure multiple tab groups on a single page work correctly. Wrap both the navigational &lt;ul&gt; and <strong>.tabs-container</strong> within a <strong>.tabs</strong>. Give the first navigation link and content block <strong>.is-active</strong> to initiate an active content block on page load. Give each tab content block a unique ID, and target the navigation links appropriately. The controlling javascript for tabs is located in <em>main.js</em>.</p>
                                    <div class="code__examples">
                                <form><textarea class="pattern" id="nav-code-tabs" name="code">
<div id="tab-group" class="tabs">
    <ul class="tabs-list js-tabs-list">
        <li class="tabs-list__item is-active"><a class="tabs-list__link" href="#tab-item-1">Tab Content 1</a></li>
        <li class="tabs-list__item"><a class="tabs-list__link" href="#tab-item-2">Tab Content 2</a></li>
        <li class="tabs-list__item"><a class="tabs-list__link" href="#tab-item-3">Tab Content 3</a></li>
        <li class="tabs-list__item"><a class="tabs-list__link" href="#tab-item-4">Tab Content 4</a></li>
    </ul>

    <div class="tabs-container">

        <div id="tab-item-1" class="tabs__bucket is-active">
            <h3 class="tab-header l-margin-vn">Tab Content 1</h3>
            <div class="l-container">
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>

        <div id="tab-item-2" class="tabs__bucket">
            <h3 class="tab-header l-margin-vn">Tab Content 2</h3>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>

        <div id="tab-item-3" class="tabs__bucket">
            <a id="docs-downloads"></a>
            <h3 class="tab-header l-margin-vn">Tab Content 3</h3>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>

        <div id="tab-item-4" class="tabs__bucket">
            <h3 class="tab-header l-margin-vn">Tab Content 4</h3>
            <div class="l-container">
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>

    </div>

</div></textarea> </form> </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div id="sidebar" class="l-container l-margin-vm">
                        <h2>Sidebar Sub-Navigation with Flyout Menu</h2>
                        <div class="l-container">
                            <div class="row">
                                <div class="three columns">

                                    <div class="widget">
                                        <h4>Helpful Links</h4>
                                        <ul>
                                            <li><a href="">This Awesome Link</a></li>
                                            <li class="widget-dropdown"><a href="">Here is Information</a>
                                                <div class="menu transition">
                                                  <p class="hide-on-mobile">Dropdown Title</p>
                                                  <ul>
                                                      <li><a href="">Choice 1</a></li>
                                                      <li><a href="">Choice 2</a></li>
                                                      <li><a href="">Choice 3</a></li>
                                                  </ul>
                                                </div>
                                            </li>
                                            <li><a href="">More Greatness</a></li>
                                            <li><a href="">Click Here</a></li>
                                            <li class="widget-dropdown"><a href="">Here is Information</a>
                                                <div class="menu transition">
                                                    <p class="hide-on-mobile">Dropdown Title</p>
                                                  <ul>
                                                      <li><a href="">Choice 1</a></li>
                                                      <li><a href="">Choice 2</a></li>
                                                      <li><a href="">Choice 3</a></li>
                                                  </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="nine columns">
                                    <div class="code__examples">
                                <form><textarea class="pattern" id="nav-code-flyout" name="code">
<ul>
    <li><a href="">Click Here</a></li>
    <li class="widget-dropdown"><a href="">Here is Information</a>
        <div class="menu transition">
          <p class="hide-on-mobile">Dropdown Title</p>
          <ul>
              <li><a href="">Choice 1</a></li>
              <li><a href="">Choice 2</a></li>
              <li><a href="">Choice 3</a></li>
          </ul>
        </div>
    </li>
</ul></textarea> </form> </div>
                                </div>

                                <div class="twelve columns l-margin-td">
                                    <p>Because a flyout menu should ideally be placed within a sidebar <strong>.widget</strong> menu, the dropdown menu will be targeted with a <strong>.widget</strong> modifier.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Micro Sub-Nav -->
                    <div id="micro" class="l-container l-margin-vm">
                        <h2>Microsite Sub-Navigation</h2>
                        <div class="row">
                            <div class="six columns">
                                <section class="portal">
                                    <header>
                                        <nav class="main__navigation--portal">
                                            <ul>
                                                <li><a href="">Nav Item 1</a></li>
                                                <li><a href="">Nav Item 2</a></li>
                                                <li><a href="">Nav Item 3</a></li>
                                                <li><a href="">Nav Item 4</a></li>
                                            </ul>
                                        </nav>
                                    </header>
                                </section>
                                <p class="l-margin-tm">This sub-navigation is simply a modifier of <strong>.main__navigation</strong>.</p>
                            </div>
                            <div class="six columns">
                                <div class="code__examples">
                                <form><textarea class="pattern" id="nav-code-micro" name="code">
<header>
    <nav class="main__navigation--portal">
        <ul>
            <li><a href="">Nav Item 1</a></li>
            <li><a href="">Nav Item 2</a></li>
            <li><a href="">Nav Item 3</a></li>
            <li><a href="">Nav Item 4</a></li>
        </ul>
    </nav>
</header></textarea> </form> </div>
                            </div>
                        </div>
                        
                    </div>

                    <!-- Department -->
                    <div id="department" class="l-container l-margin-vm">
                        <h2>Department</h2>
                        <div class="row l-margin-bm">
                            <nav class="sub-navigation">
                                <ul>
                                    <li><a href="">Parks & Recreation</a></li>
                                    <li><a href="">General Information</a></li>
                                    <li><a href="">Rec Centers & Pools</a></li>
                                    <li><a href="">Parks & Open Spaces</a></li>
                                    <li><a href="">Another Long Titled Department Name Here</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="row l-margin-bm">
                            <nav class="sub-navigation sub-navigation--long">
                                <ul>
                                    <li><a href="">Parks & Recreation</a></li>
                                    <li><a href="">General Information</a></li>
                                    <li><a href="">Rec Centers & Pools</a></li>
                                    <li><a href="">Parks & Open Spaces</a></li>
                                    <li><a href="">Another Long Titled Department Name Here</a></li>
                                    <li><a href="">Rec Centers & Pools</a></li>
                                    <li><a href="">Parks & Open Spaces</a></li>
                                    <li><a href="">Another Long Titled Department Name Here</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="row">
                            <div class="seven columns">
                                <div class="code__examples">
                                <form><textarea class="pattern" id="nav-code-dept" name="code">
<nav class="sub-navigation">
    <ul>
        <li><a href="">Nav Item 1</a></li>
        <li><a href="">Nav Item 2 with Wrapping Title</a></li>
        <li><a href="">Nav Item 3</a></li>
        <li><a href="">Nav Item 4</a></li>
    </ul>
</nav>

<nav class="sub-navigation sub-navigation--long">
    <ul>
        <li><a href="">Parks & Recreation</a></li>
        <li><a href="">General Information</a></li>
        <li><a href="">Rec Centers & Pools</a></li>
        <li><a href="">Parks & Open Spaces</a></li>
        <li><a href="">Another Long Titled Department Name Here</a></li>
        <li><a href="">Rec Centers & Pools</a></li>
        <li><a href="">Parks & Open Spaces</a></li>
        <li><a href="">Another Long Titled Department Name Here</a></li>
    </ul>
</nav></textarea> </form> </div>
                            </div>
                            <div class="five columns">
                                <p>This navigation is meant to be placed above a main navigation area, directly within a &lt;header&gt; element. Each menu item has a max-width of 25% to account for longer titles; by default, all items will squeeze into one line if there are more than 5.</p>
                                <p>For long menus, use the modifier class <strong>.sub-navigation--long</strong>.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Application Header -->
                    <div id="appheader" class="l-container l-margin-vm">
                        <h2>Application Header</h2>
                        <div class="row l-margin-bm">
                            <header class="l-padding-ad header--app">
                                <div class="row">
                                    <div class="three columns l-padding-ts">
                                        <a href="/" class="logo">
                                            <img src="/assets/dist/img/logo.png" alt="The City of San Diego" width="205" height="50">
                                        </a>
                                    </div>

                                    <div class="nine columns">
                                        <h1 class="text-white heading--trim">Application Headline</h1>
                                        <p class="text-white l-margin-bn">Supporting Content Sub Headline</p>
                                    </div>
                                </div>
                            </header>
                        </div>

                        <div class="row l-margin-bm">
                            <header class="l-padding-ad header--app">
                                <div class="row">
                                    <div class="three columns l-padding-ts">
                                        <a href="/" class="logo">
                                            <img src="/assets/dist/img/logo.png" alt="The City of San Diego" width="205" height="50">
                                        </a>
                                    </div>

                                    <div class="nine columns">
                                        <h1 class="text-white heading--trim">Application Headline</h1>
                                    </div>
                                </div>
                            </header>
                        </div>
                        <div class="row">
                            <div class="twelve columns">
                                <div class="code__examples">
                                <form><textarea class="pattern" id="nav-code-dashboard" name="code">
<header class="l-padding-ad header--app">
    <div class="row">
        <div class="three columns l-padding-ts">
            <a href="/" class="logo">
                <img src="/assets/dist/img/logo.png" alt="The City of San Diego" width="205" height="50" class="hide-on-mobile">
                <img src="/assets/dist/img/logo-mark.png" alt="The City of San Diego" width="163" height="132" class="hide-on-desktop">
            </a>
        </div>

        <div class="nine columns">
            <h1 class="text-white heading--trim">Application Headline</h1>
            <p class="text-white l-margin-bn">Supporting Content Sub Headline</p> <!-- optional -->
        </div>
    </div>
</header></textarea> </form> </div>
                            </div>
                            <div class="twelve columns l-margin-td">
                                <p>This navigation uses the modifier class <strong>.main__navigation--portal</strong></p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick nav (top-nav-strip) -->
                    <div id="quicknav" class="l-container l-margin-vm">
                        <h2>Quick Nav</h2>
                        <div class="row top-nav-strip l-margin-bm">
                            <div class="six columns">
                                <p>Visit <a href="">sandiego.gov</a></p>
                            </div>
                            <div class="six columns">
                                <ul class="socials">
                                    <li><a href=""><i class="icon-googleplus"></i></a></li>
                                    <li><a href=""><i class="icon-facebook"></i></a></li>
                                    <li><a href=""><i class="icon-youtube"></i></a></li>
                                    <li><a href=""><i class="icon-twitter"></i></a></li>
                                    <li><a href=""><i class="icon-dribbble"></i></a></li>
                                    <li><a href=""><i class="icon-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="seven columns">
                                <div class="code__examples">
                                <form><textarea class="pattern" id="nav-code-quicknav" name="code">
<div class="row top-nav-strip">
    <div class="six columns">
        <p>Visit <a href="">sandiego.gov</a></p>
    </div>
    <div class="six columns">
        <ul class="socials">
            <li><a href=""><i class="icon-googleplus"></i></a></li>
            <li><a href=""><i class="icon-facebook"></i></a></li>
            <li><a href=""><i class="icon-youtube"></i></a></li>
            <li><a href=""><i class="icon-twitter"></i></a></li>
            <li><a href=""><i class="icon-dribbble"></i></a></li>
            <li><a href=""><i class="icon-rss"></i></a></li>
        </ul>
    </div>
</div></textarea> </form> </div>
                            </div>
                            <div class="five columns">
                                <p>This navigation is meant to be placed above a main navigation area, directly within a &lt;header&gt; element.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quicklinks -->
                    <div id="quicklinks" class="l-container l-margin-vm">
                        <h2>Quicklinks</h2>
                        <div class="quicklinks background--cerulean l-padding-ad l-margin-bm">
                            <nav>
                                <ul>
                                    <li><a href="">Login</a></li>
                                    <li><a href="">Text Size <span class="text-sm">A</span> <span class="text-nm current">A</span> <span class="text-lg">A</span></a></li>
                                    <li><a href="">Translate</a></li>
                                    <li><a href="">High Contrast</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="row">
                            <div class="seven columns">
                                <div class="code__examples">
                                <form><textarea class="pattern" id="nav-code-quicklinks" name="code">
<div class="quicklinks">
    <nav>
        <ul>
            <li><a href="">Login</a></li>
            <li><a href="">Text Size <span class="text-sm">A</span> <span class="text-nm current">A</span> <span class="text-lg">A</span></a></li>
            <li><a href="">Translate</a></li>
            <li><a href="">High Contrast</a></li>
        </ul>
    </nav>
</div></textarea></form> </div>
                            </div>
                            <div class="five columns">
                                <p>Quicklinks are meant for navigation items that don't group into a main navigation, or support specific department content. Wrap this list with a <strong>.quicklinks</strong> for list items to be displayed horizontally.</p>
                                <p>Note that this type of navigation could be used within a Quick Nav block (above).</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Icons -->
                    <div id="social" class="l-container l-margin-vm">
                        <h2>Social Properties</h2>
                        <div class="l-container l-margin-vm">
                            <div class="row">
                                <div class="four columns">
                                    <ul class="socials">
                                        <li><a href=""><i class="icon-googleplus"></i></a></li>
                                        <li><a href=""><i class="icon-facebook"></i></a></li>
                                        <li><a href=""><i class="icon-youtube"></i></a></li>
                                        <li><a href=""><i class="icon-twitter"></i></a></li>
                                        <li><a href=""><i class="icon-dribbble"></i></a></li>
                                        <li><a href=""><i class="icon-rss"></i></a></li>
                                    </ul>
                                </div>
                                <div class="eight columns">
                                    <div class="code__examples">
                                <form><textarea class="pattern" id="nav-code-socials" name="code">
<ul class="socials">
    <li><a href=""><i class="icon-googleplus"></i></a></li>
    <li><a href=""><i class="icon-facebook"></i></a></li>
    <li><a href=""><i class="icon-youtube"></i></a></li>
    <li><a href=""><i class="icon-twitter"></i></a></li>
    <li><a href=""><i class="icon-dribbble"></i></a></li>
    <li><a href=""><i class="icon-rss"></i></a></li>
</ul></textarea> </form> </div>
                                </div>

                                <div class="twelve columns l-margin-tm">
                                    <p>A list of social icons simply needs to be given the <strong>.socials</strong> class.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div id="tags" class="l-container l-margin-vm">
                        <h2>Tags</h2>
                        <div class="row">
                            <div class="four columns">
                                <ul class="tag-list">
                                    <li class="tag-list__item"><a class="tag-list__link" href="">City Council</a></li>
                                    <li class="tag-list__item"><a class="tag-list__link" href="">Transit</a></li>
                                    <li class="tag-list__item"><a class="tag-list__link" href="">Community Events</a></li>
                                </ul>
                            </div>
                            <div class="eight columns">
                                <div class="code__examples">
                                <form><textarea class="pattern" id="nav-code-tags" name="code">
<ul class="tag-list">
    <li class="tag-list__item"><a class="tag-list__link" href="">City Council</a></li>
    <li class="tag-list__item"><a class="tag-list__link" href="">Transit</a></li>
    <li class="tag-list__item"><a class="tag-list__link" href="">Community Events</a></li>
</ul></form></textarea> </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>