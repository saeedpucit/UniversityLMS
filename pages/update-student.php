<?php 
    include('../config/DbFunction.php');
    $obj = new DbFunction();

    $id = $_GET['id'];

    $res = $obj->getStudent($id);
    $result = $res->fetch_object();

    if (isset( $_POST['submit'] )) {
        $obj->updateStudent( $id,  $_POST['sname'], $_POST['srollno'] );
    }
    
?>
    
<!DOCTYPE html>
<html>
    <head>
        <title>Update Student</title>
    </head>

    <body>
        <h1>Update Student</h1>

        <form method="post">
        <input type="text" placeholder="Enter your name" name="sname" value="<?php echo $result->sname; ?>"><br><br>
        <input type="text" placeholder="Enter your Roll No" name="srollno" value="<?php echo $result->srollno; ?>" ><br><br>
        <input type="submit" name="submit" value="Submit">
        </form>

        <a href="all-student.php"><button>ALL STUDENTS</button></a>
    </body>
</html>