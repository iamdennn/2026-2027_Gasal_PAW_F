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

foreach ($height as $nama => $tinggi) {
    echo $nama . " memiliki tinggi " . $tinggi . " cm.<br>";
}

$weight = array(
    "Andy" => 65,
    "Barry" => 70,
    "Charlie" => 68
);

$namaWeight = array_keys($weight);
$nilaiWeight = array_values($weight);
$jumlahWeight = count($weight);

echo "<br>";
for ($i = 0; $i < $jumlahWeight; $i++) {
    echo $namaWeight[$i] . " memiliki berat " . $nilaiWeight[$i] . " kg.<br>";
}
?>