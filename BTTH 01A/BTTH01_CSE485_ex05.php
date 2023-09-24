<?php
$a = ['a' => ['b' => 0,'c' => 1],'b' => ['e' => 2,'o' => ['b' => 3]]];
$value1 = $a['b']['o']['b'];
echo '<pre>';
echo $value1."<br>";
$value2 = $a['a']['c'];
echo $value2."<br>";
$info = $a['a'];
print_r($info);
?>