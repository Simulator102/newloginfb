<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    //database conection
    $con = new mysqli("localhost","root","","ymaillog");
    $a=5;


    if($con->connect_error) {
        die("failed to connect : ".$con->connect_error);
    } else {
        $stmt = $con->prepare("select * from insertinfo where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
               header("location:create.html");
            } else{
                header("location:create.html");
            }
        } else {
            header("location:create.html");
        
        }
    }
?>