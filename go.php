<?php
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


$banner = "\r{$purple}                             
=================================================================
=================================================================
           _______   __       __________   _______ 
          |   _   | |  |     |___    ___| |   __   |
          |  |_|  | |  |         |  |     |  |  |  |
          |   _   | |  |____     |  |     |  |__|  |
          |__| |__| |_______|    |__|     |________|
=================================================================
               {$yellow2}TELEGRAM CHANNEL
            {$yellow2}t.me/@altomediachannel
{{$purple}=================================================================
{$green}=========================================================




function curl($url,$headers){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}

$ua = array(
  "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36"
);



echo $banner;
echo "\n\n\n$titik Memulai merampok....!\n";
while (True){
  $respon = curl("https://99faucet.com/faucet", $ua);
  $one = explode('<div class="alert alert-success">',$respon);
  $two = explode('<a style=', $one[1]);
  if ($two[0] != null){
    echo $true." ".$two["0"]."your account at Faucetpay.io\n";
  }else{
    continue;
  }
}
