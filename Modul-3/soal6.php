<?php

echo "<pre>";
echo "Array awal: (\"A\")\n";
$array1 = ["A"];
array_push($array1, "B");
echo "Hasil array_push: " . implode(" ", $array1) . "\n\n";

echo "Array awal: (\"A\", \"B\") digabung dengan (\"C\")\n";
$array2_a = ["A", "B"];
$array2_b = ["C"];
$result_merge = array_merge($array2_a, $array2_b);
echo "Hasil array_merge: " . implode(" ", $result_merge) . "\n\n";

echo "Array awal: (\"x\" => 1, \"y\" => 2)\n";
$array3 = ["x" => 1, "y" => 2];
$result_values = array_values($array3);
echo "Hasil array_values: " . implode(" ", $result_values) . "\n\n";

echo "Mencari \"B\" pada array: (\"A\", \"B\", \"C\")\n";
$array4 = ["A", "B", "C"];
$result_search = array_search("B", $array4);
echo "Hasil array_search: " . $result_search . "\n\n";

echo "Array awal: (0, 1, false, 2, \"\", 3, \"array\")\n";
$array5 = [0, 1, false, 2, "", 3, "array"];
$result_filter = array_filter($array5);
echo "Hasil array_filter: " . implode(" ", $result_filter) . "\n\n";

echo "Array awal: (3, 1, 2)\n";
$array6_sort = [3, 1, 2];
sort($array6_sort);
echo "Hasil sort: " . implode(" ", $array6_sort) . "\n";

$array6_rsort = [3, 1, 2];
rsort($array6_rsort);
echo "Hasil rsort: " . implode(" ", $array6_rsort) . "\n\n";

echo "Array awal: (\"Peter\"=>35, \"Ben\"=>37, \"Joe\"=>43)\n";
$age = ["Peter"=>35, "Ben"=>37, "Joe"=>43];

function print_assoc($arr) {
    $output = [];
    foreach ($arr as $key => $val) {
        $output[] = "$key=> $val";
    }
    return implode(", ", $output) . ",";
}

$arr_asort = $age;
asort($arr_asort);
echo "Hasil asort: " . print_assoc($arr_asort) . "\n";

$arr_ksort = $age;
ksort($arr_ksort);
echo "Hasil ksort: " . print_assoc($arr_ksort) . "\n";

$arr_arsort = $age;
arsort($arr_arsort);
echo "Hasil arsort: " . print_assoc($arr_arsort) . "\n";

$arr_krsort = $age;
krsort($arr_krsort);
echo "Hasil krsort: " . print_assoc($arr_krsort) . "\n";

echo "</pre>";
?>
