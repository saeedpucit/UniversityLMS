<?php 
    include('../config/DbFunction.php');
    $obj = new DbFunction();
    $result = $obj->allStudent();

    if( isset( $_GET['del'] ) ) {
        $obj->removeStudent( $_GET['del'] );
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>All Student</title>
        <style>
            table, th, td {
                border: 1px solid black;
            }
            table { width: 80%;}
        </style>
    </head>
    <body>
        <h1>All Student</h1>
        <table>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Roll No</th>
            </tr>
            <?php while ($row = $result->fetch_object() ) { ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->sname; ?></td>
                <td><?php echo $row->srollno; ?></td>
                <td><a href="update-student.php?id=<?php echo $row->id; ?>"><button>Edit</button></td>
                <td><a href="all-student.php?del=<?php echo $row->id; ?>"><button>Delete</button></td>
            </tr>
            <?php } ?>
        </table>

        <br><br><a href="add-student.php"><button>ADD NEW STUDENT</button></a>

    </body>
</html>