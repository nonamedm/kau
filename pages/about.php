<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>



	<!-------------------------- 상단배경 수정 -------------------------->
	<?php
	$background_images = G5_URL.'/pages/img/1.jpg';
	?>
	<style>
	/* mobile */
	@media (min-width: 1px) and (max-width: 1089px) {
			.about-bg{background-image:url('<?php echo $background_images?>');width:100%;-webkit-background-size:100% auto;-moz-background-size:100% auto;-o-background-size:100% auto;background-position:center; background-size: cover; background-repeat:no-repeat;color:#fff;height:100%;padding-top: 70px;}.ml-auto,.mx-auto{padding-top:10px;padding-bottom:10px}.lead{font-size:12px;font-weight:300}.display-4{ font-size:1.5rem;font-weight:300;}.btn,a.btn{line-height:20px!important;height:20px!important;padding:0 5px;text-align:center;font-weight:700;border:0;-webkit-transition:background-color .3s ease-out;-moz-transition:background-color .3s ease-out;-o-transition:background-color .3s ease-out;transition:background-color .3s ease-out}.btn-outline-secondary{font-size:11px;padding:0 5px}
	}
	/* desktop */
	@media (min-width: 1090px) {
		.about-bg{background-image:url('<?php echo $background_images?>');background-position:center center;background-repeat:no-repeat;color:#fff;height:400px}.lead{font-size:1.25rem;font-weight:300}.display-4{font-size:2.5rem;font-weight:300;line-height:1.2}
	}



	</style>


	<div class="position-relative overflow-hidden p-md-5 text-center bg-white bg-sub-1 ety-mt-main about-bg">

	  <div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 font-weight-bold" style="text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;">기관소개</h1>
		<p class="lead font-weight-bold ko1" style="text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;">
		남원윤수민언어심리상담센터는 행복한 변화를 지원합니다.
		</p>
	  </div>
	  <div class="product-device shadow-sm d-none d-md-block"></div>
	  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
	</div>
	<!-------------------------- ./상단배경 수정 -------------------------->


		<style>
		@media only screen and (max-width: 320px) {
			.SF_board{
				overflow-x: auto;white-space: nowrap;
			}
		}

		@media only screen and (min-width: 321px) and (max-width: 768px){
			.SF_board{
				overflow-x: auto;white-space: nowrap;
			}
		}

		/* 페이지 selec 박스 */
		/* mobile */
		@media (min-width: 1px) and (max-width: 1089px) {
			.mb-5, .my-5 {
				margin-bottom: 0rem!important;
			}
			.select-menu{width:190px; height:58px; padding:17px 70px 17px 5px; border-top:none; border-bottom:1px solid #fff; border-left: 1px solid #e1e1e1;border-right: 1px solid #f2f2f2;}
			.home{display:inline; width:140px; padding:17px 45px 17px 15px; border-left:1px solid #e1e1e1;}
			.menu{display:inline;}
		}
		/* desktop */
		@media (min-width: 1090px) {
			.select-menu{width:190px; height:58px; padding:17px 70px 17px 5px; border-top:none; border-bottom:1px solid #fff; border-left: 1px solid #e1e1e1;border-right: 1px solid #f2f2f2;}
			.home{display:inline; width:140px; padding:17px 45px 17px 15px; border-left:1px solid #e1e1e1;}
			.menu{display:inline;}
		}
	</style>
<?php
include_once(G5_THEME_PATH.'/leftnav.php');
?>
	<div class="center-heading en1 margin-top-40">
		<h2 class="font-weight-bold" style="color:#696969;">센터장 인사말</h2>
		<span class="center-line"></span>
	</div>

	<div class="container-body margin-top-80 margin-bottom-80">
      <div class="row">
        <div class="col-lg-6">
			<img src="<?php echo G5_URL?>/pages/img/about_01.png" class="img-fluid">
        </div>
        <div class="col-lg-6 ks4">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<p class="ks3">
					안녕하십니까?</p>
					<p class="ks3">
					이렇게 만나뵙게 되어 반갑습니다. </p>
					<p class="ks3">
					2009년 말 언어발달지체 아동에 대한 중재를 목표로 남원시청 앞 작은 공간을 임대하여 리모델링을 하던 기억이 떠오릅니다. 언어치료 과정에서 정서적 어려움을 동반하는 아동이 많음을 알게 되며 놀이치료, 미술치료, 음악치료, 상담 등 정서적 영역을 확장해왔습니다.
					</p>
					<p class="ks3">
					서비스 대상 또한 초기에는 아동과 청소년 위주로 진행하던 것이 지금은 영유아부터 성인까지 다양한 연령대의 이용자에게 서비스를 제공하고 있습니다.
					</p>
					<p class="ks3">
					짧지 않은 기간동안 함께했던 아동청소년이 어려움을 딛고 사회에 첫발을 내딛는 모습을 보게 될 때 기쁜 눈물이 흐르는 경험을 할 때마다 하고 있는 일의 가치를 깨닫곤 합니다. 
					</p>
					<p class="ks3">
					혹여 말이나 소통에 어려움이 있다면, </p>
					<p class="ks3">일상에 지쳐 힘드시다면,</p>
					<p class="ks3">따뜻한 마음과 감동이 흐르는 곳,  남원윤수민언어심리상담센터에 다녀가시지 않겠어요? </p>
					<p class="ks3">이곳에서 새로운 인연을 기다리겠습니다. </p>
					<h5 class="mt-0 mb-1" style="font-weight:600;"><br><br>남원윤수민언어심리상담센터 대표 윤수민</h5>
				</div>
			</li>
			</ul>
        </div>
      </div>
    </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>