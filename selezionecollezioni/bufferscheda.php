<?php

$collection=$_POST['collezione'];

$url = 'https://phaidra.cab.unipd.it/collections/'.$collection.'';
echo $url;
$curl_handle=curl_init($url);
if ($curl_handle === null) {
	echo "Manca curl";
	die;
}


curl_setopt($curl_handle, CURLOPT_HEADER, 0);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_BINARYTRANSFER,1);


curl_setopt($curl_handle, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);

$buffer = curl_exec($curl_handle);
curl_close($curl_handle);


echo $buffer;



?>
