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
	@media (min-width: 992px) and (max-width: 1200px) {
		.card2-img-top {
			width: 110px !important;
			height: 250px !important;
		}	
	}
	.card2-img-top {
		width: 210px;
		height: 330px;
	}
	.li-content {
		text-align:left;
		list-style-type: disc;
		list-style-position: inside;
		text-indent: -15px;
		padding-left: 10px;
		font-size: 12px;
	}
	.li-title {
		text-align: left;
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
	.category {
		height: 50px;
		text-align: center;
		width: 100%;
		border-bottom: 3px solid #E5CDBB;
		background-color: #efefef;
		font-family: "Roboto", Sans-serif;
		font-size: 16px;
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
	@media (max-width:992px) {
		.card-img-care {
			width:15%;
		}
		.category {
			width:100% !important;
		}
		.category-container {
			flex-direction: column !important;
		}
	}
	.employee {
		padding: 0 4% 0 4%;
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


<?php
include_once(G5_THEME_PATH.'/leftnav.php');
?>
	<div class="center-heading en1 margin-top-40">
		<h2 class="font-weight-bold" style="color:#696969;">재활사 소개</h2>
		
	</div>
	<div class="container-body margin-bottom-40 category-container" style="padding: 0 4% 0 4%; display:flex;justify-content: center;flex-direction: row;">
		<div class="category category-active" data="lang">말자람팀</div>
		<div class="category" data="heart">마음자람팀</div>
		<div class="category" data="manage">운영지원팀</div>
	</div>

    <!-- Page Content -->
	<style>
	table td {
		color: #666;
		font-size: 15px;
	}
	</style>

	
	<div class="container-body employee" id="lang">
		<div class="row">
			<div class="col-lg-6 margin-bottom-20 employee-card">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/employee/hwangsejin.jpg" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">황세진 선생님<strong style="font-size:15px;">(언어재활사)</strong></h5>
					<p class="card-text ks3 f14">
					<ul>
						<div>
							<li class="li-title"><strong>학력</strong></li>
							<li class="li-content">호남대학교 언어치료학과 졸업</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>자격</strong></li>
							<li class="li-content">언어재활사 1급</li>
							<li class="li-content">놀이심리상담사 1급</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>경력</strong></li>
							<li class="li-content">남원아동발달센터 언어재활사</li>
							<br>
						</div>
					</ul>
					</p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20 employee-card">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/employee/wangnamjin.jpg" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">왕남진 선생님<strong style="font-size:15px;">(언어재활사)</strong></h5>
					<p class="card-text ks3 f14">
					<ul>
						
						<div>
							<li class="li-title"><strong>학력</strong></li>
							<li class="li-content">남부대학교 산업정책대학원 언어치료청강학과 석사 (언어치료전공)</li>
						<br>
						</div>
						<div>
							<li class="li-title"><strong>자격</strong></li>
							<li class="li-content">언어재활사 1급</li>
							<li class="li-content">사회복지사 1급</li>
							<li class="li-content">놀이심리상담사 1급</li>
							<li class="li-content">미술심리상담사 1급</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>경력</strong></li>
							<li class="li-content">엠마우스복지관 사회복지사</li>
							<li class="li-content">남원특수교육지원센터언어재활사</li>
							<br>
						</div>
					</ul>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20 employee-card">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/employee/leehyerin.jpg" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">이혜린 선생님<strong style="font-size:15px;">(언어재활사)</strong></h5>
					<p class="card-text ks3 f14">
					<ul>
						
						<div>
							<li class="li-title"><strong>학력</strong></li>
							<li class="li-content">남부대학교 언어치료청각학과 졸업</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>자격</strong></li>
							<li class="li-content">언어재활사 1급</li>
							<li class="li-content">청능사</li>
							<li class="li-content">​미술심리상담사 1급</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>경력</strong></li>
							<li class="li-content">전주장애인종합복지관 언어재활사</li>
							<br>
						</div>
					</ul>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20 employee-card">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/employee/limnayoung.jpg" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">임나영 선생님<strong style="font-size:15px;">(언어재활사)</strong></h5>
					<p class="card-text ks3 f14">
					<ul>
						
						<div>
							<li class="li-title"><strong>학력</strong></li>
							<li class="li-content">​남부대학교 언어자료청각학과 졸업</li>
							<li class="li-content">예원예술대학교 사회복지대학원 석사</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>자격</strong></li>
							<li class="li-content">언어재활사 2급</li>
							<li class="li-content">인지재활교육사 2급</li>
							<li class="li-content">놀이심리상담사 1급</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>경력</strong></li>
							<li class="li-content">순창드림스타트 언어재활사</li>
							<li class="li-content">전주언어특수교육원 언어 · 인지재활사</li>
							<br>
						</div>
					</ul>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
		</div>
	</div>
	<div class="container-body employee" id="heart" style="display:none;">
		<div class="row">
			<div class="col-lg-6 margin-bottom-20 employee-card">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/employee/kimbomi.jpg" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">김보미 선생님<strong style="font-size:15px;">(놀이재활사)</strong></h5>
					<p class="card-text ks3 f14">
					<ul>
						
						<div>
							<li class="li-title"><strong>학력</strong></li>
							<li class="li-content">조선대학교 대학원 상담심리학과 석사 졸업 ​  (아동상담 전공)</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>자격</strong></li>
							<li class="li-content">놀이심리상담사 2급</li>
							<li class="li-content">심리상담사 1급</li>
							<li class="li-content">행동치료사 2급</li>
							<li class="li-content">아동자극수용감각 통합사 3급</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>경력</strong></li>
							<li class="li-content">남원아동발달센터 놀이치료사</li>
							<li class="li-content">​이연심리상담 놀이치료사</li>
							<br>
						</div>
					</ul>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			
			<div class="col-lg-6 margin-bottom-20 employee-card">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/employee/profile.png" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">최유림 선생님<strong style="font-size:15px;">(놀이재활사)</strong></h5>
					<p class="card-text ks3 f14">
					<ul>
						
						<div>
							<li class="li-title"><strong>학력</strong></li>
							<li class="li-content">조선대학교 대학원 상담심리학과 석사 졸업 (아동상담전공)</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>자격</strong></li>
							<li class="li-content">놀이심리상담사 2급</li>
							<li class="li-content">미술심리상담사 1급</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>경력</strong></li>
							<li class="li-content">광주 드림정신과의원 부설 센터 놀이재활사</li>
							<li class="li-content">참사랑언어심리상담센터 놀이재활사</li>
							<li class="li-content">남원아동발달센터 놀이재활사</li>
							<br>
						</div>
					</ul>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20 employee-card">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/employee/kimsara.jpg" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">김사라 선생님<strong style="font-size:15px;">(음악재활사)</strong></h5>
					<p class="card-text ks3 f14">
					<ul>
						
						<div>
							<li class="li-title"><strong>학력</strong></li>
							<li class="li-content">숙명여자대학교 음악치료대학원 졸업 (임상음악치료)</li>
							<br>
						</div>
						<div>
						<li class="li-title"><strong>자격</strong></li>
						<li class="li-content">임상심리사 1급</li>
						<li class="li-content">임상음악전문가 1급</li>
						<li class="li-content">사회복지사 1급</li>
						<li class="li-content">미술심리상담사 1급</li>
						<br>	
						</div>
						<div>
							<li class="li-title"><strong>경력</strong></li>
							<li class="li-content">남원시 아동보호전문기관 심리치료사</li>
							<li class="li-content">익산시 아동보호전문기관 심리치료사</li>
							<li class="li-content">전라북도 아동보호전문기관 심리치료사</li>
							<li class="li-content">​부안 장애인종합복지관 음악치료사</li>
							<br>
						</div>
					</ul>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20 employee-card">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/employee/kangsora.jpg" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">강소라 선생님<strong style="font-size:15px;">(음악재활사)</strong></h5>
					<p class="card-text ks3 f14">
					<ul>
						
						<div>
							<li class="li-title"><strong>학력</strong></li>
							<li class="li-content">우석대학교 국악과 졸업</li>
							<li class="li-content">​전주교육대학교 교육대학원 초등국악과 석사</li><br>
						</div>
						<div>
							<li class="li-title"><strong>자격</strong></li>
							<li class="li-content">음악심리상담사 1급</li>
							<li class="li-content">심리상담사 2급</li><br>
						</div>
						<div>
							<li class="li-title"><strong>경력</strong></li>
							<li class="li-content">한국문화예술교육진흥원 예술강사</li><br>
						</div>
					</ul>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20 employee-card">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/employee/choiyunseon.jpg" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">최윤선 선생님<strong style="font-size:15px;">(미술재활사)</strong></h5>
					<p class="card-text ks3 f14">
					<ul>
						
						<div>
							<li class="li-title"><strong>학력</strong></li>
							<li class="li-content">계명대학교 교육대학원 석사 (미술교육전공)</li>
							<li class="li-content">동국대학교 문화예술대학원 예술치료학과 석사(미술치료전공)</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>자격</strong></li>
							<li class="li-content">미술심리상담사 1급</li>
							<li class="li-content">​놀이심리상담사 1급</li>
							<li class="li-content">​요리심리상담사 1급</li>
							<li class="li-content">​​원예심리상담사 1급</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>경력</strong></li>
							<li class="li-content">실상사작은학교 미술교사</li>
							<li class="li-content">​초등학교 방과후 미술강사</li>
							<li class="li-content">​인월발달센터 미술재활사</li>
							<li class="li-content">​​남원아동발달센터 미술재활사</li>
							<br>
						</div>
					</ul>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div>
			
			<div class="col-lg-6 margin-bottom-20 employee-card">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/employee/eomsuwon.jpg" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">엄수원 선생님<strong style="font-size:15px;">(미술재활사)</strong></h5>
					<p class="card-text ks3 f14">
					<ul>
						
						<div>
							<li class="li-title"><strong>학력</strong></li>
							<li class="li-content">홍익대학교 미술대학 졸업(동양화/시각디자인 전공)</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>자격</strong></li>
							<li class="li-content">한국어교원 2급</li>
							<li class="li-content">​미술심리상담사 1급</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>경력</strong></li>
							<li class="li-content">(주)한화 화약부문 불꽃프로모션팀 쇼디자이너</li>
							<li class="li-content">칠레 한글학교 교사</li>
							<br>
						</div>
					</ul>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20 employee-card">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/employee/profile.png" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">오선아 선생님<strong style="font-size:15px;">(심리상담사)</strong></h5>
					<p class="card-text ks3 f14">
					<ul>
						
						<div>
							<li class="li-title"><strong>학력</strong></li>
							<li class="li-content">광주대학교 대학원 석사 졸업(임상심리전공)</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>자격</strong></li>
							<li class="li-content">청소년상담사 2급</li>
							<li class="li-content">심리상담사 2급</li>
							<li class="li-content">정신건강임상심리사 2급</li>
							<li class="li-content">​미술심리상담사 1급</li>
							<li class="li-content">아동심리상담사 2급</li>
							<br>
						</div>
						<div>
							<li class="li-title"><strong>경력</strong></li>
							<li class="li-content">광주 화목한정신건강의학과 의원 정신건강임상심리리사</li>
							<li class="li-content">​남원아동발달센터 미술재활사</li>
							<br>
						</div>
					</ul>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
		</div>
	</div>
	<div class="container-body employee" id="manage" style="display:none;">
		<div class="row">
			<div class="col-lg-6 margin-bottom-20 employee-card">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/employee/leejihyun.jpg" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">이지현</h5>
					<p class="card-text ks3 f14"></p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
			<div class="col-lg-6 margin-bottom-20 employee-card">
				<!--card-->
				<div class="card2">
					<div class="card-title">
						<img src="/pages/img/employee/profile.png" class="card2-img-top" alt="...">
					</div>
					<div class="card-body">
					<h5 class="card-title ks5">박선아</h5>
					<p class="card-text ks3 f14"></p>
					<!--<a href="#" target="_blank" class="btn btn-danger ks4">바로가기</a>-->
					</div>
				</div>
				<!--/card-->
			</div><!-- /col -->
		</div>
	</div>
	<script>
		$(".category").on("click", function (e) {
			var targetValue = e.target.attributes[1].value;
			
			$(".category").removeClass("category-active");
			$(this).addClass("category-active");
			$(".employee").css("display","none");
			$("#"+targetValue).css("display","block");
		})
	</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>