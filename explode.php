<?php 

// Use preg_split() function 
// $string = "bojonegorosite.com/admin.php"; 
// $str_arr = preg_split ("/\,/", $string); 
// print_r($str_arr); 
	

	set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');


/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */

$false = "{$abu2}[{$red}x{$abu2}]{$red2}";
$true = "{$abu2}[{$green}+{$abu2}]{$green2}";
$pentung = "{$abu2}[{$yellow}!{$abu2}]{$yellow2}";
$titik = "{$abu2}[{$res}•{$abu2}]{$green2}";


$banner = "
{$purple}==================================================================
\r{$green}                     
   HHHH  HHHHH  H HHHH  HHHHH   H HHHH  HHHHH  H HHHH   HHHHHH 1 
   H     H   H  HH      H   H   HH      H   H  HH    H  H    H 3
   HHHH  H   H  H       H   H   H       H   H  H     H  HHHH H 3
      H  H   H  H       H   H   H       H   H  H     H       H 7
   HHHH  HHHHH  H       HHHHH   H       HHHHH  H     H  HHHHHH ;

{$purple}==================================================================
{$green2}Author By {$abu2} :{$res} Kemet_ID
{$green2}Bypass ACC:{$abu2} :{$res} PHD.co.id\n";
echo $banner;

//input
	$string = readline("File: ");

// use of explode 


	$baris = fopen($string, "r");

	while (true) {
	$line = fgets($baris);

	//jika line selesai
	if($line == null )break;

 	$str_arr =  explode ("/", $line);
	$line = "$str_arr[2]";

	echo "\n".$line ;

	// echo $line;
}
	fclose($line);