<?php
require_once 'connection.php';

echo<<<_END
<html><head>
    
   <style>
body {
   background-image:url('background.jpg');
   background-attachment:fixed;
   background-size:100% 100%;}

th,td{
   padding:7px;
color:White;
   }
th{
    text-shadow:0 0 7px 4px white; 
font-size:44px;
   }
table{
margin-left:auto;
margin-right:auto;
box-shadow: 0 0 16px 4px aqua;
border-style:solid;
   border-width:8px; 
border-color:aqua;
   }

</style>
   </head><body>
<table border='1'>
<tr>
<th>Employee Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Age</th>
<th>Contact No</th>
<th>Email</th>
</tr>
_END;
$qury="select * from employee";
$res= querySql1($qury);
$c=0;
while($row=$res->fetch()){
    echo "<tr><td>". htmlspecialchars($row['employee_id'])."</td>"
            ."<td>". htmlspecialchars($row['first_name'])."</td>"
            ."<td>". htmlspecialchars($row['last_name'])."</td>"
            ."<td>". htmlspecialchars($row['age'])."</td>"
            ."<td>". htmlspecialchars($row['contact_no'])."</td>"
            ."<td>". htmlspecialchars($row['email'])."</td></tr>";
    
}

echo<<<_END

</table>
</body>
</html>
_END;
?>

