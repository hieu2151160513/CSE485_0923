<?php

$arrs = ['PHP', 'HTML', 'CSS', 'JS'];

echo "<style>";
echo "table {";
echo "  border-collapse: collapse;";
echo "  width: 100%px; text-align:center";
echo "}";
echo "th, td {";
echo "  border: 1px solid black;";
echo "  padding: 8px;";
echo "}";
echo "</style>";

echo "<table>";
echo "<tr>";
echo "<th>Tên khóa học</th>";
echo "</tr>";
foreach ($arrs as $course) {
    echo "<tr>";
    echo "<td>$course</td>";
    echo "</tr>";
}
echo "</table>";
?>
