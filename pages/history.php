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



		@media (min-width: 992px) {
			article#sub_contents {
				margin-left:20%;
			}
		}
		article#sub_contents p{
			color:#5F5F5F;
			font-family:'Noto Sans KR', '나눔고딕',Nanum Gothic,NanumGothic,"돋움", Dotum, "굴림", Gulim, AppleGothic, Sans-serif;
			font-size:14px;
				font-weight:400;
			line-height:1.8em;
			letter-spacing:-0.025em;
			margin-bottom:10px;
		}
		article#sub_contents figure.img_left{width:35%;float:left;margin-right:10px;}
		article#sub_contents figure.img_right{width:45%;float:right;margin-left:10px;}
		article#sub_contents figure.img_center{width:100%;}
		article#sub_contents figure img{max-width:100%;}
		article#sub_contents h2{
			color:#333;
			font-family:'Noto Sans KR', '나눔고딕',Nanum Gothic,NanumGothic,"돋움", Dotum, "굴림", Gulim, AppleGothic, Sans-serif;
			font-size:23px;
			font-weight:700;
			margin-top: 5px;
			margin-bottom:25px;
			letter-spacing:-0.05em;
			line-height:120%;
		}
		article#sub_contents > ul{padding-top:20px;margin:0 auto;}
		article#sub_contents .year{
			display:block;
			width:110px;
			color:#5F5F5F;
			font-family:'나눔고딕',Nanum Gothic,NanumGothic,"돋움", Dotum, "굴림", Gulim, AppleGothic, Sans-serif,verdana,arial,helvetica,sans-serif;
			font-size:40px; 
			letter-spacing:-0.1em;
			background:url('/pages/img/line_mid.gif') no-repeat right center;
		}
		article#sub_contents ul li ul{
			background:url('/pages/img/line_bg.gif') repeat-y left top;
			margin-left:101px;
		}
		article#sub_contents ul li ul li{
			padding:10px;
			font-size: 14px;
			color: #5C5C5C;
			font-family: 'Noto Sans KR', '나눔고딕',Nanum Gothic,NanumGothic,"돋움", Dotum, "굴림", Gulim, AppleGothic, Sans-serif;
		}
		article#sub_contents .month{
			color:#5F5F5F;
			font-weight:bold;
			font-family:'Noto Sans KR', '나눔고딕',Nanum Gothic,NanumGothic,"돋움", Dotum, "굴림", Gulim, AppleGothic, Sans-serif;
			font-size:13px; 
			letter-spacing:-0.05em; 
			margin-right:10px;
		}
		@media screen and (max-width:600px) {
			article#sub_contents .year{  
				background:none;   
			} 
			article#sub_contents ul li ul{
				background:none;
				margin-left:20px;
				margin-top: 10px;
				margin-bottom:25px;
				border-top:1px solid #C9C9C9;
			}
		}
	</style>


<?php
include_once(G5_THEME_PATH.'/leftnav.php');
?>

	<div class="center-heading en1 margin-top-40">
		<h2 class="font-weight-bold" style="color:#696969;">사업소개</h2>
		<span class="center-line"></span>
	</div>
	<div class="container-body margin-top-80 margin-bottom-80">
		<article id="sub_contents" class="cont s_body">
			<ul>
				
				<li><span class="year">2022</span>
				<ul>
					<li>- <span class="month">3월</span>청년마음건강 바우처 등록</li>
					<li>- <span class="month">7월</span>사회적기업가 육성사업 우수상 수상</li>
				</ul>
				</li>
				<li><span class="year">2021</span>
				<ul>
					<li>- <span class="month">1월</span>보건복지부 지역사회서비스투자사업 등록<br>
						<span class="month">　　</span>(아동청소년심리지원서비스/성인심리지원서비스/보완대체의사소통기기활용중재서비스)</li>
					<li>- <span class="month">　 </span>보건복지부 장애아동발달재활서비스 등록</li>
					<li>- <span class="month">　 </span>보건복지부 언어발달지원서비스 등록 </li>
					<li>- <span class="month">4월</span>사회적기업가 육성사업 선정(한국사회적기업진흥원)</li>
					<li>- <span class="month">5월</span>발달재활서비스 자문기관 선정(한국사회보장정보원)</li>
					<li>- <span class="month">9월</span>지역형 예비사회적기업 지정(전북)</li>
				</ul>
				</li>
				<li><span class="year">2020</span>
				<ul>
					<li>- <span class="month">12월</span>유한회사 남원아동발달센터 전환</li>
				</ul>
				</li>
				<li><span class="year">2010</span>
				<ul>
					<li>- <span class="month">2월</span>발달재활서비스 제공기관 지정</li>
				</ul>
				</li>
				<li><span class="year">2009</span>
				<ul>
					<li>- <span class="month">12월</span>남원아동발달센터 개소</li>
				</ul>
				</li>
			</ul>  
		</article>		
	</div>

    
       





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>