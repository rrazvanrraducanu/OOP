<?php
class Student{
    protected $nume;
    protected $prenume;
    protected $facultatea="Matematica";
    protected $universitatea;
    protected function __construct(){
        $this->universitatea="UAIC<br/>";
    }
    public function display(){
        echo "Studentii Facultatii de ".$this->facultatea." ai Univeristatii ". $this->universitatea;
    }
    protected function set_prenume($var){
        $this->prenume=$var;
    }
}
