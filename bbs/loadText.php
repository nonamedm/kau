<?php

include_once('./_common.php');

if (!$is_admin) {
    //echo '<script>alert("관리자만 변경할 수 있습니다.")</script>';
    $result	= false;
} else {
    $category = $_POST["category"];
    $loadText = array();
    $sql = " select text from set_text where category='".$category."'";
    //echo $sql;
    $result	= sql_fetch($sql);

    for ($i = 0; $row = sql_fetch_array($result); $i++) {
		array_push($loadText, $row['text']);		
	}
	$returnText = $loadText[0];
}
// echo $loadText;
echo json_encode($result);

?>