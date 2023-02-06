<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
	<style>
		.gall_date { font-size:11px; }
		.gall_name { font-size:11px; }
		.li-title {
			text-align:center;
		}
		.b-position {
			text-align:center;
		}
		/* .li-content {
			list-style-type : disc;
			list-style-position : inside;
			text-indent: -15px;
    		padding-left: 10px;
			font-size:12px;
		} */
		ul {
			
		}
		.card {
			border:none !important;
		}

		.card-title {
			margin-bottom : 0 !important;
		}
	</style>



        <div class="center-heading">
            <h2 style="color:#696969; font-weight: 700; font-family: 'Roboto Sans-serif';">제휴안내</h2>
            <span class="center-line"></span>
        </div>
        <div class="container-body margin-bottom-60">
            <div class="center-heading">
                <h2 style="color:#696969; font-weight: 700; font-family: 'Roboto Sans-serif';">
                    <a href="/bbs/board.php?bo_table=edu">📃 교육</a>
                </h2>                
            </div>
			<div class="container margin-bottom-60">
                <?php echo latest('theme/pic_basic_slide', 'edu', 10, 24); ?>
			</div>
            <div class="center-heading">
                <h2 style="color:#696969; font-weight: 700; font-family: 'Roboto Sans-serif';">
                    <a href="/bbs/board.php?bo_table=culture">🎬 문화</a>
                </h2>
            </div>
			<div class="container margin-bottom-60">
                <?php echo latest('theme/pic_basic_slide', 'culture', 10, 24); ?>
			</div>
            <div class="center-heading">
                <h2 style="color:#696969; font-weight: 700; font-family: 'Roboto Sans-serif';">
                    <a href="/bbs/board.php?bo_table=life">🏡 생활</a>
                </h2>
            </div>
			<div class="container margin-bottom-60">
                <?php echo latest('theme/pic_basic_slide', 'life', 10, 24); ?>
			</div>
            <div class="center-heading">
                <h2 style="color:#696969; font-weight: 700; font-family: 'Roboto Sans-serif';">
                    <a href="/bbs/board.php?bo_table=medi">🩺 의료</a>
                </h2>
            </div>
			<div class="container margin-bottom-60">
				<?php echo latest('theme/pic_basic_slide', 'medi', 10, 24); ?>
			</div>
            


<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>



<!-- 페이지 -->
<?php echo $write_pages;  ?>
<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
});
</script>
<?php } ?>

</div><!-- /container -->
<div class="divide80"></div>


<script>
$(document).ready(function(){
	//스크립트 실행

});
</script>