<?php

    include_once("connections/connection.php");

    $con = connection();
    
    if(isset($_POST['submit'])){
        
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $gender = $_POST['gender'];

     $sql = "INSERT INTO `student_list`(`firstname`, `lastname`, `gender`) VALUES ('$fname','$lname','$gender')";
        $con ->query($sql) or die ($con->error);
    }

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
        
        <form action="" method="post">

            <label >First name</label>
            <input type="text" name="firstname" id="search" required>

            <label >Last name</label>
            <input type="text" name="lastname" id="search" required>
            <input type="submit" name="submit" value="Submit form">

            <select name="gender" id="gender">
                <option value="male">MALE</option>
                <option value="female">FEMALE</option>
            </select>

        </form>

    </body>
    </html>