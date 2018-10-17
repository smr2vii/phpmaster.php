<?php
$sunny = rand(0, 1);
$rain = rand(0, 1);

$class = null;
$tekstas = null;


if ($sunny) {    
    if ($rain) {    
        $class = 'sunny-rain';
        $tekstas = 'Sauleta ir lyja';
    } else {
        $class = 'sunny';
        $tekstas = 'Sauleta';
    }
} else {
    if ($rain){  
        $class = 'cloudy-rain';
        $tekstas = 'Debesuota ir lyja';
    } else {    
        $class = 'cloudy';
        $tekstas = 'Debesuota';
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>if</title>
        <style>
            .paveikslelis {
                background-size: cover;
                width: 100px;
                height: 100px;
            }
            .sunny{
               background-image: url("sunny.png") 
            }
            .sunny-rain{
                background-image: url("rainy.png")
            }
            .cloudy{
                background-image: url("sunny.png")
            }
            .cloudy-rain{
                background-image: url("rainy.png")
            }
        </style>
    </head>
    <body>
        <div class="paveikslelis <?php print $class;?>"></div>
        <p><?php print $tekstas;?></p>
    </body>
</html>