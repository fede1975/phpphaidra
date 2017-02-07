<?php
include('httpful.phar');
$url = "http://phaidradev.cab.unipd.it/api/object/o:61349/dc";
$response = \Httpful\Request::get($url)
    ->expectsJson()
    ->withXTrivialHeader('provaPHAIDRADC')
    ->send();
 
echo $response; 
                  

				  


?>
