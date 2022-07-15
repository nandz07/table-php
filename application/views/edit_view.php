

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php echo base_url('student/update'); ?>">
    
    
        <table border=2>
        <tr>
            <td>name</td>
            <td><input  type="text" name="name" value=<?php 
            foreach($data as $std)
                    {
                        echo $std->student_name;
                    }
            
            ?>></td>
        </tr>
        <tr>
            <tr>
                <td>
                    phone number
                </td>
                <td>
                    <input type="text" name="phno" value=<?php 
            foreach($data as $std)
                    {
                        echo $std->phone_number;
                    }
            
            ?>>
                </td>
            </tr>
            <tr>
                <td>
                    gender
                </td>
                <td>
                    <input type="text" name="gender" value=<?php 
            foreach($data as $std)
                    {
                        echo $std->genter;
                    }
            
            ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id" value=<?php
                    foreach($data as $std){
                        echo $std->id;
                    }
                    ?>>
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" name="update" value="update" onClick="window.location.href='<?php echo base_url();?>student/update'">
                </td>
            </tr>
            
        </table>

    </form>
</body>

</html>