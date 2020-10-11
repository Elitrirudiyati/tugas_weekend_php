<?php

$r=14;
function luas_lingkaran($r){
	return round(pi()*pow($r,2),2);
}

echo "<br> 5. Sebuah lingkaran memiliki jari-jari 14 cm <br> tentukanlah luas lingkaran tersebut : " ;	
echo "<br> <u>Jawaban : </u>" ;

echo "<br> <b>Luasnya adalah : </b>", luas_lingkaran($r), " cm <sup>2</sup>";	
?>