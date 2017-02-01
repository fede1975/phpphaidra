<?php
$dc = $_POST['dc'];
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL, $dc);
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_TIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle);
ob_start();
var_dump($buffer);
$data = ob_get_clean();
$fp = fopen("c:/Users/fede/Desktop/PhaidraDC.txt", "w");
fwrite($fp, $data);
fclose($fp)





?>
