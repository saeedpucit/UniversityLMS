<?php 
if (isset( $_POST['submit'] )) {
    include('../config/DbFunction.php');
    $obj = new DbFunction();
    $obj->addStudent( $_POST['sname'], $_POST['srollno'] );
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Add Student</title>
    </head>

    <body>
        <h1>Add Student</h1>

        <form method="post">
            <input type="text" placeholder="Enter your name" name="sname"><br><br>
            <input type="text" placeholder="Enter your Roll No" name="srollno"><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <a href="all-student.php"><button>ALL STUDENTS</button></a>
    </body>
</html>