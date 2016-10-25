<?php

//获得流量信息
if($oo->get_transfer()<1000000)
{
    $transfers=0;}else{ $transfers = $oo->get_transfer();

}
//计算流量并保留2位小数
$all_transfer = $oo->get_transfer_enable()/$togb;
$unused_transfer =  $oo->unused_transfer()/$togb;
$used_100 = $oo->get_transfer()/$oo->get_transfer_enable();
$used_100 = round($used_100,2);
$used_100 = $used_100*100;
//计算流量并保留2位小数
$transfers = $transfers/$tomb;
$transfers = round($transfers,2);
$all_transfer = round($all_transfer,2);
$unused_transfer = round($unused_transfer,2);
//最后在线时间
$unix_time = $oo->get_last_unix_time();
//时间差
$this_time = strtotime (date("y-m-d")); //当前时间  ,注意H 是24小时 h是12小时 
$end_time = strtotime ($oo->get_money());  //到期时间，不能写2014-1-21 24:00:00  这样不对 
$final_time = ceil(($end_time - $this_time)/86400); //剩余时间，天 60s*60min*24h
$miaomiaomiao_time = abs($final_time);  //已过期天数
$huahua_time = $final_time/33 ;
$huahua_time = 1 - $huahua_time; 
$huahua_time = $huahua_time*100;


?>