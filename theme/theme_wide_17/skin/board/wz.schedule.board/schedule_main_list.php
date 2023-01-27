<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_PLUGIN_PATH.'/jquery-ui/datepicker.php');
include_once(G5_PLUGIN_PATH.'/wz.schedule.board/config.php');


$resultArr = array();
$query = "select * from g5_write_schedule";
$result = sql_query($query);


for ($i = 0; $row = sql_fetch_array($result); $i++) {
    array_push($resultArr, $row['mb_id']);
}


echo "<pre>\n";
print_r($resultArr);
echo "</pre>\n";

?>
