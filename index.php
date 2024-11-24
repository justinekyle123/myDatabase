<?php

    include_once("connections/connection.php");

    $con = connection();

    $sql = "SELECT * FROM student_list";
    $students = $con->query($sql) or die ($con->error);
    $row = $students->fetch_assoc();

    // do{
    //     echo $row['firstname']." ".$row['lastname']."<br>";
    // }while( $row = $students->fetch_assoc());
    ?>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>STUDENT MANAGEMENT</title>

        <style>
            h1{
                text-align:center;
            }

            table{
                border:1px solid black;
                width: 100%;
                border-collapse:collapse;
            }

            table th,td{
                text-align:left;
                padding:10px 20px;
                border-bottom:1px solid #333;
            }
            tr:nth-child(even){
                background:#999;
            }

        </style>

    </head>
    <body>
        <h1>Student Management</h1><br><br>
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