<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
     .table{
         border:5px silver solid;
     }
     .table th{
        border:1px black solid;
     }
     .table td{
        border:1px black solid;
     }
     


    </style>
    
    <?php
    
    $prijs=[0.25 , 0.30 , 0.70 , 0.50 , 0.60 , 0.80 , 0.65 , 0.45 , 0.90 , 0.75];
    
    echo "<br>";
    if ($_GET['productnummer'] >=0 && $_GET['productnummer']<=10){
      $totaal= $prijs [ $_GET['productnummer']] * $_GET['aantal'];
      $totaalall= number_format($totaal,2);
      $totaalall;
    }  else{
        echo "bestaat niet!";
    }

    switch($_GET['leeftijd']) {
        case 0:case 1:case 2:case 3:case 4:
        case 5:case 6:case 7:case 8:case 9:
        case 10:case 11:case 12:case 13:case 14: case 15:
        $zestienmin=1.00;
        $korting1= $totaalall-$zestienmin;
        echo number_format($korting1,2);
        break;

        case 19:
        $negentien=0.19;
        $korting2= $totaalall-$negentien;
        echo number_format($korting2,2);
        break;

        case 18:
        $achtien=0.18;
        $korting3= $totaalall-$achtien;
        echo number_format($korting3,2);
        break;

        case 17:
            $zeventien=0.17;
            $korting4= $totaalall-$zeventien;
            echo number_format($korting4,2);
        break;

        case 16:
            $zestien=0.16;
            $korting5= $totaalall-$zestien;
            echo number_format($korting5,2);
        break;

        default:
        echo number_format($totaalall,2);
       
    }

    
    ?>
    
</body>
</html>