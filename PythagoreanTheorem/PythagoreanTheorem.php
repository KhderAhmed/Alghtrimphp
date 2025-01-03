<?php
// https://www.youtube.com/watch?v=ja_RHcjlWYU&list=PLwTHcico4iPNuPai1VXt-SK5PvOb-uzmj&index=2
// Pythagorean Role ..........
// a^2+b^2=c^2
// {a^2+b^2}^{1/2}=c
function pythag($l, $r)
{

    $sumOfSquret = $l * $l + $r * $r;
    $a = sqrt($sumOfSquret);
    return $a;
}


$l = 2;
$r = 3;

$result = pythag($l, $r);
echo "The Hypotenuse Of The Right Triangle Is " . $result . "Units Long.";
?>
