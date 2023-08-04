<?php 
    include 'C:\xampp\htdocs\login\connect.php';
    if(isset($_POST['submit'])){
        $email=$_POST['uemail'];
        $password=$_POST['upassword'];
        if(!empty($email) && !empty($password)){
        $sql = " SELECT * FROM users where email='$email' AND password ='$password'";
        $result= mysqli_query($con,$sql);
        $num= mysqli_num_rows($result);
        echo"khteera";
        if($num>0){
            session_start();
            $_SESSION['login']=true;
            $_SESSION['user']=$email;
             header('location:\login\project\src\project.php');
        }
        else {
            echo "life damage";
        }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login-eduwe</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="/img/side_icon.ico">
</head>

<body>
    <div class="wholebox">
        <div class="container">

                <img id="ilogo" src="/img/eduwe1.jpg.png">
            
            <div class="login">
                <h1 id="slide">Login to your account!!</h1>
                <div class="input">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <img id="mail" src="/img/mail.png">
                        <input class="cemail" type="email" name="uemail" placeholder="Email Address"><br><br>

                        <img id="lock" src="/img/padlock.png">
                        <input class="cemail" type="password" name="upassword" placeholder="Password"><br><br>
                        <input id="clogin" type="submit" name="submit" value="LOG IN">
                        <div class="box">
                            
                                <a href="#" id="fpassw">
                                    FORGOT PASSWORD?
                                </a>    
                            <p >NEW USER?<a href="/login/registration_page_/src/signup.php" id="fpassw">Register</a></p>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
    </div>
</body>

</html>