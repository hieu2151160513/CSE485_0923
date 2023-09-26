<?php
function convertToUppercase($array) {
    return array_map('strtoupper', $array);
}
$arrs = ['1', 'b', 'c', 'd'];
$result = convertToUppercase($arrs);
echo '<pre>';
print_r($result);
echo "<br>";
function convertToUppercase1($array) {
    foreach ($array as $key => $value) {
        if (is_string($value)) {
            $array[$key] = strtoupper($value);
        }
    }
    return $array;
}
$arrs1 = ['a', 0, null, false];
$result1 = convertToUppercase($arrs1);
echo '<pre>';
print_r($result1);
?>