<html>
<head><title>แสดงการเข้าถึง Numeric Array</title></head>
<body>
<?php
// กำหนดอาเรย์โดยใช้ดัชนีที่ต่อเนื่อง
$letters[0] = 'A';
$letters[1] = 'B';
$letters[2] = 'C';
$letters[3] = 'D';
$letters[4] = 'E';
$letters[5] = 'F';

echo "<b>Used foreach access to array</b><br>";
// ใช้ foreach เพื่อแสดงผลข้อมูลจากอาเรย์
foreach( $letters as $char ) {
    echo $char . " , ";
}
echo "<br><br>";

$max = count( $letters );
echo "<b>Used for and count access to array</b><br>";
// ใช้ for และ count เพื่อแสดงผลข้อมูลจากอาเรย์
for( $n = 0 ; $n < $max ; $n++ ) {
    echo $letters[ $n ] . " , ";
}
echo "<br>";
?>
</body>
</html>
