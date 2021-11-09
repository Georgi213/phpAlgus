
<?php
//andmed massiivis
$data=[
    "nimi"=>"Georgi Blinov",
    "aadress"=>"Vana kuuli 5,Tallinn",
    "pilt"=>"Nimetu.png",
    "koduleht"=>"https://blinov20.thkit.ee"
];
?>
<br>
<a href="../test.php">tagasi...Ülesannete leht</a>
<h1>Ülesanne 401/var 1</h1>
<p> <b>
        <?=$data["nimi"]?>
    </b></p>
<p><i>
        <?=$data["aadress"]?>



</i><p/>
<img src="Nimetu.png"<?=$data["pilt"]?>"alt="pildike">
<br>
<a href="<?=$data["koduleht"]?>"target="_blank">Georgi Blinov</a>
<h1>Ülesanne 401/var2-array()</h1>
<?php
$array=array("Georgi Blinov","Tallinn","Vana kuuli 5","Nimetu.png","blinov20.thkit.ee");
echo"<b>Nimi: ".$array[0]."</b><br>";
echo"<i>Aadress: ".$array[1]."</i><br>";
echo"<img src='$array[2]' alt='pildike'>";
echo"<br><a href='https://$array[3]'>Koduleht</a>";
?>

