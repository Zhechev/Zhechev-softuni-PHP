<?php


class Human
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }


    public function setFirstName($firstName)
    {

        if (!ctype_upper($firstName[0])) {
            throw new Exception("Expected upper case letter!Argument: firstName");
        }
        if(strlen($firstName) < 4) {
            throw new Exception("Expected length at least 4 symbols!Argument: firstName");
        }
            $this->firstName = $firstName;

    }

    public function setLastName($lastName)
    {
        if (!ctype_upper($lastName[0])) {
            throw new Exception("Expected upper case letter!Argument: lastName");
        }
        if (strlen($lastName) < 3) {
            throw new Exception("Expected length at least 3 symbols!Argument: lastName");
        }
            $this->lastName = $lastName;

    }

    public function __toString()
    {
        $print = "First Name: " . $this->getFirstName() . PHP_EOL
            . 'Last Name: ' . $this->getLastName() . PHP_EOL;
        return $print;
    }

}

class Student extends Human
{
    private $facultyNumber;

    public function __construct($firstName, $lastName, $facultyNumber)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacultyNumber($facultyNumber);
    }

    public function setFacultyNumber(string $facultyNumber)
    {
        if (strlen($facultyNumber) < 5 || strlen($facultyNumber) > 10) {
            throw new Exception("Invalid faculty number!");
        }
            $this->facultyNumber = $facultyNumber;

    }




    public function getFacultyNumber()
    {
        return $this->facultyNumber;
    }



    public function __toString()
    {
        return parent::__toString()
            . 'Faculty number: ' . $this->getFacultyNumber() .  PHP_EOL;
    }


}

class Worker extends Human
{
    private $weekSalary;
    private $workHoursPerDay;

    public function __construct($firstName, $lastName, $weekSalary, $workHoursPerDay)
    {
        parent::__construct($firstName, $lastName);
        $this->setWeekSalary($weekSalary);
        $this->setWorkHoursPerDay($workHoursPerDay);
    }

    public function setLastName($lastName)
    {
        if (strlen($lastName) <= 3) {
            throw new Exception("Expected length more than 3 symbols!Argument: lastName");
        }
        else {
            parent::setLastName($lastName);
        }
    }

    public function setWeekSalary($weekSalary)
    {
        if ($weekSalary <= 10) {
            throw new Exception("Expected value mismatch!Argument: weekSalary");
        } else {
            $this->weekSalary = $weekSalary;
        }
    }

    public function setWorkHoursPerDay($workHoursPerDay)
    {
        if ($workHoursPerDay < 1 || $workHoursPerDay > 12) {
            throw new Exception("Expected value mismatch!Argument: workHoursPerDay");
        } else {
            $this->workHoursPerDay = $workHoursPerDay;
        }
    }

    public function GETSalaryPerHour (){
        $n = number_format($this->weekSalary / (7 * $this->workHoursPerDay), 2, '.', '');

        return $n;
    }

    public function getWeekSalary()
    {
        return number_format($this->weekSalary, 2, '.', '');
    }

    public function getWorkHoursPerDay()
    {
        return number_format($this->workHoursPerDay, 2, '.', '');
    }



    public function __toString()
    {
        return parent::__toString()
            . 'Week Salary: ' . $this->getWeekSalary() .  PHP_EOL
            . 'Hours per day: ' . $this->getWorkHoursPerDay() . PHP_EOL
            . 'Salary per hour: ' . $this->getSalaryPerHour();
    }

}

$humans = [];
try {
    $studentInfo = explode(' ', trim(fgets(STDIN)));


    $studentFirstName = $studentInfo[0];
    $studentLastName = $studentInfo[1];
    $studentFacultyNumber = $studentInfo[2];


    $workerInfo = explode(' ', trim(fgets(STDIN)));
    $workerFirstName = $workerInfo[0];
    $workerLastName = $workerInfo[1];
    $workerSalary = $workerInfo[2];
    $workerHours = $workerInfo[3];

    $student = new Student($studentFirstName, $studentLastName, $studentFacultyNumber);
    $worker = new Worker($workerFirstName, $workerLastName, $workerSalary, $workerHours);


        echo $student . PHP_EOL;
        echo $worker;

} catch (Exception $ex){
   echo $ex->getMessage();
}

