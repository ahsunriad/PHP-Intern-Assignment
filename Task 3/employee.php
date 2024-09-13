<?php

class Employee {
    private $name;
    private $designation;
    private $salary;

    //Initializing Employee Information
    public function __construct($name, $designation, $salary) {
        $this->name = $name;
        $this->designation = $designation;
        $this->setSalary($salary);
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setDesignation($designation) {
        $this->designation = $designation;
    }

    public function getDesignation() {
        return $this->designation;
    }

    public function setSalary($salary) {
        if (is_numeric($salary) && $salary >= 0) { //Salary validatoin. Weather salary is numeric and positive or not.
            $this->salary = $salary;
        } else {
            echo "Invalid Salary!!! Salary Must Be A Positive Value.\n";
        }
    }

    public function getSalary() {
        return $this->salary;
    }

    // Displaying Employee Details
    public function displayEmployeeInfo() {
        echo "\nEmployee Information\n";
        echo "Employee Name: " . $this->getName() . "\n";
        echo "Designation: " . $this->getDesignation() . "\n";
        echo "Salary: BDT " . $this->getSalary() . "\n";
    }
}
?>
