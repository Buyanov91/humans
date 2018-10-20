<?php

/**
 * Class Manager
 */
class Manager extends Woker
{
    public static $count = 0;

    private $list = [];

    public function __construct($firstname, $lastname)
    {
        self::$count++;
        parent::__construct($firstname, $lastname);
    }

    /**
     * @param $firstname
     * @param $lastname
     * @param $age
     */
    public function addWoker($woker)
    {
        $this->list[] = $woker;
    }

    /**
     * @param $lastname
     */
    public function delWoker($woker)
    {
        if (!empty($this->list)) {
            foreach ($this->list as $key => $wok) {
                if ($wok === $woker) {
                    unset($this->list[$key]);
                    parent::$count--;
                    Human::$count--;
                }
            }
        } else {
            throw new Exception("Увольнять некого!");
        }
    }

    /**
     *
     */
    public function getList()
    {
        return $this->list;
    }
}
