<?php
require_once "headerPrt.php";
require_once 'connection.php';
$taken=$error="";
if (isset($_POST['username'])){
if($_POST['username']==''||$_POST['passwrd']==''||$_POST['repasswrd']==''){
    
    $error="missing fields are there";
    echo "<script>alert('$error');</script>";
}
if($_POST['passwrd']!=$_POST['repasswrd']){
     $error="password missmatch";
    echo "<script>alert('$error');</script>";
}
$user=$_POST['username'];
$result= querySql1("select * from user where username='$user'");
if($result->rowCount()){
    $taken="user name is taken";
    echo "<script>alert('$taken');</script>";
}else{
    $taken="";
}

if($taken==""&&($_POST['username']!=''||$_POST['passwrd']!=''||$_POST['repasswrd']!='')&&($_POST['passwrd']==$_POST['repasswrd']))
{
    $usrnme=$_POST['username'];
    $pwd=$_POST['passwrd'];
    createRec("insert into user values('$usrnme','$pwd')");
    header("Location:login.php");
    echo "<script>alert('successfilly added');</script>";
    
}


}
   
echo <<<_END
<head>
<style>
input[type=text], input[type=password] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}

button:hover {
  opacity: 0.7;
}
tab1 { padding-left:9em;}
tab2 { padding-left:17em;}
</style>
<body>
<br><br><br>
<h1 style="color:blue;">&emsp;&emsp;&emsp;Registration From.</h1>
<form action="registration.php" method="post">

<h2 style="color:white";><tab1>
User name :</tab1>&emsp;&emsp;&emsp;
<input type="text" name='username' maxlength='15'><br/><br>
<tab1>
Password :</tab1>&emsp;&emsp;&emsp;&ensp;
<input type="password" name='passwrd' maxlength='10'><br/><br>
<tab1>Retype password:</tab>&ensp;
<input type="password" name='repasswrd' maxlength='10'><br/><br>

<tab2><button type ='submit' value='register'>Register</button></tab2>&emsp; <button type='reset' value='clear'> Reset</button>

</form>
    </body>
        </html>
        
        
_END



?>

