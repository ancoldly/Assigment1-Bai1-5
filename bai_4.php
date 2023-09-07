<?php
    if(isset($_POST['submit'])) {
        $sobatdau = $_POST['so-a'];
        $soketthuc = $_POST['so-b'];
        $tong = 0;
        $tich = 1;
        $tongle = 0;
        $tongchan = 0;
        for($i=$sobatdau; $i<=$soketthuc; $i++) {
            $tong = $tong+$i;
        }

        for($i=$sobatdau; $i<=$soketthuc; $i++) {
            $tich = $tich*$i;
        }

        for($i=$sobatdau; $i<=$soketthuc; $i++) {
            if($i%2==0) {
                $tongchan = $tongchan+$i;
            }
        }

        for($i=$sobatdau; $i<=$soketthuc; $i++) {
            if($i%2!=0) {
                $tongle = $tongle+$i;
            }
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
                <td></td>
                <td>Số bắt đầu</td>
                <td><input type="text" placeholder="Nhập số bắt đầu" name="so-a"></td>
                <td>Số kết thúc</td>
                <td><input type="text" placeholder="Nhập số kết thúc" name="so-b"></td>
            </tr>

            <tr>
                <td colspan="5">Kết quả</td>
            </tr>

            <tr>
                <td>Tổng các số</td>
                <td colspan="4"><?php echo isset($tong) ? $tong : ''; ?></td>
            </tr>
            <tr>
                <td>Tích các số</td>
                <td colspan="4"><?php echo isset($tich) ? $tich : ''; ?></td>
            </tr>
            <tr>
                <td>Tổng các số chẵn</td>
                <td colspan="4"><?php echo isset($tongchan) ? $tongchan : ''; ?></td>
            </tr>
            <tr>
                <td>Tổng các số lẻ</td>
                <td colspan="4"><?php echo isset($tongle) ? $tongle : ''; ?></td>
            </tr>
            <tr class="submit">
                <td colspan="5"><button type="submit" name="submit">Tính toán</button></td>
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