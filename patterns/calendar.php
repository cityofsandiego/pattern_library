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

                <main>

                    <div class="l-container l-padding-hd l-margin-vm background-off-white">

                        <div class="row">
                            <div class="three columns push-nine no-gutters">
                                <div class="l-margin-vd">
                                    <form action="" method="post" id="search-block-form" class="form--search" accept-charset="UTF-8">
                                        <div><div class="container-inline">
                                            <h2 class="visuallyhidden">Search form</h2>
                                            <div class="form-item form-type-textfield form-item-search-block-form">
                                                <label class="visuallyhidden" for="edit-search-block-form--2">Search</label>
                                                <input title="Enter the terms you wish to search for." type="search" id="search-block-form--2" name="search_block_form" value="" placeholder="Search All Events" size="15" maxlength="128" class="form-text">
                                            </div>
                                            <div class="form-actions form-wrapper" id="edit-actions">
                                                <input type="submit" id="edit-submit" name="op" value="Search" class="form-submit">
                                            </div>
                                            <input type="hidden" name="form_build_id" value="">
                                            <input type="hidden" name="form_id" value="search_block_form">
                                        </div></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="calendar__wrap">
                                <div id="event-calendar-calendar-page" class="calendar">
                                    <div class="view-content">
                                        <div class="calendar-calendar">
                                            <div class="date-nav clear-block row">
                                                <div class="date-prev one columns">
                                                    <span class="next views-summary"> <a href="https://www.stemcell.ucla.edu/calendar/2015-06" title="Navigate to previous month" rel="nofollow" class="samewindow">« Prev</a></span>
                                                </div>
                                                <div class="date-heading text-center ten columns">
                                                    <h3>July 2015</h3>
                                                </div>
                                                <div class="date-next one columns text-right">
                                                    <span class="next views-summary"> <a href="https://www.stemcell.ucla.edu/calendar/2015-08" title="Navigate to next month" rel="nofollow" class="samewindow">Next »</a></span>
                                                </div>
                                            </div>
                                            <a href="/calendar" class="mask"></a>
                                        </div>
                                    </div>
                                    <div class="attachment attachment-after">
                                      <div class="calendar-calendar">
                                        <div class="month-view">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="days sun">Sun</th>
                                                        <th class="days mon">Mon</th>
                                                        <th class="days tue">Tue</th>
                                                        <th class="days wed">Wed</th>
                                                        <th class="days thu">Thu</th>
                                                        <th class="days fri">Fri</th>
                                                        <th class="days sat">Sat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td id="event_calendar-2015-06-28" class="sun empty">
                                                            <div class="inner"><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-06-29" class="mon empty">
                                                            <div class="inner"><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-06-30" class="tue empty">
                                                            <div class="inner"><div class="calendar-empty">&nbsp;</div></div></td>

                                                        <td id="event_calendar-2015-07-01" class="wed past has-events">
                                                            <div class="inner">
                                                                <div class="month day"> 1 </div>
                                                                <div class="view-item view-item-event_calendar">
                                                                    <div class="calendar.1142.field_date.0.0 calendar monthview">
                                                                        <div class="view-field view-data-node-title node-title">
                                                                            <a href="https://www.stemcell.ucla.edu/bscrc-seminar-featuring-fernando-carmargo-phd-0" target="_blank">BSCRC Seminar featuring Fernando Carmargo, PhD</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td id="event_calendar-2015-07-02" class="thu past has-no-events">
                                                            <div class="inner"><div class="month day"> 2 </div><div class="calendar-empty">&nbsp;</div></div></td>

                                                        <td id="event_calendar-2015-07-03" class="fri past has-events">
                                                            <div class="inner">
                                                                <div class="month day"> 3 </div>
                                                                <div class="view-item view-item-event_calendar">
                                                                    <div class="calendar.1142.field_date.0.0 calendar monthview">
                                                                        <div class="view-field view-data-node-title node-title">
                                                                            <a href="https://www.stemcell.ucla.edu/bscrc-seminar-featuring-fernando-carmargo-phd-0" target="_blank">BSCRC Seminar featuring Fernando Carmargo, PhD</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td id="event_calendar-2015-07-04" class="sat past has-no-events">
                                                            <div class="inner"><div class="month day"> 4 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="event_calendar-2015-07-05" class="sun past has-no-events"><div class="inner"><div class="month day"> 5 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-06" class="mon past has-no-events"><div class="inner"><div class="month day"> 6 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-07" class="tue past has-no-events"><div class="inner"><div class="month day"> 7 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-08" class="wed past has-no-events"><div class="inner"><div class="month day"> 8 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-09" class="thu past has-no-events"><div class="inner"><div class="month day"> 9 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-10" class="fri past has-no-events"><div class="inner"><div class="month day"> 10 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-11" class="sat past has-no-events"><div class="inner"><div class="month day"> 11 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="event_calendar-2015-07-12" class="sun past has-no-events"><div class="inner"><div class="month day"> 12 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-13" class="mon past has-no-events"><div class="inner"><div class="month day"> 13 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-14" class="tue past has-events">
                                                            <div class="inner">
                                                                <div class="month day"> 14 </div>
                                                                <div class="view-item view-item-event_calendar">
                                                                    <div class="calendar.1142.field_date.0.0 calendar monthview">
                                                                        <div class="view-field view-data-node-title node-title">
                                                                            <a href="https://www.stemcell.ucla.edu/bscrc-seminar-featuring-fernando-carmargo-phd-0" target="_blank">BSCRC Seminar featuring Fernando Carmargo, PhD</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td id="event_calendar-2015-07-15" class="wed past has-no-events"><div class="inner"><div class="month day"> 15 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-16" class="thu past has-no-events"><div class="inner"><div class="month day"> 16 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-17" class="fri past has-no-events"><div class="inner"><div class="month day"> 17 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-18" class="sat past has-no-events"><div class="inner"><div class="month day"> 18 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="event_calendar-2015-07-19" class="sun past has-no-events"><div class="inner"><div class="month day"> 19 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-20" class="mon past has-no-events"><div class="inner"><div class="month day"> 20 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-21" class="tue past has-no-events"><div class="inner"><div class="month day"> 21 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-22" class="wed past has-no-events"><div class="inner"><div class="month day"> 22 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-23" class="thu past has-no-events"><div class="inner"><div class="month day"> 23 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-24" class="fri past has-no-events"><div class="inner"><div class="month day"> 24 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-25" class="sat past has-no-events"><div class="inner"><div class="month day"> 25 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="event_calendar-2015-07-26" class="sun past has-no-events"><div class="inner"><div class="month day"> 26 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-27" class="mon past has-no-events"><div class="inner"><div class="month day"> 27 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-28" class="tue past has-no-events"><div class="inner"><div class="month day"> 28 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-29" class="wed past has-no-events"><div class="inner"><div class="month day"> 29 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-30" class="thu past has-no-events"><div class="inner"><div class="month day"> 30 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-31" class="fri past has-no-events"><div class="inner"><div class="month day"> 31 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-08-01" class="sat empty">
                                                            <div class="inner">
                                                                <div class="calendar-empty">&nbsp;</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>