<?php
$distance = rand(1, 50);
$fuel_cons = 7.5;
$fuel_price = 1.3;
$my_money = 100;
$cost =$distance * ($fuel_cons / 100) * $my_money;

        
if ($cost > 100) {
    print $isvada = "Isvada: As sau tai negaliu leisti.";
} else {
    print $isvada = "Isvada: As sau tai galiu leisti.";
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div <?php print $isvada;?>></div>
    </body>
</html>
