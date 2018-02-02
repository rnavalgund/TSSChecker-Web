<?php
if (isset($_GET['device']) && trim($_GET['device']) != '') {
    $device = htmlentities($_GET['device'], ENT_QUOTES);
} else {
    $device = '';
}

if (isset($_GET['version']) && trim($_GET['version']) != '') {
    $version = htmlentities($_GET['version'], ENT_QUOTES);
} else {
    $version = '';
}

if (isset($_GET['boardconfig']) && trim($_GET['boardconfig']) != '') {
    $boardconfig = htmlentities($_GET['boardconfig'], ENT_QUOTES);
} else {
    $boardconfig = '';
}

if ($device != '' && $version != '' && $boardconfig != '') {
    $title =  $device.' - '.$version;
    $allargsset = true;
} else {
    $title = 'TTSChecker :: bad device info';
    $allargsset = false;
}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta name="viewport" content="width=device-width">
	<title><?php echo $title ?></title>
	<style>
	body {
		margin: 0;
		font-family: arial;
	}
	.navbar {
		color: white;
		background-color: black;
		width: 100%;
		text-align: center;
		font-family: arial;
		box-shadow: 0px 0px 2px 2px lightgray;
		padding: 16px 0px;
	}
	.status {
		width: 100%;
		background-color: limegreen;
		text-align: center;
		color: white;
		font-family: arial;
		padding: 16px 0px;
		box-shadow: 0px 0px 2px 2px lightgray;
	}
	.bottom {
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
<?php
if (!$allargsset) {
    echo 'Missing device information.';
} else {
    echo 'Signing status for <strong>'.$device.'</strong> on <strong>'.$version.'</strong><br>';

    $output = shell_exec('./tsschecker/tsschecker_macos -d '.escapeshellarg($device).' --boardconfig '.escapeshellarg($boardconfig).' -i '.escapeshellarg($version));
    $arr1 = explode(PHP_EOL, $output);
    end($arr1);
    $arr2 = prev($arr1);
    print_r($arr2);
}
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
