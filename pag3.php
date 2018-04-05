<?php
class Elev{
    public $nume;
    public $prenume;
    public $show;
    public function set_nume($var){
        $this->nume=$var;
    }
    public function set_prenume($var){
        $this->prenume=$var;
    }
    public function get_nume(){
        $this->show=$this->nume." ".$this->prenume;
    }
    public function show(){
        return $this->show;
    }
}
$elev=new Elev();
$elev->set_nume("Popescu");
$elev->set_prenume("Bogdan");
$elev->get_nume();
echo $elev->show();
//echo $elev->show;
