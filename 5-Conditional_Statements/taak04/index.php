<?php
$prod_besteld = 9;

if($prod_besteld < 10) {
  echo number_format($prijs,2) = 1.50  ;
} elseif($prod_besteld < 20) {
  echo  $prijs = 1.25;
} else {
  echo  $prijs = 1.00;
}

$prod_besteld = 12;

if($prod_besteld < 10) {
  echo  $prijs = 1.50;
} elseif($prod_besteld < 20) {
  echo  $prijs = 1.25 ;
} else {
  echo  $prijs = 1.00;
}

$prod_besteld = 21;

if($prod_besteld < 10) {
  echo  $prijs = 1.50;
} elseif($prod_besteld < 20) {
  echo  $prijs = 1.25;
} else {
  echo number_format($prijs,2) = 1.00;
}
?>