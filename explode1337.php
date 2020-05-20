<?php 
/* RECODE Gapapa Cuy Cuman Jangan Kau Ganti
Banner Sorong6ETAR 1337 Kalo kau ganti
Gua tIMPUK kau Salam Indonesia Merdeka = Soekarno
By:Kemet_ID Thxs pak Refky

*/



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
{$putih}[=]{$green2}============={$putih}[ {$red} I  n  d  o  n  e  s  i  a  {$abu2}{$putih}  M  e  r  d  e  k  a {$red} ]{$green2}======================{$putih}[=]
\r{$red}                      
       HHHHH                                   HHHH     H        {$putih}1     3     3      7{$red}                                     
       H        HHH     HHHH    HHH   H HHHH  H    H   H       HHHH    H    HHHH   HHHH  
       HHHHH   H   H   H       H   H  HH   H   HHHHH  H HHH   H____H  HHHH   __H  H      
{$putih}           H   H   H   H       H   H  H    H       H  H    H  H        H    H  H  H      
       HHHHH    HHH    H        HHH   H    H   HHHHH   HHHH    HHHH    HHH  HHHH  H      

{$putih}[=]{$green2}============={$putih}[ {$red} I  n  d  o  n  e  s  i  a  {$abu2}{$putih}  M  e  r  d  e  k  a {$red} ]{$green2}======================{$putih}[=]
{$putih}\n";

echo $banner;

//input
	$string = readline("		File: ");
	$wfile = readline("		save: ");

// use of explode 


	$baris = fopen($string, "r");
	$membuka = fopen($wfile, 'w');

	while (true) {
	$line = fgets($baris);

	//jika line selesai
	if($line == null )break;

 	$str_arr =  explode ("/", $line);
	$line = "$str_arr[2]";

	print_r( "\n".$line);
	fwrite($membuka, $line."\n");

	// echo $line;
}

	fclose($line);