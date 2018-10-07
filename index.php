<?php
require_once ('human.php');
require_once ('student.php');
require_once ('woker.php');
require_once ('manager.php');

$human1 = new Human();
$human1->setFirstname('Петя');
$human1->setLastname('Иванов');
$human1->setAge('25');
print_r('<pre>');
print_r($human1);
print_r('<pre>');

$human2 = new Human();
$human2->setFirstname('Вася');
$human2->setLastname('Пупкин');
$human2->setAge('20');
print_r('<pre>');
print_r($human2);

$student1 = new Student();
$student1->setFirstname('Петя');
$student1->setLastname('Иванов');
$student1->setAge('25');
$student1->setCourse(4);
$student1->setMark(4);
$student1->setMark(5);
$student1->setMark(3);
print_r('<pre>');
print_r($student1);

$student2 = new Student();
$student2->setFirstname('Вася');
$student2->setLastname('Пупкин');
$student2->setAge('20');
$student2->setCourse(2);
$student2->setStudyForm(Student::TYPE_ZAOCH);
$student2->setMark(4);
$student2->setMark(4);
$student2->setMark(4);
print_r('<pre>');
print_r($student2);

$woker1 = new Woker();
$woker1->setFirstname('Женя');
$woker1->setLastname('Буянов');
$woker1->setAge('26');
$woker1->setSalary(date('d.m.Y'));
$woker1->setSalary(date('d.m.Y'), 40000);
print_r('<pre>');
print_r($woker1);

$manager1 = new Manager();
$manager1->setFirstname('Маша');
$manager1->setLastname('Васильева');
$manager1->setAge('22');
$manager1->add('Иван', 'Пупкин', '20');
$manager1->add('Лена', 'Иванова', '20');
$manager1->add('Петя', 'Федоров', '26');
$manager1->del('Иванова');
$manager1->del('Пупкин');
print_r('<pre>');
print_r($manager1);

echo "Людей: ".Human::$count.PHP_EOL;
echo "Студентов: ".Student::$count.PHP_EOL;
echo "Сотрудников: ".Woker::$count."/".(Woker::$count-Manager::$count).PHP_EOL;
echo "Менеджеров: ".Manager::$count.PHP_EOL;
