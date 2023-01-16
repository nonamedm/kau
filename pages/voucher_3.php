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
	.category {
		height: 50px;
		text-align: center;
		width: 20%;
		border-bottom: 3px solid #E5CDBB;
		background-color: #efefef;
		font-family: "Roboto", Sans-serif;
		font-size: 13px;
		font-weight: 600;
		color: #7A7A7A;
		display: flex;
		align-content: flex-end;
		justify-content: center;
		align-items: center;
	}
	.category:hover {
		cursor:pointer;
		background-color: #E5CDBB;
	}
	.category-active {
		background-color: #E5CDBB;
		color:white;
	}
	.ks3 {
		margin-left:30px;
		font-size: 0.95rem;
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
		.voucher2-row {
			background-image: none !important;
			flex-direction: column-reverse;
		}
		.voucher3-row {
			background-image: none !important;
		}
		.voucher4-row {
			background-image: none !important;
			flex-direction: column-reverse;
		}
		.voucher5-row {
			background-image: none !important;
		}
		.voucher6-row {
			background-image: none !important;
			flex-direction: column-reverse;
		}
		.category {
			width:100% !important;
		}
		.category-container {
			flex-direction: column !important;
		}
	}
	
	.disp-img {
		display:none;
	}

	.voucher1-row {
		background-image: url(/pages/img/voucher1.jpg);
		background-repeat: round;
	}
	.voucher2-row {
		background-image: url(/pages/img/voucher2.jpg);
		background-repeat: round;
	}
	.voucher3-row {
		background-image: url(/pages/img/voucher3.jpg);
		background-repeat: round;
	}
	.voucher4-row {
		background-image: url(/pages/img/voucher4.jpg);
		background-repeat: round;
	}
	.voucher5-row {
		background-image: url(/pages/img/voucher5.jpg);
		background-repeat: round;
	}
	.voucher6-row {
		background-image: url(/pages/img/voucher6.jpg);
		background-repeat: round;
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
		<h2 class="font-weight-bold" style="color:#696969;">바우처 안내</h2>
		
	</div>
	<div class="container-body margin-bottom-40 category-container" style="padding: 0 5% 0 5%; display:flex;justify-content: center;flex-direction: row;">
		<div class="category" data="child">아동청소년심리지원바우처</div>
		<div class="category" data="AAC">보완대체의사소통(AAC)<br>기기 활용 중재서비스</div>
		<div class="category category-active" data="developmental">발달재활서비스</div>
		<div class="category" data="lang">언어발달지원</div>
		<div class="category" data="counsel">성인심리지원서비스</div>
		<div class="category" data="young">청년마음건강</div>
	</div>
	<div class="container-body margin-top-80 margin-bottom-80" style="padding: 0 5% 0 5%;">
      <div id="child" class="row voucher voucher1-row" style="display:none;">
        <div class="col-lg-6 voucher1">
			<img class="img-fluid disp-img" src="<?php echo G5_URL?>/pages/img/voucher1.jpg" style="width:100%;">
        </div>
        <div class="col-lg-6 ks4 voucher2">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<h4 class="margin-top-20 margin-bottom-20 font-weight-bold" style="text-align:center;">아동청소년심리지원바우처</h4>

					<h5 class="font-weight-bold" style="display:flex;">
						<div id="comp-l76zs02v" style="margin-right: 10px;">
							<div data-testid="svgRoot-comp-l76zs02v" class="_3bLYT _2OIRR">
								<svg preserveAspectRatio="xMidYMid meet" data-bbox="54.5 49 91 102.001" viewBox="54.5 49 91 102.001" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true">
									<g>
										<path d="M107.851 80.3a9.872 9.872 0 0 0-7.85 3.838 9.866 9.866 0 0 0-7.85-3.838c-5.47 0-9.836 4.356-9.944 9.917-.172 9.061 15.269 21.19 17.03 22.543a1.51 1.51 0 0 0 1.839.004c.477-.364 11.724-9.016 15.955-18.697.506-1.159.764-2.444.764-3.821 0-5.484-4.462-9.946-9.944-9.946z" fill="#E98866" data-color="1"></path>
										<path d="M142.135 49h-84.27a3.365 3.365 0 0 0-3.365 3.366v95.269a3.365 3.365 0 0 0 3.365 3.366h84.27a3.365 3.365 0 0 0 3.365-3.366V52.366A3.365 3.365 0 0 0 142.135 49zm-3.365 95.269H61.23V55.731h77.54v88.538z" fill="#E5CDBB" data-color="2"></path>
										<path d="M67.696 129.67h64.609a2.02 2.02 0 0 0 2.019-2.019v-64.62a2.018 2.018 0 0 0-2.019-2.019H67.696a2.02 2.02 0 0 0-2.019 2.019v64.62c0 1.116.904 2.019 2.019 2.019zm2.019-64.62h60.571v60.581H69.715V65.05z" fill="#E5CDBB" data-color="2"></path>
									</g>
								</svg>
							</div>
						</div>
					서비스 목적
					</h5>
					<p class="ks3">
					문제행동아동의 조기 발견과 개입을 통하여 문제행동을
					감소시키고, 정서행동장애로의 발전을 막아 정상적 성장 지원</p>
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zs9xv" style="margin-right: 10px;"><div data-testid="svgRoot-comp-l76zs9xv" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="62 49.5 76 101" viewBox="62 49.5 76 101" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-lqlbd826olwu"><title id="svgcid-lqlbd826olwu"></title>
						<g>
							<path d="M134.183 71.729l-23.201-19.113c-.977-.912-1.796-1.912-3.021-1.375-1.223.538-1.23 1.269-1.23 2.612v20.353c0 1.865 1.503 3.377 3.357 3.377H131.9a3.355 3.355 0 0 0 3.124-2.144 3.39 3.39 0 0 0-.841-3.71z" fill="#E98866" data-color="1"></path>
							<path d="M134.643 150.5H65.357c-1.854 0-3.357-1.512-3.357-3.377V52.877c0-1.865 1.503-3.377 3.357-3.377h43.555a3.34 3.34 0 0 1 2.196.824l25.732 22.41a3.383 3.383 0 0 1 1.16 2.553v71.836c0 1.865-1.503 3.377-3.357 3.377zm-65.93-6.754h62.574V76.83L107.66 56.254H68.713v87.492z" fill="#E5CDBB" data-color="2"></path>
							<path d="M80.971 110.456h38.058a2.02 2.02 0 0 0 2.014-2.026 2.02 2.02 0 0 0-2.014-2.026H80.971a2.02 2.02 0 0 0-2.014 2.026 2.02 2.02 0 0 0 2.014 2.026z" fill="#E5CDBB" data-color="2"></path>
							<path d="M119.029 114.985H80.971a2.02 2.02 0 0 0-2.014 2.026 2.02 2.02 0 0 0 2.014 2.026h38.058a2.02 2.02 0 0 0 2.014-2.026 2.02 2.02 0 0 0-2.014-2.026z" fill="#E5CDBB" data-color="2"></path>
							<path d="M119.029 123.566H80.971c-1.112 0-2.014.907-2.014 2.026s.902 2.026 2.014 2.026h38.058c1.112 0 2.014-.907 2.014-2.026s-.902-2.026-2.014-2.026z" fill="#E5CDBB" data-color="2"></path>
						</g>
					</svg>
					</div></div>
					서비스 대상</h5>
					<p class="ks3">
					기준 중위소득 160% 이하, 만 18세 이하의 남원시민</p>

					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zsjod" style="margin-right:10px;"><div data-testid="svgRoot-comp-l76zsjod" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="47.999 62.5 104 74.999" viewBox="47.999 62.5 104 74.999" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--p4ieea8d6ilx"><title id="svgcid--p4ieea8d6ilx"></title>
						<g>
						<path fill="#E98866" d="M96.43 94.141c0 5.558-10.616 10.064-23.712 10.064s-23.712-4.506-23.712-10.064 10.616-10.064 23.712-10.064S96.43 88.583 96.43 94.141z" data-color="1"></path>
						<path fill="#E98866" d="M151.576 72.564c0 5.558-10.616 10.064-23.712 10.064s-23.712-4.506-23.712-10.064S114.768 62.5 127.864 62.5s23.712 4.506 23.712 10.064z" data-color="1"></path>
						<path d="M93.711 107.041c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.018 2.018 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M93.711 117.829c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M93.711 128.618c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.014 2.014 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M103.953 88.306c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.8-.55c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.016 2.016 0 0 0-2.825.405 2.03 2.03 0 0 0 .405 2.833z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 96.253c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.016 2.016 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 107.041c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.018 2.018 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 117.829c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 128.618c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.014 2.014 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
							</g>
						</svg>
					</div></div>서비스 가격</h5>
					<p class="ks3">
					월 180,000원 (4회)</p>
					<p class="ks3">
					<b>정부지원금</b> I 126,000~162,000원</p>
					<p class="ks3">
					<b>본인부담금</b> I 18,000~54,000원 (소득수준에 따라 상이함)</p>
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zsnt2" style="margin-right:10px;"><div data-testid="svgRoot-comp-l76zsnt2" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="38.001 50 123.999 100" viewBox="38.001 50 123.999 100" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--h5bik8okh2h0"><title id="svgcid--h5bik8okh2h0"></title>
						<g>
							<path d="M159.623 50H53.343a2.375 2.375 0 0 0-2.377 2.374v8.594h-9.582a3.381 3.381 0 0 0-3.383 3.379v69.948c0 .897.357 1.758.993 2.391a3.387 3.387 0 0 0 2.39.988h.006l21.078-.037v8.984A3.38 3.38 0 0 0 65.851 150c.623 0 1.247-.172 1.794-.514l18.91-11.812h61.109a3.381 3.381 0 0 0 3.383-3.379v-9.599h8.576a2.375 2.375 0 0 0 2.377-2.374V52.374A2.375 2.375 0 0 0 159.623 50zm-15.343 69.948v10.968H85.583c-.634 0-1.256.178-1.794.514l-14.556 9.092v-6.27c0-.897-.357-1.758-.993-2.391a3.387 3.387 0 0 0-2.39-.988h-.006l-21.078.037V67.726h99.514v52.222zm12.966 0h-6.199V64.347a3.381 3.381 0 0 0-3.383-3.379H55.72v-6.22h101.526v65.2z" fill="#E5CDBB" data-color="1"></path>
							<path d="M70.236 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96 4.947 0 8.972-4.02 8.972-8.96 0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
							<path d="M94.523 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96s8.972-4.02 8.972-8.96c0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
							<path d="M118.811 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96 4.947 0 8.972-4.02 8.972-8.96 0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
						</g>
					</svg>
					</div></div>서비스 내용</h5>
					<p class="ks3">
					언어/놀이/미술/음악/심리상담프로그램 40분 + 부모상담 10분</p>
					<p class="ks3" style="text-align:center;">
						<a href="#submitAct" class="submitBtn">신청하기</a>
					</p>
				</div>
			</li>
			</ul>
        </div>
      </div>
      <div id="AAC" class="row voucher voucher2-row" style="display:none;">
        <div class="col-lg-6 ks4 voucher2">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<h4 class="margin-top-20 margin-bottom-20 font-weight-bold" style="text-align:center;">보완대체의사소통(AAC)기기 활용 중재서비스</h4>

					<h5 class="font-weight-bold" style="display:flex;">
						<div id="comp-l76zs02v" style="margin-right: 10px;">
							<div data-testid="svgRoot-comp-l76zs02v" class="_3bLYT _2OIRR">
								<svg preserveAspectRatio="xMidYMid meet" data-bbox="54.5 49 91 102.001" viewBox="54.5 49 91 102.001" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true">
									<g>
										<path d="M107.851 80.3a9.872 9.872 0 0 0-7.85 3.838 9.866 9.866 0 0 0-7.85-3.838c-5.47 0-9.836 4.356-9.944 9.917-.172 9.061 15.269 21.19 17.03 22.543a1.51 1.51 0 0 0 1.839.004c.477-.364 11.724-9.016 15.955-18.697.506-1.159.764-2.444.764-3.821 0-5.484-4.462-9.946-9.944-9.946z" fill="#E98866" data-color="1"></path>
										<path d="M142.135 49h-84.27a3.365 3.365 0 0 0-3.365 3.366v95.269a3.365 3.365 0 0 0 3.365 3.366h84.27a3.365 3.365 0 0 0 3.365-3.366V52.366A3.365 3.365 0 0 0 142.135 49zm-3.365 95.269H61.23V55.731h77.54v88.538z" fill="#E5CDBB" data-color="2"></path>
										<path d="M67.696 129.67h64.609a2.02 2.02 0 0 0 2.019-2.019v-64.62a2.018 2.018 0 0 0-2.019-2.019H67.696a2.02 2.02 0 0 0-2.019 2.019v64.62c0 1.116.904 2.019 2.019 2.019zm2.019-64.62h60.571v60.581H69.715V65.05z" fill="#E5CDBB" data-color="2"></path>
									</g>
								</svg>
							</div>
						</div>
					서비스 목적
					</h5>
					<p class="ks3">
					장애인의 의사소통 문제를 발견하여 이를 보완하거나 대체할 수 있도록 보완대체 의사소통(ACC) 기기를
					활용함으로써 의사소통 능력의 증진 및 사회활동의 참여를 지원하는 서비스</p>
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zs9xv" style="margin-right: 10px;"><div data-testid="svgRoot-comp-l76zs9xv" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="62 49.5 76 101" viewBox="62 49.5 76 101" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-lqlbd826olwu"><title id="svgcid-lqlbd826olwu"></title>
						<g>
							<path d="M134.183 71.729l-23.201-19.113c-.977-.912-1.796-1.912-3.021-1.375-1.223.538-1.23 1.269-1.23 2.612v20.353c0 1.865 1.503 3.377 3.357 3.377H131.9a3.355 3.355 0 0 0 3.124-2.144 3.39 3.39 0 0 0-.841-3.71z" fill="#E98866" data-color="1"></path>
							<path d="M134.643 150.5H65.357c-1.854 0-3.357-1.512-3.357-3.377V52.877c0-1.865 1.503-3.377 3.357-3.377h43.555a3.34 3.34 0 0 1 2.196.824l25.732 22.41a3.383 3.383 0 0 1 1.16 2.553v71.836c0 1.865-1.503 3.377-3.357 3.377zm-65.93-6.754h62.574V76.83L107.66 56.254H68.713v87.492z" fill="#E5CDBB" data-color="2"></path>
							<path d="M80.971 110.456h38.058a2.02 2.02 0 0 0 2.014-2.026 2.02 2.02 0 0 0-2.014-2.026H80.971a2.02 2.02 0 0 0-2.014 2.026 2.02 2.02 0 0 0 2.014 2.026z" fill="#E5CDBB" data-color="2"></path>
							<path d="M119.029 114.985H80.971a2.02 2.02 0 0 0-2.014 2.026 2.02 2.02 0 0 0 2.014 2.026h38.058a2.02 2.02 0 0 0 2.014-2.026 2.02 2.02 0 0 0-2.014-2.026z" fill="#E5CDBB" data-color="2"></path>
							<path d="M119.029 123.566H80.971c-1.112 0-2.014.907-2.014 2.026s.902 2.026 2.014 2.026h38.058c1.112 0 2.014-.907 2.014-2.026s-.902-2.026-2.014-2.026z" fill="#E5CDBB" data-color="2"></path>
						</g>
					</svg>
					</div></div>
					서비스 대상</h5>
					<p class="ks3">
					기준 중위소득 170% 이하, 만 24세 미만(지적·뇌병변·자폐성 장애인) 남원시민</p>
					<p class="ks3">
					<b>* 만6세 이상</b> : 등록장애인(지적, 뇌병변, 자폐성 장애인)</p>
					<p class="ks3">
					<b>* 만6세 미만</b> : 장애가 예견되어 AAC중재서비스가 필요하다고 인정한 경우(의사진단서 또는 1급 언어재활사 소견서 필요)</p>

					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zsjod" style="margin-right:10px;"><div data-testid="svgRoot-comp-l76zsjod" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="47.999 62.5 104 74.999" viewBox="47.999 62.5 104 74.999" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--p4ieea8d6ilx"><title id="svgcid--p4ieea8d6ilx"></title>
						<g>
						<path fill="#E98866" d="M96.43 94.141c0 5.558-10.616 10.064-23.712 10.064s-23.712-4.506-23.712-10.064 10.616-10.064 23.712-10.064S96.43 88.583 96.43 94.141z" data-color="1"></path>
						<path fill="#E98866" d="M151.576 72.564c0 5.558-10.616 10.064-23.712 10.064s-23.712-4.506-23.712-10.064S114.768 62.5 127.864 62.5s23.712 4.506 23.712 10.064z" data-color="1"></path>
						<path d="M93.711 107.041c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.018 2.018 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M93.711 117.829c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M93.711 128.618c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.014 2.014 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M103.953 88.306c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.8-.55c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.016 2.016 0 0 0-2.825.405 2.03 2.03 0 0 0 .405 2.833z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 96.253c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.016 2.016 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 107.041c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.018 2.018 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 117.829c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 128.618c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.014 2.014 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
							</g>
						</svg>
					</div></div>서비스 가격</h5>
					<p class="ks3">
					월 200,000원(4회)</p>
					<p class="ks3">
					<b>정부지원금</b> I 120,000~180,000원</p>
					<p class="ks3">
					<b>본인부담금</b> I 20,000~80,000원 (소득수준에 따라 상이함)</p>
					
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zsnt2" style="margin-right:10px;"><div data-testid="svgRoot-comp-l76zsnt2" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="38.001 50 123.999 100" viewBox="38.001 50 123.999 100" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--h5bik8okh2h0"><title id="svgcid--h5bik8okh2h0"></title>
						<g>
							<path d="M159.623 50H53.343a2.375 2.375 0 0 0-2.377 2.374v8.594h-9.582a3.381 3.381 0 0 0-3.383 3.379v69.948c0 .897.357 1.758.993 2.391a3.387 3.387 0 0 0 2.39.988h.006l21.078-.037v8.984A3.38 3.38 0 0 0 65.851 150c.623 0 1.247-.172 1.794-.514l18.91-11.812h61.109a3.381 3.381 0 0 0 3.383-3.379v-9.599h8.576a2.375 2.375 0 0 0 2.377-2.374V52.374A2.375 2.375 0 0 0 159.623 50zm-15.343 69.948v10.968H85.583c-.634 0-1.256.178-1.794.514l-14.556 9.092v-6.27c0-.897-.357-1.758-.993-2.391a3.387 3.387 0 0 0-2.39-.988h-.006l-21.078.037V67.726h99.514v52.222zm12.966 0h-6.199V64.347a3.381 3.381 0 0 0-3.383-3.379H55.72v-6.22h101.526v65.2z" fill="#E5CDBB" data-color="1"></path>
							<path d="M70.236 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96 4.947 0 8.972-4.02 8.972-8.96 0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
							<path d="M94.523 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96s8.972-4.02 8.972-8.96c0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
							<path d="M118.811 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96 4.947 0 8.972-4.02 8.972-8.96 0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
						</g>
					</svg>
					</div></div>서비스 내용</h5>
					<p class="ks3">
					AAC중재 50분 + 부모상담 10분</p>
					<p class="ks3" style="text-align:center;">
						<a href="#submitAct" class="submitBtn">신청하기</a>
					</p>
				</div>
			</li>
			</ul>
        </div>
		<div class="col-lg-6 voucher1">
			<img class="img-fluid disp-img" src="<?php echo G5_URL?>/pages/img/voucher2.jpg" style="width:100%;">
        </div>
      </div>
      <div id="developmental" class="row voucher voucher3-row">
        <div class="col-lg-6 voucher1">
			<img class="img-fluid disp-img" src="<?php echo G5_URL?>/pages/img/voucher3.jpg" style="width:100%;">
        </div>
        <div class="col-lg-6 ks4 voucher2">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<h4 class="margin-top-20 margin-bottom-20 font-weight-bold" style="text-align:center;">발달재활서비스</h4>

					<h5 class="font-weight-bold" style="display:flex;">
						<div id="comp-l76zs02v" style="margin-right: 10px;">
							<div data-testid="svgRoot-comp-l76zs02v" class="_3bLYT _2OIRR">
								<svg preserveAspectRatio="xMidYMid meet" data-bbox="54.5 49 91 102.001" viewBox="54.5 49 91 102.001" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true">
									<g>
										<path d="M107.851 80.3a9.872 9.872 0 0 0-7.85 3.838 9.866 9.866 0 0 0-7.85-3.838c-5.47 0-9.836 4.356-9.944 9.917-.172 9.061 15.269 21.19 17.03 22.543a1.51 1.51 0 0 0 1.839.004c.477-.364 11.724-9.016 15.955-18.697.506-1.159.764-2.444.764-3.821 0-5.484-4.462-9.946-9.944-9.946z" fill="#E98866" data-color="1"></path>
										<path d="M142.135 49h-84.27a3.365 3.365 0 0 0-3.365 3.366v95.269a3.365 3.365 0 0 0 3.365 3.366h84.27a3.365 3.365 0 0 0 3.365-3.366V52.366A3.365 3.365 0 0 0 142.135 49zm-3.365 95.269H61.23V55.731h77.54v88.538z" fill="#E5CDBB" data-color="2"></path>
										<path d="M67.696 129.67h64.609a2.02 2.02 0 0 0 2.019-2.019v-64.62a2.018 2.018 0 0 0-2.019-2.019H67.696a2.02 2.02 0 0 0-2.019 2.019v64.62c0 1.116.904 2.019 2.019 2.019zm2.019-64.62h60.571v60.581H69.715V65.05z" fill="#E5CDBB" data-color="2"></path>
									</g>
								</svg>
							</div>
						</div>
					서비스 목적
					</h5>
					<p class="ks3">
					성장기의 장애아동의 인지, 의사소통, 적응행동, 감각·운동 등의 정신적·감각적
					기능향상과 행동발달을 위한 적절한 발달재활서비스 지원 및 정보 제공</p>
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zs9xv" style="margin-right: 10px;"><div data-testid="svgRoot-comp-l76zs9xv" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="62 49.5 76 101" viewBox="62 49.5 76 101" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-lqlbd826olwu"><title id="svgcid-lqlbd826olwu"></title>
						<g>
							<path d="M134.183 71.729l-23.201-19.113c-.977-.912-1.796-1.912-3.021-1.375-1.223.538-1.23 1.269-1.23 2.612v20.353c0 1.865 1.503 3.377 3.357 3.377H131.9a3.355 3.355 0 0 0 3.124-2.144 3.39 3.39 0 0 0-.841-3.71z" fill="#E98866" data-color="1"></path>
							<path d="M134.643 150.5H65.357c-1.854 0-3.357-1.512-3.357-3.377V52.877c0-1.865 1.503-3.377 3.357-3.377h43.555a3.34 3.34 0 0 1 2.196.824l25.732 22.41a3.383 3.383 0 0 1 1.16 2.553v71.836c0 1.865-1.503 3.377-3.357 3.377zm-65.93-6.754h62.574V76.83L107.66 56.254H68.713v87.492z" fill="#E5CDBB" data-color="2"></path>
							<path d="M80.971 110.456h38.058a2.02 2.02 0 0 0 2.014-2.026 2.02 2.02 0 0 0-2.014-2.026H80.971a2.02 2.02 0 0 0-2.014 2.026 2.02 2.02 0 0 0 2.014 2.026z" fill="#E5CDBB" data-color="2"></path>
							<path d="M119.029 114.985H80.971a2.02 2.02 0 0 0-2.014 2.026 2.02 2.02 0 0 0 2.014 2.026h38.058a2.02 2.02 0 0 0 2.014-2.026 2.02 2.02 0 0 0-2.014-2.026z" fill="#E5CDBB" data-color="2"></path>
							<path d="M119.029 123.566H80.971c-1.112 0-2.014.907-2.014 2.026s.902 2.026 2.014 2.026h38.058c1.112 0 2.014-.907 2.014-2.026s-.902-2.026-2.014-2.026z" fill="#E5CDBB" data-color="2"></path>
						</g>
					</svg>
					</div></div>
					서비스 대상</h5>
					<p class="ks3">
					기준 중위소득 180% 이하, 만18세 미만 장애아동</p>
					<p class="ks3">
					<b>* 만 6세 미만</b> : 서비스가 필요하다는 의사 진단서 필요</p>

					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zsjod" style="margin-right:10px;"><div data-testid="svgRoot-comp-l76zsjod" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="47.999 62.5 104 74.999" viewBox="47.999 62.5 104 74.999" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--p4ieea8d6ilx"><title id="svgcid--p4ieea8d6ilx"></title>
						<g>
						<path fill="#E98866" d="M96.43 94.141c0 5.558-10.616 10.064-23.712 10.064s-23.712-4.506-23.712-10.064 10.616-10.064 23.712-10.064S96.43 88.583 96.43 94.141z" data-color="1"></path>
						<path fill="#E98866" d="M151.576 72.564c0 5.558-10.616 10.064-23.712 10.064s-23.712-4.506-23.712-10.064S114.768 62.5 127.864 62.5s23.712 4.506 23.712 10.064z" data-color="1"></path>
						<path d="M93.711 107.041c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.018 2.018 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M93.711 117.829c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M93.711 128.618c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.014 2.014 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M103.953 88.306c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.8-.55c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.016 2.016 0 0 0-2.825.405 2.03 2.03 0 0 0 .405 2.833z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 96.253c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.016 2.016 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 107.041c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.018 2.018 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 117.829c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 128.618c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.014 2.014 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
							</g>
						</svg>
					</div></div>서비스 가격</h5>
					<p class="ks3">
					월 220,000원(4회)</p>
					<p class="ks3">
					<b>정부지원금</b> I 140,000~200,000원</p>
					<p class="ks3">
					<b>본인부담금</b> I 20,000~80,000원 (소득수준에 따라 상이함)</p>
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zsnt2" style="margin-right:10px;"><div data-testid="svgRoot-comp-l76zsnt2" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="38.001 50 123.999 100" viewBox="38.001 50 123.999 100" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--h5bik8okh2h0"><title id="svgcid--h5bik8okh2h0"></title>
						<g>
							<path d="M159.623 50H53.343a2.375 2.375 0 0 0-2.377 2.374v8.594h-9.582a3.381 3.381 0 0 0-3.383 3.379v69.948c0 .897.357 1.758.993 2.391a3.387 3.387 0 0 0 2.39.988h.006l21.078-.037v8.984A3.38 3.38 0 0 0 65.851 150c.623 0 1.247-.172 1.794-.514l18.91-11.812h61.109a3.381 3.381 0 0 0 3.383-3.379v-9.599h8.576a2.375 2.375 0 0 0 2.377-2.374V52.374A2.375 2.375 0 0 0 159.623 50zm-15.343 69.948v10.968H85.583c-.634 0-1.256.178-1.794.514l-14.556 9.092v-6.27c0-.897-.357-1.758-.993-2.391a3.387 3.387 0 0 0-2.39-.988h-.006l-21.078.037V67.726h99.514v52.222zm12.966 0h-6.199V64.347a3.381 3.381 0 0 0-3.383-3.379H55.72v-6.22h101.526v65.2z" fill="#E5CDBB" data-color="1"></path>
							<path d="M70.236 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96 4.947 0 8.972-4.02 8.972-8.96 0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
							<path d="M94.523 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96s8.972-4.02 8.972-8.96c0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
							<path d="M118.811 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96 4.947 0 8.972-4.02 8.972-8.96 0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
						</g>
					</svg>
					</div></div>서비스 내용</h5>
					<p class="ks3">
					언어/놀이심리/미술심리/감각발달재활프로그램 40분 + 부모상담 10분</p>
					<p class="ks3" style="text-align:center;">
						<a href="#submitAct" class="submitBtn">신청하기</a>
					</p>
				</div>
			</li>
			</ul>
        </div>
      </div>
      <div id="lang" class="row voucher voucher4-row" style="display:none;">
        <div class="col-lg-6 ks4 voucher2">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<h4 class="margin-top-20 margin-bottom-20 font-weight-bold" style="text-align:center;">언어발달지원</h4>

					<h5 class="font-weight-bold" style="display:flex;">
						<div id="comp-l76zs02v" style="margin-right: 10px;">
							<div data-testid="svgRoot-comp-l76zs02v" class="_3bLYT _2OIRR">
								<svg preserveAspectRatio="xMidYMid meet" data-bbox="54.5 49 91 102.001" viewBox="54.5 49 91 102.001" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true">
									<g>
										<path d="M107.851 80.3a9.872 9.872 0 0 0-7.85 3.838 9.866 9.866 0 0 0-7.85-3.838c-5.47 0-9.836 4.356-9.944 9.917-.172 9.061 15.269 21.19 17.03 22.543a1.51 1.51 0 0 0 1.839.004c.477-.364 11.724-9.016 15.955-18.697.506-1.159.764-2.444.764-3.821 0-5.484-4.462-9.946-9.944-9.946z" fill="#E98866" data-color="1"></path>
										<path d="M142.135 49h-84.27a3.365 3.365 0 0 0-3.365 3.366v95.269a3.365 3.365 0 0 0 3.365 3.366h84.27a3.365 3.365 0 0 0 3.365-3.366V52.366A3.365 3.365 0 0 0 142.135 49zm-3.365 95.269H61.23V55.731h77.54v88.538z" fill="#E5CDBB" data-color="2"></path>
										<path d="M67.696 129.67h64.609a2.02 2.02 0 0 0 2.019-2.019v-64.62a2.018 2.018 0 0 0-2.019-2.019H67.696a2.02 2.02 0 0 0-2.019 2.019v64.62c0 1.116.904 2.019 2.019 2.019zm2.019-64.62h60.571v60.581H69.715V65.05z" fill="#E5CDBB" data-color="2"></path>
									</g>
								</svg>
							</div>
						</div>
					서비스 목적
					</h5>
					<p class="ks3">
					장애 부모의 자녀에게 필요한 언어발달지원서비스를 제공하여 아동의
					건강한 성장지원 및 장애가족의 자체 역량 강화</p>
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zs9xv" style="margin-right: 10px;"><div data-testid="svgRoot-comp-l76zs9xv" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="62 49.5 76 101" viewBox="62 49.5 76 101" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-lqlbd826olwu"><title id="svgcid-lqlbd826olwu"></title>
						<g>
							<path d="M134.183 71.729l-23.201-19.113c-.977-.912-1.796-1.912-3.021-1.375-1.223.538-1.23 1.269-1.23 2.612v20.353c0 1.865 1.503 3.377 3.357 3.377H131.9a3.355 3.355 0 0 0 3.124-2.144 3.39 3.39 0 0 0-.841-3.71z" fill="#E98866" data-color="1"></path>
							<path d="M134.643 150.5H65.357c-1.854 0-3.357-1.512-3.357-3.377V52.877c0-1.865 1.503-3.377 3.357-3.377h43.555a3.34 3.34 0 0 1 2.196.824l25.732 22.41a3.383 3.383 0 0 1 1.16 2.553v71.836c0 1.865-1.503 3.377-3.357 3.377zm-65.93-6.754h62.574V76.83L107.66 56.254H68.713v87.492z" fill="#E5CDBB" data-color="2"></path>
							<path d="M80.971 110.456h38.058a2.02 2.02 0 0 0 2.014-2.026 2.02 2.02 0 0 0-2.014-2.026H80.971a2.02 2.02 0 0 0-2.014 2.026 2.02 2.02 0 0 0 2.014 2.026z" fill="#E5CDBB" data-color="2"></path>
							<path d="M119.029 114.985H80.971a2.02 2.02 0 0 0-2.014 2.026 2.02 2.02 0 0 0 2.014 2.026h38.058a2.02 2.02 0 0 0 2.014-2.026 2.02 2.02 0 0 0-2.014-2.026z" fill="#E5CDBB" data-color="2"></path>
							<path d="M119.029 123.566H80.971c-1.112 0-2.014.907-2.014 2.026s.902 2.026 2.014 2.026h38.058c1.112 0 2.014-.907 2.014-2.026s-.902-2.026-2.014-2.026z" fill="#E5CDBB" data-color="2"></path>
						</g>
					</svg>
					</div></div>
					서비스 대상</h5>
					<p class="ks3">
					기준 중위소득 120% 이하, 만12세 미만 비장애아동</p>
					<p class="ks3">
					* 한쪽 부모 및 조손가정의 한쪽 조부모가 시각·청각·언어·지적·자폐성·뇌병변 등록장애인일 경우</p>

					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zsjod" style="margin-right:10px;"><div data-testid="svgRoot-comp-l76zsjod" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="47.999 62.5 104 74.999" viewBox="47.999 62.5 104 74.999" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--p4ieea8d6ilx"><title id="svgcid--p4ieea8d6ilx"></title>
						<g>
						<path fill="#E98866" d="M96.43 94.141c0 5.558-10.616 10.064-23.712 10.064s-23.712-4.506-23.712-10.064 10.616-10.064 23.712-10.064S96.43 88.583 96.43 94.141z" data-color="1"></path>
						<path fill="#E98866" d="M151.576 72.564c0 5.558-10.616 10.064-23.712 10.064s-23.712-4.506-23.712-10.064S114.768 62.5 127.864 62.5s23.712 4.506 23.712 10.064z" data-color="1"></path>
						<path d="M93.711 107.041c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.018 2.018 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M93.711 117.829c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M93.711 128.618c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.014 2.014 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M103.953 88.306c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.8-.55c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.016 2.016 0 0 0-2.825.405 2.03 2.03 0 0 0 .405 2.833z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 96.253c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.016 2.016 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 107.041c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.018 2.018 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 117.829c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 128.618c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.014 2.014 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
							</g>
						</svg>
					</div></div>서비스 가격</h5>
					<p class="ks3">
					월</p>
					<p class="ks3">
					<b>정부지원금</b> I 10,000원</p>
					<p class="ks3">
					<b>본인부담금</b> I 10,000원 (소득수준에 따라 상이함)</p>
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zsnt2" style="margin-right:10px;"><div data-testid="svgRoot-comp-l76zsnt2" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="38.001 50 123.999 100" viewBox="38.001 50 123.999 100" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--h5bik8okh2h0"><title id="svgcid--h5bik8okh2h0"></title>
						<g>
							<path d="M159.623 50H53.343a2.375 2.375 0 0 0-2.377 2.374v8.594h-9.582a3.381 3.381 0 0 0-3.383 3.379v69.948c0 .897.357 1.758.993 2.391a3.387 3.387 0 0 0 2.39.988h.006l21.078-.037v8.984A3.38 3.38 0 0 0 65.851 150c.623 0 1.247-.172 1.794-.514l18.91-11.812h61.109a3.381 3.381 0 0 0 3.383-3.379v-9.599h8.576a2.375 2.375 0 0 0 2.377-2.374V52.374A2.375 2.375 0 0 0 159.623 50zm-15.343 69.948v10.968H85.583c-.634 0-1.256.178-1.794.514l-14.556 9.092v-6.27c0-.897-.357-1.758-.993-2.391a3.387 3.387 0 0 0-2.39-.988h-.006l-21.078.037V67.726h99.514v52.222zm12.966 0h-6.199V64.347a3.381 3.381 0 0 0-3.383-3.379H55.72v-6.22h101.526v65.2z" fill="#E5CDBB" data-color="1"></path>
							<path d="M70.236 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96 4.947 0 8.972-4.02 8.972-8.96 0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
							<path d="M94.523 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96s8.972-4.02 8.972-8.96c0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
							<path d="M118.811 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96 4.947 0 8.972-4.02 8.972-8.96 0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
						</g>
					</svg>
					</div></div>서비스 내용</h5>
					<p class="ks3">
					언어재활서비스 40분 + 부모상담 10분</p>
					<p class="ks3" style="text-align:center;">
						<a href="#submitAct" class="submitBtn">신청하기</a>
					</p>
				</div>
			</li>
			</ul>
        </div>
		<div class="col-lg-6 voucher1">
			<img class="img-fluid disp-img" src="<?php echo G5_URL?>/pages/img/voucher4.jpg" style="width:100%;">
        </div>
      </div>
      <div id="counsel" class="row voucher voucher5-row" style="display:none;">
        <div class="col-lg-6 voucher1">
			<img class="img-fluid disp-img" src="<?php echo G5_URL?>/pages/img/voucher5.jpg" style="width:100%;">
        </div>
        <div class="col-lg-6 ks4 voucher2">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<h4 class="margin-top-20 margin-bottom-20 font-weight-bold" style="text-align:center;">성인심리지원서비스</h4>

					<h5 class="font-weight-bold" style="display:flex;">
						<div id="comp-l76zs02v" style="margin-right: 10px;">
							<div data-testid="svgRoot-comp-l76zs02v" class="_3bLYT _2OIRR">
								<svg preserveAspectRatio="xMidYMid meet" data-bbox="54.5 49 91 102.001" viewBox="54.5 49 91 102.001" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true">
									<g>
										<path d="M107.851 80.3a9.872 9.872 0 0 0-7.85 3.838 9.866 9.866 0 0 0-7.85-3.838c-5.47 0-9.836 4.356-9.944 9.917-.172 9.061 15.269 21.19 17.03 22.543a1.51 1.51 0 0 0 1.839.004c.477-.364 11.724-9.016 15.955-18.697.506-1.159.764-2.444.764-3.821 0-5.484-4.462-9.946-9.944-9.946z" fill="#E98866" data-color="1"></path>
										<path d="M142.135 49h-84.27a3.365 3.365 0 0 0-3.365 3.366v95.269a3.365 3.365 0 0 0 3.365 3.366h84.27a3.365 3.365 0 0 0 3.365-3.366V52.366A3.365 3.365 0 0 0 142.135 49zm-3.365 95.269H61.23V55.731h77.54v88.538z" fill="#E5CDBB" data-color="2"></path>
										<path d="M67.696 129.67h64.609a2.02 2.02 0 0 0 2.019-2.019v-64.62a2.018 2.018 0 0 0-2.019-2.019H67.696a2.02 2.02 0 0 0-2.019 2.019v64.62c0 1.116.904 2.019 2.019 2.019zm2.019-64.62h60.571v60.581H69.715V65.05z" fill="#E5CDBB" data-color="2"></path>
									</g>
								</svg>
							</div>
						</div>
					서비스 목적
					</h5>
					<p class="ks3">
					성인의 심리정서 지원, 건강성 회복을 통한 삶의 질 향상과 심리적 문제
					예방을 통한 건강한 사회구성원으로서의 역할 촉진</p>
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zs9xv" style="margin-right: 10px;"><div data-testid="svgRoot-comp-l76zs9xv" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="62 49.5 76 101" viewBox="62 49.5 76 101" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-lqlbd826olwu"><title id="svgcid-lqlbd826olwu"></title>
						<g>
							<path d="M134.183 71.729l-23.201-19.113c-.977-.912-1.796-1.912-3.021-1.375-1.223.538-1.23 1.269-1.23 2.612v20.353c0 1.865 1.503 3.377 3.357 3.377H131.9a3.355 3.355 0 0 0 3.124-2.144 3.39 3.39 0 0 0-.841-3.71z" fill="#E98866" data-color="1"></path>
							<path d="M134.643 150.5H65.357c-1.854 0-3.357-1.512-3.357-3.377V52.877c0-1.865 1.503-3.377 3.357-3.377h43.555a3.34 3.34 0 0 1 2.196.824l25.732 22.41a3.383 3.383 0 0 1 1.16 2.553v71.836c0 1.865-1.503 3.377-3.357 3.377zm-65.93-6.754h62.574V76.83L107.66 56.254H68.713v87.492z" fill="#E5CDBB" data-color="2"></path>
							<path d="M80.971 110.456h38.058a2.02 2.02 0 0 0 2.014-2.026 2.02 2.02 0 0 0-2.014-2.026H80.971a2.02 2.02 0 0 0-2.014 2.026 2.02 2.02 0 0 0 2.014 2.026z" fill="#E5CDBB" data-color="2"></path>
							<path d="M119.029 114.985H80.971a2.02 2.02 0 0 0-2.014 2.026 2.02 2.02 0 0 0 2.014 2.026h38.058a2.02 2.02 0 0 0 2.014-2.026 2.02 2.02 0 0 0-2.014-2.026z" fill="#E5CDBB" data-color="2"></path>
							<path d="M119.029 123.566H80.971c-1.112 0-2.014.907-2.014 2.026s.902 2.026 2.014 2.026h38.058c1.112 0 2.014-.907 2.014-2.026s-.902-2.026-2.014-2.026z" fill="#E5CDBB" data-color="2"></path>
						</g>
					</svg>
					</div></div>
					서비스 대상</h5>
					<p class="ks3">
					만 35세 이상의 남원시민(소득기준 없음)</p>
					<p class="ks3">
					<b>* 우선순위 대상자</b>:</p>
					<p class="ks3">
					– 법원에 협의 이혼절차를 진행중인 부부</p>
					<p class="ks3">
					– 시·군 맞춤형복지팀 추천자</p>
					<p class="ks3">
					– 등록장애인 또는 정신·신체관련 전문치료가 요구 되는 가족구성원이 포함된 가족</p>
					<p class="ks3">
					– 임산부 또는 출산 후 1년 내 산모</p>
					<p class="ks3">
					– 코로나19로 인해 일상회복이 필요한 자</p>
					<p class="ks3">
					– 사회서비스 제공기관 슈퍼바이저 추천자</p>

					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zsjod" style="margin-right:10px;"><div data-testid="svgRoot-comp-l76zsjod" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="47.999 62.5 104 74.999" viewBox="47.999 62.5 104 74.999" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--p4ieea8d6ilx"><title id="svgcid--p4ieea8d6ilx"></title>
						<g>
						<path fill="#E98866" d="M96.43 94.141c0 5.558-10.616 10.064-23.712 10.064s-23.712-4.506-23.712-10.064 10.616-10.064 23.712-10.064S96.43 88.583 96.43 94.141z" data-color="1"></path>
						<path fill="#E98866" d="M151.576 72.564c0 5.558-10.616 10.064-23.712 10.064s-23.712-4.506-23.712-10.064S114.768 62.5 127.864 62.5s23.712 4.506 23.712 10.064z" data-color="1"></path>
						<path d="M93.711 107.041c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.018 2.018 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M93.711 117.829c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M93.711 128.618c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.014 2.014 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M103.953 88.306c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.8-.55c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.016 2.016 0 0 0-2.825.405 2.03 2.03 0 0 0 .405 2.833z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 96.253c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.016 2.016 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 107.041c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.018 2.018 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 117.829c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 128.618c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.014 2.014 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
							</g>
						</svg>
					</div></div>서비스 가격</h5>
					<p class="ks3">
					월 200,000원(4회)</p>
					<p class="ks3">
					<b>정부지원금</b> I 120,000~180,000원</p>
					<p class="ks3">
					<b>본인부담금</b> I 20,000~80,000원 (소득수준에 따라 상이함)</p>
					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zsnt2" style="margin-right:10px;"><div data-testid="svgRoot-comp-l76zsnt2" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="38.001 50 123.999 100" viewBox="38.001 50 123.999 100" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--h5bik8okh2h0"><title id="svgcid--h5bik8okh2h0"></title>
						<g>
							<path d="M159.623 50H53.343a2.375 2.375 0 0 0-2.377 2.374v8.594h-9.582a3.381 3.381 0 0 0-3.383 3.379v69.948c0 .897.357 1.758.993 2.391a3.387 3.387 0 0 0 2.39.988h.006l21.078-.037v8.984A3.38 3.38 0 0 0 65.851 150c.623 0 1.247-.172 1.794-.514l18.91-11.812h61.109a3.381 3.381 0 0 0 3.383-3.379v-9.599h8.576a2.375 2.375 0 0 0 2.377-2.374V52.374A2.375 2.375 0 0 0 159.623 50zm-15.343 69.948v10.968H85.583c-.634 0-1.256.178-1.794.514l-14.556 9.092v-6.27c0-.897-.357-1.758-.993-2.391a3.387 3.387 0 0 0-2.39-.988h-.006l-21.078.037V67.726h99.514v52.222zm12.966 0h-6.199V64.347a3.381 3.381 0 0 0-3.383-3.379H55.72v-6.22h101.526v65.2z" fill="#E5CDBB" data-color="1"></path>
							<path d="M70.236 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96 4.947 0 8.972-4.02 8.972-8.96 0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
							<path d="M94.523 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96s8.972-4.02 8.972-8.96c0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
							<path d="M118.811 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96 4.947 0 8.972-4.02 8.972-8.96 0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
						</g>
					</svg>
					</div></div>서비스 내용</h5>
					<p class="ks3">
					심리상담 50분</p>
					<p class="ks3" style="text-align:center;">
						<a href="#submitAct" class="submitBtn">신청하기</a>
					</p>
				</div>
			</li>
			</ul>
        </div>
      </div>
      <div id="young" class="row voucher voucher6-row" style="display:none;">
        <div class="col-lg-6 ks4 voucher2">
			<ul class="list-unstyle">
			<li class="media">
				<div class="media-body">
					<h4 class="margin-top-20 margin-bottom-20 font-weight-bold" style="text-align:center;">청년마음건강</h4>

					<h5 class="font-weight-bold" style="display:flex;">
						<div id="comp-l76zs02v" style="margin-right: 10px;">
							<div data-testid="svgRoot-comp-l76zs02v" class="_3bLYT _2OIRR">
								<svg preserveAspectRatio="xMidYMid meet" data-bbox="54.5 49 91 102.001" viewBox="54.5 49 91 102.001" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true">
									<g>
										<path d="M107.851 80.3a9.872 9.872 0 0 0-7.85 3.838 9.866 9.866 0 0 0-7.85-3.838c-5.47 0-9.836 4.356-9.944 9.917-.172 9.061 15.269 21.19 17.03 22.543a1.51 1.51 0 0 0 1.839.004c.477-.364 11.724-9.016 15.955-18.697.506-1.159.764-2.444.764-3.821 0-5.484-4.462-9.946-9.944-9.946z" fill="#E98866" data-color="1"></path>
										<path d="M142.135 49h-84.27a3.365 3.365 0 0 0-3.365 3.366v95.269a3.365 3.365 0 0 0 3.365 3.366h84.27a3.365 3.365 0 0 0 3.365-3.366V52.366A3.365 3.365 0 0 0 142.135 49zm-3.365 95.269H61.23V55.731h77.54v88.538z" fill="#E5CDBB" data-color="2"></path>
										<path d="M67.696 129.67h64.609a2.02 2.02 0 0 0 2.019-2.019v-64.62a2.018 2.018 0 0 0-2.019-2.019H67.696a2.02 2.02 0 0 0-2.019 2.019v64.62c0 1.116.904 2.019 2.019 2.019zm2.019-64.62h60.571v60.581H69.715V65.05z" fill="#E5CDBB" data-color="2"></path>
									</g>
								</svg>
							</div>
						</div>
					서비스 목적
					</h5>
					<p class="ks3">
					-</p>
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zs9xv" style="margin-right: 10px;"><div data-testid="svgRoot-comp-l76zs9xv" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="62 49.5 76 101" viewBox="62 49.5 76 101" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-lqlbd826olwu"><title id="svgcid-lqlbd826olwu"></title>
						<g>
							<path d="M134.183 71.729l-23.201-19.113c-.977-.912-1.796-1.912-3.021-1.375-1.223.538-1.23 1.269-1.23 2.612v20.353c0 1.865 1.503 3.377 3.357 3.377H131.9a3.355 3.355 0 0 0 3.124-2.144 3.39 3.39 0 0 0-.841-3.71z" fill="#E98866" data-color="1"></path>
							<path d="M134.643 150.5H65.357c-1.854 0-3.357-1.512-3.357-3.377V52.877c0-1.865 1.503-3.377 3.357-3.377h43.555a3.34 3.34 0 0 1 2.196.824l25.732 22.41a3.383 3.383 0 0 1 1.16 2.553v71.836c0 1.865-1.503 3.377-3.357 3.377zm-65.93-6.754h62.574V76.83L107.66 56.254H68.713v87.492z" fill="#E5CDBB" data-color="2"></path>
							<path d="M80.971 110.456h38.058a2.02 2.02 0 0 0 2.014-2.026 2.02 2.02 0 0 0-2.014-2.026H80.971a2.02 2.02 0 0 0-2.014 2.026 2.02 2.02 0 0 0 2.014 2.026z" fill="#E5CDBB" data-color="2"></path>
							<path d="M119.029 114.985H80.971a2.02 2.02 0 0 0-2.014 2.026 2.02 2.02 0 0 0 2.014 2.026h38.058a2.02 2.02 0 0 0 2.014-2.026 2.02 2.02 0 0 0-2.014-2.026z" fill="#E5CDBB" data-color="2"></path>
							<path d="M119.029 123.566H80.971c-1.112 0-2.014.907-2.014 2.026s.902 2.026 2.014 2.026h38.058c1.112 0 2.014-.907 2.014-2.026s-.902-2.026-2.014-2.026z" fill="#E5CDBB" data-color="2"></path>
						</g>
					</svg>
					</div></div>
					서비스 대상</h5>
					<p class="ks3">
					소득기준없음, 만 19세 이상 34세 이하의 청년</p>
					<p class="ks3">
					<b>* 우선순위 대상자</b>:</p>
					<p class="ks3">
					– 자립준비청년</p>
					<p class="ks3">
					– 정신건강복지센터에서 연계한 청년</p>
					<p class="ks3">
					– 일반청년</p>

					
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zsjod" style="margin-right:10px;"><div data-testid="svgRoot-comp-l76zsjod" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="47.999 62.5 104 74.999" viewBox="47.999 62.5 104 74.999" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--p4ieea8d6ilx"><title id="svgcid--p4ieea8d6ilx"></title>
						<g>
						<path fill="#E98866" d="M96.43 94.141c0 5.558-10.616 10.064-23.712 10.064s-23.712-4.506-23.712-10.064 10.616-10.064 23.712-10.064S96.43 88.583 96.43 94.141z" data-color="1"></path>
						<path fill="#E98866" d="M151.576 72.564c0 5.558-10.616 10.064-23.712 10.064s-23.712-4.506-23.712-10.064S114.768 62.5 127.864 62.5s23.712 4.506 23.712 10.064z" data-color="1"></path>
						<path d="M93.711 107.041c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.018 2.018 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M93.711 117.829c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M93.711 128.618c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.014 2.014 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M103.953 88.306c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.8-.55c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.016 2.016 0 0 0-2.825.405 2.03 2.03 0 0 0 .405 2.833z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 96.253c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.016 2.016 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 107.041c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.018 2.018 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 117.829c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.013 2.013 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
						<path d="M148.857 128.618c-4.424 2.983-12.458 4.836-20.964 4.836-8.982 0-17.227-2.004-21.519-5.232a2.017 2.017 0 0 0-2.825.405 2.026 2.026 0 0 0 .404 2.832c5.03 3.782 13.979 6.04 23.94 6.04 9.406 0 18.085-2.066 23.215-5.525a2.025 2.025 0 0 0 .548-2.807 2.014 2.014 0 0 0-2.799-.549z" fill="#E5CDBB" data-color="2"></path>
							</g>
						</svg>
					</div></div>서비스 가격</h5>
					<p class="ks3">
					대부분 정부 지원</p>
					<p class="ks3">
					<b>본인부담금</b> I 6,000~7,000원 (회당)</p>
					
				
					<h5 class="font-weight-bold" style="display:flex;">
					<div id="comp-l76zsnt2" style="margin-right:10px;"><div data-testid="svgRoot-comp-l76zsnt2" class="_3bLYT _2OIRR"><svg preserveAspectRatio="xMidYMid meet" data-bbox="38.001 50 123.999 100" viewBox="38.001 50 123.999 100" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--h5bik8okh2h0"><title id="svgcid--h5bik8okh2h0"></title>
						<g>
							<path d="M159.623 50H53.343a2.375 2.375 0 0 0-2.377 2.374v8.594h-9.582a3.381 3.381 0 0 0-3.383 3.379v69.948c0 .897.357 1.758.993 2.391a3.387 3.387 0 0 0 2.39.988h.006l21.078-.037v8.984A3.38 3.38 0 0 0 65.851 150c.623 0 1.247-.172 1.794-.514l18.91-11.812h61.109a3.381 3.381 0 0 0 3.383-3.379v-9.599h8.576a2.375 2.375 0 0 0 2.377-2.374V52.374A2.375 2.375 0 0 0 159.623 50zm-15.343 69.948v10.968H85.583c-.634 0-1.256.178-1.794.514l-14.556 9.092v-6.27c0-.897-.357-1.758-.993-2.391a3.387 3.387 0 0 0-2.39-.988h-.006l-21.078.037V67.726h99.514v52.222zm12.966 0h-6.199V64.347a3.381 3.381 0 0 0-3.383-3.379H55.72v-6.22h101.526v65.2z" fill="#E5CDBB" data-color="1"></path>
							<path d="M70.236 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96 4.947 0 8.972-4.02 8.972-8.96 0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
							<path d="M94.523 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96s8.972-4.02 8.972-8.96c0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
							<path d="M118.811 89.906c-4.947 0-8.972 4.02-8.972 8.96 0 4.94 4.025 8.96 8.972 8.96 4.947 0 8.972-4.02 8.972-8.96 0-4.94-4.025-8.96-8.972-8.96z" fill="#E98866" data-color="2"></path>
						</g>
					</svg>
					</div></div>서비스 내용</h5>
					<p class="ks3">
					기본 10회(주1회, 3개월) 지원 </p>
					<p class="ks3" style="text-align:center;">
						<a href="#submitAct" class="submitBtn">신청하기</a>
					</p>
				</div>
			</li>
			</ul>
        </div>
        <div class="col-lg-6 voucher1">
			<img class="img-fluid disp-img" src="<?php echo G5_URL?>/pages/img/voucher6.jpg" style="width:100%;">
        </div>
      </div>
    </div>

	
	<!-------------------------- 

	지도 : 구글지도로 주소를 검색하신 다음에 공유버튼을 클릭하여 iframe 형식으로 가져오시면 됩니다.

	-------------------------->
	<div class="container-body-fluid">
		<input type="hidden" value="<?php echo G5_THEME_URL?>" id="send_url">
		<div class="row" id="submitAct">
			<div class="col-md-6 text-center" style="padding:30px; background:#f5f5f5; margin:0 auto;">
				<!-- 타이틀 -->
				<div class="margin-bottom-40">
				</div>
				<div class="row">
					<div class="col-md-12 margin-bottom-20">
						<input class="form-control" type="text" name="ety_name" value="" placeholder="이름">
					</div><!-- /col -->
					<div class="col-md-12 margin-bottom-20">
						<input class="form-control" type="text" name="ety_phone" value="" placeholder="연락처">
					</div><!-- /col -->
					<div class="col-md-12 margin-bottom-20">
						<input class="form-control" type="text" name="ety_email" value="" placeholder="이메일">
					</div><!-- /col -->
				</div><!-- /row -->
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<textarea class="form-control" name="ety_content" value="" id="ety_content" rows="3" placeholder="문의사항"></textarea>
						</div>
					</div>
					<div class="col-md-12 margin-bottom-20" style="text-align:left;">
						<p style="font-weight: bold;">옵션을 선택합니다</p>
						<div style="display:block;"><input type="radio" name="ety_program" value="아동청소년심리지원바우처" checked>아동청소년심리지원바우처</input></div>
						<div style="display:block;"><input type="radio" name="ety_program" value="보완대체의사소통(AAC)기기 활용 중재서비스">보완대체의사소통(AAC)기기 활용 중재서비스</input></div>
						<div style="display:block;"><input type="radio" name="ety_program" value="발달재활서비스">발달재활서비스</input></div>
						<div style="display:block;"><input type="radio" name="ety_program" value="언어발달지원">언어발달지원</input></div>
						<div style="display:block;"><input type="radio" name="ety_program" value="성인심리지원서비스">성인심리지원서비스</input></div>
						<div style="display:block;"><input type="radio" name="ety_program" value="청년마음건강">청년마음건강</input></div>
					</div><!-- /col -->
					<div class="col-md-12 margin-bottom-20">
						<div class="form-check">
							<input type="checkbox" name="agree" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">약관동의</label>
						</div>
					</div>
					<div class="col-md-12">
						<button type="submit" class="submitBtn sendmail" style="border:0;">문의하기</button>
					</div>
				</div><!-- /row -->					
			</div>
		</div>
	</div>
	<script>
		$(".category").on("click", function (e) {
			var targetValue = e.target.attributes[1].value;
			
			$(".category").removeClass("category-active");
			$(this).addClass("category-active");
			$(".voucher").css("display","none");
			$("#"+targetValue).css("display","flex");
		})
	</script>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>