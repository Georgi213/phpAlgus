<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 402</title>
</head>
<body>
<a href="../test.php">tagasi...Ülesannete leht</a>
<h1>Ülesanne 402</h1>
<h2>1. 20 Checkbox tsükliga</h2>
<?php
    $i=1;
    while($i<=20){
        echo"<input type='checkbox' id='$i' name='box[]' value='$i'>";
        echo"<label for='$i'>box".$i."</label><br>";
        $i++;
    }
?>
<h2>2.20 Tekstikasti tsuklig</h2>
<?php
$g=1;
while($g<=20) {
    echo "<input type='text' id=t'$g' name='cell[]' value=''>";
    echo "<label for=t'$g'>cell" . $g . "</label><br>";
    $g++;
}
?>
<h2>3.20 Radionupid tsukliga</h2>
<?php
$v=1;
while($v<=20){
    echo"<input type='radio' id=r'$v' name='value[]' value=''>";
    echo"<label for=r'$v'>value".$v."</label><br>";
    $v++;
}
?>
</body>
</html>

