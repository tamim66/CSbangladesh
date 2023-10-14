<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "csbd";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $gname = $_POST['gname'];
    $email = $_POST['email'];
    $pass= $_POST['pass'];

    $sql = "INSERT INTO reg( name, gname, email, pass) values('$name','$gname','$email','$pass')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

?>