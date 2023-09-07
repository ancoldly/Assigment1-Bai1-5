<?php
if (isset($_POST['submit-nghiem'])) {
    $a = $_POST['so-a'];
    $b = $_POST['so-b'];
    $c = $_POST['so-c'];
    $nghiem = '';

    function pt_1($a, $b)
    {
        if ($a == 0) {
            if ($b == 0) {
                return "Phương trình vô số nghiệm";
            } else {
                return "Phương trình vô nghiệm";
            }
        } else {
            return -$b / $a;
        }
    }

    function pt_2($a, $b, $c)
    {
        if ($a == 0) {
            return pt_1($b, $c);
        }

        $delta = pow($b, 2) - 4 * $a * $c;

        if ($delta < 0) {
            return "Phương trình vô nghiệm";
        } elseif ($delta == 0) {
            return "Phương trình có nghiệm kép x1, x2 = " . -($b / (2 * $a));
        } else {
            $temp = sqrt($delta);

            $x1 = (-$b + $temp) / (2 * $a);
            $x2 = (-$b - $temp) / (2 * $a);

            return "Phương trình có 2 nghiệm phân biệt x1 = " . round($x1, 2) . ", x2 = " . round($x2, 2);
        }
    }

    $nghiem = pt_2($a, $b, $c);
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
                <th colspan="7">Giải phương trình bậc 2</th>
            </tr>

            <tr>
                <td>Phương trình</td>
                <td><input type="text" placeholder="Nhập vào số a" name="so-a" value="<?php echo isset($a) ? $a : ''; ?>"></td>
                <td>X^2 +</td>
                <td><input type="text" placeholder="Nhập vào số b" name="so-b" value="<?php echo isset($b) ? $b : ''; ?>"></td>
                <td>X +</td>
                <td><input type="text" placeholder="Nhập vào số c" name="so-c" value="<?php echo isset($c) ? $c : ''; ?>"></td>
                <td>= 0</td>
            </tr>
            <tr>
                <td colspan="7">Kết quả: <?php echo isset($nghiem) ? $nghiem : ''; ?></td>
            </tr>
            <tr>
                <td colspan="7" class="submit"><button type="submit" name="submit-nghiem">Tính nghiệm</button></td>
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