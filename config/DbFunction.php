<?php 
require('Database.php');

class DbFunction {
    
    function addStudent($sname, $srollno) {
        $db = new Database();
        $conn = $db->getInstance();

        $sql = "INSERT INTO student(sname, srollno) VALUES('" . $sname . "', '" . $srollno . "')";

        if( $conn->query( $sql ) === true) {
            echo "<script>alert('Student Created Successfully!')</script>";
        }
    }

    function allStudent() {
        $db = new Database();
        $conn = $db->getInstance();
        $sql = "SELECT * FROM student";
        return $conn->query($sql);
    }

    function getStudent($id) {
        $db = new Database();
        $conn = $db->getInstance();

        $sql = "SELECT * FROM student WHERE id='". $id ."'";

        return $conn->query($sql);
    }

    function updateStudent( $id, $sname, $srollno ) {
        $db = new Database();
        $conn = $db->getInstance();

        $sql = "UPDATE student SET sname='" . $sname. "', srollno='" . $srollno . "' WHERE id='". $id ."'" ;

        if ( $conn->query($sql) === true ) {
            echo "<script>alert('Student Updated Successfully!')</script>";
        } else {
            die( "Error: Student not added. " . $conn->error );
        }
    }

    function removeStudent($id) {
        $db = new Database();
        $conn = $db->getInstance();

        $sql = "DELETE FROM student WHERE id='" . $id. "'";

        if ($conn->query($sql) === true) {
            echo "<script>alert('Student Removed.')</script>";
            echo "<script>window.location.href='../pages/all-student.php'</script>";
        }
    }
}

?>