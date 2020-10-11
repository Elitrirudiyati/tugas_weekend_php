<?php
$r = 21;
$putar = 200;

function jarak_tempuh($r,$putar){
	return round((2*pi()*$r)*$putar,0);

}

echo "<br> 7. Pak Andi memiliki sebuah mobil yang panjang jari-jari ban mobil tersebut sebesar 21 cm <br> Saat mobil tersebut berjalan, ban mobil tersebut berputar sebanyak 200 kali <br> Berapakah jarak yang ditempuh mobil tersebut? " ;	
echo "<br> <u>Jawaban : </u>" ;

echo "<br> <b>Jarak tempuhnya adalah : </b>", jarak_tempuh($r,$putar)/100," m ";
?>