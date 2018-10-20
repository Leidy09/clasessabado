<?php
//Tomar un número celular ingresado en una variable y 
//guardar dos dígitos del número en un espacio del 
//arreglo, al final el arreglo tendrá solamente cinco 
//espacios para guardar el número celular después deberán 
//imprimir el arreglo, usar las funciones mencionadas en el 
//punto 1.
$sosa =array(4);
$sosa[0] ="3105963034";
$sosa[1] ="3158501822";
$sosa[2] ="31173033032";
$sosa[3] ="3005426695";
$sosa[4] ="3007111436";
echo "el array es de".count($sosa)."posiciones<br>";
for ($i=0; $i < sizeof($sosa); $i++) { 
	 echo $sosa[$i]."<br>";
}
echo "<hr>";
foreach ($sosa as $value) {
	echo  $value ."<br>";
}
echo "<pre>";
foreach ($sosa as $key => $value) {
	echo " la posicion ".$key." es ".$value."<br>";
}
echo "</pre>";
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
echo "</pre>";
$closeth = array(1,2,4,6,20,2,4, "hola", true);
echo $closeth[4];

?>