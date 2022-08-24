<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>hi</h3>
    <form action="">
        <?php

        if (isset($_SESSION['uname'])) {

        ?>
            <h1>ara</h1>
            <a class="nav-link" href="<?php echo base_url('welcome/userLogout'); ?>">Logout<span class="sr-only">(current)</span></a>
        <?php
        }
        ?>

    </form>
</body>

</html>