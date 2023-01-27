<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>




<!-------------------------- 슬라이드 -------------------------->
<header>
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
	<!-- <ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	</ol> -->
	<div class="carousel-inner" role="listbox">
	  <!-- Slide One - Set the background image for this slide in the line below -->
	  <div class="carousel-item active" style="background-image: url('<?php echo G5_THEME_URL?>/img/main1.jpg'); height: 250px; margin-top: 100px;">
		<div class="carousel-caption d-md-block">
		  <!-- <h3 class="ks4" style="text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;">남원윤수민언어심리상담센터</h3> -->
		</div>
	  </div>
	</div>
	<!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a> -->
  </div>
</header>
<!-------------------------- ./슬라이드 -------------------------->


<!-------------------------- 게시판 -------------------------->
<!-- <div class="padding-top-60 col-lg-8" style="margin:0 auto;"> -->
<div class="col-lg-10" style="margin:0 auto;">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
				<div>
					<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
				</div>
				<div class="clock" style="width:100%;height:153px;background:#fff; margin-top:10px; text-align:center;padding-top: 20px;">
						<h1 style="font-size: 20px;font-weight: 800;color:#878484;">종강까지 남은 시간 ⏱
							<span id="currentTime" style="display:none;"></span>
						</h1>
						<div id="countTime" style="width:100%; height:100px; font-size:35px; text-align:center; overflow:hidden;">
						</div>
						
				</div>
			</div>
			<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
				<?php 
					include_once('theme/theme_wide_17/skin/board/wz.schedule.board/list.skin.min.php');
				?>
			</div>
		</div>
	</div>
</div>


<?php
/*

https://fonts.google.com/icons?selected=Material+Icons
위 주소에서 아이콘을 변경할 수 있습니다.


*/

?>






<!-------------------------- pallax box -------------------------->
<!--<style>
.para-box{
    height: 350px; display: grid; align-items: center;
}
</style>
<div class="parallax-window" data-parallax="scroll" data-image-src="https://via.placeholder.com/2560x1080">
	<div class="container">
		<div class="row">
			<div class="col-md-12 para-box text-center">
				
				<div class="">
					<h2 class='text-light ks5'>반응형 커뮤니티 , 반응형 와이드 에티테마 무료 다운로드 바로가기</h2>
					<br />
					<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="http://ety.kr/board/theme_update"'>바로가기</button> 
					<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="http://ety.kr/shop/item/1623421493"'>7페이지</button>
				</div>
			</div>

		</div>
	</div>
</div>--><!-- /parallax -->


<!-------------------------- 테마소개 + 유튜브영상 -------------------------->
<!--
<div class="padding-top-60 padding-bottom-60" style="background:#f2f2f2;">
	<div class="container">
	<div class="center-heading">
		<h2 class="en1">USE A <strong>LIBRARY</strong> </h2>
		<span class="center-line"></span>
	</div>
	  <div class="row">
		<div class="col-lg-6">
		  <iframe width="100%" height="315" src="https://www.youtube.com/embed/PF0BcfP9pkc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-lg-6">
		  <h2 class="en1">SERVICE</h2>
		  <p class="ks4"><strong>새롭게 7개의 페이지가 업로드 되었습니다.</strong></p>
		  <p class="ks4"><a href="http://ety.kr/shop/item/1623421493" target="_blank">http://ety.kr/shop/item/1623421493</a></p>
		  <p class="ks4">배포는 소프트존만 가능하며 배포처는 에티테마,SIR 만 제한하고 있습니다.</p>
		  <p class="ks4">설치방법안내 <strong><a href="http://ety.kr/board/ety_theme_free_movie" target="_blank">http://ety.kr/board/ety_theme_free_movie</a></strong> 에서 진행하고 있으므로 궁금점이나 문의사항이 있으시면 해당 게시판을 이용해주세요.</p>
		</div>
	  </div>
	</div>
</div>-->






<!-------------------------- GALLERY -------------------------->
<!-- 

테마폴더/tail.php : 43 번째줄에서 수정하시면 됩니다.
owlcarousel 시간조정, 개수조정, 오토플레이 조정


-->
<!-- 
<div class="container margin-bottom-60">
	<?php echo latest('theme/pic_basic_owl', 'gallery', 9, 24); ?>
</div> -->







<!-------------------------- 

지도 : 구글지도로 주소를 검색하신 다음에 공유버튼을 클릭하여 iframe 형식으로 가져오시면 됩니다.

-------------------------->
<!-- <div class="container">
	<input type="hidden" value="<?php echo G5_THEME_URL?>" id="send_url">
	<div class="row" style="justify-content: center;">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding:1.5%;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3251.430858410807!2d127.39172170580684!3d35.41935541904724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356e2f48801d4c51%3A0xb5a7afbf5d59974f!2z64Ko7JuQ7JWE64-Z67Cc64us7IS87YSw!5e0!3m2!1sko!2skr!4v1667371520989!5m2!1sko!2skr" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
		</div>		
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 3.5%;">
			<p style="font-size: 20px;font-weight: bold;margin-bottom: 10px;color: #525252;">남원윤수민언어심리상담센터</p>
			<p style="font-size: 18px;margin-bottom: 10px;color: #525252;">Tel. 063. 636. 4875</p>
			<p style="font-size: 15px;margin-bottom: 10px;color: #525252;">Address. 전북 남원시 농고길 56 용성고 옆</p>
		</div>		
	</div>
</div> -->
<!-------------------------- 

지도 : 구글지도로 주소를 검색하신 다음에 공유버튼을 클릭하여 iframe 형식으로 가져오시면 됩니다.

-------------------------->



<?php
include_once(G5_THEME_PATH.'/tail.php');