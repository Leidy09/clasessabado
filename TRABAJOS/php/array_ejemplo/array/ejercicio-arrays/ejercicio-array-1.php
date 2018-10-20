<?php
//Tomar una cadena guardada en una variable y asignar cada 
//letra en un espacio de arreglo de manera dinámica con la 
//función strlen(), substr() y una estructura de control como 
//el for, después imprimir el arreglos con la instrucción
//print_r().
/*$sosa =array(5);
$sosa[0] ="a";
$sosa[1] ="e";
$sosa[2] ="d";
$sosa[3] ="s";
$sosa[4] ="m";
echo "<hr>";
echo $sosa[4];
echo "<hr>";
echo "<pre>";
var_dump($sosa);
echo "</pre";
echo "<br>";
print_r($sosa);
echo "<pre>";
print_r($sosa);
echo "</pre>";*/

 //strlen()
$sosa = 'aedsm';
echo strlen($sosa); 

$sosa = ' ae ds ';

echo strlen($sosa);
echo "<hr>";
echo "<pre>";
print_r($sosa);
    echo "<br>";
    echo "<hr>";
    echo "</pre>";
for ($i=0; $i <=5 ; $i++) { 
	echo $i;
}
echo "<br>";
$sosa = substr("aedsm", 0);
$sosa = substr("aedsm", 1);    
$sosa = substr("aedsm", 2);    
$sosa = substr("aedsm", 3);
$sosa = substr("aedsm", 4);


echo substr('aedsm', 0);     
echo substr('aedsm', 1); 
echo substr('aedsm', 2); 
echo substr('aedsm', 3);  
echo substr('aedsm', 4);

echo "<hr>";
$sosa = 'aedsm';
echo $sosa[0];                 
echo $sosa[3];                 
echo $sosa[strlen($sosa)-3]; 

?>