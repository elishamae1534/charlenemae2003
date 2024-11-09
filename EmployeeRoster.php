<?php

class EmployeeRoster {
    private $rosterSize;
    private $employeeRoster = [];

    public function __construct($size) {
        $this->rosterSize = $size;
    }

    public function addEmployee(Employee $employee) {
        if (count($this->employeeRoster) < $this->rosterSize) {
            $this->employeeRoster[] = $employee;
            return true;
        }
        return false;
    }

    public function deleteEmployee($name) {
        foreach ($this->employeeRoster as $key => $employee) {
            if ($employee->getName() === $name) {
                unset($this->employeeRoster[$key]);
                return true;
            }
        }
        return false;
    }

    public function listEmployees() {
        foreach ($this->employeeRoster as $employee) {
            echo $employee . PHP_EOL;
        }
    }

    public function countEmployees() {
        return count($this->employeeRoster);
    }

    public function getEmployeeRoster() {
        return $this->employeeRoster;
    }

    public function getRosterSize() {
        return $this->rosterSize;
    }
}
