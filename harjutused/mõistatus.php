<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mõistatus</title>
</head>
<body>
<h1>Mõistatus</h1>
<?php
echo "<br>";
echo"<h2>Matematiika tehed.Mõistatus</h2>";

$arv1=5;
$arv2=10;
echo "Kui liidame kokku,vastus on ".($arv1+$arv2);
echo "<br>";
//jagamine
echo "Kui esimene arv jagame teise arvuga,siis vastus on "
.($arv1/$arv2);
echo"<br>";
echo"Esimene arv ruudus on ".pow($arv1,2);
echo"<br>";
//lahutamine
echo "Kui teisest arvust lahutada esimene,siis vastus on ".pow($arv2, 2);
echo"<br>";
//korrutis
echo "Kahe arvude korrutis ".($arv1*$arv2);
echo"<br>";
echo "<a href=vastus.php>Õiged vastused</a>";
echo"<br>";
echo"<h2> Arva ära EESTI LINNANIMI</h2>";
echo"<br>";
$nimi="Tartu";
//teksti pikkus
echo "<br>Linnanimmi pikkus - ".strlen($nimi);



//esimene täht
echo "<br>Linnanimi 1.täht -  ".substr($nimi,0,1);
//kõik tähed tagurpidi
echo"<br>Kõik tähed tagupirdi - ".strrev($nimi); // выводит "!dlrow olleH"
//Ülemine rida
echo"<br>Ülemine rida-".strtoupper($nimi);
//Konventeerima uunkode
echo"<br>Konventeerima uuenkode-".convert_uuencode($nimi);
//Ülemine täht
echo"<br>Ülemine täht-".ucfirst($nimi);
?>

</body>
</html>

