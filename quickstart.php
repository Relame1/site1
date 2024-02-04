<!doctype html>
<html lang="en-US">
<head>
<title>Классификация и сферы</title>
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
<?php
if (@include_once("lib/compat/objects/Build.php"))
	$build = Build::get_latest();
?>
</head>
<body>
<?php include 'lib/module/sys-php.php';?>
<div class="page-con-content">
	<div class="banner-con-container darkmode-header">
		<div id="object-particles">
		</div>
		<div class="wavebar-con-container">
			<div class="wavebar-con-wrap">
				<div class="wavebar-svg-object">
				</div>
				<div class="wavebar-svg-object">
				</div>
			</div>
		</div>
		<div class='banner-con-title fade-up-onstart'>
			<div class='banner-tx1-title fade-up-onstart pulsate'>
				<h1>Квалификация и сферы</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class="banner-tx2-title fade-up-onstart">
				<p>
					 Здесь вы узнаете об 3 основных квалификациях и сферах
				</p>
			</div>
		</div>
	</div>
	<div class="page-con-container">
		<div class="page-in-container">
			<?php include 'lib/module/quickstart/inc-quickstart-device-inputs.php';?>
		</div>
	</div>
	<div class="page-con-content">
		<div class="page-con-container">
			<div class="page-in-container">
				<?php include 'lib/module/quickstart/inc-quickstart-device-laptop.php';?>
			</div>
		</div>
	</div>
	<div class="page-con-content darkmode-slimbar" style="background:#f7f7f7">
		<div class="page-con-container">
			<div class="page-in-container">
				<?php include 'lib/module/quickstart/inc-quickstart-device-mac.php';?>
			</div>
		</div>
	</div>
	<div class="page-con-content">
		<div class="page-con-container">
			<div class="page-in-container">
				<?php include 'lib/module/quickstart/inc-quickstart-device-handheld.php';?>
			</div>
		</div>
	</div>
</div>
</body>
</html>