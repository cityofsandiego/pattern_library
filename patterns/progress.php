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

                <h1>Progress Bar</h1>

                <ul class="progress">
                    <li class="progress__item">
                            <div class="progress__lining">
                            <a class="progress__link" href="#">
                                <span class="progress__num">1</span>
                                <span class="progress__label">Lorem</span>
                            </a>
                        </div>
                    </li><!--
                 --><li class="progress__item">
                        <div class="progress__lining">
                            <a class="progress__link" href="#">
                                <span class="progress__num">2</span>
                                <span class="progress__label">Ipsum</span>
                            </a>
                        </div>
                    </li><!--
                 --><li class="progress__item is-active">
                        <div class="progress__lining">
                            <a class="progress__link" href="#">
                                <span class="progress__num">3</span>
                                <span class="progress__label">Dolor Sit</span>
                            </a>
                        </div>
                    </li><!--
                 --><li class="progress__item">
                        <div class="progress__lining">
                            <a class="progress__link" href="#">
                                <span class="progress__num">4</span>
                                <span class="progress__label">Amet Consecteur</span>
                            </a>
                        </div>
                    </li>
                </ul>

                <p><strong>Notes</strong></p>
                <p>Each progress step is an &lt;li&gt; element. The active step gets the <strong>.is-active</strong> class.</p>

                <div class="code__examples l-margin-tm">
                <form><textarea class="pattern" id="comp-code-progress" name="code">
<ul class="progress">
    <li class="progress__item">
            <div class="progress__lining">
            <a class="progress__link" href="#">
                <span class="progress__num">1</span>
                <span class="progress__label">Lorem</span>
            </a>
        </div>
    </li>
    <li class="progress__item is-active">
        <div class="progress__lining">
            <a class="progress__link" href="#">
                <span class="progress__num">2</span>
                <span class="progress__label">Ipsum</span>
            </a>
        </div>
    </li>
    <li class="progress__item">
        <div class="progress__lining">
            <a class="progress__link" href="#">
                <span class="progress__num">3</span>
                <span class="progress__label">Dolor Sit</span>
            </a>
        </div>
    </li>
</ul>
</textarea> </form>
                </div>


            </div>
        </div>


<?php
require_once( ABSPATH . PARTIALS . '/footer.php' );
?>
