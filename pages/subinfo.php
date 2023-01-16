<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

	<!-------------------------- 상단배경 수정 -------------------------->
	<?php
	$background_images = G5_URL.'/pages/img/3.jpg';
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

	.ks3 {
		padding-left:30px;
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
	.voucher2 {
		background-color:white;
		opacity:80%;
		padding:20px;
	}
	@media (max-width:992px) {
		.card-img-care {
			width:15%;
		}
		.disp-img {
			display:block !important;
		}
		.voucher1-row {
			background-image: none !important;
		}
	}
	
	.disp-img {
		display:none;
	}

	.voucher1-row {
		background-image: url(/pages/img/subinfo1.jpg);
		background-repeat: round;
	}
	
	</style>


	<div class="position-relative overflow-hidden p-md-5 text-center bg-white bg-sub-1 ety-mt-main about-bg">

	  <div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 font-weight-bold" style="text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;">발달장애인 주간활동 센터</h1>
		<p class="lead font-weight-bold ko1" style="text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;">
		주변 좋은 이웃은 발달장애인의 행복한 변화를 지원합니다.
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

    <!-- Page Content -->
	<style>
	table td {
		color: #666;
		font-size: 15px;
	}
	</style>
<?php
include_once(G5_THEME_PATH.'/leftnav.php');
?>

	<div class="center-heading en1 margin-top-40">
		<h2 class="font-weight-bold" style="color:#696969;">지원대상 / 신청안내</h2>
		<span class="center-line"></span>
	</div>

	<div class="container-body margin-top-80 margin-bottom-80" style="padding: 0 5% 0 5%;">
      <div class="row voucher1-row">
        <div class="col-lg-6 voucher1">
			<img class="img-fluid disp-img" src="<?php echo G5_URL?>/pages/img/subinfo1.jpg" style="width:100%;">
        </div>
        <div class="col-lg-6 ks4 voucher2">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<!-- <h4 class="center-heading font-weight-bold">아동청소년심리지원바우처</h4> -->

					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l7il1lhs" style="margin-right:10px;transform: rotate( 95deg );"><div data-testid="svgRoot-comp-l7il1lhs" class="_3bLYT _2OIRR"><svg preserveAspectRatio="none" data-bbox="24 33 152.001 134" viewBox="24 33 152.001 134" height="20" width="20" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" fill="#E5CDBB">
						<g>
							<path d="M159.621 121.057L109.217 38.8c-4.726-7.737-16.025-7.732-20.745.009L26.236 140.885c-7.475 12.26 5.093 26.906 18.453 21.504l100.386-40.592c9.257-3.675 14.546-.74 14.546-.74z"></path>
							<path d="M173.822 144.873l-4.835-7.931c-3.723-6.107-11.357-8.624-18.015-5.94l-43.744 17.637 49.153 17.467c12.971 4.609 24.58-9.524 17.441-21.233z"></path>
						</g>
					</svg>
					</div></div>
					지원대상</h5>
					<p class="ks3">
					문제행동아동의 조기 발견과 개입을 통하여 문제행동을
					감소시키고, 정서행동장애로의 발전을 막아 정상적 성장 지원</p>
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l7il1lhs" style="margin-right:10px;transform: rotate( 95deg );"><div data-testid="svgRoot-comp-l7il1lhs" class="_3bLYT _2OIRR"><svg preserveAspectRatio="none" data-bbox="24 33 152.001 134" viewBox="24 33 152.001 134" height="20" width="20" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" fill="#E5CDBB">
						<g>
							<path d="M159.621 121.057L109.217 38.8c-4.726-7.737-16.025-7.732-20.745.009L26.236 140.885c-7.475 12.26 5.093 26.906 18.453 21.504l100.386-40.592c9.257-3.675 14.546-.74 14.546-.74z"></path>
							<path d="M173.822 144.873l-4.835-7.931c-3.723-6.107-11.357-8.624-18.015-5.94l-43.744 17.637 49.153 17.467c12.971 4.609 24.58-9.524 17.441-21.233z"></path>
						</g>
					</svg>
					</div></div>
					서비스 대상</h5>
					<p class="ks3">
					만 18세 이상 ~ 만 65세 미만의 「장애인복지법」상 등록된 지적 및 자폐성 장애인</p>
					<p class="ks3">
					※ 장애인 당사자 및 가구의 소득수준과 무관하게 신청 가능</p>

					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l7il1lhs" style="margin-right:10px;transform: rotate( 95deg );"><div data-testid="svgRoot-comp-l7il1lhs" class="_3bLYT _2OIRR"><svg preserveAspectRatio="none" data-bbox="24 33 152.001 134" viewBox="24 33 152.001 134" height="20" width="20" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" fill="#E5CDBB">
						<g>
							<path d="M159.621 121.057L109.217 38.8c-4.726-7.737-16.025-7.732-20.745.009L26.236 140.885c-7.475 12.26 5.093 26.906 18.453 21.504l100.386-40.592c9.257-3.675 14.546-.74 14.546-.74z"></path>
							<path d="M173.822 144.873l-4.835-7.931c-3.723-6.107-11.357-8.624-18.015-5.94l-43.744 17.637 49.153 17.467c12.971 4.609 24.58-9.524 17.441-21.233z"></path>
						</g>
					</svg>
					</div></div>
					지원제외</h5>
					<p class="ks3">
					> 노인장기요양보험법」제2조제1호에 따른 노인 등에 해당하는 자</p>
					<p class="ks3">
					> 고등학교, 전공과 및 대학교에 재학 중인 자</p>
					<p class="ks3">
					> 취업자</p>
					<p class="ks3">
					※ 장애인 당사자 및 가구의 소득수준과 무관하게 신청 가능</p>
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l7il1lhs" style="margin-right:10px;transform: rotate( 95deg );"><div data-testid="svgRoot-comp-l7il1lhs" class="_3bLYT _2OIRR"><svg preserveAspectRatio="none" data-bbox="24 33 152.001 134" viewBox="24 33 152.001 134" height="20" width="20" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" fill="#E5CDBB">
						<g>
							<path d="M159.621 121.057L109.217 38.8c-4.726-7.737-16.025-7.732-20.745.009L26.236 140.885c-7.475 12.26 5.093 26.906 18.453 21.504l100.386-40.592c9.257-3.675 14.546-.74 14.546-.74z"></path>
							<path d="M173.822 144.873l-4.835-7.931c-3.723-6.107-11.357-8.624-18.015-5.94l-43.744 17.637 49.153 17.467c12.971 4.609 24.58-9.524 17.441-21.233z"></path>
						</g>
					</svg>
					</div></div>
					우선순위</h5>
					<p class="ks3">
					도전적 행동 등 최중증 발달장애인을 우선 선정 (전체 인원의 20%)</p>
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l7il1lhs" style="margin-right:10px;transform: rotate( 95deg );"><div data-testid="svgRoot-comp-l7il1lhs" class="_3bLYT _2OIRR"><svg preserveAspectRatio="none" data-bbox="24 33 152.001 134" viewBox="24 33 152.001 134" height="20" width="20" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" fill="#E5CDBB">
						<g>
							<path d="M159.621 121.057L109.217 38.8c-4.726-7.737-16.025-7.732-20.745.009L26.236 140.885c-7.475 12.26 5.093 26.906 18.453 21.504l100.386-40.592c9.257-3.675 14.546-.74 14.546-.74z"></path>
							<path d="M173.822 144.873l-4.835-7.931c-3.723-6.107-11.357-8.624-18.015-5.94l-43.744 17.637 49.153 17.467c12.971 4.609 24.58-9.524 17.441-21.233z"></path>
						</g>
					</svg>
					</div></div>
					신청장소</h5>
					<p class="ks3">
					급여 대상 발달장애인의 주민등록상 주소지 읍·면·동</p>
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l7il1lhs" style="margin-right:10px;transform: rotate( 95deg );"><div data-testid="svgRoot-comp-l7il1lhs" class="_3bLYT _2OIRR"><svg preserveAspectRatio="none" data-bbox="24 33 152.001 134" viewBox="24 33 152.001 134" height="20" width="20" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" fill="#E5CDBB">
						<g>
							<path d="M159.621 121.057L109.217 38.8c-4.726-7.737-16.025-7.732-20.745.009L26.236 140.885c-7.475 12.26 5.093 26.906 18.453 21.504l100.386-40.592c9.257-3.675 14.546-.74 14.546-.74z"></path>
							<path d="M173.822 144.873l-4.835-7.931c-3.723-6.107-11.357-8.624-18.015-5.94l-43.744 17.637 49.153 17.467c12.971 4.609 24.58-9.524 17.441-21.233z"></path>
						</g>
					</svg>
					</div></div>
					제출방법</h5>
					<p class="ks3">
					방문에 의한 신청, 우편, 팩스에 의한 신청 가능</p>
					
				</div>
			</li>
			</ul>
        </div>
      </div>
    </div>

	
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>