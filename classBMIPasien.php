<?php
require_once "classPasien.php";
require_once "classBMI.php";
class BMIPasien extends BMI {
    public $tanggal;
    function __construct($kode, $tanggal, $nama, $gender, $berat, $tinggi) {
        $this->tanggal = $tanggal;
        $this->kode = $kode;
        $this->nama = $nama;
        $this->gender = $gender;
        parent::__construct($berat, $tinggi);
    }
}