<?php
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);
$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);
$valuesOnly = array_values($values);
$keysAndValues = array_combine($keys, $valuesOnly);
echo '<pre>';
print_r($keysAndValues);
?>