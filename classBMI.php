<?php
require_once "classPasien.php";
class BMI extends Pasien {

    public $berat;
    public $tinggi;
    
    public function __construct($berat, $tinggi) {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function nilaiBMI() {
        $nilaiBMI = number_format(($this->berat / (($this->tinggi / 100) ** 2)), 1);
        return $nilaiBMI;
    }

    function statusBMI() {
        if ($this->nilaiBMI() < 18.5) {
            return "Kekurangan Berat Badan ";
        } elseif ($this->nilaiBMI() >= 18.5 && $this->nilaiBMI() <= 24.9) {
            return "Normal ";
        } elseif ($this->nilaiBMI() >= 25.0 && $this->nilaiBMI() <= 29.9) {
            return "Kelebihan Berat Badan ";
        } else {
            return "Kegemukan ";
        }
    }
}