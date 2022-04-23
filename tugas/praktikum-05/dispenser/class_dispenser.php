<?php 
    class Dispenser{
        protected $volume;
        protected $harga_segelas;
        private $volume_gelas;
        public $nama_minuman;

        public function isi($vol)
        {
            $this->volume = $vol;
        }
        public function __construct($pembeli, $nama_minuman)
        {
            $this->pembeli = $pembeli;
            $this->meminum = $nama_minuman;
        }
        public function lemon_tea()
        {
            $this->harga = 9000;
            $this->vol -= 270;
            return "$this->pembeli membeli $this->meminum seharga $this->harga, volume wadah tersisa $this->vol";
        }
        public function tambah_teh()
        {
            $this->harga = 7000;
            $this->vol -= 200;
            return "$this->pembeli membeli $this->meminum seharga $this->harga, volume wadah tersisa $this->vol";
        }
        public function tambah_teh_lagi()
        {
            $this->harga = 5000;
            $this->vol -= 300;
            return "$this->pembeli membeli $this->meminum seharga $this->harga, volume wadah tersisa $this->vol";
        }
        public function getNama(){
            return $this->pembeli;
        }
        public function getMinum(){
            return $this->meminum;
        }
        public function getVolume(){
            return $this->vol;
        }
        public function setVolume($volume){
            $this->vol = $volume;
        }

    }