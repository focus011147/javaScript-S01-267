<!DOCTYPE html>
<html>
<head>
    <title>แสดงการสร้างและเข้าถึง Numeric Array แบบหลายมิติ</title>
</head>
<body>
<?php
$maxRow = 10; // จำนวนแถว
$maxCol = 3;  // จำนวนคอลัมน์

// สร้างอาร์เรย์สุ่มคะแนน
for ($r = 0; $r < $maxRow; $r++) {
    for ($c = 0; $c < $maxCol; $c++) {
        $score[$r][$c] = rand(0, 100); // สุ่มคะแนนระหว่าง 0 ถึง 100
    }
}

// เริ่มต้นการสร้างตาราง HTML
echo "<table border='1' align='center' width='100%'>";
echo "<tr>
        <td width='80' align='center'><b>Homework</b></td>
        <td width='80' align='center'><b>Midterm</b></td>
        <td width='80' align='center'><b>Final</b></td>
      </tr>";

// แสดงผลข้อมูลในอาร์เรย์
for ($r = 0; $r < $maxRow; $r++) {
    echo "<tr>";
    for ($c = 0; $c < $maxCol; $c++) {
        echo "<td align='center'>" . $score[$r][$c] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
