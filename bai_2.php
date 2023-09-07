<?php
    if(isset($_POST['submit-nghiem'])) {
        $so_a= $_POST['so-a'];
        $so_b= $_POST['so-b'];
        $nghiem = '';

        if($so_a==0) {
            if($so_b==0) {
                $nghiem = "Phương trình vô số nghiệm";
            } else {
                $nghiem = "Phương trình vô nghiệm";
            }
        } else {
            $nghiem = -$so_b / $so_a;
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
    <form action="" class="" method="post">
        <table>
            <tr>
                <th colspan="5">Giải phương trình bậc 1</th>
            </tr>

            <tr>
                <td>Phương trình</td>
                <td><input type="text" placeholder="Nhập vào số a" name="so-a"></td>
                <td>X +</td>
                <td><input type="text" placeholder="Nhập vào số b" name="so-b"></td>
                <td>= 0</td>
            </tr>
            <tr>
                <td colspan="5">Kết quả: <?php echo isset($nghiem) ? $nghiem : ''; ?></td>
            </tr>
            <tr>
                <td colspan="5" class="submit"><button type="submit" name="submit-nghiem">Tính nghiệm</button></td>
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