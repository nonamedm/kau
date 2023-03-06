<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

unset($list);

add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css?v=191112">', 0);
?>
<style>
    @media (max-width: 1089px) {
        #calendar {
            width:100% !important;
        }

    }
</style>
<div class="center-heading">
    <h2 style="color:#696969; font-weight: 700; font-family: 'Roboto Sans-serif';">
        <?php 
        if($bo_table=="counsel") {
            echo "상담문의";
        } else if ($bo_table=="notice") {
            echo "공지사항";
        } else if ($bo_table=="schedule") {
            echo "학사일정";
        }
        
        ?>
    </h2>
    <span class="center-line"></span>
</div>
<div class="container-body" id="bo_list" style="width:<?php echo $width; ?>">

    <div id="bo_btn_top">
        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <!-- <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn"><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</a></li><?php } ?> -->
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"><i class="fa fa-pencil" aria-hidden="true"></i> 작성</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>

    <!-- 게시판 카테고리 시작 { -->
    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>
    <!-- } 게시판 카테고리 끝 -->

    <?php
    include_once(G5_PLUGIN_PATH.'/wz.schedule.board/config.php');
    include_once(WCAL_PLUGIN_PATH.'/skin.list.php');
    ?>

</div>