<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "book";  

    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  
<html>
      <h1>Hello</h1>
      <a href="liblogin.html">Here</a>
</html>