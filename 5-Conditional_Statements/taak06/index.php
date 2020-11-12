<?php
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "beide waardes waar zijn"."<br>";
}else{
    echo"niet beide waardes waar zijn";
}

$x = 100;  
$y = 50;

if ($x == 100 || $y == 50) {
    echo " een of beide van de twee waardes waar zijn"."<br>";
}else{
    echo"niet een of beide van de twee waardes waar zijn";
}

$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "een van de twee waardes waar is maar niet beide"."<br>";
}else{
    echo"geen van de twee waardes is waar";
}

$x = 100;  

if ($x !== 90) {
    echo "de vergelijking is niet waar"."<br>";
}else{
    "de vergelijking is waar";
}
?>