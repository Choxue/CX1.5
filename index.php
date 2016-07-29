<!doctype html>
<html lang="en">
	<?php
		require_once 'php-i18n/i18n.class.php';
		$i18n = new i18n('lang/lang_{LANGUAGE}.ini', 'langcache/', 'zh');
		$i18n->init();
	?>

	<!--<p>Applied Language: <?php echo $i18n->getAppliedLang(); ?> </p>-->
	<head>
		<meta charset="UTF-8">
		<title><?php echo L::title; ?></title>	

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">			
		<link rel="stylesheet/less" type="text/css" href="style.less"/>
		<link id="favicon" rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

		<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
		<script src="jquery.countdown.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

 		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
 		<meta name="description" content="<?php echo L::about_description; ?>" />

		<!--[if lt IE 9]><script src="http://xy-kao.com/theme/new/html5shiv.js"></script><![endif]-->
		<script type="text/javascript">
		  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.1.0";
		  analytics.load("MNApaC2NfkCAdEj06fXTjNmJvnr8R5eS");
		  analytics.page()
		  }}();
		</script>

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
				$("#days").countdown("2016/09/25", function(event) {
				  $(this).text(event.strftime('%D'));
				});
				$("#hours").countdown("2016/09/25", function(event) {
				  $(this).text(event.strftime('%H'));
				});
				$("#minutes").countdown("2016/09/25", function(event) {
				  $(this).text(event.strftime('%M'));
				});
				$("#seconds").countdown("2016/09/25", function(event) {
				  $(this).text(event.strftime('%S'));
				});

				$('.stream_modal').on('hidden.bs.modal', function () {
				    $(".stream_modal iframe").attr("src", $(".stream_modal iframe").attr("src"));
				});

			});		
		
		</script>
	</head>

	<body>
		<div id='masthead'>
			<div class="container" style='height: 100%;position: relative;'>
				
				<div id='mobile_nav'>
					<button class="nav-button">&nbsp;</button>
					<ul class="primary-nav">
						<li><a href='#masthead' class='active'><?php echo L::nav_home; ?></a></li>
						<li><a href='#aboutCX'><?php echo L::nav_about; ?></a></li>
						<li><a href='#countdown'><?php echo L::nav_tournament_CX; ?></a></li>  
						<li><a href='#schedule'><?php echo L::nav_schedule; ?></a></li>
						<li><a href='#team'><?php echo L::nav_team; ?></a></li> 
						<li><a href='#contact'><?php echo L::nav_contact; ?></a></li>
					</ul>
				</div>


				<div class="nav" id='desktop-navbar'>  
					<div class="internalNav">
						<a href='#masthead' class='active'><?php echo L::nav_home; ?></a>  
						<a href='#aboutCX'><?php echo L::nav_about; ?></a>  
						<a href='#countdown'><?php echo L::nav_tournament_CX; ?></a>  
						<a href='#schedule'><?php echo L::nav_schedule; ?></a>  
						<a href='#team'><?php echo L::nav_team; ?></a>
						<a href='#contact'><?php echo L::nav_contact; ?></a>  
					</div>
					<div class="" id='menuFade'>
						<div class="sprite cx-badge"></div>
					</div>				
			    </div>


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
				<div class="row" id='button_container' >
					<div class="col-lg-6 col-lg-push-3">
							<button type='button' class='btn btn-primary youtube' data-toggle="modal" data-target=".stream_modal"><?php echo L::watch_live_button; ?></button>
							<button type='button' class='btn btn-secondary schedule'><?php echo L::schedule_button; ?></button>
					</div>
				</div>
				<div class="row" id='social_media_container' >
					<div class="col-lg-6 col-lg-push-3">
						<a href="https://facebook.com/choxue"><img src="img/facebook.png"></a>
						<a href="https://www.instagram.com/choxue/"><img src="img/instagram.png"></a>
						<a href="https://www.youtube.com/c/CHOXUE%E7%90%83%E5%AD%B8/"><img src="img/youtube.png"></a>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade stream_modal" tabindex="-1" role="dialog" aria-labelledby="streamModal">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		  		<div class='embed-container'><iframe src='https://www.youtube.com/embed/YFdkBaCvLog?enablejsapi=1' frameborder='0' allowfullscreen></iframe></div>
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
						<div class="row press">.
							<a href="http://www.appledaily.com.tw/appledaily/article/sports/20130723/35169057/"><img src="img/media-appledaily.jpg"></a>
							<a href="http://www.businessinsider.com/choxue-brings-sports-talent-to-china-2015-2"><img src="img/media-businessinsider.png"></a>
							<a href="http://goodtv.tv/uploads/2016/04/2600e03dde6cabca.pdf"><img src="img/media-goodtv.png"></a>
							<a href="http://www.sportsv.net/articles/28077"><img src="img/media-sportsv.jpg"></a>

						</div>
					</div>
				</div>
			</div>
		</div>


		<div id="countdown">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2><?php echo L::tournament_CX; ?></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-lg-push-3">
						<p><?php echo L::tournament_CX_description; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div id='separator_container'>
							<span class="separator edge"></span>
							<span class="separator center"></span>
							<span class="separator edge"></span>
						</div>
						<div class="countdown_text">
							<div>
								<h3 id='days'>48</h3>
								<h4><?php echo L::days; ?></h4>
							</div>
							<div>
								<h3 id='hours'>48</h3>
								<h4><?php echo L::hours; ?></h4>
							</div>
							<div>
								<h3 id='minutes'>48</h3>
								<h4><?php echo L::minutes; ?></h4>
							</div>
							<div>
								<h3 id='seconds'>48</h3>
								<h4><?php echo L::seconds; ?></h4>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="schedule">
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
						<img src="img/basketball.jpg">
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
					<div class="col-lg-1 col-md-2 col-sm-4 col-xs-4">
						<div class="person">
							<img src="img/nobody.jpg">
							<h3>Cheng</h3>
							<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-4 col-xs-4">
						<div class="person">
							<img src="img/nobody.jpg">
							<h3>Jerro</h3>
							<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-4 col-xs-4">
						<div class="person">
							<img src="img/nobody.jpg">
						<h3>Tmac</h3>
						<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-4 col-xs-4">
						<div class="person">
							<img src="img/nobody.jpg">
							<h3>Jagger</h3>
							<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-4 col-xs-4">
						<div class="person">
							<img src="img/nobody.jpg">
							<h3>Watson</h3>
							<p>Bio</p>

						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-4 col-xs-4">
						<div class="person">
							<img src="img/woman.jpg">
						<h3>Bonny</h3>
						<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-4 col-xs-4">
						<div class="person">
							<img src="img/profile.jpg">
							<h3>Xiao</h3>
							<p>Bio</p>

						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-4 col-xs-4">
						<div class="person">
							<img src="img/andy.jpg">
							<h3>Andy</h3>
							<p>Bio</p>

						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-4 col-xs-4">
						<div class="person">
							<img src="img/nobody.jpg">
						<h3>Marcus</h3>
						<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-4 col-xs-4">
						<div class="person">
							<img src="img/woman.jpg">
							<h3>Jenny</h3>
							<p>Bio</p>
						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-4 col-xs-4">
						<div class="person">
							<img src="img/nobody.jpg">
						<h3>Jason</h3>
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
							<form action="https://formspree.io/contact@choxue.com" method="POST">
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




	</body>
</html>