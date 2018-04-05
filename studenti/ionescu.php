<?php
class Ionescu extends Student{
    public function __construct(){
        parent::__construct();//apelarea constructorului clasei Student
        echo $this->nume="Ionescu";//invocarea unei proprietati protected a clasei parinte 
    }
    public function set_prenume($var){
        parent::set_prenume($var);
    }
    public function show_prenume(){
        echo $this->prenume;
    }
}
