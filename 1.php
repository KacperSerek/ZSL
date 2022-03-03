<?php
$name="Kacper";
echo 'Imię: $name<br>';
echo "Imię: $name<br>";
//konkatenacja .
echo "Imię: ".$name."<br>";
//interpolacja ,
echo "Imię: ",$name,"<br>";
//typy danych
//boolean
$prawda=true;
$fałsz=false;
echo $prawda; //1
echo $fałsz; //nic nie wyświetli
//integer
$dec=10;
$bin=0b1010;
$oct=010;
$hex=0x10;
echo "<br>$dec";
echo "<br>$bin";
echo "<br>$oct";
echo "<br>$hex<br>";
echo gettype($hex); //integer
echo gettype($prawda); //boolean
//zmiennoprzecinkowe
$x=10.5;
echo gettype($x); //double
$name="Ola";
echo "<br>Nazwa zmiennej \$name, imię: $name";
//heredoc
$surname="Serek";
echo <<<ETYKIETA
<br>
Imię i nazwisko: $name $surname
<hr>
ETYKIETA;
?>