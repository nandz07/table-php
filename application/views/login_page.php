<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url('student/loginCheck'); ?>" method="post">
        <table align="center">
            <th>
                <td>name</td>
                <td><input type="text" name="uname"></td>
            </th>
            <th><td>
                <input type="submit" name="login" value="login">
            </td></th>
        </table>
    </form>
</body>
</html>