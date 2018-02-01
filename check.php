<?php
if(isset($_GET['device']) && isset($_GET['version']) && isset($_GET['boardconfig'])) {
$device = htmlspecialchars($_GET['device']);
$version = htmlspecialchars($_GET['version']);
$boardconfig = htmlspecialchars($_GET['boardconfig']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name = "viewport" content = "width = device-width">

	<title><?php echo $device; ?> - <?php echo $version; ?></title>
	<style>
	body{
		margin: 0;
		font-family: arial;
	}
	.navbar{
		color: white;
		background-color: black;
		width: 100%;
		text-align: center;
		font-family: arial;
		box-shadow: 0px 0px 2px 2px lightgray;
		padding: 16px 0px;
	}
	.status{
		width: 100%;
		background-color: limegreen;
		text-align: center;
		color: white;
		font-family: arial;
		padding: 16px 0px;
		box-shadow: 0px 0px 2px 2px lightgray;
	}
	.bottom{
		right: 0;
 		bottom: 0;
 		left: 0;
 		position: absolute;
	}
</style>
</head>
<body>
	<div class="navbar">TSSChecker - Web</div>
	<br>
	<br>
<div class="status"><center>
Signing status for <?php echo $device; ?> on <?php echo $version; ?><br>
$output = shell_exec('./tsschecker/tsschecker_macos -d '.$device.' --boardconfig '.$boardconfig.' -i '.$version.'');
$arr1 = explode(PHP_EOL, $output);
end($arr1);
$arr2 = prev($arr1);
print_r($arr2);
?>
</center>
</div>
<div class="bottom">
<center>
	Copyright © DanielD3V, 2018<br>
TSSChecker - Web is licensed under MIT License
</center>
</div>
</body>
</html>
<?php
}
?>
