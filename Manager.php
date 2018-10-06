<?php

/**
 * Class Manager
 */
class Manager extends Woker
{
    public static $count = 0;

    private $list = [];

    public function __construct()
    {
        self::$count++;
        parent::__construct();
    }

    /**
     * @param $firstname
     * @param $lastname
     * @param $age
     */
    public function add($firstname, $lastname, $age)
    {
        $woker = new Woker();
        $woker->setFirstname($firstname);
        $woker->setLastname($lastname);
        $woker->setAge($age);
        $this->list[] = $woker;
    }

    /**
     * @param $lastname
     */
    public function del($lastname)
    {
        if (!empty($this->list)) {
            foreach ($this->list as $key => $woker) {
                if ($woker->getLastname() === $lastname) {
                    unset($this->list[$key]);
                    parent::$count--;
                    Human::$count--;
                }
            }
        }
    }

    /**
     *
     */
    public function getList()
    {
        $this->list;
    }
}
