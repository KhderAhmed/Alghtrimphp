<?php
class Prime_or_Composite
{

    function isPrime($num)
    {

        $l = 1;
        while ($l < $num) {
            # code...
            $r = $l + 1;
            $prime = true;

            for ($k = 2; $k < $r; $k++) {
                # code...
                if ($r % $k == 0) {
                    # code...
                    $prime = false;
                    break;
                }
            }
            if ($prime) {
                # code...
                echo $r . " is a Prime number .\n";
            } else {
                echo $r . " is a Composite number .\n";
            }
            $l++;


        }
    }
}

$firstNumberList = new Prime_or_Composite;
$firssolution = $firstNumberList->isPrime(10);
echo "\n\n";
$secondNumberList = new Prime_or_Composite;
$secondsolution = $secondNumberList->isPrime(100);
?>