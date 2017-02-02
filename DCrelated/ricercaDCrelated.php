
<?php



$dcrelated = $_POST['dcrelated'];
$curl_handle=curl_init();
if ($curl_handle === null) {
	echo "Manca curl";
	die;
}
curl_setopt($curl_handle, CURLOPT_URL, 'http://phaidradev.cab.unipd.it/api/object/o:'.$dcrelated.'/related?fields=dc.description&from=1&limit=1000&relation=info:fedora%2Ffedora-system:def%2Frelations-external%23hasCollectionMember');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_TIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle);


ob_start();
var_dump($buffer);
$data = ob_get_clean();
$fp = fopen("PhaidraDC.txt", "w");
fwrite($fp, $data);

$content=file_get_contents('PhaidraDC.txt');
$box = $content;
if (strstr($box, '"{"alerts":[],"hits":"0","objects":[],"status":200}"'))
{
  echo "l'oggetto non ha relazioni con altri ";
}else{
  echo $box;
  
  
}








?>
   

















?>