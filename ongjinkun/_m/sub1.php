<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_MOBILE_PATH.'/head.php');
?>

<div id="wrap">
	<div class="contents">
		<img src="<?=G5_M_URL?>/img/sub/m11.jpg?ver=<?=G5_IMG_VER?>" alt="" style="width: 100%;"/>
		<div class="box">
		<?php if($pageId == "1"){ ?>
		<iframe src="https://www.youtube.com/embed/<?=$config['cf_1']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<?php } else if($pageId == "2"){ ?>		
		<iframe src="https://www.youtube.com/embed/<?=$config['cf_2']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<?php } else if($pageId == "3"){ ?>		
		<iframe src="https://www.youtube.com/embed/<?=$config['cf_3']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<?php } ?>				
		</div>
	</div>
</div>

<?php
include_once(G5_MOBILE_PATH.'/tail.php');
?>
