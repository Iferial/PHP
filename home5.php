<?php
class User
{
    private $name;
    private $age;

    public function getAge()
    {
        return $this->age;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAge($age): void
    {
        $this->age = $age;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }
}
class Worker extends User
{
    private $salary;

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}
$worker1 = new Worker();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker();
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);
//echo $worker1->getSalary() + $worker2->getSalary() . "\n";

class Student extends User {
    private $course;
    private $stipend;

    public function setStipend($stipend): void
    {
        $this->stipend = $stipend;
    }
    public function getStipend()
    {
        return $this->stipend;
    }
    public function getCourse()
    {
        return $this->course;
    }
    public function setCourse($course): void
    {
        $this->course = $course;
    }
}