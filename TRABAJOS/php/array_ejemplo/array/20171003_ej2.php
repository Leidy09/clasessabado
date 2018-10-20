<?php 
$carro1 = array("marca" => "jaguar", "color" => "rojo", "modelo" => 2017, "placa" =>"bcd316","cilindraje" => 2000, "Hp" =>500);

$carro2 = array("marca" => "Ford", "color" => "negro", "modelo" => 2018, "placa" =>"bcs512","cilindraje" => 2200, "Hp" =>700);

$carro3 = array("marca" => "Hyundai", "color" => "rojo", "modelo" => 1992, "placa" =>"cqr116","cilindraje" => 500, "Hp" =>250);
$numero = array(',12,3,4,5,6,7,8,9,0');


$concesionario = array($carro1, $carro2, $carro3, $numero);
echo "<h1> array concesionario </h1>";
echo "<pre>";
print_r($concesionario);
echo "</pre>";



echo "<h2> Recorrer array bidimensional </h2>";
echo "<hr>";
echo "<pre>";
foreach ($concesionario as $key => $value) {
	echo "$key<br> =>";
	foreach ($value as $key1 => $value1) {
		echo "[$key1] => $value1 <br>";
	}
}





echo "<pre>";
print_r($carro1);
echo "</pre>";


foreach ($carro1 as $key => $value) {
	echo "[".$key."] => ".$value."<br>";
}

 ?>  