<?php
require_once 'connection.php';
$duplicate=$error="";
if(isset($_POST['empId'])){
 
    
    
   $eId=$_POST['empId'];
   $eFnme=$_POST['empFn'];
   $eLnme=$_POST['empLn'];
   $eAge=$_POST['empAge'];
   $eContact=$_POST['empCn'];
   $eEmail=$_POST['empMail'];
   $resultEmp= querySql1("select * from employee where employee_id='$eId'");
   
   if($resultEmp->rowCount()){
       $duplicate="duplicated employee";
       echo "<script>alert('$duplicate');</script>";
    }
    else{
        $duplicate="";
    }
    $result1= querySql1("select * from employee where email='$eEmail'");
    if($result1->rowCount()){
       $error="duplicated Email";
       echo "<script>alert('$error');</script>";
    }
    else{
        $error="";
    }
    
    if($error=="" && $duplicate==""){
        createRec("insert into employee values('$eId','$eFnme','$eLnme','$eAge','$eContact','$eEmail')");
    }
    
   
    
}

echo<<<_END
<head><title></title>
   
   <style>
th,td{
   padding:7px;
color:White;
   }
th{
    text-shadow:0 0 16px 4px white;
font-size:44px;
   }
table{
box-shadow: 0 0 16px 4px aqua;
border-style:solid;
   border-width:8px; 
border-color:aqua;
   }


input[type=text], input[type=password], input[type=number], input[type=email] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  opacity: 0.6;
}
input[type='submit'], input[type='reset']{
  background-color: #04AA6D;
  color: white;
  padding: 15px 20px;
  margin: 9px 0;
  border: none;
  cursor: pointer;
  width: 11%;
}
.classA{
    box-shadow: 0 0 16px 4px #002080;
   background-color:#002080;
color:white;
text-decoration:none;
padding:4px;
   
   }
button:hover {
  opacity: 0.7;
}
body {
   background-image:url('background.jpg');
   background-attachment:fixed;
   background-size:100% 100%;}

tab1 { padding-left:8em;}

</style>

   </head>
<body>
<a href="index.php" style="float:right;font-weight:bold;font-size:32px"  class="classA" onclick='alartIt()'>Log out</a>
<form action="home.php" method="post"> <br><br>
	<h2 style="color:white";>&emsp;
Employee id :&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name='empId' required='required' maxlength='7'/><br>&emsp;
First name&ensp; :&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name='empFn' maxlength='10'/><br>&emsp;
Last name &ensp;:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name='empLn' required='required' maxlength='10'/><br>&emsp;
Age &emsp;&emsp;&emsp; :&nbsp&nbsp&nbsp&nbsp&nbsp<input type='number' name='empAge' maxlength='2'/><br>&emsp;
Contact no &nbsp;:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name='empCn' required='required' maxlength='12'/><br>&emsp;
Email &emsp;&ensp;&ensp; :&nbsp&nbsp&nbsp&nbsp&nbsp<input type="email" name='empMail' maxlength='15'/><br><br>

<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type='submit' value='add'>  &ensp;<input type='reset' value='clear'> 
   </form>
<br><br><br><br><br>
<a href="showEmp.php" class="classA" >Show Employee </a>

<script>
function alartIt(){ alert('Logging out');}</script>
</body>
</html>
_END;
?>
