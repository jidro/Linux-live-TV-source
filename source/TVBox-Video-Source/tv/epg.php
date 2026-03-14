<?php
error_reporting(E_ERROR | E_PARSE);
header("content-type:application/json; charset=utf-8");
$ch=$_GET['ch'];
$date=$_GET['date'];
$api='https://epg.112114.xyz/';
$epg=file_get_contents($api.'?ch='.$ch.'&date='.$date);
if(!empty($epg)){
  echo $epg;
}else{//否则输出默认
	$epg= array("channel_name" => $ch,"date" => date('Y-m-d'));
    $epg['epg_data'][] = array("start" => "00:00","end" => "23:59","title" => '暂无播放信息',"desc" => '竹子哥专属EPG');
exit(json_encode($epg,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
 };
?>