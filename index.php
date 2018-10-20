<?php

require_once ('Human.php');
require_once ('Student.php');
require_once ('Woker.php');
require_once ('Manager.php');

$human1 = new Human('Петя', 'Иванов');
$human1->setAge('25');
print_r('<pre>');
print_r($human1);

$human2 = new Human('Вася', 'Пупкин');
$human2->setAge('20');
print_r('<pre>');
print_r($human2);

$student1 = new Student('Петя', 'Иванов');
$student1->setAge('25');
$student1->setCourse(4);
$student1->setMark(4);
$student1->setMark(5);
$student1->setMark(3);
print_r('<pre>');
print_r($student1);

$woker1 = new Woker('Вася', 'Пупкин');
$woker1->setAge('20');
$woker1->setSalary(date('d.m.Y'));
$woker1->setSalary(date('d.m.Y'), 30000);
print_r('<pre>');
print_r($woker1);

$woker2 = new Woker('Женя', 'Буянов');
$woker2->setAge('26');
$woker2->setSalary(date('d.m.Y'));
$woker2->setSalary(date('d.m.Y'), 40000);
print_r('<pre>');
print_r($woker2);

$manager1 = new Manager('Маша', 'Васильева');
$manager1->setAge('22');
$manager1->addWoker($woker1);
$manager1->addWoker($woker2);
$manager1->delWoker($woker1);
print_r('<pre>');
print_r($manager1);

echo "Людей: ".Human::$count.PHP_EOL;
echo "Студентов: ".Student::$count.PHP_EOL;
echo "Сотрудников: ".Woker::$count."/".(Woker::$count-Manager::$count).PHP_EOL;
echo "Менеджеров: ".Manager::$count.PHP_EOL;

