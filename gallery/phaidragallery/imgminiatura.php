
<?php


$codice = $_POST['codice'];
$immagine= $_POST['immagine'];
$miniatura= $_POST['codice'];
$url = 'https://fc.cab.unipd.it/fedora/get/o:'.$codice.'/bdef:Content/get';



$url2= 'https://fc.cab.unipd.it/fedora/objects/o:'.$codice.'/methods/bdef:Asset/getThumbnail';






echo $url;
echo $url2;




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


$fp = fopen("c:/xampp/htdocs/immagini/$immagine.jpg", "x");
fwrite($fp, $buffer);
fclose($fp);



$curl_handle=curl_init($url2);
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


$fp = fopen("c:/xampp/htdocs/immagini2/$miniatura.jpg", "x");
fwrite($fp, $buffer);
fclose($fp);





?>














