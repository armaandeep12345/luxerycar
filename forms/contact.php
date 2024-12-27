<?php 
    if (isset($_POST['insert'])) {
        $cn = mysqli_connect("localhost", "root", "", "caradmin");
        if (!$cn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepare the query with all POST data
        $q = "INSERT INTO contact (name, email, subject, message) VALUES ('" . 
              mysqli_real_escape_string($cn, $_POST['name']) . "', '" . 
              mysqli_real_escape_string($cn, $_POST['email']) . "', '" . 
              mysqli_real_escape_string($cn, $_POST['subject']) . "', '" . 
              mysqli_real_escape_string($cn, $_POST['message']) . "')";

        $a = mysqli_query($cn, $q);
        if ($a) {
            echo "<script>alert('Record inserted successfully');</script>";
        } else {
            echo "<script>alert('Failed to insert record');</script>";
        }
    }
?>
