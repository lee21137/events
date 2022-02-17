<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_MOBILE_PATH.'/head.php');
?>
<style>
.youtube { 
	position: absolute;
    width: 79.5454vw;
    height: 47.4545vw;
    background: #ccc;
    left: 50%;
    top: 78.7272vw;
    margin-left: -39.9090vw;
	border-radius: 0.4545vw;
	overflow: hidden;
}
.youtube iframe { width: 100%; height: 100%; }
</style>
<div id="wrap">
	<div class="contents">
		<?php if($pageId==1){?>
		<img src="<?=G5_M_URL?>/img/sub/m31.jpg?ver=<?=G5_IMG_VER?>" alt="" style="width: 100%;"/>
		<div class="youtube">
			<iframe src="https://www.youtube.com/embed/0ZyqId_3PRY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php } ?>
	</div>
</div>

<?php
include_once(G5_MOBILE_PATH.'/tail.php');
?>
