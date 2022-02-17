<?php
require_once './lib/Mobile_Detect.php';
$dateTime = new DateTime();
$timeStamp = $dateTime->format('Ymd-His');
$detect = new Mobile_Detect;
// $isMobile = $detect->isMobile();
////예제소스를 호출하는 웹브라우져가 모바일인지 아닌지를 체크함(1:모바일, 2:PC 등)
$devicetype = $detect->isMobile() ? '_m' : '_pc';

echo "<script>console.log( 'PHP_Console: " . $devicetype . "' );</script>";

$page = $_GET['page'];

$youtubeLink = "L3-w1RAt_rg";
if ($page == '2') {
	$youtubeLink = "oZkMVKCF-Bs";
} else if ($page == '3') {
	$youtubeLink = "NXYrKqojovc";
}
?>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta http-equiv="imagetoolbar" content="no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>DMZ평화관광 | 2021 DMZ 강화군 평화관광 서비스선진화사업</title>
	<link rel="stylesheet" href="/css/default.css?ver=<?= $timeStamp ?>">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/_font/NotoSansKR.css?ver=<?= $timeStamp ?>">
	<link rel="stylesheet" href="/<?= $devicetype ?>/css/common.css?ver=<?= $timeStamp ?>">
	<link rel="stylesheet" href="/<?= $devicetype ?>/css/sub.css?ver=<?= $timeStamp ?>">

</head>
<div id="wrap">
	<div class="contents">
		<img src="/<?= $devicetype ?>/img/sub/11.jpg?ver=<?= $timeStamp ?>" alt="" />
		<div class="box">
			<iframe src="https://www.youtube.com/embed/<?= $youtubeLink ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</div>

</html>