<html>
<head><title>แสดงการใช้งาน foreach เข้าถึง Associative Array</title></head>
<body>
<?php
$products = array(
    "T0001" => "บล็อดหยอดหมีพูห์",
    "T0004" => "ตุ๊กตากบ สอน ABC",
    "T0005" => "ดต๊ะกิจกรรม", // แก้ไขคำที่พิมพ์ผิด
    "P0001" => "กระดานลื่นสุขสันต์",
    "B0001" => "หนังสือมีเสียง: Pooh 's Musical"
);

echo "<table align='center'><tr><td>"; // เริ่มตารางแรก
echo "<table align='center' width='400' border='1'>";
echo "<tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th></tr>";

foreach( $products as $key => $value ) {
    echo "<tr><td align='center'> $key </td><td> $value </td></tr>";
}

echo "</table>"; // ปิดตารางแรก
echo "</td><td>"; // เปิดตารางที่สอง

echo "<table align='center' width='400' border='1'>";
echo "<tr><th>ลำดับที่</th><th>ชื่อสินค้า</th></tr>";
$n = 1;

foreach( $products as $value ) {
    echo "<tr><td align='center'> $n </td><td> $value </td></tr>";
    $n++;
}

echo "</table>"; // ปิดตารางที่สอง
echo "</td></tr></table>"; // ปิดตารางหลัก
?>
</body>
</html>
