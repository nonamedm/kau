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
		width: 25%;
		text-align: center;
		height: 50px;
		border-bottom: 3px solid #E5CDBB;
    	background-color: #efefef;
		font-family: "Roboto", Sans-serif;
		font-size: 16px;
		font-weight: 600;
		color:#7A7A7A;
		display: flex;
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
    	flex-wrap: wrap;
		border-bottom: 1px dashed grey;
    	margin-bottom: 10px;
	}
	.eval-category {
		font-weight: 900;
		color: grey;
		font-size: 1.5rem;
		margin-bottom:25px;
	}
	.eval-no {
		width: 5%;
		font-weight: 900;
		color: #b0b0b0;
		font-size: 1.5rem;
	}
	.eval-title {
		line-height: 2;
		width:45%;
		font-size: 1rem !important;
	}
	.eval-cont {
		padding-left: 5%;
		line-height: 2.7;
	}
	.list-unstyled {
		margin-bottom: 100px;
	}
	@media (min-width:993px) {
		.list-unstyled {
			/* padding-left:5%; */
		}

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
	@media (max-width:992px) {
		.eval-title {
			width:100% !important;
		}
		.eval-cont {
			padding-left: 0 !important;
		}
	}
	@media (max-width:800px) {
		.list-unstyled {
			/* padding-left:5%; */
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

<?php
include_once(G5_THEME_PATH.'/leftnav.php');
?>
	<div class="center-heading en1 margin-top-40">
		<h2 class="font-weight-bold" style="color:#696969;">검사 및 평가</h2>
		
	</div>
	<div class="container-body margin-bottom-40 category-container" style="padding: 0 5% 0 5%;display:flex;justify-content: center;flex-direction: row;">
		<div class="category" data="lang">언어 발달 검사</div>
		<div class="category" data="counsel">아동 심리검사 및 평가</div>
		<div class="category category-active" data="parents">부모 양육태도 검사</div>
		<div class="category" data="recog">인지 및 학습검사</div>
	</div>
	<div class="container-body margin-top-80 margin-bottom-80" style="padding: 0 5% 0 5%;">
		<ul id="lang" class="list-unstyled" style="display:none;">
				<h5 class="eval-category" style="display:flex;">
					<div id="comp-l7il1lhs" style="margin-right:10px;transform: rotate( 95deg );"><div data-testid="svgRoot-comp-l7il1lhs" class="_3bLYT _2OIRR"><svg preserveAspectRatio="none" data-bbox="24 33 152.001 134" viewBox="24 33 152.001 134" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" fill="#E5CDBB">
						<g>
							<path d="M159.621 121.057L109.217 38.8c-4.726-7.737-16.025-7.732-20.745.009L26.236 140.885c-7.475 12.26 5.093 26.906 18.453 21.504l100.386-40.592c9.257-3.675 14.546-.74 14.546-.74z"></path>
							<path d="M173.822 144.873l-4.835-7.931c-3.723-6.107-11.357-8.624-18.015-5.94l-43.744 17.637 49.153 17.467c12.971 4.609 24.58-9.524 17.441-21.233z"></path>
						</g>
					</svg>
					</div></div>
				언어 발달 검사</h5>
			<li class="eval-li">
				<h5 class="eval-no">01</h5>
				<h5 class="eval-title">SELSI(Sequenced Language Scale for Infants)</h5>
				<p class="eval-cont">영유아 언어발달 선별검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">02</h5>
				<h5 class="eval-title">REVT(Receptive & Expressive Vocabulary Test)</h5>
				<p class="eval-cont">수용, 표현 어휘력 검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">03</h5>
				<h5 class="eval-title">PRES(Preschool Receptive-Expressive Language Scale)</h5>
				<p class="eval-cont">취학 전 아동의 수용 언어 및 표현 언어 발달 척도</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">04</h5>
				<h5 class="eval-title">KOSECT(Korean Sentence Comprehension TEST)</h5>
				<p class="eval-cont">구문의미 이해력 검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">05</h5>
				<h5 class="eval-title">TOPS(Test of Problem Solving)</h5>
				<p class="eval-cont">언어문제해결력 검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">06</h5>
				<h5 class="eval-title">LSSC(Language Scale for School-aged Children)</h5>
				<p class="eval-cont">학령기 아동 언어검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">07</h5>
				<h5 class="eval-title">KOLRA(Korean Language-based Reading Assessment)</h5>
				<p class="eval-cont">한국어 읽기검사(난독증 평가도구)</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">08</h5>
				<h5 class="eval-title">U-TAP(Urimal Test of Articulation and Phonology)</h5>
				<p class="eval-cont">우리말 조음.음운검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">09</h5>
				<h5 class="eval-title">SMST(Speech Mechanism Screening Test)</h5>
				<p class="eval-cont">조음기관 구조.기능 선별검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">10</h5>
				<h5 class="eval-title">P-AAC(Paradise-Augmentative and Altenative Communication Assessment)</h5>
				<p class="eval-cont">파라다이스 보완대체 의사소통 기초능력평가</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">11</h5>
				<h5 class="eval-title">P-FA(Paradise-Fluency Assessment)</h5>
				<p class="eval-cont">파라다이스 유창성검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">12</h5>
				<h5 class="eval-title">KSA(Korean Speech Audiometry)</h5>
				<p class="eval-cont">어음청각검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">13</h5>
				<h5 class="eval-title">K-MBCDI(Korean The MacArthur-Bates Communicative Development Inventories)</h5>
				<p class="eval-cont">맥아더-베이츠 의사소통발달평가</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">14</h5>
				<h5 class="eval-title">KONA(Korean Narrative Assessment)</h5>
				<p class="eval-cont">한국어 이야기 평가</p>
			</li>
		</ul>

		<ul id="counsel" class="list-unstyled" style="display:none;">
			<h5 class="eval-category" style="display:flex;">
			<div id="comp-l7il1lhs" style="margin-right:10px;transform: rotate( 95deg );"><div data-testid="svgRoot-comp-l7il1lhs" class="_3bLYT _2OIRR"><svg preserveAspectRatio="none" data-bbox="24 33 152.001 134" viewBox="24 33 152.001 134" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" fill="#E5CDBB">
				<g>
					<path d="M159.621 121.057L109.217 38.8c-4.726-7.737-16.025-7.732-20.745.009L26.236 140.885c-7.475 12.26 5.093 26.906 18.453 21.504l100.386-40.592c9.257-3.675 14.546-.74 14.546-.74z"></path>
					<path d="M173.822 144.873l-4.835-7.931c-3.723-6.107-11.357-8.624-18.015-5.94l-43.744 17.637 49.153 17.467c12.971 4.609 24.58-9.524 17.441-21.233z"></path>
				</g>
			</svg>
			</div></div>
			아동 심리검사 및 평가</h5>
			<li class="eval-li">
				<h5 class="eval-no">01</h5>
				<h5 class="eval-title">TCI(Temperament and Character Inventory)</h5>
				<p class="eval-cont">기질 및 성격검사 - 청소년/아동/유아</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">02</h5>
				<h5 class="eval-title">SMS(Social maturity Scale)</h5>
				<p class="eval-cont">사회 성숙도 검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">03</h5>
				<h5 class="eval-title">K-CDI(Korean Child Development Inventory)</h5>
				<p class="eval-cont">아동발달검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">04</h5>
				<h5 class="eval-title">K-CBCL(Child Behavior Checklist)</h5>
				<p class="eval-cont">아동·청소년 행동 평가 척도</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">05</h5>
				<h5 class="eval-title">자유놀이평가</h5>
				<p class="eval-cont">　</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">06</h5>
				<h5 class="eval-title">WISC(Wechsler Intelligence Scale for Children)</h5>
				<p class="eval-cont">웩슬러 아동지능검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">07</h5>
				<h5 class="eval-title">TAT(Thematic Apperception Test)</h5>
				<p class="eval-cont">아동용 주제통각 검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">08</h5>
				<h5 class="eval-title">BGT(Bender-Gestalt Test)</h5>
				<p class="eval-cont">벤더게슈탈트 심리검사</p>
			</li>
		</ul>

		<ul id="parents" class="list-unstyled">
			<h5 class="eval-category" style="display:flex;">
			<div id="comp-l7il1lhs" style="margin-right:10px;transform: rotate( 95deg );"><div data-testid="svgRoot-comp-l7il1lhs" class="_3bLYT _2OIRR"><svg preserveAspectRatio="none" data-bbox="24 33 152.001 134" viewBox="24 33 152.001 134" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" fill="#E5CDBB">
				<g>
					<path d="M159.621 121.057L109.217 38.8c-4.726-7.737-16.025-7.732-20.745.009L26.236 140.885c-7.475 12.26 5.093 26.906 18.453 21.504l100.386-40.592c9.257-3.675 14.546-.74 14.546-.74z"></path>
					<path d="M173.822 144.873l-4.835-7.931c-3.723-6.107-11.357-8.624-18.015-5.94l-43.744 17.637 49.153 17.467c12.971 4.609 24.58-9.524 17.441-21.233z"></path>
				</g>
			</svg>
			</div></div>
			부모 양육태도 검사</h5>
			<li class="eval-li">
				<h5 class="eval-no">01</h5>
				<h5 class="eval-title">PAT(Parenting Attitude Test)</h5>
				<p class="eval-cont">부모양육태도 유형검사</p>
			</li>
			<li class="eval-li">
				<h5 class="eval-no">02</h5>
				<h5 class="eval-title">MIM(Marshack Interation Method)</h5>
				<p class="eval-cont">모-아 상호작용 평가</p>
			</li>
		</ul>

		<ul id="recog" class="list-unstyled" style="display:none;">
			<h5 class="eval-category" style="display:flex;">
			<div id="comp-l7il1lhs" style="margin-right:10px;transform: rotate( 95deg );"><div data-testid="svgRoot-comp-l7il1lhs" class="_3bLYT _2OIRR"><svg preserveAspectRatio="none" data-bbox="24 33 152.001 134" viewBox="24 33 152.001 134" height="25" width="25" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" fill="#E5CDBB">
				<g>
					<path d="M159.621 121.057L109.217 38.8c-4.726-7.737-16.025-7.732-20.745.009L26.236 140.885c-7.475 12.26 5.093 26.906 18.453 21.504l100.386-40.592c9.257-3.675 14.546-.74 14.546-.74z"></path>
					<path d="M173.822 144.873l-4.835-7.931c-3.723-6.107-11.357-8.624-18.015-5.94l-43.744 17.637 49.153 17.467c12.971 4.609 24.58-9.524 17.441-21.233z"></path>
				</g>
			</svg>
			</div></div>
			인지 및 학습검사</h5>
			<li class="eval-li">
				<h5 class="eval-no">01</h5>
				<h5 class="eval-title">BASA(Basic Academic Skills Assessment)</h5>
				<p class="eval-cont">기초학습기능 수행평가체제<br>(읽기, 쓰기, 초기 문해, 수학)</p>
			</li>
		</ul>
	</div>
    
       


<script>
	$(".category").on("click", function (e) {
		var targetValue = e.target.attributes[1].value;
		
		$(".category").removeClass("category-active");
		$(this).addClass("category-active");
		$(".list-unstyled").css("display","none");
		$("#"+targetValue).css("display","block");
	})

</script>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>