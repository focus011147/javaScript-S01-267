<!DOCTYPE html>
<html>
<head>
    <title>score</title>
    <style>
        table {
            border-collapse: collapse;
            width: 600px;
            margin: auto;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">ผลลัพธ์จากการคำนวณเกรด</h1>
    <table>
        <tr>
            <th>นักศึกษา</th>
            <th>ทดสอบย่อย</th>
            <th>สอบกลางภาค</th>
            <th>สอบปลายภาค</th>
            <th>รวม 100 คะแนน</th>
            <th>เกรด</th>
        </tr>
        <?php
        // อ่านข้อมูลจากไฟล์ score.txt
        $filename = "score.txt";
        if (file_exists($filename)) {
            $file = fopen($filename, "r");
            while (($line = fgets($file)) !== false) {
                // แยกข้อมูลด้วยเครื่องหมายคอมมา
                $data = explode(",", trim($line));
                $student = $data[0];
                $hw = (int)$data[1];
                $midterm = (int)$data[2];
                $final = (int)$data[3];

                // คำนวณคะแนนรวม
                $total = $hw + $midterm + $final;

                // คำนวณเกรด
                if ($total >= 80) {
                    $grade = 'A';
                } elseif ($total >= 70) {
                    $grade = 'B';
                } elseif ($total >= 60) {
                    $grade = 'C';
                } elseif ($total >= 50) {
                    $grade = 'D';
                } else {
                    $grade = 'F';
                }

                // แสดงข้อมูลในตาราง
                echo "<tr>
                        <td>$student</td>
                        <td>$hw</td>
                        <td>$midterm</td>
                        <td>$final</td>
                        <td>$total</td>
                        <td>$grade</td>
                    </tr>";
            }
            fclose($file);
        } else {
            echo "<tr><td colspan='6' style='color:red;'>ไม่พบไฟล์ $filename</td></tr>";
        }
        ?>
    </table>
</body>
</html>