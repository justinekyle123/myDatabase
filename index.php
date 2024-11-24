<?php

    include_once("connections/connection.php");

    $con = connection();

    $sql = "SELECT * FROM student_list";
    $students = $con->query($sql) or die ($con->error);
    $row = $students->fetch_assoc();

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>STUDENT MANAGEMENT</title>
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <h1>Student Management</h1><br><br>
        <a href="add.php" target="blank">ADD NEW</a>
        <table>
            <thead>  
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
            </thead>
            <tbody>
              <?php do{ ?>
                <tr>
                    <td><?php echo $row['firstname'] ;?></td>
                    <td><?php echo $row['lastname'] ;?></td>
                </tr>
                <?php }while( $row = $students->fetch_assoc()) ?>
            </tbody>
        </table>
    </body>
    </html>