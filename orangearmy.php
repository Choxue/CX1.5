<!doctype html>
<html lang="en">
	<?php
		require_once 'php-i18n/i18n.class.php';
		$i18n = new i18n('lang/lang_{LANGUAGE}.ini', 'langcache/', 'zh');
		$i18n->init();
	?>

	<!--<p>Applied language: <?php echo $i18n->getAppliedLang(); ?> </p>-->
	<head>
		<title><?php echo L::orange_army_name; ?> - <?php echo L::title; ?></title>
		<?php include('common_head.php'); ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.min.js"></script>

		<script>
			$(document).ready(function() {
				var scorerModel = function() {
					self = this;

					self.gsheet_basic = ko.mapping.fromJSON('[{"image":"","name":"","school":"","degree":"","rating":"", "gamecount": ""}]');

					self.gsheet_pro = ko.mapping.fromJSON('[{"image":"","name":"","school":"","degree":"","rating":"", "gamecount": ""}]');


					$.ajax({
						url:"https://spreadsheets.google.com/feeds/list/1YNKZO6sG7XmlQeuJLpR4waKX_IKKXdOSo749H8JYlDI/3/public/basic?alt=json&gid=952079158",
						cache: false
					}).done(function(data) {
							var rows = [];
							var cells = data.feed.entry;
							for (var i = 0; i < cells.length; i++){
							  var rowObj = {};
							  rowObj.image = cells[i].title.$t;
							  var rowCols = cells[i].content.$t.split(',');
							  for (var j = 0; j < rowCols.length; j++){
							    var keyVal = rowCols[j].split(':');
							    rowObj[keyVal[0].trim()] = keyVal[1].trim();
							  }
							  rows.push(rowObj);
							}

							ko.mapping.fromJS(rows, self.gsheet_basic);
							console.log(rows);
					});

					$.ajax({
						url:"https://spreadsheets.google.com/feeds/list/1YNKZO6sG7XmlQeuJLpR4waKX_IKKXdOSo749H8JYlDI/4/public/basic?alt=json&gid=952079158",
						cache: false
					}).done(function(data) {
							var rows = [];
							var cells = data.feed.entry;
							for (var i = 0; i < cells.length; i++){
							  var rowObj = {};
							  rowObj.image = cells[i].title.$t;
							  var rowCols = cells[i].content.$t.split(',');
							  for (var j = 0; j < rowCols.length; j++){
							    var keyVal = rowCols[j].split(':');
							    rowObj[keyVal[0].trim()] = keyVal[1].trim();
							  }
							  rows.push(rowObj);
							}

							console.log(rows);

							ko.mapping.fromJS(rows, self.gsheet_pro);

					});
				};
				 
				var myVM = new scorerModel();
				ko.applyBindings(myVM);


			});
		</script>

	</head>

	<body id='presskit'>
		<div id='masthead' style='min-height: 300px'>
			<div class="container" style='height: 100%;position: relative;'>
				<?php include('common_nav.php'); ?>
				<div class="row">
					<header  class="col-lg-12" id="banner" style='margin-top: 0;'>
						<h1><?php echo L::orange_army_name; ?></h1>
						<div id='separator_container'>
							<span class="separator edge"></span>
							<span class="separator center"></span>
							<span class="separator edge"></span>
						</div>
					</header>
				</div>

			</div>
		</div>
		<div id="history">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-push-2">
						<p style='line-height: 1.5;text-align:center;'><span class='bold cx_orange'><?php echo L::orange_army_name; ?></span> <?php echo L::orange_army; ?></p>
					</div>
				</div>


				<div class="row">
					<div class="col-lg-5 col-lg-push-1">
						<table class="table table-condensed orangearmy">
						  <thead>
						    <tr>
						      <th style='text-align: center;'><span class="label label-default">BASIC</span></th>
						      <th><?php echo L::name; ?></th>
						      <th><?php echo L::avg_rating; ?></th>
						    </tr>
						  </thead>
						  <tbody data-bind='foreach: gsheet_basic'>
						  	<tr>
							  	<td class='profile_pic'>
							  		<img data-bind='attr: {src: image}' style='max-width: 100px;text-align:right;padding-right:15px;'>
							  	</td>
							  	<td class='metadata'>
							  		<p data-bind='text: name' style='font-weight: bold;font-size:30px;margin:0;'></p>
							  		<p style='font-size:15px'>
							  			<span data-bind='text: school'></span><br>
							  			<span data-bind='text: degree'></span><br>
							  			<span class="label label-default">BASIC</span>
							  		</p>
							  	</td>
							  	<td class='metadata'>
							  		<p style='margin:0;'><span data-bind='text: gamecount'></span> Game<span data-bind='visible: parseInt(gamecount())>1'>s</span> filmed<br> <span data-bind='text: rating'></span> / 5</p>
							  		<i class="cx_orange fa fa-star" aria-hidden="true" data-bind='visible: parseInt(rating()) > 0'></i>
							  		<i class="cx_orange fa fa-star" aria-hidden="true" data-bind='visible: parseInt(rating()) > 1'></i>
							  		<i class="cx_orange fa fa-star" aria-hidden="true" data-bind='visible: parseInt(rating()) > 2'></i>
							  		<i class="cx_orange fa fa-star" aria-hidden="true" data-bind='visible: parseInt(rating()) > 3'></i>
							  		<i class="cx_orange fa fa-star" aria-hidden="true" data-bind='visible: parseInt(rating()) > 4'></i>
							  		<i class="cx_orange fa fa-star-o" aria-hidden="true" data-bind='visible: parseInt(rating()) <= 0'></i>
							  		<i class="cx_orange fa fa-star-o" aria-hidden="true" data-bind='visible: parseInt(rating()) <= 1'></i>
							  		<i class="cx_orange fa fa-star-o" aria-hidden="true" data-bind='visible: parseInt(rating()) <= 2'></i>
							  		<i class="cx_orange fa fa-star-o" aria-hidden="true" data-bind='visible: parseInt(rating()) <= 3'></i>
							  		<i class="cx_orange fa fa-star-o" aria-hidden="true" data-bind='visible: parseInt(rating()) <= 4'></i>
							  	</td>
							</tr>
						  </tbody>
						</table>
					</div>
					<div class="col-lg-5 col-lg-push-1">
						<table class="table table-condensed orangearmy">
						  <thead>
						    <tr>
						      <th style='text-align: center;'><span class="label label-danger">PRO</span></th>
						      <th><?php echo L::name; ?></th>
						      <th><?php echo L::avg_rating; ?></th>
						    </tr>
						  </thead>
						  <tbody data-bind='foreach: gsheet_pro'>
						  	<tr>
							  	<td class='profile_pic'>
							  		<img data-bind='attr: {src: image}' style='max-width: 100px;text-align:right;padding-right:15px;'>
							  	</td>
							  	<td class='metadata'>
							  		<p data-bind='text: name' style='font-weight: bold;font-size:30px;margin:0;'></p>
							  		<p style='font-size:15px'>
							  			<span data-bind='text: school'></span><br>
							  			<span data-bind='text: degree'></span><br>
							  			<span class="label label-danger">PRO</span>
							  		</p>
							  	</td>
							  	<td class='metadata'>
							  		<p style='margin:0;'><span data-bind='text: gamecount'></span> Game<span data-bind='visible: parseInt(gamecount())>1'>s</span> filmed<br> <span data-bind='text: rating'></span> / 5</p>
							  		<i class="cx_orange fa fa-star" aria-hidden="true" data-bind='visible: parseInt(rating()) > 0'></i>
							  		<i class="cx_orange fa fa-star" aria-hidden="true" data-bind='visible: parseInt(rating()) > 1'></i>
							  		<i class="cx_orange fa fa-star" aria-hidden="true" data-bind='visible: parseInt(rating()) > 2'></i>
							  		<i class="cx_orange fa fa-star" aria-hidden="true" data-bind='visible: parseInt(rating()) > 3'></i>
							  		<i class="cx_orange fa fa-star" aria-hidden="true" data-bind='visible: parseInt(rating()) > 4'></i>
							  		<i class="cx_orange fa fa-star-o" aria-hidden="true" data-bind='visible: parseInt(rating()) <= 0'></i>
							  		<i class="cx_orange fa fa-star-o" aria-hidden="true" data-bind='visible: parseInt(rating()) <= 1'></i>
							  		<i class="cx_orange fa fa-star-o" aria-hidden="true" data-bind='visible: parseInt(rating()) <= 2'></i>
							  		<i class="cx_orange fa fa-star-o" aria-hidden="true" data-bind='visible: parseInt(rating()) <= 3'></i>
							  		<i class="cx_orange fa fa-star-o" aria-hidden="true" data-bind='visible: parseInt(rating()) <= 4'></i>
							  	</td>
							</tr>
						  </tbody>
						</table>
					</div>

			

				</div>


				<div class="row">
					<div class="col-lg-6 col-lg-push-3">
						<div class="contact_container">
													<form action="https://formspree.io/cheng@choxue.com" method="POST" _lpchecked="1">
														<input type="text" name="name" placeholder="Name" style="height:30px;"><br>
													    <input type="email" name="_replyto" placeholder="Email" style="height: 30px"><br>
													    <textarea name="text" cols="40" rows="5" placeholder="Message" style="height: 90px"></textarea>
													    <input type="submit" value="SEND MESSAGE" class="btn">
													</form>

												</div>
					</div>
				</div>


			</div>
		</div>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</body>
</html>
