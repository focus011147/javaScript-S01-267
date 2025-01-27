<html>
<head><title>แสดงการสร้างและใช้งานอารเรย์ Numberic Array</title></head>
<body>
<?php
$MaxStudent = 20;
$score = array(); // สร้างอาเรย์เพื่อเก็บคะแนน
// กำหนดคะแนนสุ่มให้กับนักเรียนแต่ละคน
for($n = 0 ; $n < $MaxStudent; $n++) {
    $score[$n] = rand(0, 35); // สุ่มคะแนนระหว่าง 0 ถึง 100
}

// แสดงผลลัพธ์
echo '<center><font size="4" color="blue">Grade Report</font></center>';
echo '<table border="1" align="center">';
echo '<tr><td align="center" width="90">Student No.</td>';
echo '<td align="center" width="90">Score</td></tr>';

// แสดงตารางคะแนนของนักเรียน
for($n = 0 ; $n < $MaxStudent; $n++) {
    echo '<tr><td align="center" width="90">' . ($n + 1) . '</td>';
    echo '<td align="center" width="90">' . $score[$n] . '</td></tr>';
}

// แสดงคะแนนเฉลี่ย
echo '<tr><td colspan="2" align="center">Average Score: ';
echo average($score, $MaxStudent);
echo '</td></tr></table>';

// ฟังก์ชันคำนวณค่าเฉลี่ย
function average($data, $max) {
    $total = 0;
    for($n = 0 ; $n < $max; $n++) {
        $total += $data[$n];
    }
    return ($total / $max);
}
?>
</body>
</html>
