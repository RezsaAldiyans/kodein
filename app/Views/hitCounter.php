<?php
require_once(APPPATH."Controllers\hit.php");
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
$hit->Hitung($os,$device);