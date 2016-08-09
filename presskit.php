<!doctype html>
<html lang="en">
	<?php
		require_once 'php-i18n/i18n.class.php';
		$i18n = new i18n('lang/lang_{LANGUAGE}.ini', 'langcache/', 'zh');
		$i18n->init();
	?>

	<!--<p>Applied language: <?php echo $i18n->getAppliedLang(); ?> </p>-->
	<head>
		<title><?php echo L::title; ?></title>	
		<?php include('common_head.php'); ?>
	</head>

	<body id='presskit'>
		<div id='masthead'>
			<div class="container" style='height: 100%;position: relative;'>
				<?php include('common_nav.php'); ?>
				<div class="row">
					<header  class="col-lg-12" id="banner">
						<h1><?php echo L::presskit_title; ?></h1>
						<h2 class='subheader' style='display: none;'><?php echo L::subtagline; ?></h2>
						<div id='separator_container'>
							<span class="separator edge"></span>
							<span class="separator center"></span>
							<span class="separator edge"></span>
						</div>
					</header>
				</div>

			</div>
		</div>





		<div id='history'>
			<div class='container'>
				<div class="row">
					<div class="col-lg-6">
						<img src="http://placehold.it/1280x720?text=???">
					</div>
					<div class="col-lg-5">
						<h2 class='subheader'><?php echo L::presskit_title_history; ?></h2>
						<p><?php echo L::presskit_description_history; ?></p>
						<input type="submit" value="<?php echo L::presskit_button_timeline; ?>" class="btn">
					</div>
				</div>
			</div>
		</div>


		<div id='vision'>
			<div class='container'>
				<div class="row">
					<div class="col-lg-6">
						<h2 class='subheader'><?php echo L::presskit_title_vision; ?></h2>
						<p><?php echo L::about_description; ?></p>
					</div>
					<div class="col-lg-6">
						<h2 class='subheader'><?php echo L::presskit_title_how; ?></h2>
						<p><?php echo L::about_description; ?></p>
					</div>
				</div>
			</div>
		</div>


		
		<div id="key_focuses">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2><?php echo L::presskit_title_focus; ?></h2>
						<div id='separator_container' style='margin: 20px auto;'>
							<span class="separator edge dark"></span>
							<span class="separator center"></span>
							<span class="separator edge dark"></span>
						</div>
					</div>
				</div>
				<div class="row" style=''>
					<div class="col-lg-4">
						<img src="/img/cx_network.png">
						<h3><?php echo L::presskit_title_network; ?></h3>
						<div class='sep'></div>
						<p class='sub'><?php echo L::presskit_subtitle_network; ?></p>
						<p class='body'>Traditionally, sports games are broadcasted via TV, which has tremendous influence over exposure, scheduling and resources. Many of our sports teams suffer as a result of lack of exposure and transparency. In the internet era, we can now broadcast sports game online and provide live statistics at a unprecedented low cost and scalable way in order to create exposure for our student-athletes, enhance scheduling, and increase fan avidity and engagement in today’s mobile friendly world. </p>
					</div>
					<div class="col-lg-4">
						<img src="/img/cx_recruiting1.png">
						<h3><?php echo L::presskit_title_recruiting; ?></h3>
						<div class='sep'></div>
						<p class='sub'><?php echo L::presskit_subtitle_recruiting; ?></p>
						<p class='body'>Traditionally, sports games are broadcasted via TV, which has tremendous influence over exposure, scheduling and resources. Many of our sports teams suffer as a result of lack of exposure and transparency. In the internet era, we can now broadcast sports game online and provide live statistics at a unprecedented low cost and scalable way in order to create exposure for our student-athletes, enhance scheduling, and increase fan avidity and engagement in today’s mobile friendly world. </p>
					</div>
					<div class="col-lg-4">
						<img src="/img/cx_training.png">
						<h3><?php echo L::presskit_title_training; ?></h3>
						<div class='sep'></div>
						<p class='sub'><?php echo L::presskit_subtitle_training; ?></p>
						<p class='body'>Traditionally, sports games are broadcasted via TV, which has tremendous influence over exposure, scheduling and resources. Many of our sports teams suffer as a result of lack of exposure and transparency. In the internet era, we can now broadcast sports game online and provide live statistics at a unprecedented low cost and scalable way in order to create exposure for our student-athletes, enhance scheduling, and increase fan avidity and engagement in today’s mobile friendly world. </p>
					</div>
				</div>
			</div>
		</div>



		<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
				$("#days").countdown("2016/09/13", function(event) {
				  $(this).text(event.strftime('%D'));
				});
				$("#hours").countdown("2016/09/13", function(event) {
				  $(this).text(event.strftime('%H'));
				});
				$("#minutes").countdown("2016/09/13", function(event) {
				  $(this).text(event.strftime('%M'));
				});
				$("#seconds").countdown("2016/09/13", function(event) {
				  $(this).text(event.strftime('%S'));
				});

				$('.stream_modal').on('hidden.bs.modal', function () {
				    $(".stream_modal iframe").attr("src", $(".stream_modal iframe").attr("src"));
				});

			});		
		
		</script>
	</body>
</html>