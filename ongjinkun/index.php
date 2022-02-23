<?php
require_once './lib/Mobile_Detect.php';
$dateTime = new DateTime();
$timeStamp = $dateTime->format('Ymd-His');
$detect = new Mobile_Detect;
// 웹브라우져 체크(1:모바일, 2:PC 등)
$devicetype = $detect->isMobile() ? '_m' : '_pc';
// echo "<script>console.log( 'PHP_Console: " . $devicetype . "' );</script>";

?>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta http-equiv="imagetoolbar" content="no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>옹진군 평화관광 | 2022 옹진군 DMZ 평화관광 서비스아카데미</title>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/_font/NotoSansKR.css?ver=<?= $timeStamp ?>">
	<link rel="stylesheet" href="/css/default.css?ver=<?= $timeStamp ?>">
	<link rel="stylesheet" href="/<?= $devicetype ?>/css/common.css?ver=<?= $timeStamp ?>">
	<link rel="stylesheet" href="/<?= $devicetype ?>/css/main.css?ver=<?= $timeStamp ?>">
	<script src="//code.jquery.com/jquery.min.js"></script>
</head>

<body>
	<div id="wrap">
		<p class="img-center">
			<?php if ($devicetype == "_pc") { ?>
				<img src="/_pc/img/main/pc.jpg?ver=<?= $timeStamp ?>" alt="pc.jpg" usemap="#image-map" style="width: 1920px">
				<map name="image-map">
					<area target="_blank" alt="" title="" href="./sub1.php?page=1" coords="1028,4106,1610,4244" shape="rect">
					<area target="_blank" alt="" title="" href="./sub1.php?page=2" coords="1713,4109,2306,4246" shape="rect">
					<area target="_blank" alt="" title="" href="./sub1.php?page=3" coords="1363,5188,1953,5330" shape="rect">
					<area target="_blank" alt="" title="" href="./sub1.php?page=4" coords="1361,6290,1963,6436" shape="rect">
					<area target="_blank" alt="" title="" href="./sub1.php?page=5" coords="1356,7372,1956,7515" shape="rect">
				</map>
			<?php } else if ($devicetype == "_m") { ?>
				<img src="/_m/img/main/m.jpg?ver=<?= $timeStamp ?>" alt="m.jpg" usemap="#image-map" style="width: 100%; ">
				<map name="image-map">
					<area target="_blank" alt="" title="" href="./sub1.php?page=1" coords="183,4067,818,4289" shape="rect">
					<area target="_blank" alt="" title="" href="./sub1.php?page=2" coords="869,4068,1518,4296" shape="rect">
					<area target="_blank" alt="" title="" href="./sub1.php?page=3" coords="550,5172,1160,5355" shape="rect">
					<area target="_blank" alt="" title="" href="./sub1.php?page=4" coords="542,6287,1164,6444" shape="rect">
					<area target="_blank" alt="" title="" href="./sub1.php?page=5" coords="543,7370,1160,7530" shape="rect">
				</map>
			<?php } ?>
		</p>
	</div>
	<script src="/js/imageMapResizer.min.js"></script>
	<script>
		$('map').imageMapResize();
	</script>
</body>

</html>