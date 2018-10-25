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


                    <div class="l-container l-padding-hd l-margin-vm background-off-white">

                        <div class="row">
                            <div class="three columns push-nine no-gutters">
                                <div class="l-margin-vd">
                                    <form action="" method="post" id="search-block-form" class="form--search" accept-charset="UTF-8">
                                        <div><div class="l-container">
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
                                                                <div class="view-item view-item-events_calendar">
                                                                    <div class="calendar.1142.field_date.0.0 calendar monthview">
                                                                        <div class="l-padding-hs event-red">
                                                                            <a href="https://www.sandiego.gov/city-clerk/officialdocs/legisdocs/brown-act" target="_blank">Committee Meeting</a>
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
                                                                <div class="view-item view-item-events_calendar">
                                                                    <div class="calendar.1142.field_date.0.0 calendar monthview">
                                                                        <div class="l-padding-hs">
                                                                            Independence Day (Observed)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td id="event_calendar-2015-07-04" class="sat past has-no-events">
                                                            <div class="inner"><div class="month day"> 4 </div>
															
                                                                <div class="view-item view-item-events_calendar">
                                                                    <div class="calendar.1142.field_date.0.0 calendar monthview">
                                                                        <div class="l-padding-hs">
                                                                            Independence Day
                                                                        </div>
                                                                    </div>
                                                                </div>
															</div></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="event_calendar-2015-07-05" class="sun past has-no-events"><div class="inner"><div class="month day"> 5 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-06" class="mon past has-no-events"><div class="inner"><div class="month day"> 6 </div>
                                                                <div class="view-item view-item-events_calendar">
                                                                    <div class="calendar.1142.field_date.0.0 calendar monthview">
                                                                        <div class="l-padding-hs event-cerulean">
                                                                            <a href="https://www.sandiego.gov/city-clerk/officialdocs/legisdocs/brown-act" target="_blank">Council Meeting</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
														
														</div></td>
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
                                                            </div>
                                                        </td>
                                                        <td id="event_calendar-2015-07-15" class="wed past has-no-events"><div class="inner"><div class="month day"> 15 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-16" class="thu past has-no-events"><div class="inner"><div class="month day"> 16 </div>
														
                                                                <div class="view-item view-item-events_calendar">
                                                                    <div class="calendar.1142.field_date.0.0 calendar monthview">
                                                                        <div class="l-padding-hs event-sunshade">
                                                                            A City-Sponsored Event
                                                                        </div>
                                                                    </div>
                                                                </div>
														</div></td>
                                                        <td id="event_calendar-2015-07-17" class="fri past has-no-events"><div class="inner"><div class="month day"> 17 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-18" class="sat past has-no-events"><div class="inner"><div class="month day"> 18 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="event_calendar-2015-07-19" class="sun past has-no-events"><div class="inner"><div class="month day"> 19 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-20" class="mon past has-no-events"><div class="inner"><div class="month day"> 20 </div><div class="calendar-empty">&nbsp;</div></div></td>
                                                        <td id="event_calendar-2015-07-21" class="tue past has-no-events"><div class="inner"><div class="month day"> 21 </div>
														
									<div class="view-item view-item-events_calendar">
										<div class="calendar.1142.field_date.0.0 calendar monthview">
											<div class="l-padding-hs event-cerulean">
												<a href="https://www.sandiego.gov/city-clerk/officialdocs/legisdocs/brown-act" target="_blank">Council Meeting</a>
											</div>
										</div>
									</div>
														</div></td>
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

                    <div class="l-container">
					
					
					<div class="row l-margin-vd">
					
					
						<div id="cal-tabs" class="tabs">
						
							<ul class="tabs-list js-tabs-list">
								<li class="tabs-list__item is-active"><a class="tabs-list__link" href="#cal-tab-item-1">Code</a></li>
								<li class="tabs-list__item"><a class="tabs-list__link" href="#cal-tab-item-2">Color Coding</a></li>
							</ul>

							<div class="tabs-container">

								<div id="cal-tab-item-1" class="tabs__bucket is-active">
									<div class="code__examples">
										<form><textarea class="pattern" id="cal-code" name="code">
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
									<div class="view-item view-item-events_calendar">
										<div class="calendar.1142.field_date.0.0 calendar monthview">
											<div class="l-padding-hs event-red">
												<a href="https://www.sandiego.gov/city-clerk/officialdocs/legisdocs/brown-act" target="_blank">Committee Meeting</a>
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
									<div class="view-item view-item-events_calendar">
										<div class="calendar.1142.field_date.0.0 calendar monthview">
											<div class="l-padding-hs">
												Independence Day (Observed)
											</div>
										</div>
									</div>
								</div>
							</td>

							<td id="event_calendar-2015-07-04" class="sat past has-no-events">
								<div class="inner"><div class="month day"> 4 </div>
								
									<div class="view-item view-item-events_calendar">
										<div class="calendar.1142.field_date.0.0 calendar monthview">
											<div class="l-padding-hs">
												Independence Day
											</div>
										</div>
									</div>
								</div></td>
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
										</textarea></form>
									</div>
            					</div>

								<!--<div id="vid-emb-tab-item-2" class="tabs__bucket">
									<p>Coming soon.</p>
								</div>-->

								<div id="cal-tab-item-2" class="tabs__bucket is-active">
								<p>Class names:</p>
									<p style="border-left: 5px solid #0098db" class="l-padding-ls">event-cerulean</p>
									<p style="border-left: 5px solid #00c7b2" class="l-padding-ls">event-robin</p>
									<p style="border-left: 5px solid #ffa02f" class="l-padding-ls">event-sunshade</p>
									<p style="border-left: 5px solid #fcd900" class="l-padding-ls">event-schoolbus</p>
									<p style="border-left: 5px solid #37424a" class="l-padding-ls">event-spruce</p>
									<p style="border-left: 5px solid #009581" class="l-padding-ls">event-teal</p>
									<p style="border-left: 5px solid #0065b2" class="l-padding-ls">event-endeavour</p>
									<p style="border-left: 5px solid #551a8b" class="l-padding-ls">event-purple</p>
									<p style="border-left: 5px solid #659f13" class="l-padding-ls">event-success</p>
									<p style="border-left: 5px solid #c51313" class="l-padding-ls">event-red</p>
								</div>

							</div>

						</div>
					
					</div>	
					
					
					
					
					
                        <div class="row">
                            <div class="twelve columns">
                                
                            </div>
                        </div>
                    </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>
<script type="text/javascript">
$( document ).ready(function() {
	$(".tabs__bucket").removeClass("is-active");
	$(".tabs-container div:first-child").addClass("is-active");

	$(".popup-modal").click(function() {
		var href = $(this).attr('href');
		$(href+" iframe").attr("src", $(href+" iframe").attr("src").replace("autoplay=0", "autoplay=1")); //make the video autoplay after popup
	});
	
	$.magnificPopup.instance.close = function () {
	  $(".mfp-container iframe").attr("src", $(".mfp-container iframe").attr("src").replace("autoplay=1", "autoplay=0")); //remove autoplay when popup is closed
       // "proto" variable holds MagnificPopup class prototype
       // The above change that we did to instance is not applied to the prototype, 
       // which allows us to call parent method:
       $.magnificPopup.proto.close.call(this);
	};	
});
</script>