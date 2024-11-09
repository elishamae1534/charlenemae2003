<?php

class PieceWorker extends Employee {
    private $itemsSold;
    private $wagePerItem;

    public function __construct($name, $address, $age, $companyName, $itemsSold, $wagePerItem) {
        parent::__construct($name, $address, $age, $companyName);
        $this->itemsSold = $itemsSold;
        $this->wagePerItem = $wagePerItem;
    }

    public function calculateEarnings() {
        return $this->itemsSold * $this->wagePerItem;
    }
}
