<?php

/**
 * Class Student
 */
class Student extends Human
{
    const TYPE_OCHN = 'Очная';
    const TYPE_ZAOCH = 'Заочная';

    public static $count = 0;

    private $course;
    private $studyForm = self::TYPE_OCHN;
    private $mark = [];

    public function __construct()
    {
        self::$count++;
        parent::__construct();
    }

    /**
     * @param $course
     * @throws Exception
     */
    public function setCourse($course)
    {
        if ((int)$course > 0 && (int)$course < 6) {
            $this->course = $course;
        } else {
            throw new Exception("Курс должен быть положительным числом от 1 до 5");
        }
    }

    /**
     * @param $studyForm
     * @throws Exception
     */
    public function setStudyForm($studyForm)
    {
        $this->studyForm = $studyForm;
    }

    /**
     * @param $mark
     * @throws Exception
     */
    public function setMark($mark)
    {
        if ((int)$mark > 1 && (int)$mark < 6) {
            $this->mark[] = $mark;
        } else {
            throw new Exception("Оценка должна быть от 2 до 5");
        }
    }

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @return mixed
     */
    public function getStudyForm()
    {
        return $this->studyForm;
    }

    /**
     * @return array
     */
    public function getMarks()
    {
        return $this->mark;
    }
}