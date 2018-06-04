<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>0x4c.se</title>
	<link rel="icon" type="image/png" href="ikon.png">
	<link rel="stylesheet" type="text/css" href="stilmall.css">
</head>
<body>
	<div id="helheten">
	<?php
		set_include_path(".:/usr/share/phpqrcode");
		include("qrlib.php");
		
		$repliker = file("repliker.txt");
		$replik = $repliker[array_rand($repliker)];
		
		$rutkod = QRcode::svg($replik, "rutkod", false, QR_ECLEVEL_L, 500);
		
		echo $rutkod;
	?>
	</div>
</body>
