<?php

echo<<<_END

<!DOCTYPE html> 
<html>
  <head>
<style>
body {
   background-image:url('background.jpg');
   background-attachment:fixed;
   background-size:100% 100%;}

a:link, a:visited{
    background-color: #ffffff00;
    color: aqua;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;}


a:hover, a:active{
   }

a:hover {
    font-size:36px;
    text-shadow:0 0 3px 4px white;
   }
</style>

    <meta charset='utf-8'>
     <title>Login and Registration Form in HTML</title>
 <!--stylesheet-->
<script type="text/javascript"> 
        function openHome(){
        window.open('home.php');}
        </script>




  </head>
        <body ><div id="ll">
        <h2>
<a  href="index.php">Home</a> &emsp;&emsp;<a href="login.php">Login</a> 
&emsp;&emsp;<a href="registration.php">Register</a>  
</h2>

<script>

</script>
</div>

_END
?>
