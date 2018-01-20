<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Online Auto Booking Form a Responsive Widget Template :: w3layouts</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Online Auto Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
	<link href="gudang/frontend/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="gudang/frontend/css/jquery-ui.css" />
	<link href="gudang/frontend/css/style.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat+Alternates:200,400,500,600,700" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!--background-->
	<h1> <span>O</span>nline <span>A</span>uto <span>B</span>ooking <span>F</span>orm </h1>
	<div class="bg-agile">
		<div class="left-agileits-w3layouts-img">
			<h3>What we provide you</h3>
			<ul>
				<li><span>.</span>24x7 Cab service are available</li>
				<li><span>.</span>Online booking facility</li>
				<li><span>.</span>GPS Tracking system</li>
				<li><span>.</span>Credit and debit card payment facility</li>
			</ul>
			<p>- Your destination is our goal.</p>
		</div>
		<div class="book-appointment">
			<h2>Personal Details</h2>
			<div class="book-agileinfo-form">
				<form action="#" method="post">
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<input type="text" name="Name" placeholder="Full Name" required="">
						</div>
						<div class="agileits-btm-spc form-text2">
							<input type="text" name="Phone no" placeholder="Phone number" required="">
						</div>
					</div>
					<div class="agileits-btm-spc form-text">
						<input type="email" name="email" placeholder="Email" required="">
					</div>
					<div class="clear"></div>
					<h2 class="sub-head-w3ls">Booking Details</h2>
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<input id="datepicker" name="Text" type="text" placeholder="Pick-up Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
							    required="">
						</div>
						<div class="agileits-btm-spc form-text2">
							<input type="text" id="timepicker" name="Time" class="timepicker form-control" placeholder="Pick-up Time" value="">
						</div>
					</div>
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<input type="text" name="Pick-up Location" placeholder="Pick-up Location" required="">
						</div>
						<div class="agileits-btm-spc form-text2">
							<input type="text" name="Drop-off Location" placeholder="Drop-off Location" required="">
						</div>
					</div>

					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
												<option value="">No.of Passengers</option>
												<option value="">1</option>
												<option value="">2</option>
												<option value="">3</option>         
												<option value="">4</option>
												<option value="">5</option>
											</select>
						</div>
						<div class="agileits-btm-spc form-text2">
							<select id="country" onchange="change_country(this.value)" class="frm-field required">
												<option value="">Direction</option>
												<option value="">Only One Way</option>
												<option value="">Return</option>       
											</select>
						</div>
					</div>
					<div class="wthree-text">
						<h6>Select your Package</h6>
						<ul class="radio-w3ls">
							<li>
								<input type="radio" id="a-option" name="selector1">
								<label for="a-option">Regular</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="b-option" name="selector1">
								<label for="b-option">Pro</label>
								<div class="check">
									<div class="inside"></div>
								</div>
							</li>
							<li>
								<input type="radio" id="c-option" name="selector1">
								<label for="c-option">Advanced</label>
								<div class="check">
									<div class="inside"></div>
								</div>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
					<input type="submit" value="Submit">
					<input type="reset" value="Reset">
					<div class="clear"></div>
				</form>
			</div>

		</div>
	</div>
	<!--copyright-->
	<div class="copy-w3layouts">
		<p>&copy; 2018. Online Auto Booking Form . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a>			</p>
	</div>
	<!--//copyright-->
	<script type="text/javascript" src="gudang/frontend/js/jquery-2.2.3.min.js"></script>
	<!-- Time -->
	<script type="text/javascript" src="gudang/frontend/js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!--// Time -->
	<!-- Calendar -->
	<script src="gudang/frontend/js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

</body>

</html>