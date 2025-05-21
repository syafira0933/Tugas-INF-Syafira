<?php
// kasus 1
echo "Senin, 12 - Mar - 2025<br><br>";


//for
$hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
    echo "<h4>HARI: </h4>";
    for($i=0;$i<sizeof($hari);$i++){
        echo$hari[$i]. "<br>";
} 
//foreach
$tanggal = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, "<br>"];
    echo "<h4>TANGGAL: </h4>";
    foreach ($tanggal as $array){
        echo $array. "<br>" ;
    }
//while
$bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember<br>'];  
$i = 0;
    echo "<h4>BULAN: </h4>";
    while ($i < count ($bulan) ){
        echo $bulan [$i]. "<br>";
        $i++;
}
//dowhile
$i = 2024;
echo "<h4>TAHUN: </h4>";
do{
    echo " $i <br>";
    $i++;
}while ($i <= 2026);
echo "<br>";




//kasus 2
echo "<h4>ANAK AYAM: </h4>";
for ($i = 30; $i > 1; $i--) {
    echo "Anak ayam turun $i, mati satu tinggal " . ($i - 1) . "<br>";
}
echo "Anak ayam turun 1, mati satu tinggal induknya.<br>";



//kasus 3

 // semua mawar Sholeh
 $semua_mawar = array();
 for ($mawar = 21; $mawar >= 10; $mawar--) {
     $semua_mawar[] = $mawar;
 }

 // mawar yang diberikan ke ibu
 $mawar_ibu = array();
 for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
     $mawar_ibu[] = $mawar;
 }

 // Sisa
 $mawar_sholehah = array_diff($semua_mawar, $mawar_ibu);

 // hasil
 echo "<h4>Mawar yang dimiliki Sholeh:</h4>";
 echo "Nomor: " . implode(", ", $semua_mawar) . "<br>";
 echo "Jumlah: " . count($semua_mawar) . " mawar<br><br>";

 echo "<h4>Mawar yang diberikan ke Ibu:</h4>";
 echo "Nomor: " . implode(", ", $mawar_ibu) . "<br>";
 echo "Jumlah: " . count($mawar_ibu) . " mawar<br><br>";

 echo "<h4>Mawar yang diberikan ke Sholehah:</h4>";
 echo "Nomor: " . implode(", ", $mawar_sholehah) . "<br>";
 echo "Jumlah: " . count($mawar_sholehah) . " mawar<br>";


//kasus 4
echo "<h4>LAGU SESUAI SUASANA HATI: </h4>";
$lagu = [];
$suasanahati = array ();
$pencipta = [];

//mengisi array dengan data
$suasanahati[] = "Galau";  
$suasanahati[] = "Bersemangat";
$suasanahati[] = "Marah";

$lagu[] = ["Mesin Waktu - Budi Doremi"];
$lagu[] = ["Selamat Pagi - Ran"];
$lagu[] = ["Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"];


$pencipta[] = ["Budi Doremi"];
$pencipta[] = ["Ran"];
$pencipta[] = ["Banda Neira"];

//menampikan daftar lagu berdasarkan isi hati
for ($i = 0; $i <
count($suasanahati); $i++) { 
    echo "<br>Jika sedang {$suasanahati[$i]}, Ambyar mendengarkan lagu: {$lagu[$i] [0]} (Pencipta: {$pencipta [$i] [0]})\n<br>";
}

echo "<br><h4>Yang kami pelajari dari kegiatan skenario ke-4 ini adalah kita bisa menghitung item dengan array 
dan perulangan dalam PHP untuk mengelolah data <br> <br></h4>
<h3>NAMA:  <br><br>
- Naswa Maura Yasmine (24) 
<br> - Syafira Putri Cahayati (33)</h3>"
?>