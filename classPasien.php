<?php
class Pasien {

    public $kode;
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;

    function set_tmp_lahir($tmp_lahir){
        return $this->tmp_lahir = $tmp_lahir;
    }
    function get_tmpa_lahir(){
        return $this->tmp_lahir;
    }

    function set_tgl_lahir($tgl_lahir){
        return $this->tlg_lahir = $tgl_lahir;
    }
    function get_tgl_lahir($tgl_lahir){
        return $this->tgl_lahir;
    }

    function set_Email($email){
        return $this->email = $email;
    }
    function get_Email($email){
        return $this->email;
    }
}