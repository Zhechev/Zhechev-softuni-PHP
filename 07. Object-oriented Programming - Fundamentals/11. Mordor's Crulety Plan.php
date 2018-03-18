php

class Gandalf
{
    public $mood = 0;

    
      @return mixed
     
    public function getMood()
    {
        return $this-mood;
    }

    
      @param mixed $mood
     
    public function setMood($points, $action)
    {
        if ($action == 'add') {
            $this-mood += $points;
        } else {
            $this-mood -= $points;
        }
    }
    
}

$gandalf = new Gandalf();

$foods = explode(',', trim(fgets(STDIN)));

foreach ($foods as $food) {
    $food = strtolower($food);
    switch ($food) {
        case 'cram'
            $gandalf-setMood(2, 'add');
            break;
        case 'lembas'
            $gandalf-setMood(3, 'add');
            break;
        case 'apple'
            $gandalf-setMood(1, 'add');
            break;
        case 'melon'
            $gandalf-setMood(1, 'add');
            break;
        case 'honeycake'
            $gandalf-setMood(5, 'add');
            break;
        case 'mushrooms'
            $gandalf-setMood(10, 'get');
            break;
        default
            $gandalf-setMood(1, 'get');
            break;
    }
}

if ($gandalf-getMood()  -5) {
    $mood = 'Angry';
} else if ($gandalf-getMood()  0) {
    $mood = 'Sad';
} else if ($gandalf-getMood()  15) {
    $mood = 'Happy';
} else {
    $mood = 'PHP';
}

echo $gandalf-getMood() . PHP_EOL . $mood;