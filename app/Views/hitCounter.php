<?php
require (APPPATH."Controllers/hit.php");
$hit = new HitCounter();
//cek dan simpan
$str = $_SERVER["HTTP_USER_AGENT"];
// echo $str;
$pos1 = strpos($str, '(')+1;
$pos2 = strpos($str, ')')-$pos1;
$part = substr($str, $pos1, $pos2);
$parts = explode(" ", $part);
$os = $parts[1];
$device = $parts[3]." ".$parts[4];
if(!$os || !$device){
    return $hit->Hitung('-','-',$str);
}
$hit->Hitung($os,$device,$str);