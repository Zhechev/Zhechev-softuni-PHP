<?php

class DateModifier {

    private $date1;
    private $date2;

    /**
     * DateModifier constructor.
     * @param $date1
     * @param $date2
     */
    public function __construct($date1, $date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }


    public function checkDiffrence($dateOne, $dateTwo){
        $datediff = strtotime($dateOne) - strtotime($dateTwo);
        $datediff = floor($datediff / (60 * 60 * 24));

        if ($datediff < 0){
            return $datediff * -1;
        }
        return $datediff;
    }
}

$date1 = implode('-', explode(' ',trim(fgets(STDIN))));
$date2 = implode('-', explode(' ',trim(fgets(STDIN))));

$date = new DateModifier($date1, $date2);
echo $date->checkDiffrence($date1, $date2);