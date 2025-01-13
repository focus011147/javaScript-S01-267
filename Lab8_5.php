<?php

function page_header($title, $bgcolor = "ffffff") {
    echo '<html><head><title>' . $title . '</title></head>';
    echo '<body bgcolor="#' . $bgcolor . '">';
}

function page_footer($message) {
    echo '<hr />' . $message;
    echo '</body></html>';
}

function summation($start, $stop) {
    $total = 0;
    // ตรวจสอบว่า $start < $stop หากไม่ใช่ให้สลับค่า
    if ($start > $stop) {
        $temp = $start;
        $start = $stop;
        $stop = $temp;
    }
    // คำนวณผลรวม
    for($n = $start; $n <= $stop; $n++) {
        $total += $n;
    }
    return $total;
}

function show_form() {
    echo '<form method="get" action="lab8-5.php">';
    echo '<table border="1" align="center" width="400">';
    echo '<tr><td colspan="2" align="center"><big>การหาผลรวม</big></td></tr>';
    echo '<tr><td> ค่าเริ่มต้น : </td><td>';
    echo '<input type="text" name="num1" size="10" value=""/></td></tr>';
    echo '<tr><td> ค่าสุดท้าย : </td><td>';
    echo '<input type="text" name="num2" size="10" value=""/></td></tr>';
    echo '<tr><td colspan="2" align="center">';
    echo '<input type="submit" value=" OK " />';
    echo '<input type="reset" value=" Clear " />';
    echo '</td></tr></table></form>';
}

page_header("การใช้ฟังก์ชั่นที่มีการคืนค่าที่ชื่อฟังก์ชั่น", "EEDDFF");

if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $n1 = intval($_GET['num1']);
    $n2 = intval($_GET['num2']);
    
    // ตรวจสอบว่า $n1 และ $n2 เป็นค่าบวก
    if ($n1 < 0 || $n2 < 0) {
        echo "<center><h3>กรุณากรอกตัวเลขที่เป็นค่าบวกเท่านั้น</h3></center>";
    } else {
        $result = summation($n1, $n2);
        show_form();
        echo '<hr>';
        echo "<center><h3>ผลรวมของ " . $n1 . " ถึง " . $n2 . " = " . $result . "</h3></center>";
    }
} else {
    show_form();
}

page_footer("Thank You.");

?>
