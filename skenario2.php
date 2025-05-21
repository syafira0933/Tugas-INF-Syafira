<?php 
$jam = date ("18:30:00");

echo "$jam = ";

if($jam >= date ("00:00:00") && $jam < date ("04:00:00"))
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
else if($jam >= date ("15:00:00") && $jam <= date ("17:30:00"))
{
    echo $jam = "Sore";
}
else if($jam >= date ("17:30:00") && $jam <= date ("18:30:00"))
{
    echo $jam = "Petang";
}
else if($jam >= date ("18:30:00") && $jam <= date ("24:00:00"))
{
    echo $jam = "Malam";
}
else {
    echo $jam = "Dunia lain";
}
?>