<?php

function Luas_permukaanKubus($nilai){
		$luas=6*pow($nilai,2);
		return$luas;
	}
	echo "<br> 1. Hitunglah luas permukaan kubus dengan panjang rusuknya sebagai berikut : " ;
	echo "<ol type=a> 
			<li>4 cm</li>
			<li>7 cm</li>
			<li>10 cm</li>
			<li>12 cm</li> <br>";
	echo "<br> <u>Jawaban : </u>" ;

	echo "<br> Luas dengan panjang rusuk 4 cm : ", Luas_permukaanKubus(4), " cm<sup>2</sup>";	
	echo "<br> Luas dengan panjang rusuk 7 cm : ", Luas_permukaanKubus(7), " cm<sup>2</sup>";	
	echo "<br> Luas dengan panjang rusuk 10 cm : ", Luas_permukaanKubus(10), " cm<sup>2</sup>";	
	echo "<br> Luas dengan panjang rusuk 12 cm : ", Luas_permukaanKubus(12), " cm<sup>2</sup>";	

?>