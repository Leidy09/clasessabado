<?php 
$closeth = array(3);
$closeth[0]= "yo";
$closeth[1]="andres";
$closeth[2]="william";
$closeth[3]="maira";

for ($i=0; $i < count($closeth); $i++) { 
	echo $closeth[$i]. "<br>";
}
echo "<hr>";
foreach ($closeth as $value) {
	echo   $value."<br>";
}
foreach ($closeth as $key => $value) {
	echo  "[$key] => $value <br>";
}

//imprimir variable con sus caracteristicas
 var_dump($closeth);
 

//imprimir variable con sus caracteristicas, con preformateo
 echo "<pre>";
 var_dump($closeth);
 echo "</pre>";



 //imprimir array
 echo "<pre>";
 print_r($closeth);
 echo "</pre>";



 $armario = array(2,5,7,9,10,4, "hola", "chao");
  echo "<pre>";
 print_r($armario);
 echo "</pre>";
echo "$armario[4]";
 ?>