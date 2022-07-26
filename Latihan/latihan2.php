<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Masukan</td>
                <td>:</td>
                <td><input type="text" name="masukan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="save">Save</button></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['save'])){
        $masukan = $_POST['masukan'];
            echo strrev($masukan);
    }


?>