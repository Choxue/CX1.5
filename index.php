<!doctype html>
<html lang="en">
	<?php
		require_once 'php-i18n/i18n.class.php';
		$i18n = new i18n('lang/lang_{LANGUAGE}.ini', 'langcache/', 'zh');
		$i18n->init();
	?>
	
	<!--<p>Applied language: <?php echo $i18n->getAppliedLang(); ?> </p>-->
	
	<head>
		<!-- <script src="https://www.youtube.com/iframe_api"></script> -->
		<title><?php echo L::title; ?></title>	
		<?php include('common_head.php'); ?>
	</head>

	<body>
		<div id='masthead'>
			<div class="container" style='height: 100%;position: relative;'>
				<?php include('common_nav.php'); ?>

				<div class="row">
					<header  class="col-lg-12" id="banner">
						<div id='h1_container'>
							<h1><?php echo L::tagline; ?></h1>
						</div>
						<div id='separator_container'>
							<span class="separator edge"></span>
							<span class="separator center"></span>
							<span class="separator edge"></span>
						</div>
						<h2><?php echo L::subtagline; ?></h2>
					</header>
				</div>
				<!--
				<div class="row" id='button_container' >
					<div class="col-lg-6 col-lg-push-3">
							<button type='button' class='btn btn-primary youtube' data-toggle="modal" data-target=".stream_modal"><?php echo L::watch_live_button; ?></button>
							<a href="http://cxi.choxue.com/" type='button' class='event'><?php echo L::schedule_button; ?></a>
					</div>
				</div>-->
				<div class="row" id='social_media_container' >
					<div class="col-lg-6 col-lg-push-3">
						<a href="https://facebook.com/choxue"><img src="/img/facebook.png"></a>
						<a href="https://www.instagram.com/choxue/"><img src="/img/instagram.png"></a>
						<a href="https://www.youtube.com/c/CHOXUE%E7%90%83%E5%AD%B8/"><img src="/img/youtube.png"></a>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade stream_modal" tabindex="-1" role="dialog" aria-labelledby="streamModal">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		  		<div class='embed-container'>
		  			<!-- <iframe src='https://www.youtube.com/embed/ubW1Uw0BO6Q?enablejsapi=1' frameborder='0' allowfullscreen></iframe> -->
		  		</div>
		    </div>
		  </div>
		</div>









		<div id='laolao' style='display: none;'>
			<div class='container'>
				<div class="row">
					<div class="col-lg-8 col-lg-push-2">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-lg-push-2">
						<h2><?php echo L::tournament_name; ?></h2>
						<iframe id='gspreadsheet' src='https://docs.google.com/spreadsheets/d/13Uy592BuB-NyLjXZ8N21SSFfK8sVnpTrEuo-E_V9nqY/pubhtml/sheet?headers=false&gid=0&range=a1:j51' frameborder='0'></iframe>
					</div>
				</div>
			</div>
		</div>

		<div id='aboutCX'>
			<div class='container'>
				<div class="row">
					<div class="col-lg-6">
						<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
						<iframe src='https://player.vimeo.com/video/<?php echo L::vimeo_ID; ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
					</div>
					<div class="col-lg-5">
						<h2><?php echo L::about_title; ?></h2>
						<p><?php echo L::about_description; ?></p>
					</div>
				</div>
			</div>
		</div>



		<div id="featured">
			<div class="container">
				<div class="row" id='headroom'>
					<div class="col-lg-12">
						<h2></h2>
					</div>
				</div>
				<!-- <div id="live-game" style=''></div> -->
				<div class="row">
					<div class="col-lg-8 col-lg-push-2 quote">
						<h3><i class="fa fa-quote-left" aria-hidden="true"></i> <?php echo L::featured_joe_quote; ?> <i class="fa fa-quote-right" aria-hidden="true"></i></h3>
						<h4 class='name'><?php echo L::featured_joe_name; ?></h4>
						<h4 class='name position'><?php echo L::featured_joe_title; ?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-6 col-sm-6 col-lg-push-1 quote">
						<h3><i class="fa fa-quote-left" aria-hidden="true"></i> <?php echo L::featured_blackie_quote; ?> <i class="fa fa-quote-right" aria-hidden="true"></i></h3>
						<h4 class='name'><?php echo L::featured_blackie_name; ?></h4>
						<h4 class='name position'><?php echo L::featured_blackie_title; ?></h4>
					</div>
					<div class="col-lg-5 col-md-6 col-sm-6 col-lg-push-1 quote">
						<h3><i class="fa fa-quote-left" aria-hidden="true"></i> <?php echo L::featured_richard_quote; ?> <i class="fa fa-quote-right" aria-hidden="true"></i></h3>
						<h4 class='name'><?php echo L::featured_richard_name; ?></h4>
						<h4 class='name position'><?php echo L::featured_richard_title; ?></h4>
					</div>
				</div>
				<div class="row" style='margin-top:30px;'>
					<div class="col-lg-8 col-lg-push-2">
						<div id="button_container">
							<button type='button' class='btn btn-primary youtube' data-toggle="modal" data-target=""><a href="http://www.choxue.com/presskit"><?php echo L::nav_press_kit; ?></a></button>
							<button type='button' class='btn btn-primary youtube' data-toggle="modal" data-target=""><a href="http://www.choxue.com/pressrelease"><?php echo L::nav_press_release; ?></a></button>
						</div>
					</div>
				</div>
				<div class="row" style='margin-top:30px;'>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 col-md-push-1 col-lg-push-1">
						<a target="_blank" href="http://www.nbcnews.com/news/asian-america/harvard-grad-cheng-ho-wants-fix-taiwan-s-high-school-n656406"><img src="/img/media_logos/nbc_news.png" alt="" class='media_logo'></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 col-md-push-1 col-lg-push-1">
						<a target="_blank" href="http://www.forbes.com/sites/ralphjennings/2016/09/13/weary-of-over-studious-asians-this-taiwanese-ceo-tempts-them-with-sports/"><img src="/img/media_logos/forbes.png" alt="" class='media_logo'></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 col-md-push-1 col-lg-push-1">
						<a target="_blank" href="http://www.businessinsider.com/choxue-brings-sports-talent-to-china-2015-2"><img src="/img/media_logos/business_insider.png" alt="" class='media_logo'></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 col-md-push-1 col-lg-push-1">
						<a target="_blank" href="http://chronicle.augusta.com/sports/college/2016-10-22/michaux-former-evans-player-cheng-ho-trying-bridge-gap-between-sports"><img src="/img/media_logos/augusta_chronicle.png" alt="" class='media_logo'></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 col-md-push-1 col-lg-push-1">
						<a target="_blank" href="http://tv.cctv.com/2016/09/29/VIDE4n30insuK1TZQnwptzxk160929.shtml"><img src="/img/media_logos/cctv5.png" alt="" class='media_logo'></a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 col-md-push-1 col-lg-push-1">
						<a target="_blank" href="http://www.businesstoday.com.tw/article-content-80417-159089"><img src="/img/media_logos/business_today.png" alt="" class='media_logo'></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 col-md-push-1 col-lg-push-1">
						<a target="_blank" href="http://yzzk.com/cfm/content_archive.cfm?id=1476934094031&docissue=2016-43"><img src="/img/media_logos/yazhouzhoukan.png" alt="" class='media_logo'></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 col-md-push-1 col-lg-push-1">
						<a target="_blank" href="http://www.bnext.com.tw/article/41351/choxue-cheng-ho-got-seed-fuding-from-joseph-tsai"><img src="/img/media_logos/business_next.png" alt="" class='media_logo'></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 col-md-push-1 col-lg-push-1">
						<a target="_blank" href="https://www.youtube.com/watch?v=VEj8qLcAHME&t=1790s"><img src="/img/media_logos/goodtv.png" alt="" class='media_logo'></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 col-md-push-1 col-lg-push-1">
						<a target="_blank" href="https://www.youtube.com/watch?v=ZFCvIXmgER0"><img src="/img/media_logos/tvbs_.png" alt="" class='media_logo'></a>
					</div>
				</div>
			</div>
		</div>



		<div id="countdown">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2><?php echo L::tournament_CX; ?></h2>
						<h3 class="hideOnTimesUp"><?php echo L::tournament_CX_subtitle; ?></h3>
					</div>
				</div>
				<!-- <div id="live-game" style=''></div> -->
				<div class="row">
					<div class="col-lg-6 col-lg-push-3">
						<p><?php echo L::tournament_CX_description; ?></p>
						<div id="button_container">
							<button type='button' class='btn btn-primary youtube' data-toggle="modal" data-target=""><a target="_blank" href="http://clan.choxue.com/"><?php echo L::tournament_CX; ?></a></button>
						</div>
					</div>
				</div>
				<div class="row hideOnTimesUp" style='display:none;'>
					<div class="col-lg-12">
						<div id='separator_container'>
							<span class="separator edge"></span>
							<span class="separator center"></span>
							<span class="separator edge"></span>
						</div>
						<div class="countdown_text">
							<div>
								<h3 id='days'>--</h3>
								<h4><?php echo L::days; ?></h4>
							</div>
							<div>
								<h3 id='hours'>--</h3>
								<h4><?php echo L::hours; ?></h4>
							</div>
							<div>
								<h3 id='minutes'>--</h3>
								<h4><?php echo L::minutes; ?></h4>
							</div>
							<div>
								<h3 id='seconds'>--</h3>
								<h4><?php echo L::seconds; ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="schedule" style='display:none;'>
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h2><?php echo L::upcoming_schedule; ?></h2>
						<div class="event">
							<h3><?php echo L::event_1_name; ?></h3>
							<h4><?php echo L::event_1_date; ?></h4>
							<h4><?php echo L::event_1_location; ?></h4>
						</div>
						<div class="event">
							<h3><?php echo L::event_2_name; ?></h3>
							<h4><?php echo L::event_2_date; ?></h4>
							<h4><?php echo L::event_2_location; ?></h4>
						</div>
						<div class="event">
							<h3><?php echo L::event_3_name; ?></h3>
							<h4><?php echo L::event_3_date; ?></h4>
							<h4><?php echo L::event_3_location; ?></h4>
						</div>
					</div>
					<div class="col-lg-6">
						<img src="/img/basketball.jpg">
					</div>
				</div>
			</div>
		</div>

		

		<div id="team">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2><?php echo L::meet_us; ?></h2>
						<div id='separator_container'>
							<span class="separator edge"></span>
							<span class="separator center"></span>
							<span class="separator edge"></span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-push-3 col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<div class="person">
							<img src="/img/cheng.jpg">
							<h3>Cheng</h3>
							<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-push-3 col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<div class="person">
							<img src="/img/jero.jpg">
							<h3>Jero</h3>
							<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-push-3 col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<div class="person">
							<img src="/img/tmac.jpg">
						<h3>Tmac</h3>
						<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-push-3 col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<div class="person">
							<img src="/img/jagger.jpg">
							<h3>Jagger</h3>
							<p>Bio</p>
						</div>
					</div>
					
					<div class="col-lg-push-3 col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<div class="person">
							<img src="/img/bonny.jpg">
						<h3>Bonny</h3>
						<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-push-3 col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<div class="person">
							<img src="/img/xiao.jpg">
							<h3>Xiao</h3>
							<p>Bio</p>

						</div>
					</div>
				
					</div>
					<div class='row'>
				
					<div class="col-lg-push-3 col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<div class="person">
							<img src="/img/pierce.jpg">
							<h3>Pierce</h3>
							<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-push-3 col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<div class="person">
							<img src="/img/david.jpg" style='filter: saturate(0.75);'>
						<h3>David</h3>
						<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-push-3 col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<div class="person">
							<img src="/img/awill.jpg" style='filter: saturate(0.85);'>
						<h3>Awill</h3>
						<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-push-3 col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<div class="person">
							<img src="/img/amber.jpg" style='filter: saturate(0.75);'>
						<h3>Amber</h3>
						<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-push-3 col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<div class="person">
							<img src="/img/stanie.jpg">
						<h3>Stanie</h3>
						<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-push-3 col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<div class="person">
							<img src="/img/andy.jpg">
						<h3>Andy</h3>
						<p>Bio</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2><?php echo L::say_hello; ?></h2>
						<div id='separator_container'>
							<span class="separator edge"></span>
							<span class="separator center"></span>
							<span class="separator edge"></span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-lg-push-1">
						<div class='contact_container'>
							<h3><?php echo L::our_address; ?></h3>
							<p><?php echo L::address; ?></p>
							<h3><?php echo L::call_us; ?></h3>
							<p>+886-2-2361-3639</p>
							<h3><?php echo L::email_us; ?></h3>
							<p>contact@choxue.com</p>
						</div>
					</div>
					<div class="col-lg-6 col-lg-push-1">
						<div class='contact_container'>
							<form action="https://formspree.io/media@choxue.com" method="POST">
								<input type="text" name="name" placeholder=<?php echo L::placeholder_name; ?> style='height:30px;'><br>
							    <input type="email" name="_replyto" placeholder=<?php echo L::placeholder_email; ?> style='height: 30px'><br>
							    <textarea name="text" cols="40" rows="5" placeholder=<?php echo L::placeholder_message; ?> style='height: 90px'></textarea>
							    <input type="submit" value="<?php echo L::send_message_button; ?>" class='btn'>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>



		<script src="//cdn.bootcss.com/jquery/3.1.0/jquery.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script>
		/**
		 * @author       Rob W <gwnRob@gmail.com>
		 * @website      http://stackoverflow.com/a/7513356/938089
		 * @version      20131010
		 * @description  Executes function on a framed YouTube video (see website link)
		 *               For a full list of possible functions, see:
		 *               https://developers.google.com/youtube/js_api_reference
		 * @param String frame_id The id of (the div containing) the frame
		 * @param String func     Desired function to call, eg. "playVideo"
		 *        (Function)      Function to call when the player is ready.
		 * @param Array  args     (optional) List of arguments to pass to function func*/
		function callPlayer(frame_id, func, args) {
		    if (window.jQuery && frame_id instanceof jQuery) frame_id = frame_id.get(0).id;
		    var iframe = document.getElementById(frame_id);
		    if (iframe && iframe.tagName.toUpperCase() != 'IFRAME') {
		        iframe = iframe.getElementsByTagName('iframe')[0];
		    }

		    // When the player is not ready yet, add the event to a queue
		    // Each frame_id is associated with an own queue.
		    // Each queue has three possible states:
		    //  undefined = uninitialised / array = queue / 0 = ready
		    if (!callPlayer.queue) callPlayer.queue = {};
		    var queue = callPlayer.queue[frame_id],
		        domReady = document.readyState == 'complete';

		    if (domReady && !iframe) {
		        // DOM is ready and iframe does not exist. Log a message
		        window.console && console.log('callPlayer: Frame not found; id=' + frame_id);
		        if (queue) clearInterval(queue.poller);
		    } else if (func === 'listening') {
		        // Sending the "listener" message to the frame, to request status updates
		        if (iframe && iframe.contentWindow) {
		            func = '{"event":"listening","id":' + JSON.stringify(''+frame_id) + '}';
		            iframe.contentWindow.postMessage(func, '*');
		        }
		    } else if (!domReady ||
		               iframe && (!iframe.contentWindow || queue && !queue.ready) ||
		               (!queue || !queue.ready) && typeof func === 'function') {
		        if (!queue) queue = callPlayer.queue[frame_id] = [];
		        queue.push([func, args]);
		        if (!('poller' in queue)) {
		            // keep polling until the document and frame is ready
		            queue.poller = setInterval(function() {
		                callPlayer(frame_id, 'listening');
		            }, 250);
		            // Add a global "message" event listener, to catch status updates:
		            messageEvent(1, function runOnceReady(e) {
		                if (!iframe) {
		                    iframe = document.getElementById(frame_id);
		                    if (!iframe) return;
		                    if (iframe.tagName.toUpperCase() != 'IFRAME') {
		                        iframe = iframe.getElementsByTagName('iframe')[0];
		                        if (!iframe) return;
		                    }
		                }
		                if (e.source === iframe.contentWindow) {
		                    // Assume that the player is ready if we receive a
		                    // message from the iframe
		                    clearInterval(queue.poller);
		                    queue.ready = true;
		                    messageEvent(0, runOnceReady);
		                    // .. and release the queue:
		                    while (tmp = queue.shift()) {
		                        callPlayer(frame_id, tmp[0], tmp[1]);
		                    }
		                }
		            }, false);
		        }
		    } else if (iframe && iframe.contentWindow) {
		        // When a function is supplied, just call it (like "onYouTubePlayerReady")
		        if (func.call) return func();
		        // Frame exists, send message
		        iframe.contentWindow.postMessage(JSON.stringify({
		            "event": "command",
		            "func": func,
		            "args": args || [],
		            "id": frame_id
		        }), "*");
		    }
		    /* IE8 does not support addEventListener... */
		    function messageEvent(add, listener) {
		        var w3 = add ? window.addEventListener : window.removeEventListener;
		        w3 ?
		            w3('message', listener, !1)
		        :
		            (add ? window.attachEvent : window.detachEvent)('onmessage', listener);
		    }
		}

			$(document).ready(function() {
				var player;

				$('.internalNav a').click(function(){
					$('html, body').animate({
				        scrollTop: $( $(this).attr('href') ).offset().top
				    }, 300, 'swing');
				    return false;
				});

				$('.primary-nav a').click(function(){
				    $('html, body').animate({
				        scrollTop: $( $(this).attr('href') ).offset().top
				    }, 300, 'swing');
				    return false;
				});

				$(".nav-button").click(function () {
					$(".nav-button,.primary-nav").toggleClass("open");
				});

				$('#live-game').hide();

				$("#days").countdown("2016/09/29 13:30:00", function(event) {
				  $(this).text(event.strftime('%D'));
				});
				$("#hours").countdown("2016/09/29 13:30:00", function(event) {
				  $(this).text(event.strftime('%H'));
				});
				$("#minutes").countdown("2016/09/29 13:30:00", function(event) {
				  $(this).text(event.strftime('%M'));
				});
				$("#seconds").countdown("2016/09/29 13:30:00", function(event) {
					if(event.type === "finish") {
						$("#live-game").show();
						$(".hideOnTimesUp").hide();
						//onYouTubeIframeAPIReady();
					}
				  $(this).text(event.strftime('%S'));
				}).on('finish.countdown', function(){
						$("#live-game").show();
						$(".hideOnTimesUp").hide();
						//onYouTubeIframeAPIReady();
					});

				$('.stream_modal').on('hidden.bs.modal', function () {
				    $(".stream_modal iframe").attr("src", $(".stream_modal iframe").attr("src"));
				});

			});

	
			function onYouTubeIframeAPIReady() {
			  var player;
			  player = new YT.Player('live-game', {
			    videoId: 'ubW1Uw0BO6Q',
			    width: 560,
			    height: 316,
			    playerVars: {
			      autoplay: 1,
			      controls: 1,
			      showinfo: 0,
			      loop: 1,
			      iv_load_policy: 3,  // Hide the Video Annotations
			      autohide: 0         // Hide video controls when playing
			    },
			    events: {
			      onReady: function(e) {
			        e.target.mute();
			      }
			    }
			  });
			}

		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-84827874-1', 'auto');
		  ga('send', 'pageview');

		
		</script>
	</body>
</html>