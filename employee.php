<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class employee{

    public $fname;
    public $lname;
    public $age;

    public function __construct($fname, $lname, $age)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
    }
    function get_fname() {
        return $this->fname;
    }

    function get_lname() {
        return $this->lname;
    }

    function get_age() {
        return $this->age;
    }
    //properties


    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }
    public function getDesignation()
    {
        return $this->designation;
    }


    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }


    public function setCompany($company)
    {
        $this->company = $company;
    }
    public function getCompany()
    {
        return $this->company;
    }


}

//objects
$e1 = new employee('Rajiv','Singh','36');
$e1->setDesignation('Junior Engineer');
$e1->setSalary('30K');
$e1->setCompany('Sigma');

$e2 = new employee('Krishna','Rathore','23');
$e2->setDesignation('Admin');
$e2->setSalary('20K');
$e2->setCompany('Sigma');


$e3 = new employee('Shivam','Singh','23');
$e3->setDesignation('Data Analyst');
$e3->setSalary('50K');
$e3->setCompany('Sigma');


$e4 = new employee('Ritesh','Rana','22');
$e4->setDesignation('Devops Engineer');
$e4->setSalary('60K');
$e4->setCompany('Sigma');


$e5 = new employee('Rohan','Dhakad','24');
$e5->setDesignation('Software Engineer');
$e5->setSalary('30K');
$e5->setCompany('Sigma');


$e6 = new employee('Yash','Nagar','22');
$e6->setDesignation('Software Engineer');
$e6->setSalary('30K');
$e6->setCompany('Wipro');

$e7 = new employee('Akansha','Wadkar','22');
$e7->setDesignation('Associate Software Engineer');
$e7->setSalary('40K');
$e7->setCompany('TCS');

$e8 = new employee('Amit','Thakur','33');
$e8->setDesignation('Product Engineer');
$e8->setSalary('30K');
$e8->setCompany('Accenture');

$e9 = new employee('Shyam','Roy','24');
$e9->setDesignation('Developer');
$e9->setSalary('80K');
$e9->setCompany('Mindpath');

$e10 = new employee('Kajar','Pawar','31');
$e10->setDesignation('HR');
$e10->setSalary('30K');
$e10->setCompany('Sigma');

//array of object
$arr = array($e1,$e2,$e3,$e4,$e5,$e6,$e7,$e8,$e9,$e10);


echo"<h1>Employee Data</h1>";
echo "<table border='1'style='background-color: blanchedalmond;border:1px solid black;border-collapse:collapse;padding: 10px;text-align: center'>

<tr style='padding: 10px'>
<th style='padding: 10px'>First Name</th>
<th style='padding: 10px'>Last Name</th>
<th style='padding: 10px'>Age</th>
<th style='padding: 10px'>Comapny Name</th>
<th style='padding: 10px'>Salary</th>
<th style='padding: 10px'>Designation</th>
</tr>";

for($i=1;$i<10;$i++)
{
    echo "<tr style='padding: 10px'>";

    echo "<td style='padding: 10px'>" . $arr[$i]->get_fname() . "</td>";

    echo "<td style='padding: 10px'>" . $arr[$i]->get_lname() . "</td>";

    echo "<td style='padding: 10px'>" . $arr[$i]->get_age() . "</td>";

    echo "<td style='padding: 10px'>" . $arr[$i]->getCompany() . "</td>";

    echo "<td style='padding: 10px'>" . $arr[$i]->getSalary() . "</td>";

    echo "<td style='padding: 10px'>" . $arr[$i]->getDesignation() . "</td>";


    echo "</tr>";

}

echo "</table>";
?>


