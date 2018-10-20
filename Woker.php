<?php

/**
 * Class Woker
 */
class Woker extends Human
{
	const SALARY = 20000;
	
    public static $count = 0;
    private $fullSalary = [];

    public function __construct($firstname, $lastname)
    {
        self::$count++;
        parent::__construct($firstname, $lastname);
    }

    /**
     * @param $date
     * @param int $fullSalary
     */
    public function setSalary($date, $fullSalary = self::SALARY)
    {
        if ((int)$fullSalary > 0) {
            $this->fullSalary[][$date]['salary'] = $fullSalary;
        } else {
            throw new Exception("Зарплата должна бять положительным числом");
        }
    }

    /**
     * @return array
     */
    public function getSalary()
    {
        return $this->fullSalary;
    }
}
