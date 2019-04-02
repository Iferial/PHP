<?php
class Worker {
    public $name;
    public $age;
    public $salary;
}
    $worker1 = new Worker();
    $worker1->name = 'Иван';
    $worker1->age = 25;
    $worker1->salary = 1000;

    $worker2 = new Worker();
    $worker2->name = 'Вася';
    $worker2->age = 26;
    $worker2->salary = 2000;

    echo $worker1->age + $worker2->age . "\n";