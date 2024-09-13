<?php
require_once 'Employee.php';

//User Input Validation
function getPositiveNumber($inputMessage) {
    do {
        echo $inputMessage;
        $input = readline();
        if (is_numeric($input) && $input >= 0) {
            return $input; 
        } else {
            echo "Invalid Salary!!! Salary Must Be A Positive Value.\n";
        }
    } while (true); 
}

echo "Please Enter Employee Name: ";
$name = readline();
echo "Please Enter Employee Designation: ";
$designation = readline();
$salary = getPositiveNumber("Please Enter Employee Salary: ");

$employee = new Employee($name, $designation, $salary);

$employee->displayEmployeeInfo(); // Display employee details

?>
