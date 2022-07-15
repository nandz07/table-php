<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo base_url('student/insertProcess'); ?>">
<table border=2>
        <tr>
            <td>name</td>
            <td><input  type="text" name="name" ></td>
        </tr>
        <tr>
            <td>Phone number</td>
            <td><input  type="text" name="phno" ></td>
        </tr>
        <tr>
            <td>gender</td>
            <td><input  type="text" name="gender" ></td>
        </tr>
        <tr>
            <td>
            <input type="submit" name="update" value="insert" onClick="window.location.href='<?php echo base_url();?>student/insertProcess'">
            </td>!
        </tr>
            
        </table>
</form>
</body>
</html>