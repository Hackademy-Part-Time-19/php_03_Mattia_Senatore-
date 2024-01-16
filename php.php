<?php
$company1 = [
    "name" => "Aulab",
    "location" => "Italia",
    "tot_employees" => 50

];
$company2 = [
    "name" => "Microsoft",
    "location" => "Stati Uniti",
    "tot_employees" => 50000

];
$company3 = [
    "name" => "Sony",
    "location" => "Tokyo",
    "tot_employees" => 10000

];
$company4 = [
    "name" => "Ryanair",
    "location" => "Germania",
    "tot_employees" => 20000

];
$company5 = [
    "name" => "Nutella",
    "location" => "Italia",
    "tot_employees" => 3000

];

class Company
{
    public $name;
    public $location;
    public $tot_employees = 0;
    static public $avg_wage = 1500;

    public function __construct($_name, $_location, $_tot_employees)
    {
        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
    }

    public function Information()
    {
        if ($this->tot_employees > 0) {
            echo "L'Ufficio ({$this->name}) con sede in ({$this->location}) ha ben ({$this->tot_employees}) dipendenti";
        } else {
            echo "L'Ufficio ({$this->name}) con sede in ({$this->location}) non ha dipendenti";
        }
    }
}

$company1 = new Company("Aulab", "Italia", 50);
