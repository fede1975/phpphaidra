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



    set_time_limit(120); 
    $searchFile="PhaidraDC.txt"; 
    $keywords = $_POST['keywords'];
    if (!isset($keywords)) $keywords="";

echo "Ricerca".$keywords;

    if ($keywords != "")
    {
        $dati=join("",file($searchFile));
        $keys=explode(" ",$keywords);
        foreach ($keys as $key)
        {
            $s=preg_quote ($key);
            $cnt=preg_match_all('/(.{0,20})('.$s.')(.{0,20})/i', $dati, $match);
            if ($cnt)
            {
                echo "Trovato '$key' $cnt volte<br>
";
                for ($i=0; $i < count($match[2]); $i++)
                {
                    echo $match[1][$i];
                    echo "<b>";
                    echo $match[2][$i];
                    echo "</b>";
                    echo $match[3][$i];
                    echo "<br>
";
                }
            }
         }
    }
	
	
	
?>