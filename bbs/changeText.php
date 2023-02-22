<?php

include_once('./_common.php');

if (!$is_admin) {
    //echo '<script>alert("관리자만 변경할 수 있습니다.")</script>';
    $result	= false;
} else {
    $text = $_POST["text"];
    $category = $_POST["category"];


    $sql = "update set_text set text='".$text."' where category='".$category."'";
    //echo $sql;
    sql_fetch($sql);

    $result = true;
}
// echo $loadText;
echo json_encode($result);

?>