<?php
function convertToLowercase($array) {
    return array_map('strtolower', $array);
}
$arrs1 = ['1', 'B', 'C', 'E'];
$result1 = convertToLowercase($arrs1);
echo '<pre>';
print_r($result1);
echo "<br>";

function convertToLowercase1($array) {
    foreach ($array as $key => $value) {
        if (is_string($value)) {
            $array[$key] = strtolower($value);
        }
    }
    return $array;
}
$arrs2 = ['a', 0, null, false];
$result = convertToLowercase1($arrs2);
print_r($result);
?>