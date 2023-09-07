<?php
    if(isset($_POST['submit-info'])) {
        $userName = $_POST['username'];
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
                <th colspan="2">In lời chào</th>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" placeholder="Nhập vào họ và tên?" name="username" id="username"></td>
            </tr>
            <tr>
                <td colspan="2">Xin chào bạn: <?php echo isset($userName) ? $userName : ''; ?></td>
            </tr>
            <tr>
                <td colspan="2" class="submit"><button type="submit" name="submit-info">Insert</button></td>
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