<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>firstnameNickname.php</title>
    <style>
        .output-line {
            margin-bottom: 10px; /* เพิ่มระยะห่างระหว่างแต่ละบรรทัด */
        }
    </style>
</head>
<body>
    <center>
        <?php
        if (isset($_POST['submit'])) {
            $filename = $_POST['filename'];
            $text = file($filename);

            foreach ($text as $tr_data) {
                $col = 1;
                $array_word = explode(",", $tr_data);

                echo '<div class="output-line">'; // เริ่มต้นการเพิ่มระยะห่างสำหรับแต่ละบรรทัด
                
                foreach ($array_word as $value) {
                    $value = trim($value);

                    if ($col == 1) {
                        echo $value . " ";
                    } else {
                        if ($value == "Robert") echo "Dick";
                        else if ($value == "Dick") echo "Robert";
                        else if ($value == "William") echo "Bill";
                        else if ($value == "Bill") echo "William";
                        else if ($value == "James") echo "Jim";
                        else if ($value == "Jim") echo "James";
                        else if ($value == "John") echo "Jack";
                        else if ($value == "Jack") echo "John";
                        else if ($value == "Margaret") echo "Peggy";
                        else if ($value == "Peggy") echo "Margaret";
                        else if ($value == "Edward") echo "Ed";
                        else if ($value == "Ed") echo "Edward";
                        else if ($value == "Sarah") echo "Sally";
                        else if ($value == "Sally") echo "Sarah";
                        else if ($value == "Andrew") echo "Andy";
                        else if ($value == "Andy") echo "Andrew";
                        else if ($value == "Anthony") echo "Tony";
                        else if ($value == "Tony") echo "Anthony";
                        else if ($value == "Deborah") echo "Debbie";
                        else if ($value == "Debbie") echo "Deborah";
                    }
                    $col++;
                }

                echo '</div>'; // ปิดการเพิ่มระยะห่างสำหรับแต่ละบรรทัด
            }
        } else {
        ?>

            <h1>FirstnameNickname.php</h1>
            <form method="post" action="FirstnameNickname.php">
                <table align="center" width="400">
                    <tr>
                        <td>File name</td>
                        <td><input type="text" name="filename" size="40" value="" /></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="SUBMIT" />
                            <input type="reset" name="reset" value="RESET" />
                        </td>
                    </tr>
                </table>
            </form>

        <?php
        }
        ?>
    </center>
</body>
</html>