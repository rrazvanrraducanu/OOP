<?php
class Student{
    private $_nume;
    public function set_nume($nume){
        $this->_nume=$nume;
    }
    public function get_nume(){
        return $this->_nume;
    }
}
$student=new Student();
$student->set_nume("Popescu");
//$student->_nume="Georgescu"; -- va genera o eroare !!!
echo $student->get_nume();
