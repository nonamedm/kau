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
		<h1 class="display-4 font-weight-bold" style="text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;"></h1>
		<p class="lead font-weight-bold ko1" style="text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;">
		
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
		<h2 class="font-weight-bold" style="color:#696969;">회장단 인사</h2>
		<span class="center-line"></span>
	</div>

	<div class="container-body margin-top-80 margin-bottom-80">
      <div class="row">
        <div class="col-lg-6" style="text-align:center;">
			<img src="<?php echo G5_URL?>/pages/img/intro.jpg" class="img-fluid" style="width:100%;">
			<p class="ks3" style="text-align:center;">회장 이정식 | 부회장 장연아</p>
        </div>
        <div class="col-lg-6 ks4">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					
					<h5 class="mt-5 mb-1" style="font-weight:600;">안녕하세요.</h5>
					<h5 class="mt-0 mb-1" style="font-weight:600;">한국항공대학교 제49대 총학생회 하랑입니다.</h5>
					<br><br>
					<p class="ks3">
					저희 하랑 총학생회에서는 여러분과 함께, 새로운 항대 공동체에 맞는 초석을 세워가고자 합니다..
					</p>
					<p class="ks3">
					항대라는 이름 아래에서 우리는 '하랑'이라는 이름과 같이 보다 높이, 하늘과 같이 높이 되어 결실을 이루어 내겠습니다..
					</p>
					<p class="ks3">
					2023년에는 학우분들과 새로운 일상을 책임지고, 학우분들의 권리를 지켜낼 것이며, 함께하는 지속가능한 학생사회를 세울 수 있도록 노력하겠습니다. 
					</p>
				</div>
			</li>
			</ul>
        </div>
      </div>
    </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>