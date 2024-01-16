<?php

class Company
{
    public $name;
    public $location;
    public $tot_employees = 0;
    static public $avg_wage = 1500;
    static public $totalCosts = 0;

    public function __construct($_name, $_location, $_tot_employees)
    {
        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
        self::$totalCosts += self::$avg_wage * $_tot_employees * 12;
    }

    public function Information()
    {
        $additions = self::$avg_wage * $this->tot_employees * 12;

        if ($this->tot_employees > 0) {
            echo "L'Ufficio {$this->name} con sede in {$this->location} ha ben {$this->tot_employees} dipendenti.\n";
        } else {
            echo "L'Ufficio {$this->name} con sede in {$this->location} non ha dipendenti\n";
        }
        echo "L'Azienda {$this->name} ha speso in totale " . $additions . "\n";
    }
    public function AdditionsOverMonths()
    {
        $mesi = readline("Quanto ha speso l'Azienda {$this->name} in tot mesi:");
        $additionsmonths = self::$avg_wage * $this->tot_employees * $mesi;
        echo "l'azienda {$this->name} in $mesi mesi ha speso $additionsmonths \n";
    }
    public static function AllCosts(){
        echo "La somma totale di tutti i costi delle aziende è: " . self::$totalCosts . "\n";
    }
}

$company1 = new Company("Aulab", "Italia", 50);
$company2 = new Company("Microsoft", "Stati Uniti", 50);
$company3 = new Company("Sony", "Tokyo", 100);
$company4 = new Company("Ryanair", "Germania", 20);
$company5 = new Company("Nutella", "Italia", 0);
$company1->Information();
$company2->Information();
$company3->Information();
$company4->Information();
$company5->Information();

$company1->AdditionsOverMonths();
$company2->AdditionsOverMonths();
$company3->AdditionsOverMonths();
$company4->AdditionsOverMonths();
$company5->AdditionsOverMonths();

Company::AllCosts();