<?php
require_once './lib/Mobile_Detect.php';
$dateTime = new DateTime();
$timeStamp = $dateTime->format('Ymd-His');
$detect = new Mobile_Detect;
$devicetype = $detect->isMobile() ? '_m' : '_pc';
$imageSize = $detect->isMobile() ? '960px' : '1920px';
// echo "<script>console.log( 'PHP_Console: " . $devicetype . "' );</script>";

$page = $_GET['page'];
//홍보영상()
$youtubeLink = "s4m__5GXf_I";
if ($page == '2') {
	$youtubeLink = "5IafbMOMPy4";
	// [옹진군 DMZ 평화관광 서비스 아카데미] CS교육(2차) - 관광객 서비스의 중요성
} else if ($page == '3') {
	$youtubeLink = "0a8vDmqWmGU";
	// [옹진군 DMZ 평화관광 서비스 아카데미] CS교육(3차) - 관광 서비스의 변화
} else if ($page == '4') {
	$youtubeLink = "6puNVCzJFKo";
	// [옹진군 DMZ 평화관광 서비스 아카데미] 주민 디지털 역량 강화 교육
} else if ($page == '5') {
	$youtubeLink = "UFTOMLTnHyw";
}
?>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta http-equiv="imagetoolbar" content="no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>옹진군 평화관광 | 2022 옹진군 DMZ 평화관광 서비스아카데미</title>
	<link rel="stylesheet" href="/css/default.css?ver=<?= $timeStamp ?>">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/_font/NotoSansKR.css?ver=<?= $timeStamp ?>">
	<link rel="stylesheet" href="/<?= $devicetype ?>/css/common.css?ver=<?= $timeStamp ?>">
	<link rel="stylesheet" href="/<?= $devicetype ?>/css/sub.css?ver=<?= $timeStamp ?>">
	<script src="//code.jquery.com/jquery.min.js"></script>

</head>
<div id="wrap">
	<div class="contents">
		<?php if ($devicetype == "_pc") { ?>
			<img src="/<?= $devicetype ?>/img/sub/detail.jpg?ver=<?= $timeStamp ?>" alt="영상상세페이지-이미지" width="<?= $imageSize ?>" />
			<div stlye="absolte">asdsadasdsas</div>
		<?php } else if ($devicetype == "_m") { ?>
			<img src="/<?= $devicetype ?>/img/sub/detail.jpg?ver=<?= $timeStamp ?>" alt="영상상세페이지-이미지" width="100%" />
		<?php } ?>

		<div class="box">
			<iframe src="https://www.youtube.com/embed/<?= $youtubeLink ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</div>
<script src="_pc/js/imageMapResizer.min.js"></script>
<script>
	$('map').imageMapResize();
</script>

</html>