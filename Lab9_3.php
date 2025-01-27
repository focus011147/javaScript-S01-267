<html>
<head><title>แสดงการสร้างและใช้งานอารเรย์ Associative Array</title></head>
<body>
<?php
$months = array(
    "jan" => "มกราคม", 
    "feb" => "กุมภาพันธ์", 
    "mar" => "มีนาคม",
    "apr" => "เมษายน", 
    "may" => "พฤษภาคม", 
    "jun" => "มิถุนายน",
    "jul" => "กรกฎาคม", 
    "aug" => "สิงหาคม", 
    "sep" => "กันยายน",
    "oct" => "ตุลาคม", 
    "nov" => "พฤศจิกายน", 
    "dec" => "ธันวาคม"
);

// ใช้การดึงข้อมูลเดือนจากวันที่ปัจจุบัน
$m = $months[ strtolower( date( "M" ) ) ];  // เดือนในภาษาไทย
$y = date( "Y") + 543;  // ปีในระบบพุทธศักราช

echo "เดือนนี้คือ $m พ.ศ. $y<br>";

echo "<table width='500'><tr><td>";
print_array(); // แสดงผลอาเรย์เดิม
echo "</td>";

$months["jan"] = "January"; // แก้ไขค่าของเดือนมกราคม
$months[] = "** ทดสอบ **"; // เพิ่มข้อมูลใหม่
echo "<td>";
print_array(); // แสดงผลอาเรย์หลังการปรับเปลี่ยน
echo "</td></tr></table>";

function print_array() {
    global $months; // เปลี่ยนจาก $weekdays เป็น $months
    echo "<pre>";
    print_r( $months );
    echo "</pre>";
}
?>
</body>
</html>

