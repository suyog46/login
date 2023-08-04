<?php 
include "connect.php";
session_start();
$sql="SELECT * FROM USERS WHERE email=<?php echo $_SESSION['user']; ?>"
$result=mysqli_query ($con,$sql);
$row=mysqli_fetch_assoc($result);
$_session['name']=$row['username'];
?>
