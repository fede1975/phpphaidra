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


ob_start();
var_dump($buffer);
$data = ob_get_clean();
$fp = fopen("PhaidraDC.txt", "w");
fwrite($fp, $data);



$prima_occorrenza=strpos($data,"Venezia");
$ultima_occorrenza=strrpos($data,"Venezia");
echo "La prima occorrenza è al carattere $prima_occorrenza, l'ultima al carattere $ultima_occorrenza";
echo $prima_occorrenza



/*$data

echo "&nbsp;";
$fl = fopen("PhaidraDC.txt", "r");
if(!$fl) die ("Errore nella operaione con il file");

echo "&nbsp;";

/*
//riporta la lunghezza della stringa
$data = fread($fl, 600);
echo $data;
/*

//cerca la posizione di una parola 

$string = file_get_contents ($buffer);
echo $string;




if ($posizione === false):
    print "Non trovato";
else:
    print $posizione;
endif;  

*/

/*
$str = $buffer;
$arr1 = str_split($str);
print_r($arr1);
$output = array_slice($arr1, 0, 5);
print_r($output);
*/










/*
$stringa = 'PhaidraDC.txt';
echo strlen($stringa); 
*/
























/*
$myarray = json_decode($buffer,true);
print_r($myarray);
*/









/*

var_dump(json_decode($buffer));
var_dump(json_decode($buffer, true));
*/



/*
$myArray=$obj;
echo $myArray;
$length=count($myArray); 
for($i=0; $i> $length; $i++)
{ $myArray[$i];
}
*/







?>
