<?php

if (isset($_POST['submit'])) {

    # code...
    $velocity_1 = $_POST['velocity-1'];
    $velocity_2 = $_POST['velocity-2'];
    $distance_apart = $_POST['distance-apart'];

    class Trains
    {
        public $velocity_1;
        public $velocity_2;
        public $distance_apart;

        function timeToMeet($velocity_1, $velocity_2, $distance_apart)
        {
            $this->$velocity_1 = $velocity_1;
            $this->$velocity_2 = $velocity_2;
            $this->$distance_apart = $distance_apart;

            $time = $this->$distance_apart / ($this->$velocity_1 + $this->$velocity_2);
            return $time;
        }

    }

    $WhenMeet = new Trains;
    $timeMeet= $WhenMeet->timeToMeet($velocity_1, $velocity_2, $distance_apart);
    echo "The Two Trains Will Meet In";
    echo "$timeMeet";
    echo "hour(s)";
}
?>