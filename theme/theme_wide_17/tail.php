<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

	<?php include_once(G5_THEME_PATH.'/footer.php')?>
	


    <!-- Bootstrap core JavaScript -->
    <!--<script src="vendor/jquery/jquery.min.js"></script>-->
	<!-- 

	https 에서 접속이 되지 않는 내용 로빈아빠님께서 제보 주셨습니다.
	
	-->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
	var jQuery = $.noConflict(true);
	</script>
    <script src="<?php echo G5_THEME_URL?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo G5_THEME_URL?>/assets/parallax/js/parallax.min.js"></script>
	<script src="<?php echo G5_THEME_URL?>/assets/owlcarousel/js/owl.carousel.min.js"></script>
	<!-- countdown -->
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/assets/countdown/js/kinetic.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/assets/countdown/js/jquery.final-countdown.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/bootstrap-dropdownhover.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/custom.js"></script>


	<script>
		$(document).ready(function () {
			//owl
			jQuery(".owl-carousel").owlCarousel({
				autoplay:true,
				autoplayTimeout:3000,// 1000 -> 1초
				autoplayHoverPause:true,
				loop:true,
				margin:10,//이미지 사이의 간격
				nav:false,
				responsive:{
					0:{
						items:2 // 모바일
					},
					600:{
						items:3 // 브라우저 600px 이하
					},
					1000:{
						items:4 // 브라우저 100px 이하
					}
				}
			});

			// countdown
			'use strict';			
			jQuery('.countdown').final_countdown({
				'start': 1362139200,
				'end': 1388461320,
				'now': 1387461319        
			});

			setInterval(function() {
				countClock();
			}, 1000);
		});
		
		var countDateString = new Date();
		function countClock() {
			<?php
				$resultArr = array();
				$query = "select * from g5_write_schedule";
				$result = sql_query($query);


				for ($i = 0; $row = sql_fetch_array($result); $i++) {
					array_push($resultArr, $row['mb_id']);
				}


				// echo "<pre>\n";
				// print_r($resultArr);
				// echo "</pre>\n";
			?>
			// countDateString = result.count;
					// year, month(-1), day, hours, minutes, seconds
					var countDate = new Date(countDateString);
					var date = new Date();
					var year = date.getFullYear().toString();
				
					var month = date.getMonth() + 1;
					month = month < 10 ? '0' + month.toString() : month.toString();
				
					var day = date.getDate();
					day = day < 10 ? '0' + day.toString() : day.toString();
				
					var hour = date.getHours();
					hour = hour < 10 ? '0' + hour.toString() : hour.toString();
				
					var minutes = date.getMinutes();
					minutes = minutes < 10 ? '0' + minutes.toString() : minutes.toString();
				
					var seconds = date.getSeconds();
					seconds = seconds < 10 ? '0' + seconds.toString() : seconds.toString();
					var currentTime = year+ "-"+month+"-"+day+" "+hour+":"+minutes+":"+seconds;
					
					var totalSeconds = (countDate - date) / 1000;	//밀리초를 초로 바꾸고
					var leftDays = Math.floor(totalSeconds / 3600 / 24);	//남은날
					if(leftDays.toString().length==1){leftDays = "0"+ String(leftDays);}
					var leftHours = Math.floor(totalSeconds / 3600) % 24;	//남은시간
					if(leftHours.toString().length==1){leftHours = "0"+ String(leftHours);}
					var leftMinutes = Math.floor(totalSeconds / 60) % 60; //남은분
					if(leftMinutes.toString().length==1){leftMinutes = "0"+ String(leftMinutes);}
					var leftSeconds = Math.floor(totalSeconds) % 60;		//남은초
					if(leftSeconds.toString().length==1){leftSeconds = "0"+String(leftSeconds);}
					var leftCount = "[ "+leftDays+" / "+leftHours+" : "+leftMinutes+" : "+leftSeconds+" ]";
					$("#currentTime").html("현재시간  "+currentTime);
					var countTimeHTML = '[ <div id="countTime1" style="font-size:45px;width:15%;height:50px; text-align:center;display:inline-table;"></div> / '
											+'<div id="countTime2" style="font-size:45px;width:15%;height:50px; text-align:center;display:inline-table;"></div> : '
											+'<div id="countTime3" style="font-size:45px;width:15%;height:50px; text-align:center;display:inline-table;"></div> : '
											+'<div id="countTime4" style="font-size:45px;width:15%;height:50px; text-align:center;display:inline-table;"></div> ]';
					$("#countTime").html(countTimeHTML);
					$("#countTime1").html(leftDays+"<br/><p style='color:#878484;font-size: 15px;margin-top:-15%;'>Day</p>");
					$("#countTime2").html(leftHours+"<br/><p style='color:#878484;font-size: 15px;margin-top:-15%;'>Hour</p>");
					$("#countTime3").html(leftMinutes+"<br/><p style='color:#878484;font-size: 15px;margin-top:-15%;'>Minute</p>");
					$("#countTime4").html(leftSeconds+"<br/><p style='color:#878484;font-size: 15px;margin-top:-15%;'>Second</p>");
			// $.ajax({
			// 	url : '/loadCount',
			// 	type : 'GET',
			// 	success : function (result) {
			// 		countDateString = result.count;
			// 		// year, month(-1), day, hours, minutes, seconds
			// 		var countDate = new Date(countDateString);
			// 		var date = new Date();
			// 		var year = date.getFullYear().toString();
				
			// 		var month = date.getMonth() + 1;
			// 		month = month < 10 ? '0' + month.toString() : month.toString();
				
			// 		var day = date.getDate();
			// 		day = day < 10 ? '0' + day.toString() : day.toString();
				
			// 		var hour = date.getHours();
			// 		hour = hour < 10 ? '0' + hour.toString() : hour.toString();
				
			// 		var minutes = date.getMinutes();
			// 		minutes = minutes < 10 ? '0' + minutes.toString() : minutes.toString();
				
			// 		var seconds = date.getSeconds();
			// 		seconds = seconds < 10 ? '0' + seconds.toString() : seconds.toString();
			// 		var currentTime = year+ "-"+month+"-"+day+" "+hour+":"+minutes+":"+seconds;
					
			// 		var totalSeconds = (countDate - date) / 1000;	//밀리초를 초로 바꾸고
			// 		var leftDays = Math.floor(totalSeconds / 3600 / 24);	//남은날
			// 		if(leftDays.toString().length==1){leftDays = "0"+ String(leftDays);}
			// 		var leftHours = Math.floor(totalSeconds / 3600) % 24;	//남은시간
			// 		if(leftHours.toString().length==1){leftHours = "0"+ String(leftHours);}
			// 		var leftMinutes = Math.floor(totalSeconds / 60) % 60; //남은분
			// 		if(leftMinutes.toString().length==1){leftMinutes = "0"+ String(leftMinutes);}
			// 		var leftSeconds = Math.floor(totalSeconds) % 60;		//남은초
			// 		if(leftSeconds.toString().length==1){leftSeconds = "0"+String(leftSeconds);}
			// 		var leftCount = "[ "+leftDays+" / "+leftHours+" : "+leftMinutes+" : "+leftSeconds+" ]";
			// 		$("#currentTime").html("현재시간  "+currentTime);
			// 		var countTimeHTML = '[ <div id="countTime1" style="font-size:45px;width:15%;height:50px; text-align:center;display:inline-table;"></div> / '
			// 								+'<div id="countTime2" style="font-size:45px;width:15%;height:50px; text-align:center;display:inline-table;"></div> : '
			// 								+'<div id="countTime3" style="font-size:45px;width:15%;height:50px; text-align:center;display:inline-table;"></div> : '
			// 								+'<div id="countTime4" style="font-size:45px;width:15%;height:50px; text-align:center;display:inline-table;"></div> ]';
			// 		$("#countTime").html(countTimeHTML);
			// 		$("#countTime1").html(leftDays+"<br/><p style='color:#878484;font-size: 15px;margin-top:-15%;'>Day</p>");
			// 		$("#countTime2").html(leftHours+"<br/><p style='color:#878484;font-size: 15px;margin-top:-15%;'>Hour</p>");
			// 		$("#countTime3").html(leftMinutes+"<br/><p style='color:#878484;font-size: 15px;margin-top:-15%;'>Minute</p>");
			// 		$("#countTime4").html(leftSeconds+"<br/><p style='color:#878484;font-size: 15px;margin-top:-15%;'>Second</p>");
			// 	}
			// });
		}

		function countTimeCancel () {
			$("#countTimeChange").css("display","none");
		}
		function scheduleDetailCancel () {
			$("#scheduleDetail").css("display","none");
		}
		function changeCountTime () {
			var countTime = $("#datePicker").val();
			$.ajax({
				url : '/changeCount',
				data:{countTime:countTime},
				type : 'POST',
				success : function (result) {
					countDateString = countTime;
					alert("변경완료");
					$("#countTimeChange").css("display","none");
				}
			});
			
		}

	</script>


    
    
    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");