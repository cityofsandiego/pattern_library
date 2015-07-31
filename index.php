<?php
require_once( 'config.php' );
require_once( ABSPATH . PARTIALS . '/header.php' ); ?>

        <div class="l-constrained row patterns">
            <aside>
                <div class="three columns">
                    <?php require_once( ABSPATH . PARTIALS . '/patterns-nav.php' ); ?>
                </div>
            </aside>
            <div class="nine columns">
                <h1>Grid System</h1>
                <div class="sub__nav--wrap">
                    <ul class="sub__nav">
                        <li>Grid Sizes</li>
                        <li>Grid Gutter</li>
                        <li>Mixed Grids</li>
                        <li>Responsive Columns</li>
                        <li>Nested Grids</li>
                    </ul>
                </div>

                <div class="l-container l-margin-tm">
                    <p>The grid system is composed of 12 columns with a gutter between columns of .33%. We apply border-box so that the border and padding is included in the width of the grid columns.</p>

                    <h2>Grid Sizes</h2>
                    <h3>1 of 1</h3>
                    <div class="row text-center">
                        <div class="twelve columns background-off-white">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/1 - 12 columns</p>
                        </div>
                    </div>

                    <h3>1 of 2</h3>
                    <div class="row text-center">
                        <div class="six columns background-off-white">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/2 - 6 columns</p>
                        </div>
                        <div class="six columns background-off-white">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/2 - 6 columns</p>
                        </div>
                    </div>

                    <h3>1 of 3</h3>
                    <div class="row text-center">
                        <div class="four columns background-off-white">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/3 - 4 columns</p>
                        </div>
                        <div class="four columns background-off-white">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/3 - 4 columns</p>
                        </div>
                        <div class="four columns background-off-white">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/3 - 4 columns</p>
                        </div>
                    </div>

                    <h3>1 of 4</h3>
                    <div class="row text-center">
                        <div class="three columns background-off-white">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/4 - 3 columns</p>
                        </div>
                        <div class="three columns background-off-white">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/4 - 3 columns</p>
                        </div>
                        <div class="three columns background-off-white">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/4 - 3 columns</p>
                        </div>
                        <div class="three columns background-off-white">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/4 - 3 columns</p>
                        </div>
                    </div>
                </div>

                <div class="l-container l-margin-vl">
                    <div class="row">
                        <div class="twelve columns">
                            <div class="code__examples">
                                <form><textarea id="code" name="code">
<%
function hello(who) {
    return "Hello " + who;
}
%>
This is an example of EJS (embedded javascript)
<p>The program says <%= hello("world") %>.</p>
<script>
    alert("And here is some normal JS code"); // also colored
</script></textarea> </form> </div>
                        </div>
                    </div>
                    <div class="row l-margin-tm">
                        <div class="twelve columns">
                            <p><strong>Notes</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="l-container l-margin-vl">
                    <h2>Grid Gutter</h2>
                </div>

                <div class="l-container l-margin-vl">
                    <h2>Mixed Grids</h2>
                </div>

                <div class="l-container l-margin-vl">
                    <h2>Responsive Columns</h2>
                </div>

                <div class="l-container l-margin-vl">
                    <h2>Nested Grids</h2>
                </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>