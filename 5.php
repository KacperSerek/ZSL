<?php
$text = <<< SCHOOL
ZSŁ - Zespół
Szkół Łączności<br>
SCHOOL;
echo "$text<br>";
echo nl2br($text);
$name="jANusZ";
echo "$name<br>";
echo strtolower($name);
echo strtoupper($name);
$surname="Bąk";
echo strtoupper($surname);
echo mb_strtoupper($surname);
$text="jaNusz koWAlski";
echo "<hr>$text<br>";
echo ucfirst(mb_strtolower($text))."<br>";
echo ucwords(mb_strtolower($text))."<br>";
$lorem="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum vero eum maxime aliquam alias tempora quasi obcaecati aperiam ut, soluta iste error sed. Officia ad omnis, reprehenderit expedita iusto quas?.<br>";
echo $lorem;
echo wordwrap($lorem, 40, "<br>");
echo wordwrap($lorem, 40, "<hr>");
ob_clean();
$name="  Jan ";
echo "Długość imienia $name wynosi: ".strlen($name)."<br>";
echo "Długość imienia ".ltrim($name)." wynosi: ".strlen(ltrim($name))."<br>";
echo "Długość imienia ".rtrim($name)." wynosi: ".strlen(rtrim($name))."<br>";
echo "Długość imienia ".trim($name)." wynosi: ".strlen(trim($name))."<br>";
$name="Janusz";
echo substr($name, 0, 3)."<br>";
echo substr($name, 2, 2)."<br>";
$string="text";
$replace=" *** ";
echo str_replace($string, $replace, "Janusz text Anna text text Poznań");
$tab = ["ą", "ę"];
$replace = ["a", "e"];
echo str_replace($tab, $replace, "Bąk")."<br>";
$mail="janusz_kowalski@zsl.poznan.pl";
echo substr($mail, strpos($mail, "@")+1)."<br>";
?>
