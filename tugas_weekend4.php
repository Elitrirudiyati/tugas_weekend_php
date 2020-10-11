<?php

$r=14;
$t=10;

function luas_tabung($r,$t){
	return round(2*pi()*$r*($r+$t),2);
}

echo "<br> 4. Sebuah tabung memiliki jari-jari 14 cm dan tingginya 10 cm, <br> maka tentukanlah luasnya : " ;	
echo "<br> <u>Jawaban : </u>" ;

echo "<br> <b>Jadi luasnya adalah : </b>", luas_tabung($r,$t), " cm <sup>2</sup>";	
?>