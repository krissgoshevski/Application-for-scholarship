<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title> Резултати од просекот на студентот </title>
</head>
<body>

<?php 
echo " <h2> Податоците за студентот се: </h2> " ;
echo " Време на поднесување за стипендија: " . date_default_timezone_set('Europe/Skopje');    /// za vreme
echo date("1 jS \of F Y h:i:s A"). "<br>"; echo "<br>";
	
$ime = $_POST['ime'] . "<br>"; //za da vneseme ime  //['ime'] e od NAME 
echo "Име: " . $ime;

$prezime = $_POST['prezime'] . "<br>"; // za da vneseme prezime
echo "Презиме: " . $prezime;

$index = $_POST['index'] . "<br>" . "<br>"; // za da vneseme index
echo "Број на индекс: " . $index;



$pr1 = $_POST['pr1'] . $pr11 = $_POST['pr11'] . "<br>"; // za da gi PECATI NA IZLEZ 
     echo $pr1;
	 
$pr2 = $_POST['pr2'] . $pr22 = $_POST['pr22'] . "<br>";
     echo $pr2;
	 
$pr3 = $_POST['pr3'] . $pr33 = $_POST['pr33'] . "<br>";
     echo $pr3;
	 
$pr4 = $_POST['pr4'] . $pr44 = $_POST['pr44'] . "<br>";
     echo $pr4;
	 
$pr5 = $_POST['pr5'] . $pr55 = $_POST['pr55'] . "<br>";
     echo $pr5;
	 
$pr6 = $_POST['pr6'] . $pr66 = $_POST['pr66']  . "<br>";
     echo $pr6;
	 
$pr7 = $_POST['pr7'] . $pr77 = $_POST['pr77'] . "<br>";
     echo $pr7;
	 
$pr8 = $_POST['pr8'] . $pr88 = $_POST['pr88'] . "<br>";
	echo $pr8;
	
$pr9 = $_POST['pr9'] . $pr99 = $_POST['pr99'] . "<br>";
	echo $pr9;
	
$pr10 = $_POST['pr10'] . $pr1010 = $_POST['pr1010'] . "<br>";
	echo $pr10;
	
$zbir = 0; // promenliza za zbir 

$a = $_POST['pr11']; // pr11 e od NAME 
$b = $_POST['pr22']; // promenlivi za brojkite da se soberat
$v = $_POST['pr33'];
$g = $_POST['pr44'];
$d = $_POST['pr55'];
$gj = $_POST['pr66'];
$e = $_POST['pr77'];
$dzz = $_POST['pr88'];
$z = $_POST['pr99'];
$dz = $_POST['pr1010'];
echo "<br>";


$zbir = ($a+$b+$v+$g+$d+$gj+$e+$dzz+$z+$dz) / 10;  // za PROSEK
echo "Просекот на студентот е: " . $zbir . "<br>";


if(isset($_POST['tip'])) // ['tip'] od NAME    //PRAVIME ZA 3 RADIOBUTTONS 3 RAZLICNI VALUE SO ISTO IME NA PROMENLIVA $tip
{
$tip = $_POST['tip'];
 if($tip == "tipa") // "tipa" od VALUE 
 {
 if($zbir >= 9)
{
	echo " Успешна апликација за стипендија Тип А " . "<br>";
}
else
{
	echo " Неуспешна апликација за стипендија Тип А " . "<br>";
}
}
}	

if(isset($_POST['tip'])){
$tip = $_POST['tip'];
 if($tip == "tipb") // "tipb" od VALUE
 {
 if($zbir >= 8)
{
	echo " Успешна апликација за стипендија Тип B " . "<br>";
}
else
{
	echo " Неуспешна апликација за стипендија Тип B " . "<br>";
}
}
}	

if(isset($_POST['tip'])){
$tip = $_POST['tip'];
 if($tip == "tipc")
 {
 if($zbir >= 7){
	echo " Успешна апликација за стипендија Тип C " . "<br>";
}
else
{
	echo " Неуспешна апликација за стипендија Тип C " . "<br>";
}
}
}	
?>
</body>
</html>