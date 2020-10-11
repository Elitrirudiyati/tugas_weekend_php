<?php

$r = 7;

function luas_lingkaran($r){
	return round(pi()*pow($r,2),2);
}
function keliling_lingkaran($r){
	return round(pi()*$r*2,2);
}

echo "<br> 6. Sebuah roda sepeda yang berbentuk lingkaran memiliki diameter sebesar 14 cm <br> Maka luas dan keliling roda tersebut adalah : " ;	
echo "<br> <u>Jawaban : </u>" ;
echo "<br> <b>Luasnya adalah : </b>", luas_lingkaran($r), " cm <sup>2</sup>";
echo "<br> <b>Kelilingnya adalah : </b>", keliling_lingkaran($r), " cm";	
?>