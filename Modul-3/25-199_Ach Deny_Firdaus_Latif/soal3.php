<?php

$height = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170"
);

$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Herry"] = "178";

echo "Nilai pada indeks terakhir: " . end($height) . " cm<br>";

unset($height["Barry"]);
echo "Data Barry dihapus.<br>";
echo "Nilai pada indeks terakhir setelah penghapusan: " . end($height) . " cm<br>";

$weight = array(
    "Andy" => 65,
    "Barry" => 70,
    "Charlie" => 68
);

$nilaiWeight = array_values($weight);

echo "<br>";
echo "Data kedua: " . $nilaiWeight[1] . " kg";
?>