<?php

if (isset($_POST['submit'])) {

    # code...
    $limit = $_POST['limit'];


    class Fibonacci
    {
        public $limit;
        function calcFib($limit)
        {
            $this->limit = $limit;
            $fibArr = array(0, 1);
            $nextIteam = 0;
            $number_of_items = 0;
            while ($nextIteam < $this->limit) {
                # code...
                $nextIteam = $fibArr[count($fibArr) - 1] + $fibArr[count($fibArr) - 2];
                array_push($fibArr, $nextIteam);
            }
            echo "<p> The Fibonacci Sequence With Values Less Than . " . $this->limit . "IS :";
            for ($i = 0; $i < count($fibArr) - 1; $i++) {
                # code...
                if ($i < count($fibArr) - 2) {
                    # code...
                    echo $fibArr[$i] . ",";
                } else {
                    # code...
                    echo $fibArr[$i] . ",";
                }
                $number_of_items++;
            }
            echo "</p>";
            echo "<p> The Number Of Items Less Than . " . $this->limit . "IS :" . $number_of_items . "Values .</p>";
        }
    }
}
$limitOne = new Fibonacci;
$limitOne->calcFib($limit);

?>