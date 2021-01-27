<?php

//YOUR CODE GOES HERE
//Proyecto para uso de $_POST y un form que pase los parámetros

if (!isset($myStruct)){$myStruct = new stdClass();} //preven NULL

$myStruct->data = "world";
$myStruct->data2 = "user";

$myJSON = json_encode($myStruct);

//echo $myJSON;
 
 if( (isset($_POST['data0'])) && (isset($_POST['data1'])) )
  {
	
	$data0 = $_POST['data0'];
  	$data1 = $_POST['data1'];
  	echo "Enviastes D0 {$data0} D1 {$data1}";
	
	echo "\r\n".$myJSON;
	
	//echo "TEST";
	
  	
 }
 
//echo "test";

?>
