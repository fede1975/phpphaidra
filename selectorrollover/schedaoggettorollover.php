
<link rel="stylesheet" type="text/css" href="https://phaidra-static.cab.unipd.it/stylesheets/css/unipdstyle.css">

<form method="post" action="buffer.php">
  

 <br>Scegli il numero di pagina della collezione</br>
  <select name="collection">
  <option value=""></option>
  
  
  
  <?php  
	for ($x = 60000; $x <= 61000; $x++) {
	  echo "<option value=\"".$x."\">".$x."</option>";
	}
	?>  
  
 </select><br>

 


  
  

  </select><br>
  <input type="submit" name="invia" value="Invia i dati">
  
  