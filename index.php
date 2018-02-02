

<!DOCTYPE html>
<html>
<head>
	<meta name = "viewport" content = "width = device-width">
	<title>TSS Web</title>
	<style>
	body{
		margin: 0;
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
	.btn{
		width: 100%;
		background-color: white;
		text-align: center;
		color: black;
		font-family: arial;
		border-top: 1px lightgray solid;
		padding: 16px 0px;
	}
	.btn_bottom{
		width: 100%;
		background-color: white;
		text-align: center;
		color: black;
		font-family: arial;
		border-top: 1px lightgray solid;
		border-bottom: 1px lightgray solid;
		padding: 16px 0px;
	}
	a{
		text-decoration: none;
		color: black;
	}
</style>
</head>
<body>
	<div class="navbar">
	TSSChecker - Web
	</div>
	<br>

	<!-- iPhone 10,1 iPhone 8 -->
	<a href="check.php?device=iPhone10,1&boardconfig=d20ap&version=11.2.5">
	<div class="btn">
	<center>
	iPhone10,1, iOS 11.2.5
	</center>
	</div>

<!-- iPhone 10,4 iPhone 8 -->
	<a href="check.php?device=iPhone10,1&boardconfig=d201ap&version=11.2.5">
	<div class="btn">
	<center>
	iPhone10,4, iOS 11.2.5
	</center>
	</div>
	
	<!-- iPhone 8,4 iPhone SE -->
	<a href="check.php?device=iPhone8,4&boardconfig=n69uap&version=11.2.5">
	<div class="btn">
	<center>
	iPhone8,4, iOS 11.2.5
	</center>
	</div>
	
	<!-- iPhone 9,1 iPhone 7 -->
	<a href="check.php?device=iPhone9,1&boardconfig=d10ap&version=11.2.5">
	<div class="btn_bottom">
	<center>
	iPhone 9,1, iOS 11.2.5 
	</center>
	</div>
	
	<!-- iPhone 8,1 iPhone 6s (TSMC) -->
	<a href="check.php?device=iPhone8,1&boardconfig=n71map&version=11.2.5">
	<div class="btn_bottom">
	<center>
	iPhone 8,1, iOS 11.2.5 
	</center>
	</div>

	<!-- iPhone 8,1 iPhone 6s (Samsung) -->
	<a href="check.php?device=iPhone8,1&boardconfig=n71ap&version=11.2.5">
	<div class="btn_bottom">
	<center>
	iPhone 8,1, iOS 11.2.5 
	</center>
	</div>

	<!-- iPhone 9,2 iPhone 7 Plus -->
	<a href="check.php?device=iPhone9,1&boardconfig=d11ap&version=11.2.5">
	<div class="btn_bottom">
	<center>
	iPhone 9,2, iOS 11.2.5 
	</center>
	</div>

	<!-- iPhone 9,4 iPhone 7 Plus -->
	<a href="check.php?device=iPhone9,4&boardconfig=d111ap&version=11.2.5">
	<div class="btn_bottom">
	<center>
	iPhone 9,4, iOS 11.2.5 
	</center>
	</div>

	<!-- iPhone 9,3 iPhone 7 -->
	<a href="check.php?device=iPhone9,3&boardconfig=d101ap&version=11.2.5">
	<div class="btn_bottom">
	<center>
	iPhone 9,3, iOS 11.2.5 
	</center>
	</div>

</div>
</body>
</html>
