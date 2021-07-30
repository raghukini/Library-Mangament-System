<html>
   
   <head>
    
   </head>
    <style>
            *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
button{
   font:black;
}
body {
  font-family: "Montserrat";
}
section {
  height: 100vh;
  width: 100%;
  background-color: #340143;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.container {
  width: 90%;
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  box-shadow: 0px 0px 20px #00000010;
  background-color: #B19CD9;
  border-radius: 8px;
  margin-bottom: 20px;
}
.form-group {
  width: 100%;
  margin-top: 20px;
  font-size: 20px;
}
.form-group input,
.form-group textarea {
  width: 100%;
  padding: 5px;
  font-size: 18px;
  border: 1px solid rgba(128, 128, 128, 0.199);
  margin-top: 5px;
}

textarea {
  resize: vertical;
}
button[type="submit"] {
  width: 100%;
  border: none;
  outline: none;
  padding: 20px;
  font-size: 24px;
  border-radius: 8px;
  font-family: "Montserrat";
  color: rgb(27, 166, 247);
  text-align: center;
  cursor: pointer;
  margin-top: 10px;
  transition: 0.3s ease background-color;
}
button[type="submit"]:hover {
  background-color: rgb(214, 226, 236);
}

        </style>
   <body>
      <?php
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
           
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            $usn = $_POST['usn'];
            $newpass = $_POST['password'];
            $old=$_POST['old'];
            $got="select password from users where usn='$usn'";
            if($old!='1*Balebail')
            {
            	echo"Enter Current Password Correctly";
            }
            else
            {
            $again = $_POST['again'];  
            if($newpass!=$again)
            {
            	echo"Enter proper Password";
            }    
            else
            {
            $newpass=md5($newpass);          
            $check= "SELECT password FROM users WHERE usn='$usn'";
         
            $sql = "UPDATE users ". "SET password = $newpass ". 
               "WHERE usn = $usn" ;
            $retval = mysqli_close($conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
         }
     }
 }
         else
         {
            ?>
               <section>
        <div class="container">
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  
                  <div class="form-group">
                  
                  <input name = "usn" type = "text" 
                           id = "usn" placeholder="USN"><br>
                      
                     </div>
                     
<div class="form-group">
                         <input name = "old" type = "password" placeholder="Old Password" 
                           id = "old">
                        </div>
<br>                        
<div class="form-group">
                        <input name = "password" type = "password" placeholder="New Password" 
                           id = "password">
                           <br>
                       
                  <div class="form-group">
                        <input name = "again" type = "password" placeholder="Again New Password" id = "again">
                     <br>
                  </div>
                        <br><br>
                        
                    <center>
                           <button name = "update" type = "submit" 
                              id = "update" value = "Update">
                       </center>
                  </table>
               </form>
            </div>
         </section>
               <button onclick="window.location.href='starting.html'">Logout</button>

            <?php

   
   }
      ?>
      
   </body>
</html>