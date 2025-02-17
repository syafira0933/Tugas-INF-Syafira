<?php 
$nilai = 83;

if($nilai <= 100 && $nilai >= 90)
{
    echo "A";
}
else if($nilai <= 89 && $nilai >= 80)
{
    echo "B";
}
else if($nilai <= 79 && $nilai >= 70)
{
    echo "C";
} 
else if ($nilai <= 69 && $nilai > 0) {
    echo "D";
}
else {
    echo "nilai wajib di atas 0";
}
?>

<br> 

<?php 
$jam = date ("19:30:00");

echo "Sekarang menunjukkan pukul = $jam<br>";

if($jam >= date ("00:00") && $jam < date ("04:00"))
{
    echo $jam = "Dini hari";
}
else if($jam >= date ("04:00:00") && $jam <= date ("10:00:00"))
{
    echo $jam = "Pagi";
}
else if($jam >= date ("10:00:00")  && $jam <= date ("15:00:00"))
{
    echo $jam = "Siang";
}
else if($jam >= date ("15:00:00") && $jam <= date ("18:00:00"))
{
    echo $jam = "Sore";
}
else {
    echo $jam = "Malam";
}
?>
