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
		@media (min-width: 992px) {
			.location {
				margin-left:0%;
			}
		}
		@media (max-width: 768px) {
			.location {
				flex-direction: column-reverse;
			}
		}
	</style>



<?php
include_once(G5_THEME_PATH.'/leftnav.php');
?>
	<div class="center-heading en1 margin-top-40">
		<h2 class="font-weight-bold" style="color:#696969;">오시는길</h2>
		<span class="center-line"></span>
	</div>
	<div class="container-body margin-bottom-80">
		<article id="sub_contents" class="cont s_body" style="text-align:center;">
			<div class="location margin-top-60 col-lg-12 col-md-12 col-sm-12" style="display:flex;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3161.089334376276!2d126.86251321450524!3d37.60005647979159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9a2b10065cbf%3A0x4408073cf76f4e5b!2z6rOg7JaR7IucIO2YhOyynOuPmSDtlZzqta3tla3qs7XrjIDtlZnqtZAg7ZWZ7IOd7ZqM6rSA!5e0!3m2!1sko!2skr!4v1675387764496!5m2!1sko!2skr" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<div style="width:100%; text-align: left; padding-left:5%;">
					<h2 class="font-weight-bold" style="color:#696969; text-align:center;">한국항공대학교 총학생회</h2>
					
					<span class="material-icons" style="position:absolute">home</span><p style="font-size: 15px;margin-bottom: 10px;color: #525252;margin: -1px 0 0 30px;"> 경기도 고양시 항공대학로76, 학생회관 202-1호 총학생회실</p><br>
					<span class="material-icons" style="position:absolute">call</span><p style="font-size: 15px;margin-bottom: 10px;color: #525252;margin: -1px 0 0 30px;"> 02-300-0235</p><br>
					<svg class="svg-icon" viewBox="0 0 20 20" style="width:25px;position:absolute"><path fill="black" d="M11.344,5.71c0-0.73,0.074-1.122,1.199-1.122h1.502V1.871h-2.404c-2.886,0-3.903,1.36-3.903,3.646v1.765h-1.8V10h1.8v8.128h3.601V10h2.403l0.32-2.718h-2.724L11.344,5.71z"></path></svg>
					<p style="font-size: 15px;margin-bottom: 10px;color: #525252;margin: -1px 0 0 30px;"> 한국항공대학교 총학생회 (kau.accompany)</p><br>
					<svg class="svg-icon" viewBox="0 0 20 20" style="width:25px;position:absolute"><path fill="black" d="M14.52,2.469H5.482c-1.664,0-3.013,1.349-3.013,3.013v9.038c0,1.662,1.349,3.012,3.013,3.012h9.038c1.662,0,3.012-1.35,3.012-3.012V5.482C17.531,3.818,16.182,2.469,14.52,2.469 M13.012,4.729h2.26v2.259h-2.26V4.729z M10,6.988c1.664,0,3.012,1.349,3.012,3.012c0,1.664-1.348,3.013-3.012,3.013c-1.664,0-3.012-1.349-3.012-3.013C6.988,8.336,8.336,6.988,10,6.988 M16.025,14.52c0,0.831-0.676,1.506-1.506,1.506H5.482c-0.831,0-1.507-0.675-1.507-1.506V9.247h1.583C5.516,9.494,5.482,9.743,5.482,10c0,2.497,2.023,4.52,4.518,4.52c2.494,0,4.52-2.022,4.52-4.52c0-0.257-0.035-0.506-0.076-0.753h1.582V14.52z"></path>
					</svg><p style="font-size: 15px;margin-bottom: 10px;color: #525252;margin: -1px 0 0 30px;"> 한국항공대학교 총학생회 (@kau._.rm)</p><br>
					<span class="material-icons" style="position:absolute">mail</span><p style="font-size: 15px;margin-bottom: 10px;color: #525252;margin: -1px 0 0 30px;"> kaustudentcouncil@gmail.com</p><br>
					<span class="material-icons" style="position:absolute">question_answer</span><p style="font-size: 15px;margin-bottom: 10px;color: #525252;margin: -1px 0 0 30px;"> 한국항공대학교 총학생회 카카오톡 (kau.chonghak)</p>
				</div>
			</div>
			
		</article>		
	</div>

    
       





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>