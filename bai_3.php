<?php
    if(isset($_POST['submit-so'])) {
        $so_chu = $_POST['so'];
        $chu = '';

        if($so_chu == 0) {
            $chu = "Không";
        }
        elseif($so_chu == 1) {
            $chu = "Một";
        }
        elseif($so_chu == 2) {
            $chu = "Hai";
        }
        elseif($so_chu == 3) {
            $chu = "Ba";
        }
        elseif($so_chu == 4) {
            $chu = "Bốn";
        }
        elseif($so_chu == 5) {
            $chu = "Năm";
        }
        elseif($so_chu == 6) {
            $chu = "Năm";
        }
        elseif($so_chu == 7) {
            $chu = "Bảy";
        }
        elseif($so_chu == 8) {
            $chu = "Tám";
        }
        elseif($so_chu == 9) {
            $chu = "Chín";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" class="info-user" method="post">
        <table>
            <tr>
                <th colspan="2">
                    Đọc số
                </th>
            </tr>

            <tr>
                <td>Nhập số từ 0-9</td>
                <td>Số chuyển qua Chữ</td>
            </tr>

            <tr>
                <td>
                    <input type="text" placeholder="Nhập vào số" name="so">
                </td>
                <td>
                    <p><?php echo isset($chu) ? $chu : ''; ?></p>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="submit"><button type="submit" name="submit-so">Chuyển đổi</button></td>
            </tr>
        </table>
    </form>
    
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        .submit {
            text-align: center;
        }
    </style>
</body>
</html>