<style>
	@media (max-width:992px) {
		.leftnav {
			display:none !important;
		}
	}
	#group1, #group2, #group3, #group4, #group5, #group6, #group7 {
		/* margin-top: 110px; */
		margin-left: 50px;
		background-color: white;
		display:none;
	}
	.center-line-left {
		display: inline-block;
		height: 1px;
		border-top: 4px solid #45678C;
		margin: auto;
	}
	.center-line-right {
		display: inline-block;
		height: 1px;
		border-top: 4px solid #bbb;
		margin: auto;
	}
	
</style>
<script>
	var group = [['about','history','organization','process','location','cooperation'],
				 ['cureprogram','counselprogram'],
				 ['evaluation_1','evaluation_2','evaluation_3','evaluation_4'],
				 ['voucher_1','voucher_2','voucher_3','voucher_4','voucher_5','voucher_6'],
				 ['employee_1','employee_2','employee_3'],
				 ['notice','counsel','faq'],
				 ['actvservice','subinfo','serviceinfo','schedule','afterschoolservice','subinfo2']];
	var link = document.location.href.split("/");
	var pagename;
	$(function(){
		if(link[3]=='pages') {
			//pages 내부페이지일때
			pagename = link[4].split(".")[0];
		} else if (link[3]=='bbs') {
			if(link[4].split(".")[1]=='php') {
				//FAQ일때
				pagename = link[4].split(".")[0];
			} else {
				//게시판 페이지일때
				pagename = link[4].split("=")[1];
			}
		} 
		for(let i=0; i < group.length; i++) {
			for(let j=0; j<group[i].length; j++) {
				if(pagename==group[i][j]) {
					var groupname = "group"+(i+1);
					$("#"+groupname).show();
					i=group.length;
					break;
				}
			}
		}
	});

// 기관소개	#
// 인사말	/pages/about.php
// 사업소개 및 연혁	/pages/history.php
// CI 소개	#
// 조직도	/pages/organization.php
// 이용절차	/pages/process.php
// 오시는길	/pages/location.php
// 협력기관 및 업체	/pages/cooperation.php
// 프로그램소개	/pages/cureprogram.php
// 검사/평가	/pages/evaluation.php
// 바우처 안내	/pages/voucher.php
// 재활사소개	/pages/employee.php
// 고객지원	#
// 공지사항	/bbs/board.php?bo_table=notice
// 상담문의	/bbs/board.php?bo_table=counsel
// 자주하는질문	/bbs/faq.php
// 지점안내	#
// 남원시발달장애인주간활동센터	/pages/actvservice.php
// 주간활동서비스 /pages/actvservice.php
// 지원대상/신청안내 /pages/subinfo.php
// 제공서비스 안내 /pages/serviceinfo.php
// 월간계획/이달의식단 /bbs/board.php?bo_table=schedule
// 청소년발달장애인방과후활동센터	/pages/afterschoolservice.php
// 방과후활동센터	/pages/afterschoolservice.php
// 지원대상/신청안내 /pages/subinfo2.php
</script>

<div class="leftnav" style="width: 20%;position: absolute;left: 0px;background-color: white;">
	<div id="group1" >
		<h2 class="nav-link ks4 f16">
			기관소개
		</h2>
		<span class="center-line-left" style="width:55%;"></span><span class="center-line-right" style="width:45%;"></span>
		<ul class="" aria-labelledby="navbarDropdownPortfolio">
			<a class="dropdown-item ks4 fw4" href="/pages/about.php" target="_self">인사말</a>

			<a class="dropdown-item ks4 fw4" href="/pages/history.php" target="_self">사업소개 및 연혁</a>

			<a class="dropdown-item ks4 fw4" href="#" target="_self">CI 소개</a>

			<a class="dropdown-item ks4 fw4" href="/pages/organization.php" target="_self">조직도</a>

			<a class="dropdown-item ks4 fw4" href="/pages/process.php" target="_self">이용절차</a>

			<a class="dropdown-item ks4 fw4" href="/pages/location.php" target="_self">오시는길</a>

			<a class="dropdown-item ks4 fw4" href="/pages/cooperation.php" target="_self">협력기관 및 업체</a>

		</ul>
	</div>
	<div id="group2" >
		<h2 class="nav-link ks4 f16">
			프로그램소개
		</h2>
		<span class="center-line-left" style="width:70%;"></span><span class="center-line-right" style="width:30%;"></span>
		<ul class="" aria-labelledby="navbarDropdownPortfolio">
			<a class="dropdown-item ks4 fw4" href="/pages/cureprogram.php" target="_self">재활프로그램</a>
			<a class="dropdown-item ks4 fw4" href="/pages/counselprogram.php" target="_self">상담/교육프로그램</a>
		</ul>
	</div>
	<div id="group3" >
		<h2 class="nav-link ks4 f16">
			검사/평가
		</h2>
		<span class="center-line-left" style="width:60%;"></span><span class="center-line-right" style="width:40%;"></span>
		<ul class="" aria-labelledby="navbarDropdownPortfolio">
			<a class="dropdown-item ks4 fw4" href="/pages/evaluation_1.php" target="_self">언어발달검사</a>
			<a class="dropdown-item ks4 fw4" href="/pages/evaluation_2.php" target="_self">아동심리검사 및 평가</a>
			<a class="dropdown-item ks4 fw4" href="/pages/evaluation_3.php" target="_self">부모 양육태도 검사</a>
			<a class="dropdown-item ks4 fw4" href="/pages/evaluation_4.php" target="_self">인지 및 학습검사</a>
		</ul>
	</div>
	<div id="group4" >
		<h2 class="nav-link ks4 f16">
			바우처안내
		</h2>
		<span class="center-line-left" style="width:65%;"></span><span class="center-line-right" style="width:35%;"></span>
		<ul class="" aria-labelledby="navbarDropdownPortfolio">
			<a class="dropdown-item ks4 fw4" href="/pages/voucher_1.php" target="_self">아동청소년심리지원바우처</a>
			<a class="dropdown-item ks4 fw4" href="/pages/voucher_2.php" target="_self">보완대체의사소통(AAC)<br>기기 활용 중재서비스</a>
			<a class="dropdown-item ks4 fw4" href="/pages/voucher_3.php" target="_self">발달재활서비스</a>
			<a class="dropdown-item ks4 fw4" href="/pages/voucher_4.php" target="_self">언어발달지원</a>
			<a class="dropdown-item ks4 fw4" href="/pages/voucher_5.php" target="_self">성인심리지원서비스</a>
			<a class="dropdown-item ks4 fw4" href="/pages/voucher_6.php" target="_self">청년마음건강</a>
		</ul>
	</div>
	<div id="group5" >
		<h2 class="nav-link ks4 f16">
			재활사소개
		</h2>
		<span class="center-line-left" style="width:65%;"></span><span class="center-line-right" style="width:35%;"></span>
		<ul class="" aria-labelledby="navbarDropdownPortfolio">
			<a class="dropdown-item ks4 fw4" href="/pages/employee_1.php" target="_self">말자람팀</a>
			<a class="dropdown-item ks4 fw4" href="/pages/employee_2.php" target="_self">마음자람팀</a>
			<a class="dropdown-item ks4 fw4" href="/pages/employee_3.php" target="_self">운영지원팀</a>
		</ul>
	</div>
	<div id="group6" >
		<h2 class="nav-link ks4 f16">
			고객지원
		</h2>
		<span class="center-line-left" style="width:55%;"></span><span class="center-line-right" style="width:45%;"></span>
		<ul class="" aria-labelledby="navbarDropdownPortfolio">
			<a class="dropdown-item ks4 fw4" href="/bbs/board.php?bo_table=notice" target="_self">공지사항</a>

			<a class="dropdown-item ks4 fw4" href="/bbs/board.php?bo_table=counsel" target="_self">상담문의</a>

			<a class="dropdown-item ks4 fw4" href="/bbs/faq.php" target="_self">자주하는질문</a>

		</ul>
	</div>
	<div id="group7" >
		<h2 class="nav-link ks4 f16">
			지점안내
		</h2>
		<span class="center-line-left" style="width:55%;"></span><span class="center-line-right" style="width:45%;"></span>
		<ul class="" aria-labelledby="navbarDropdownPortfolio">
			<a class="dropdown-item ks4 fw4" target="_self">남원시발달장애인주간활동센터</a>
			<a class="dropdown-item ks4 fw4" href="/pages/actvservice.php" target="_self">주간활동서비스</a>
			<a class="dropdown-item ks4 fw4" href="/pages/subinfo.php" target="_self">지원대상/신청안내</a>
			<a class="dropdown-item ks4 fw4" href="/pages/serviceinfo.php" target="_self">제공서비스 안내</a>
			<a class="dropdown-item ks4 fw4" href="/bbs/board.php?bo_table=schedule" target="_self">월간계획/이달의식단</a>

			<a class="dropdown-item ks4 fw4" target="_self">청소년발달장애인방과후활동센터</a>
			<a class="dropdown-item ks4 fw4" href="/pages/afterschoolservice.php" target="_self">방과후활동센터</a>
			<a class="dropdown-item ks4 fw4" href="/pages/subinfo2.php" target="_self">지원대상/신청안내</a>

		</ul>
	</div>
</div>