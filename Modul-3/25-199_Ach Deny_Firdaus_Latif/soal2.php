<?php

$fruits = array("Avocado", "Blueberry", "Cherry");
$dataBaru = array("Durian", "Elderberry", "Fig", "Grape", "Honeydew");

for ($i = 0; $i < count($dataBaru); $i++) {
    $fruits[] = $dataBaru[$i];
}

$arrlength = count($fruits);

echo "Panjang array: " . $arrlength . "<br>";
echo "Isi array fruits:<br>";

for ($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x] . "<br>";
}

echo "<br>";
$sayur = array("Carrot", "Broccoli", "Spinach");
$panjangSayur = count($sayur);

for ($x = 0; $x < $panjangSayur; $x++) {
    echo $sayur[$x] . "<br>";
}
?>