<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <input type="text" name="username">
         <input type="text" name="password">     
         <input type="submit">
        </form>
        <?php
        session_start();
include'includes/conn.php';
$username=$_GET['username'];
$password=md5($_GET['password']);
$q="select * from admin where username='admin' and password='$password'";
$r= mysqli_query($dbc, $q);
if(mysqli_num_rows($r)==1){
   $_SESSION['username']=$username;
header("Location:message.php");
}
        ?>
    </body>
</html>
