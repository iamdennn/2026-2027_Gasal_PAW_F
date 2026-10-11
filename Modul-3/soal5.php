<?php

$mahasiswa = array(
    array("Name" => "Alex",    "NIM" => "220401", "Mobile" => "0812345678"),
    array("Name" => "Bianca",  "NIM" => "220402", "Mobile" => "0812345687"),
    array("Name" => "Candice", "NIM" => "220403", "Mobile" => "0812345665"),
    array("Name" => "Daniel",  "NIM" => "220404", "Mobile" => "0812345671"),
    array("Name" => "Elena",   "NIM" => "220405", "Mobile" => "0812345672"),
    array("Name" => "Fiona",  "NIM" => "220406", "Mobile" => "0812345673"),
    array("Name" => "Gabe",   "NIM" => "220407", "Mobile" => "0812345674"),
    array("Name" => "Hannah",  "NIM" => "220408", "Mobile" => "0812345675")
);

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Name</th><th>NIM</th><th>Mobile</th></tr>";

foreach ($mahasiswa as $data) {
    echo "<tr>";
    echo "<td>" . $data["Name"] . "</td>";
    echo "<td>" . $data["NIM"] . "</td>";
    echo "<td>" . $data["Mobile"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>