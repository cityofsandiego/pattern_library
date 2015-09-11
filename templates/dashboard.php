<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/dashboard-header.php' ); ?>

        <div class="user__block user__block--welcome background--science text-center--mobile">
            <div class="l-constrained">
                <div class="row">
                    <div class="two columns no-gutters l-margin-ts">
                        <img src="../assets/dist/img/dashboard-pic.jpg" alt="" width="117" height="117">
                    </div>
                    <div class="ten columns no-gutters">
                        <h1 class="l-margin-desktop-bn l-margin-desktop-td text-white">Welcome Back, Ron</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-constrained l-padding-mobile-hd background-white">

            <div class="row">
                <aside class="">
                    <div class="three columns background-off-white ">

                        <div class="widget l-padding-hs l-padding-vd l-margin-bd">
                            <h4>My Tasks</h4>
                            <a href="" class="btn l-margin-vs btn--wide">Pay My Bills</a>
                            <a href="" class="btn l-margin-vs btn--wide">Apply for Permit</a>
                        </div>

                    </div>
                </aside>

                <main>
                    <div class="nine columns no-gutters">

                        <div class="entry__content l-padding-hm">
                            <h2>News for You</h2>
                            <p><strong>Phasellus ligula ipsum</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend ac ante a lacinia. Mauris pellentesque lacus vitae felis ultricies, commodo egestas quam cursus. Vivamus faucibus lectus et sapien auctor maximus. Cras eu sem eleifend, pharetra libero vitae, dignissim augue. Ut ante sapien, vestibulum vel odio nec, blandit commodo nisi. Donec tempus efficitur lectus ac congue. Suspendisse sed aliquam.</p>
                            <a href="" class="btn btn--secondary l-margin-bm">Read More</a>

                            <p><strong>Phasellus ligula ipsum</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend ac ante a lacinia. Mauris pellentesque lacus vitae felis ultricies, commodo egestas quam cursus. Vivamus faucibus lectus et sapien auctor maximus. Cras eu sem eleifend, pharetra libero vitae, dignissim augue. Ut ante sapien, vestibulum vel odio nec, blandit commodo nisi. Donec tempus efficitur lectus ac congue. Suspendisse sed aliquam.</p>
                            <a href="" class="btn btn--secondary">Read More</a>
                        </div>

                        <div class="entry_content background-off-white l-padding-am l-margin-vm">
                            <h2>Water Usage</h2>

                            <div class="text-center">
                                <canvas id="lineChart" width="600" height="400"></canvas>

                                <script>
                                    var data = {
                                        labels: ["January", "February", "March", "April", "May", "June", "July"],
                                        datasets: [
                                            {
                                                label: "My First dataset",
                                                fillColor: "rgba(228,233,235,0.8)",
                                                strokeColor: "rgba(220,220,220,0.8)",
                                                highlightFill: "rgba(220,220,220,0.75)",
                                                highlightStroke: "rgba(220,220,220,1)",
                                                data: [65, 59, 80, 81, 56, 55, 40]
                                            },
                                            {
                                                label: "My Second dataset",
                                                fillColor: "rgba(0,152,219,1)",
                                                strokeColor: "rgba(0,0,0,1)",
                                                highlightFill: "rgba(255,255,255,1)",
                                                highlightStroke: "rgba(255,255,255,1)",
                                                data: [28, 48, 40, 19, 86, 27, 90]
                                            }
                                        ]
                                    };
                                </script>
                            </div>
                        </div>

                    </div> <!-- Nine columns -->

                </main>

            </div> <!-- row -->
            
        </div> <!-- l-constrained -->
        

<?php
require_once( ABSPATH . PARTIALS . '/template-footer.php' ); ?>