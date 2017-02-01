<?php


$curl_handle=curl_init();
if ($curl_handle === null) {
	echo "Manca curl";
	die;
}
curl_setopt($curl_handle, CURLOPT_URL, 'http://phaidradev.cab.unipd.it/api/object/o:61349/dc');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_TIMEOUT, 20);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle);
if (empty($buffer)){
  print "Nothing returned from url.<p>";
}
else{
  print $buffer;
}


$myResp = json_decode($buffer);
$lista=$myResp->metadata->dc;


/*echo(count($lista));*/
$nome = $_POST['nome'];



for ($i=0; $i<count($lista); $i++) {
$occorrenza=strpos($lista[$i]->ui_value,$nome);
echo $occorrenza;
echo('<br/>');


}
*/






?>






















