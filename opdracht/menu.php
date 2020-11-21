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
         border:1px black solid;
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
      echo $prijs [ $_GET['productnummer']];
    } else{
        echo "bestaat niet!";
    }

    
    ?>
    
</body>
</html>