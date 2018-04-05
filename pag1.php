<?php
class Student{
    public $nume="Popescu ";//proprietatea nume
    public $prenume; //proprietatea prenume
    public function nume($var){ //metoda nume
        $this->prenume=$var; 
    } //accesarea proprietatii in cadrul metodei
}
$student=new Student;
echo $student->nume; //invocarea proprietatii
$student->nume("Bogdan"); //apelarea metodei
echo $student->prenume; //invocarea proprietatii
