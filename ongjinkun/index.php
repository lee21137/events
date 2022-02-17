<!-- 
	/sub1.php?page=3 lee21137/lee21137
	http://dmzpeacetourism.com/
	http://maschek.hu/imagemap/imgmap/
-->
<?php
require_once './lib/Mobile_Detect.php';
$dateTime = new DateTime();
$timeStamp = $dateTime->format('Ymd-His');
$detect = new Mobile_Detect;
//예제소스를 호출하는 웹브라우져가 모바일인지 아닌지를 체크함(1:모바일, 2:PC 등)
$devicetype = $detect->isMobile() ? '_m' : '_pc';

echo "<script>console.log( 'PHP_Console: " . $devicetype . "' );</script>";
?>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta http-equiv="imagetoolbar" content="no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>2022 서비스선진화사업</title>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/_font/NotoSansKR.css?ver=<?= $timeStamp ?>">
	<link rel="stylesheet" href="/css/default.css?ver=<?= $timeStamp ?>">
	<link rel="stylesheet" href="/<?= $devicetype ?>/css/common.css?ver=<?= $timeStamp ?>">
	<link rel="stylesheet" href="/<?= $devicetype ?>/css/main.css?ver=<?= $timeStamp ?>">
	<link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body>
	<div id="wrap">
		<p class="img-center">
			<?php if ($devicetype == "_pc") { ?>
				<img src="/_pc/img/main/pc.jpg?ver=<?= $timeStamp ?>" alt="" usemap="#image-map">
				<map name="image-map">
					<area target="_blank" alt="" title="" href="./sub1.php?page=1" coords="820,2447,1112,2522" shape="rect">
					<area target="_blank" alt="" title="" href="./sub1.php?page=2" coords="815,3012,1105,3088" shape="rect">
					<area target="_blank" alt="" title="" href="./sub1.php?page=3" coords="820,3581,1108,3654" shape="rect">
				</map>
			<?php } else if ($devicetype == "_m") { ?>
				<img src="/_m/img/main/m.jpg?ver=<?= $timeStamp ?>" alt="" usemap="#image-map">
				<map name="image-map" id="imgObj">
					<area target="_blank" alt="" title="" href="/sub1.php?page=1" coords="390,2434,711,2530" shape="rect">
					<area target="_blank" alt="" title="" href="/sub1.php?page=2" coords="378,2998,709,3098" shape="rect">
					<area target="_blank" alt="" title="" href="/sub1.php?page=3" coords="381,3557,715,3671" shape="rect">
				</map>
				</map>
			<?php } ?>
		</p>
	</div>
</body>

</html>