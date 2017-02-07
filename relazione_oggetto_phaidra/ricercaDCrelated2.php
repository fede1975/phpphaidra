
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
}
else {
  $testo=$box;
  preg_match_all("(o:(.*?)pos)", $testo , $risultato);
  
  
  

$insert=substr($risultato[1][0],0,5);
echo $insert;
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'http://phaidradev.cab.unipd.it/api/object/o:'.$insert.'/dc');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_TIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$buffer2 = curl_exec($curl_handle);
curl_close($curl_handle); 
echo $buffer2;


$insert=substr($risultato[1][1],0,5);
echo $insert;
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'http://phaidradev.cab.unipd.it/api/object/o:'.$insert.'/dc');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_TIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$buffer3 = curl_exec($curl_handle);
curl_close($curl_handle); 
echo $buffer3;


$insert=substr($risultato[1][2],0,5);
echo $insert;
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'http://phaidradev.cab.unipd.it/api/object/o:'.$insert.'/dc');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_TIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$buffer4 = curl_exec($curl_handle);
curl_close($curl_handle); 
echo $buffer4;

  
$insert=substr($risultato[1][3],0,5);
echo $insert;
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'http://phaidradev.cab.unipd.it/api/object/o:'.$insert.'/dc');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_TIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$buffer5 = curl_exec($curl_handle);
curl_close($curl_handle); 
echo $buffer5; 

  
$insert=substr($risultato[1][4],0,5);
echo $insert;
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'http://phaidradev.cab.unipd.it/api/object/o:'.$insert.'/dc');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_TIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$buffer6 = curl_exec($curl_handle);
curl_close($curl_handle); 
echo $buffer6; 

$insert=substr($risultato[1][5],0,5);
echo $insert;
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'http://phaidradev.cab.unipd.it/api/object/o:'.$insert.'/dc');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_TIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle); 
echo $buffer; 

$insert=substr($risultato[1][6],0,5);
echo $insert;
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'http://phaidradev.cab.unipd.it/api/object/o:'.$insert.'/dc');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_TIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle); 
echo $buffer; 


$insert=substr($risultato[1][7],0,5);
echo $insert;
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'http://phaidradev.cab.unipd.it/api/object/o:'.$insert.'/dc');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_TIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle); 
echo $buffer; 






  
/*
    for ($row = 0; $row < 10; $row++) {
  
  for ($col = 0; $col < 10; $col++) {
    echo "<li>".$risultato[$row][$col]."</li>";
  }
  echo "</ul>";
}
  
}
*/



}



?>