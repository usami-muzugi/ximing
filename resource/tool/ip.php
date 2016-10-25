<?php
//何种设备判定
//获取USER AGENT
$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
//分析数据
$is_pc = (strpos($agent, 'windows nt')) ? true : false;   
$is_iphone = (strpos($agent, 'iphone')) ? true : false;   
$is_ipad = (strpos($agent, 'ipad')) ? true : false;   
$is_android = (strpos($agent, 'android')) ? true : false;   
//输出数据已加入到相应位置
//IP判定
$ip = $_SERVER["REMOTE_ADDR"];
?>