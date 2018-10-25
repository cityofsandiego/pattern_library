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
						<li style="width: auto;"><a href="/" style="padding-top:18px;"><i class="icon-home hide-on-desktop"></i><span class="hide-on-desktop" style="font-size:18px;text-transform:uppercase;font-weight:600;">Home</span><i class="icon-home hide-on-mobile" style="font-size:24px;"></i></a></li>
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
                        <li><a href="#social">Social Media Icons</a></li>
                        <li><a href="#tags">Tags</a></li>
                    </ul>
                </div>

                
                    <!-- Footer -->
                                        
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

                    

                </div>

            </div>
        </div>
  

<?php
require_once( ABSPATH . PARTIALS . '/footer2.php' ); ?>