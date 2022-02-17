<div id="wrap">
	<p class="img-center"><img src="<?=G5_M_URL?>/img/main/m.jpg?ver=<?=G5_IMG_VER?>" alt="" usemap="#image-map"></p>
	<div class="tnb">
		<?php if($is_member){?>
		<a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">회원정보</a> | 
		<a href="<?=G5_BBS_URL?>/logout.php">로그아웃</a>
		<?php } else { ?>
 		<a href="<?=G5_BBS_URL?>/register.php">회원가입</a> | 
		<a href="<?=G5_BBS_URL?>/login.php">로그인</a>
		<?php } ?>
	</div>
</div>

<map name="image-map">
	<?php if($is_member){?>
    <area target="" alt="" title="" href="<?=G5_URL?>/sub1.php?page=1" coords="403,2444,692,2524"  onclick="youtubeClick('mobile', '1');" shape="rect">
    <area target="" alt="" title="" href="<?=G5_URL?>/sub1.php?page=2" coords="405,3013,695,3092"  onclick="youtubeClick('mobile', '2');" shape="rect">
    <area target="" alt="" title="" href="<?=G5_URL?>/sub1.php?page=3" coords="408,3578,698,3657"  onclick="youtubeClick('mobile', '3');" shape="rect">
	<?php } else { ?>
    <area target="" alt="" title="" href="javascript:void(0);" onclick="javascript:alert('로그인 후 이용해 주세요.');" coords="403,2444,692,2524" shape="rect">
    <area target="" alt="" title="" href="javascript:void(0);" onclick="javascript:alert('로그인 후 이용해 주세요.');" coords="405,3013,695,3092" shape="rect">
    <area target="" alt="" title="" href="javascript:void(0);" onclick="javascript:alert('로그인 후 이용해 주세요.');" coords="408,3578,698,3657" shape="rect">
	<?php } ?>
</map>