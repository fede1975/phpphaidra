 <?php  
   
   
   set_time_limit(120); 
    $searchFile="PhaidraDC.txt"; 
    $keywords = $_POST['keywords'];
    if (!isset($keywords)) $keywords="";

    echo '<form method="post" action="motore.php"><BR>'; 
    echo '<input type="text" name="keywords" value="'.$keywords.'"><BR>'; 
    echo '<input type="submit" name="submit" value="submit"><BR>'; 
    echo '</form>'; 
    echo "
"; 
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