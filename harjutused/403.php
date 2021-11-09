<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 403</title>
</head>
<body>
<a href="../test.php">tagasi...Ülesannete leht</a>
<h1>Ülesanne 403</h1>

<?php
$varv=array('Gold','Gray','Orange','Green','Purple','SlateBLue','tomato','MediumSeaGreen','violet','DodgerBlue','Blue','Black','Red','Crimson','Coral');
//tsükliga kuvame värvid massivist
for($i=0;$i<15;$i++){
    echo "<span style='color:$varv[$i]'>$varv[$i]</span><br>";
}

?>
</body>
</html>
