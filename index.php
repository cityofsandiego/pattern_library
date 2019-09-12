<?php
require_once( 'config.php' );
require_once( ABSPATH . PARTIALS . '/header.php' ); ?>

        <div class="l-constrained row patterns background-white l-padding-mobile-hd">
            <aside>
                <div class="three columns">
                    <?php require_once( ABSPATH . PARTIALS . '/patterns-nav.php' ); ?>
                </div>
            </aside>
            <div class="nine columns">
                <h1>Grid System</h1>
                <div class="sub__nav--library">
                    <ul class="sub__nav jump-scroll">
                        <li><a href="#grid-sizes">Grid Sizes</a></li>
                        <li><a href="#resp-cols">Responsive Columns</a></li>
                    </ul>
                </div>

                <div id="grid-sizes" class="l-container l-margin-tm">
                    <p>The grid system is composed of 12 columns with a gutter between columns of .33%. We apply border-box so that the border and padding is included in the width of the grid columns.</p>

                    <h2>Grid Sizes</h2>
                    <h3>1 of 1</h3>
                    <div class="row text-center">
                        <div class="twelve columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/1 - 12 columns</p>
                        </div>
                    </div>

                    <h3>1 of 2</h3>
                    <div class="row text-center">
                        <div class="six columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/2 - 6 columns</p>
                        </div>
                        <div class="six columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/2 - 6 columns</p>
                        </div>
                    </div>

                    <h3>1 of 3</h3>
                    <div class="row text-center">
                        <div class="four columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/3 - 4 columns</p>
                        </div>
                        <div class="four columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/3 - 4 columns</p>
                        </div>
                        <div class="four columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/3 - 4 columns</p>
                        </div>
                    </div>

                    <h3>1 of 4</h3>
                    <div class="row text-center">
                        <div class="three columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/4 - 3 columns</p>
                        </div>
                        <div class="three columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/4 - 3 columns</p>
                        </div>
                        <div class="three columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/4 - 3 columns</p>
                        </div>
                        <div class="three columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">1/4 - 3 columns</p>
                        </div>
                    </div>
                </div>

                <div class="l-container l-margin-vl">
                    <div class="row">
                        <div class="twelve columns">
                            <div class="code__examples">
                                <form><textarea class="pattern" id="code" name="code">
<!-- Full width -->
<div class="row">
    <div class="twelve columns">
        <p>12 columns</p>
    </div>
</div>

<!-- 2 Equal columns -->
<div class="row">
    <div class="six columns">
        <p>6 columns</p>
    </div>
    <div class="six columns">
        <p>6 columns</p>
    </div>
</div>

<!-- 4 Equal columns -->
<div class="row">
    <div class="three columns">
        <p>3 columns</p>
    </div>
    <div class="three columns">
        <p>3 columns</p>
    </div>
    <div class="three columns">
        <p>3 columns</p>
    </div>
    <div class="three columns">
        <p>3 columns</p>
    </div>
</div></textarea> </form> </div>
                        </div>
                    </div>


                    <div id="resp-cols" class="row l-margin-tm">
                        <div class="twelve columns">
                            <h2>Responsive Columns</h2>
                            <p>The grid layout is loosely based on <a href="http://foundation.zurb.com/" target="_blank">Foundation</a>.</p>
                            <p>Columns will break down to 100% width at tablet viewport width (768px); to utilize column widths at viewports smaller than this, prefix the class name with 'sm-'.</p>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="sm-four columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">4 small columns</p>
                        </div>
                        <div class="sm-eight columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">8 small columns - will keep width constraints, even on small screens.</p>
                        </div>
                    </div>

                    <div class="row l-margin-tm">
                        <div class="twelve columns">
                            <p>These classes can be mixed and matched for different widths on smaller and larger screens.</p>
                        </div>
                    </div>

                    <div class="row text-center l-margin-vd">
                        <div class="sm-six four columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">6 small columns, 4 large columns</p>
                        </div>
                        <div class="sm-six four columns background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">6 small columns, 4 large columns</p>
                        </div>
                        <div class="sm-twelve four columns l-margin-mobile-td background-off-white l-padding-vd">
                            <p class="background--dark text-white l-margin-bn l-padding-vd">12 small columns, 4 large columns</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="twelve columns">
                            <div class="code__examples">
                                <form><textarea class="pattern" id="index-code-2" name="code">
<div class="row">
    <div class="sm-six four columns">
        <p class="l-margin-bn border l-padding-ad">6 small columns, 4 large columns</p>
    </div>
    <div class="sm-six four columns">
        <p class="l-margin-bn border l-padding-ad">6 small columns, 4 large columns</p>
    </div>
    <div class="sm-twelve four columns">
        <p class="l-margin-bn border l-padding-ad">12 small columns, 4 large columns</p>
    </div>
</div></textarea> </form> </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>