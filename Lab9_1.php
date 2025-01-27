<html>
<head>
    <title>แสดงการสร้างและใช้งานอารเรย์ Numberic Array</title>
</head>
<body>
<?php
$weekdays = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
echo '<center><font size="4" color="blue">กุมภาพันธ์ ๒๕๕๔</font>';
echo '<font size="5" color="red"> ๒ </font>';
echo '<font size="4" color="blue">February 2554</font></center>';
echo '<table border="1" align="center">';
echo '<tr>';
for ($n = 0; $n < 7; $n++) {
    echo '<td align="center" width="90">' . $weekdays[$n] . '</td>';
}
echo '</tr>';
print_month();

function print_month() {
    $day = 1;
    $total_days = 28; // จำนวนวันในเดือนกุมภาพันธ์ 2554
    $starting_day = 2; // เดือนกุมภาพันธ์ 2554 เริ่มต้นที่วันอังคาร (0 = อาทิตย์)

    for ($row = 1; $row <= 6; $row++) { // วน 6 แถว (เผื่อกรณีเดือนที่มีวันมาก)
        echo '<tr>';
        for ($col = 0; $col < 7; $col++) { // 7 คอลัมน์สำหรับวันในสัปดาห์
            if (($row == 1 && $col < $starting_day) || $day > $total_days) {
                // ช่องว่างก่อนเริ่มวันแรก และหลังสิ้นสุดจำนวนวัน
                echo '<td align="center"> </td>';
            } else {
                echo '<td align="center">' . $day . '</td>';
                $day++;
            }
        }
        echo '</tr>';  }
    }
    ?>
    </table>
    </body>
    </html>