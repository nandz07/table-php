<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"products";
    if(isset($_SESSION['uname'])){
        echo"products_if";
        ?>

            <a href="<?php echo base_url('student/logout1') ?>" value="logout">logout</a>
        <?php
    }
    ?>
</body>
</html>