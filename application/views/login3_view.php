<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo base_url('student/LoginCheck3') ?>">
        <section>
            <div class="container">
                <div class="tab">
                <table >
                    <tr>
                        <td>
                            <h3>
                                name
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <input type="text">
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>
                                password
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <input type="password">
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button>login</button>
                        </td>
                    </tr>
                </table>
                </div>
            </div>
        </section>
    </form>
</body>

</html>