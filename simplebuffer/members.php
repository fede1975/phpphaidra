
<?php

$codice = $_POST['codice'];
$curl_handle=curl_init();
if ($curl_handle === null) {
	echo "Manca curl";
	die;
}
curl_setopt($curl_handle, CURLOPT_URL,'https://phaidradev.cab.unipd.it/api/collection/o:'.$codice.'/members');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_TIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$buffer = curl_exec($curl_handle);


echo $buffer;
curl_close($curl_handle);




/*
ob_start();
var_dump($buffer);
$data = ob_get_clean();
$fp = fopen("members.txt", "w");
fwrite($fp, $data);
*/




?>