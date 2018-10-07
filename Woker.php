<?php

/**
 * Class Woker
 */
class Woker extends Human
{
	const SALARY = 20000;
	
    public static $count = 0;
    private $fullSalary = [];

    public function __construct()
    {
        self::$count++;
        parent::__construct();
    }

    /**
     * @param $date
     * @param int $fullSalary
     */
    public function setSalary($date, $fullSalary = self::SALARY)
    {
        static $count = 0;
        if (!empty($fullSalary)) {
            if ((int)$fullSalary > 0) {
                $count++;
                $this->fullSalary[$count]['date'] = $date;
                $this->fullSalary[$count]['salary'] = $fullSalary;
            } else {
                throw new Exception("Зарплата должна бять положительным числом");
            }
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
