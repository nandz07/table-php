<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/amanda.css">
    <script src="jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    


    
</head>

<body>
    <form method="post" action="">
        <table id="myTable"class="table">
            <thead>
                <tr style="background-color:yellow">
                    <th>
                        name
                    </th>
                    <th>
                        phone number
                    </th>
                    <th>
                        gender
                    </th>
                    <th>
                        operation
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $std) {
                ?>
                    <tr>
                        <td>
                            <?php
                            echo $std->student_name;
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $std->phone_number;
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $std->genter;
                            ?>
                        </td>
                        <td>

                            <button class="example"><a href="<?php echo base_url() . 'student/edit/' . $std->id ?>">edit</button>
                            <button id="btndel"><a href="<?php echo base_url() . 'student/delete/' . $std->id ?>">delete</button>
                        </td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td>
                    <input type="submit" class="insert" name="insert" value="insert" onClick="window.location.href='<?php echo base_url();?>student/insert';return false;">
                    
                    </td>
                </tr>

            </tbody>
        </table>
        

        

    </form>
    
</body>
<script>

$(document).ready( function () {
    $('#myTable').DataTable();
} );


            </script>

</html>

       