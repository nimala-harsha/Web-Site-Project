<?php
require_once 'headerPrt.php';

require_once 'connection.php';
$taken=$error="";
if (isset($_POST['username'])){
if($_POST['username']==''||$_POST['passwrd']==''){
    
    $error="missing fields are there";
    echo "<script>alert('$error');</script>";
}

$user=$_POST['username'];
$result= querySql1("select * from user where username='$user'");
if($result->rowCount()==0){
    $taken="user is not registerd... sign in";
    echo "<script>alert('$taken');</script>";
}else{
    $taken="";
    $pwd=$_POST['passwrd'];
    $row=$result->fetch();
    $dbpwd= htmlspecialchars($row['password']);
    if($pwd==$dbpwd){
       
       header("Location:home.php");
              
    
        
        
    }else{
        $error="wrong password";
        echo "<script>alert('$error');</script>";
    }
}




}



echo <<<_END
<head>
<style>
button{
    background-color:#04AA6D;
    color:white;
    padding:14px 20px;
    margin:8px 0px
    cursor:pointer;
    width:11%; }
button:hover{
      opacity:0.7;}
input[type=text], input[type=password] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
</style>
<body>
<br><br><br>
<h1 style="color:blue;">&emsp;&emsp;&emsp;Login From.</h1>
<form action="login.php" method="post">

<h2 style="color:white";>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
User name :
<input type="text" name='username' maxlength='15'><br/><br> </h2>
<h2 style="color:white";>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
Password  :&ensp;
<input type="password" name='passwrd' maxlength='10'><br/><br></h2>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<button type ='submit' value='Login'>Login</button>&emsp; <button type='reset' value='clear'> Clear</button>


</form>
    
    </body>
        </html>
        
        
_END


?>


