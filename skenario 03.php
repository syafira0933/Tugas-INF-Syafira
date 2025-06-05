<?php

$aktivitas = "bangun";
$jam = ("26:50:00");

if($jam >= "04:00:00" && $jam <= "06:15:00"){ //pagihari
   if ($jam >= "04:00:00" && $jam < "04:20:00"){
      $aktivitas = "Bangun";

   }elseif($jam >= "04:20:00" && $jam < "04:30:00" ){
      $aktivitas = "Sholat shubuh";
   }elseif($jam >= "04:30:00" && $jam < "05:00:00" ){
      $aktivitas = "Merapikan kamar";
   }elseif($jam >= "05:00:00" && $jam < "05:30:00" ){
      $aktivitas = "Siap-siap ke sekolah";
   }elseif( $jam >= "05:30:00" && $jam < "06:00:00"){
      $aktivitas = "Sarapan";
   }
   else{
      $aktivitas = "Berangkat ke sekolah";
   }
   }elseif($jam > "06:15:00" && $jam < "24:00:00"){//sore-malam
      if($jam > "06:15:00" && $jam <= "15:25:00"){
         $aktivitas = "Berkegiatan di sekolah";
      } elseif($jam > "15:25:00" && $jam <= "15:30:00"){
            $aktivitas = "Pulang sekolah";
      } elseif ($jam > "15:30:00" && $jam < "15:44:00"){
         $aktivitas = "Perjalanan";
      } elseif ($jam >= "15:44:00" && $jam <= "15:45:00"){
         $aktivitas = "Tiba dirumah";
      } elseif ($jam >= "15:46:00" && $jam < "15:50:00"){
         $aktivitas = "Mandi dan bersiap";
      } elseif ($jam >= "15:50:00" && $jam < "16:20:00"){
         $aktivitas = "Mengaji";
      } elseif ($jam >= "16:20:00" && $jam < "18:20:00"){
         $aktivitas = "Belajar";
      } elseif($jam >= "18:20:00" && $jam < "18:25:00"){
         $aktivitas = "Belanja";
      } elseif($jam >= "18:25:00" && $jam < "18:30:00"){
         $aktivitas = "Sholat magrib";
      } elseif ($jam >= "18:30:00" && $jam < "18:45:00"){
         $aktivitas = "Makan malam";
      } elseif($jam >= "18:45:00" && $jam < "19:10:00"){
         $aktivitas = "Sholat isya";      
      } elseif ($jam >= "19:10:00" && $jam < "19:40:00"){
         $aktivitas = "Chatting";
      } elseif ($jam >= "19:40:00" && $jam < "20:10:00"){
         $aktivitas = "Menghafal";
      } elseif  ($jam >= "20:10:00" && $jam <= "21:40:00"){
         $aktivitas = "Mengobrol bersama keluarga";
      } elseif ($jam > "21:40:00" && $jam <= "22:00:00"){
        $aktivitas = "Main hp";
      } else{
         $aktivitas = "Tidur";
      } 

   } else{
         $aktivitas = "Di Dunia Lain";
   }



?>

<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Jadwal Kegiatan Andi</title>
   <style>
       body {
            font-family: Arial, sans-serif;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 800px;
            width: 100%;
            border: 2px solid black;
            background-color: #f8f8f8;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #ddd;
        }
   </style>
</head>
<body>
    <div class="container">
        <h2>Jadwal Kegiatan Andi</h2>
        <h3><?php echo "Sekarang jam " . $jam . "<br>Andi Sedang " . $aktivitas; ?></h3>

        <table>
            <tr>
                <th>Jam</th>
                <th>Aktivitas</th>
            </tr>
            <tr><td>04:00 - 04:20</td><td>Bangun</td></tr>
            <tr><td>04:20 - 04:30</td><td>Sholat Subuh</td></tr>
            <tr><td>04:30 - 05:00</td><td>Membersihkan Kamar</td></tr>
            <tr><td>05:00 - 05:30</td><td>Bersiap Untuk Sekolah</td></tr>
            <tr><td>05:30 - 06:00</td><td>Sarapan</td></tr>
            <tr><td>06:00 - 06:15</td><td>Berangkat Ke Sekolah</td></tr>
            <tr><td>06:15 - 15:25</td><td>Berkegiatan Di Sekolah</td></tr>
            <tr><td>15:25 - 15:30</td><td>Pulang Sekolah</td></tr>
            <tr><td>15:30 - 15:44</td><td>Perjalanan Pulang</td></tr>
            <tr><td>15:44 - 15:45</td><td>Tiba Di Rumah</td></tr>
            <tr><td>15:45 - 15:50</td><td>Mandi Dan Bersiap Mengaji</td></tr>
            <tr><td>15:50 - 16:20</td><td>Mengaji</td></tr>
            <tr><td>16:20 - 18:20</td><td>Belajar</td></tr>
            <tr><td>18:20 - 18:25</td><td>Belanja</td></tr>
            <tr><td>18:25 - 18:30</td><td>Sholat Magrib</td></tr>
            <tr><td>18:30 - 18:45</td><td>Makan Malam</td></tr>
            <tr><td>18:45 - 19:10</td><td>Sholat Isya</td></tr>
            <tr><td>19:10 - 19:40</td><td>Chatting</td></tr>
            <tr><td>19:40 - 20:10</td><td>Menghafal</td></tr>
            <tr><td>20:10 - 20:40</td><td>Mengobrol</td></tr>
            <tr><td>20:40 - 22:00</td><td>Main HP</td></tr>
            <tr><td>22:00 - 04:00</td><td>Tidur</td></tr>
        </table>
    </div>
</body>
</html>         