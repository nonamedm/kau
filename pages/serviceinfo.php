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
	.eval-li {
		display: flex;
    	flex-direction: column;
		padding-left:20px;
	}
	.eval-category {
		font-weight: 900;
		color: grey;
		font-size: 1.5rem;
		margin-bottom:25px;
	}
	.eval-no {
		width: 10%;
		font-weight: 900;
		color: #b0b0b0;
		font-size: 2rem;
	}
	.eval-title {
		line-height: 2;
		/* border-bottom: 1px dashed grey; */
    	margin-bottom: 10px;
		font-size:1rem !important;
	}
	.eval-cont {
		padding-left: 5%;
		line-height: 2.7;
	}
	.list-unstyled {
		margin-bottom: 100px;
	}
	@media (min-width:1201px) {
		.list-unstyled {
			padding-left:5%;
		}

	}
	@media (max-width:992px) {
		.card-img-care {
			width:15%;
		}
	}
	@media (max-width:1200px) {
		.eval-title {
			width:100% !important;
		}
		.list-unstyled {
			padding-left:20%;
		}
		.eval-cont {
			padding-left: 0 !important;
		}
	}
	@media (max-width:800px) {
		.list-unstyled {
			padding-left:5%;
		}
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

<?php
include_once(G5_THEME_PATH.'/leftnav.php');
?>
	<div class="center-heading en1 margin-top-40">
		<h2 class="font-weight-bold" style="color:#696969;">제공서비스 안내</h2>
		<span class="center-line"></span>
	</div>
	<div class="container-body margin-top-80 margin-bottom-80">
		<ul class="list-unstyled">
			<h5 class="eval-category" style="display:flex;">
			<div id="comp-l7il1lhs" style="margin-right:10px;transform: rotate( 95deg );"><div data-testid="svgRoot-comp-l7il1lhs" class="_3bLYT _2OIRR"><svg preserveAspectRatio="none" data-bbox="24 33 152.001 134" viewBox="24 33 152.001 134" height="30" width="30" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" fill="#E5CDBB">
				<g>
					<path d="M159.621 121.057L109.217 38.8c-4.726-7.737-16.025-7.732-20.745.009L26.236 140.885c-7.475 12.26 5.093 26.906 18.453 21.504l100.386-40.592c9.257-3.675 14.546-.74 14.546-.74z"></path>
					<path d="M173.822 144.873l-4.835-7.931c-3.723-6.107-11.357-8.624-18.015-5.94l-43.744 17.637 49.153 17.467c12.971 4.609 24.58-9.524 17.441-21.233z"></path>
				</g>
			</svg>
			</div></div>
				제공 서비스
			</h5>
			<li class="eval-li">
				<!-- <h5 class="eval-no">01</h5> -->
				<h5 class="eval-title">> 이용자는 수급자격(제공시간)을 받아 원하는 지역내 주간활동 제공기관에 등록하여 소그룹을 구성하고, 제공기관 및
외부 협력기관을 통해 주간활동 이용</h5>
				<h5 class="eval-title">> 참여형, 창의형 등 프로그램 자율 구성하되, 외부활동 30% 이상</h5>
				<!-- <p class="eval-cont">영유아 언어발달 선별검사</p> -->
			</li>
		</ul>

		<ul class="list-unstyled">
		<h5 class="eval-category" style="display:flex;">
			<div id="comp-l7il1lhs" style="margin-right:10px;transform: rotate( 95deg );"><div data-testid="svgRoot-comp-l7il1lhs" class="_3bLYT _2OIRR"><svg preserveAspectRatio="none" data-bbox="24 33 152.001 134" viewBox="24 33 152.001 134" height="30" width="30" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" fill="#E5CDBB">
				<g>
					<path d="M159.621 121.057L109.217 38.8c-4.726-7.737-16.025-7.732-20.745.009L26.236 140.885c-7.475 12.26 5.093 26.906 18.453 21.504l100.386-40.592c9.257-3.675 14.546-.74 14.546-.74z"></path>
					<path d="M173.822 144.873l-4.835-7.931c-3.723-6.107-11.357-8.624-18.015-5.94l-43.744 17.637 49.153 17.467c12.971 4.609 24.58-9.524 17.441-21.233z"></path>
				</g>
			</svg>
			</div></div>
			참여형</h5>
			<li class="eval-li">
				<h5 class="eval-title">• 자조모임 : 티타임, 동아리, 독서모임 등</h5>
				<h5 class="eval-title">• 건강증진활동 : 슐런, 에어하키, 헬스, 점핑점핑, 배드민턴, 보치아, 산책, 수영, 볼링, 탁구, 태권도, 줌바댄스 등</h5>
				<h5 class="eval-title">• 지역탐방, 캠프, 여행, 직장탐방</h5>
				<h5 class="eval-title">• 교육(일상생활 자립, 인권, 권리, 성인권 및 안전교육 및 훈련)</h5>
				<h5 class="eval-title">• 영화관람, 미술관, 박물관등 문화관람</h5>
			</li>
		</ul>

		<ul class="list-unstyled">
		<h5 class="eval-category" style="display:flex;">
			<div id="comp-l7il1lhs" style="margin-right:10px;transform: rotate( 95deg );"><div data-testid="svgRoot-comp-l7il1lhs" class="_3bLYT _2OIRR"><svg preserveAspectRatio="none" data-bbox="24 33 152.001 134" viewBox="24 33 152.001 134" height="30" width="30" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" fill="#E5CDBB">
				<g>
					<path d="M159.621 121.057L109.217 38.8c-4.726-7.737-16.025-7.732-20.745.009L26.236 140.885c-7.475 12.26 5.093 26.906 18.453 21.504l100.386-40.592c9.257-3.675 14.546-.74 14.546-.74z"></path>
					<path d="M173.822 144.873l-4.835-7.931c-3.723-6.107-11.357-8.624-18.015-5.94l-43.744 17.637 49.153 17.467c12.971 4.609 24.58-9.524 17.441-21.233z"></path>
				</g>
			</svg>
			</div></div>
			창의형</h5>
			<li class="eval-li">
				<h5 class="eval-title">• 자조모임 : 목적이 있는 특정 활동의 기획회의, 계획, 수행 등 제반활동</h5>
				<h5 class="eval-title">• 음악활동 : 우쿨렐레, 난타, 장구, 노래부르기</h5>
				<h5 class="eval-title">• 미술활동 : 그림그리기, 작품감상, 수채캘리 등</h5>
				<h5 class="eval-title">• 홈메이드푸드, 바리스타교육 등</h5>
				<h5 class="eval-title">• (도예) 흙으로 생각하기, 창작품만들기, 생활도자기 만들기</h5>
				<h5 class="eval-title">• 토탈공예, 창작현대무용, 다도 및 한복 복식체험 등</h5>
			</li>
		</ul>
	</div>
    
       





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>