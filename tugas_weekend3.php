<?php
$r = 10;
$t =30;
$phi = 22/7;

function volume_tabung($r,$t,$phi){
	return round($phi*pow($r,2)*$t,2);
}
echo "<br> 3. Sebuah tabung memiliki jari-jari dan tinggi masing-masing 10 cm dan 30 cm, <br>lalu tentukanlah berapa volume dari tabung tersebut : " ;	
echo "<br> <u>Jawaban : </u>" ;

echo "<br> <b>Volume dari tabung tersebut adalah : </b>", volume_tabung($r,$t,$phi), " cm <sup>2</sup>";	
?>