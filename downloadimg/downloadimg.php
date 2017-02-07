
<?php


$codice = $_POST['codice'];

$url = 'https://fc.cab.unipd.it/fedora/get/o:'.$codice.'/bdef:Content/get';
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

/*
$fp = fopen("immagine.jpeg", "x");
fwrite($fp, $buffer);
fclose($fp);
*/
mysql_connect("localhost","root", "");

mysql_select_db("immaginiphaidra");

    $imageContent = mysqli_real_escape_string($conn, $buffer);
    $query= "INSERT INTO immagini (immagine) VALUES ('".$imageContent."')";
    mysql_query($query);



echo 'fine';









?>