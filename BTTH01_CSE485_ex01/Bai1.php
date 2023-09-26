<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

function tinhTong($arr) {
    $tong = array_sum($arr);
    return $tong;
}

function tinhTich($arr) {
    $tich = array_product($arr);
    return $tich;
}

function tinhHieu($arr) {
    $hieu = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $hieu -= $arr[$i];
    }
    return $hieu;
}

function tinhThuong($arr) {
    $thuong = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $thuong /= $arr[$i];
    }
    return $thuong;
}

$tong = tinhTong($arrs);
$tich = tinhTich($arrs);
$hieu = tinhHieu($arrs);
$thuong = tinhThuong($arrs);

echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $tong . "<br>";
echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $tich . "<br>";
echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $hieu . "<br>";
echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $thuong . "<br>";
?>