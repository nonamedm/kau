<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

	<!-------------------------- 상단배경 수정 -------------------------->
	<?php
	$background_images = G5_URL.'/pages/img/2.jpg';
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

	.ks5 {
		font-size: 20px;
		line-height: 40px;
		font-weight: 600;
	}
	.card-body {
		text-align:center;
	}

	.card-img-care {
		width:25%;
	}
	@media (max-width:992px) {
		.card-img-care {
			width:15%;
		}
	}
	</style>


	<div class="position-relative overflow-hidden p-md-5 text-center bg-white bg-sub-1 ety-mt-main about-bg">

	  <div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 font-weight-bold" style="text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;">남원윤수민언어심리상담센터</h1>
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



	<div class="center-heading en1 margin-top-40">
		<h2 class="font-weight-bold" style="color:#696969;">치료 프로그램</h2>
		<span class="center-line"></span>
	</div>


    <!-- Page Content -->
	<style>
	table td {
		color: #666;
		font-size: 15px;
	}
	</style>

	<div class="container margin-bottom-40 categoryContainer" style="padding: 0 4% 0 4%; display:flex;justify-content: center;flex-direction: row;">
		<div class="category category-active" data="child">아동청소년심리지원바우처</div>
		<div class="category" data="AAC">보완대체의사소통(AAC)<br>기기 활용 중재서비스</div>
		<div class="category" data="developmental">발달재활서비스</div>
		<div class="category" data="lang">언어발달지원</div>
		<div class="category" data="counsel">성인심리지원서비스</div>
		<div class="category" data="young">청년마음건강</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 margin-bottom-20">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/lang2.png" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">언어재활</h5>
					<p class="card-text ks3 f14">말과 언어에 어려움이 있는<br>
												성인 또는 아동을 대상으로 진단을<br>
												실시하고 개별/그룹치료를 통해<br>
												전반적인 의사소통 능력을<br>
												향상시키는 프로그램</p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/play2.png" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">놀이재활</h5>
					<p class="card-text ks3 f14">발달단계나 적응에서<br>
												어려움을 나타내는 아동들의<br>
												정서 및 행동을 다루고<br>
												성장을 돕기 위하여<br>
												놀이를 활용하는 프로그램</p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/sand2.png" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">모래놀이</h5>
					<p class="card-text ks3 f14">모래상자라는 안정된 공간에서<br>
												내면의 문제들을 찾아내도록 돕고<br>
												본질적인 문제를 인식해<br>
												스스로 치유할 수 있도록 돕는<br>
												프로그램</p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/art2.png" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">미술재활</h5>
					<p class="card-text ks3 f14">다양한 매체를 활용하여<br>
												억압된 무의식, 불안, 스트레스 등을<br>
												표현하고 감정의 정화를 경험하여<br>
												자아 성장을 촉진하도록 돕는<br>
												프로그램</p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/music2.png" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">음악재활</h5>
					<p class="card-text ks3 f14">다양한 음악을 듣게 하거나<br>
												적절한 연주를 하게 하여<br>
												대상자의 신체적, 심리적, 정서적<br>
												통합과 바람직한 행동 변화를<br>
												가져오도록 하는 프로그램</p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/counsel2.png" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">심리상담</h5>
					<p class="card-text ks3 f14">다양한 생활환경에서<br>
												어려움을 겪는 이들의<br>
												대인관계 문제와 심리적 어려움<br>
												등에 관해 전문가가 도움을 주는<br>
												프로그램</p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
		</div>
	</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>