<?php
function panjang_sisiKubus($luas){
	return sqrt($luas/6);
}
echo "<br> 2. Sebuah kotak kayu berbentuk kubus memiliki luas permukaan 3.750cm<sup>2</sup> <br>Hitunglah panjang sisi kotak kayu tersebut ? : " ;	
echo "<br> <u>Jawaban : </u>" ;

echo "<br> <b>Jadi panjang sisi kotak kayu tersebut adalah akar dari : </b>", panjang_sisiKubus(3750), " cm";	
?>