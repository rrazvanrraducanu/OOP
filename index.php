<?php
require_once 'student.php';
require_once 'studenti/ionescu.php';
require_once 'studenti/popescu.php';

$popescu=new Popescu();

$popescu->display();

echo "</br>";
$popescu->show_nume();

$popescu->set_prenume("Bogdan");
echo " ";
$popescu->show_prenume();
echo "<br/>";
$ionescu=new Ionescu();

$ionescu->set_prenume("Razvan");
echo " ";
$ionescu->show_prenume();
echo "<br/>";
?>
<br/>
<a href="pag1.php">link1</a><br/><br/>
<a href="pag2.php">link2</a><br/><br/>
<a href="pag3.php">link3</a><br/><br/>
<a href="pag4.php">link4</a><br/><br/>