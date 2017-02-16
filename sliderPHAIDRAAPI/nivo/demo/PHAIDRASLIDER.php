
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
   
    <link rel="stylesheet" href="../themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
</head>
<body>
    <div id="wrapper">
        
        
		
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
				<?php 
				
				$immagini = glob('images/*.jpg');
                
				
				foreach ($immagini as $img) 
				{
					echo "<img src=\"".$img."\" data-thumb=\"images/prova.\" alt=\"\" />";

				}
				?>
				
				
				
				
				
			
			              
                
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                 
            </div>
        </div>

    </div>
    <script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="../jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	
</body>
</html>
