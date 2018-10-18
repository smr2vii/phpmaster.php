<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);


        
if ($grizai_velai && $grizai_isgeres) {
     $f = "Miegosi and sofos,nes grizai vielai ir isgeres.";
} else if ($grizai_isgeres) {
     $f = "Nemiegosi ant sofos nes negrizai velai.";
} else if ($grizai_velai) {
     $f = "Nemiegosi and sofos nes negrizai isgeres.";
} else {
    $f = "nieko";
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div> <?php print $f;?></div>
    </body>
</html>
