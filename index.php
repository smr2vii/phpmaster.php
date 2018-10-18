<?php
$kiek_isgerei = rand(1, 8);
$barnio_riba = rand(1, 4);
$bokalai = $kiek_isgerei - $barnio_riba;
$galejai = ($kiek_isgerei - 4) * -1;

        
if ($kiek_isgerei > 4) {
     $bokalai = "Zmona barsis, nes isgerei $bokalai bokalais per daug.";
}  else {
    $bokalai = "Zmona nesibars. Siandien galejai isgerti dar $galejai bokalus.";
}
?>


<!DOCTYPE html>
<html>
    <body>
        <div> <?php print $bokalai;?></div>
    </body>
</html>
