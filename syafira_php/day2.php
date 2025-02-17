1+2
<br>
<?php
$angka1 = 3.7;
$angka2 = 5;
$penjumlahan = $angka1 + $angka2;
$pengurangan = $angka1 - $angka2;
$perkalian = $angka1 * $angka2;// perkalian di PHP menggunakan (*)
$pembagian = $angka1 / $angka2;// pengurangan di PHP menggunakan (/)

echo $angka1 . "+" . $angka2 . "=" . $penjumlahan;
echo "<br> $angka1 - $angka2 = $pengurangan";
echo "<br> $angka1 x $angka2 = $perkalian";
echo "<br> $angka1 : $angka2 = $pembagian";
echo "<br> $angka1 <sup> $angka2 </sup> = "; // sup itu perpangkatan di HTML
echo pow($angka1,$angka2); //     pow itu perpangkatan di PHP
echo "<br>";
echo pow(3,5); // angka 3 itu dasar, sedangkan angka 5 itu exponen
?>