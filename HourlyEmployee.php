<?php


class HourlyEmployee extends Employee {
    private $hoursWorked;
    private $hourlyRate;

    public function __construct($name, $address, $age, $companyName, $hoursWorked, $hourlyRate) {
        parent::__construct($name, $address, $age, $companyName);
        $this->hoursWorked = $hoursWorked;
        $this->hourlyRate = $hourlyRate;
    }

    public function calculateEarnings() {
        return $this->hoursWorked * $this->hourlyRate;
    }
}

