<html>
    <form method="post">
        <br>UserName :<input type="text" name="un">
        <br>Password :<input type="password" name="pw">
        <br><input type="submit">
    </form>
<?php
$un=$_POST["un"];
$pw=$_POST["pw"];
$cop="22ifteb";
if($pw==$cop)
{
    echo"hello $un welcome";
}
else{
    echo"Wrong password";
}
?>
</html>