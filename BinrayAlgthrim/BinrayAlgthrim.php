<?php
//  0 1 0 1 1 0 1 binryalghrithim logic reault .......
class BinrayAlgthrim
{

    public function binrayAlgthrims($num)
    {
        $k = 0;
        $h = 0;
        $d = 2;
        $numArr = array();
        while ($k < $num) {
            # code...
            if ($k == $h) {
                # code...
                $numArr[] = 0;
                $h = $d + $h;
                $d += 1;
            } else {

                $numArr[] = 1;
                # code...
            }
            $k += 1;
            print_r($numArr);
        }
        # code...
    }
}

$result = new BinrayAlgthrim();

$result->binrayAlgthrims(30);























?>