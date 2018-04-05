<?php
class Popescu extends Student{
    public function __construct(){
        parent::__construct();//apelarea constructorului clasei Student
        $this->nume="Popescu";//invocarea unei proprietati protected a clasei parinte 
    }
    public function set_prenume($var){
        parent::set_prenume($var);
    }
    public function show_prenume(){
        echo $this->prenume;
    }
     public function show_nume(){
        echo $this->nume;
    }
}

