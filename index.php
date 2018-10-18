<?php
$bool = true;
$int = 1;
$str = "1";
$flt = 1.23;
$str2 = "1.23";
$x = null;



        
if ($bool === $int) {
     $x = "identiskas";
} else if ($bool == $int){
     $x = "lygus";
} else {
     $x = "nelygs ir neidentiski";
   }



if ($str === $bool) {
     $y = "identiskas";
} else if ($str == $bool){
     $y = "lygus";
} else {
     $y = "nelygs ir neidentiski";
   }


if ($flt === $str2) {
     $z = "identiskas";
} else if ($flt == $str2){
     $z = "lygus";
} else {
     $z = "nelygs ir neidentiski";
   }
?>


<!DOCTYPE html>
<html>
    <body>
        <div><?php print $x;?></div>
        <div><?php print $y;?></div>
        <div><?php print $z;?></div>
    </body>
</html>
