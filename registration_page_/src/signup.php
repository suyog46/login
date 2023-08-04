<?php 
    include'C:\xampp\htdocs\login\connect.php';
    if(isset($_POST['submit'])){
        $USER_NAME=$_POST['uname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['pconfirm'];
        echo"khatra";
             if($password=$cpassword){
                $sql="INSERT INTO users(username,password,email)
                VALUES('$USER_NAME','$password','$email')";
            $result=mysqli_query($con,$sql);
            if($result)
            {
                header('location:\login\login_page_\src\login.php');
            } 
            else
            {
                echo"error in inserting data";
            }
             }

    }     
        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="signupstyle.css">
</head>

<body>
    <div class="container">
        <div class="picture">
            <img id="icon" src="/img/side_icon.jpg">
            <h2>Welcome to eduwe</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam dolorum neque commodi ut rerum corporis
                similique ad quasi expedita accusamus, minima vitae? Non ipsum nulla nostrum. Possimus eligendi animi
                modi!
            </p>
        </div>

        <div class="loginbox">
            <div class="upper">
                <img src="/img/eduwe1.jpg.png">
                <!-- <p>Back to Home</p> -->
            </div>
            <div class="signup">
                <h1>Sign Up</h1>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <label for="uname">Username</label><br>
                    <input type="text" name="uname"><br>
                    <label for="email">Email</label><br>
                    <input type="email" name="email"><br>
                    <label for="password">Password</label><br>
                    <input type="password" name="password"><br>
                    <label for="pconfirm">Password Confirmation</label><br>
                    <input type="password" name="pconfirm" id="pconfirm">
                    <br>
                    <input type="submit" name="submit" value="submit"><br>
                </form>
            </div>
        </div>
    </div>

</body>

</html>