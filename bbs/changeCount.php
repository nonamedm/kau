<?php

include_once('./_common.php');

if (!$is_admin) {
    //echo '<script>alert("관리자만 변경할 수 있습니다.")</script>';
    $result	= false;
} else {
    $countTime = $_POST["countTime"];
    
    
    $sql = " update set_dday set d_day="."'".$countTime."'";
    //echo $sql;
    sql_fetch($sql);
    $result	= true;
}
echo json_encode($result);

?>