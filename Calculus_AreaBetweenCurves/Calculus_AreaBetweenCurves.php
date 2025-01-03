<img src="images/Calculus_AreaBetweenCurves.jpg">
<?php

function areaBetweenCurves($pc1, $pc2, $lx, $gx)
{
    $ac1 = pow($gx, $pc1 + 1) / ($pc1 + 1) - pow($lx, $pc1 + 1) / ($pc1 + 1);
    $ac2 = pow($gx, $pc2 + 1) / ($pc2 + 1) - pow($lx, $pc2 + 1) / ($pc2 + 1);


    $total_area = $ac2 - $ac1;
    return $total_area;

}
$pc1 = 2;
$pc2 = 3;
$lx = 1;
$gx = 3;

$result = areaBetweenCurves($pc1, $pc2, $lx, $gx);
echo " $result .\n";

?>