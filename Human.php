<?php

/**
 * Class Human
 */
class Human
{
    public static $count = 0;

    private $firstname = 'Иван';
    private $lastname = 'Иванов';
    private $age = '25';

    public function __construct($firstname, $lastname)
    {
        self::$count++;
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
    }

    /**
     * @param $firstname
     * @throws Exception
     */
    public function setFirstname(string $firstname)
    {
        $pattern = '/([a-zA-zа-яА-Я]+)/';
        if (preg_match($pattern, $firstname)) {
            $this->firstname = $firstname;
        } else {
            throw new Exception("Введите имя в правильном формате");
        }
    }

    /**
     * @param $lastname
     * @throws Exception
     */
    public function setLastname(string $lastname)
    {
        $pattern = '/([a-zA-zа-яА-Я]+)/';
        if (preg_match($pattern, $lastname)) {
            $this->lastname = $lastname;
        } else {
            throw new Exception("Введите фамилию в правильном формате");
        }
    }

    /**
     * @param $age
     * @throws Exception
     */
    public function setAge($age)
    {
        if ((int)$age > 0) {
            $this->age = $age;
        } else {
            throw new Exception("Возраст должен быть положительным числом");
        }
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
}
