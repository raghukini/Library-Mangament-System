<?php

$url = 'https://api.elasticemail.com/v2/email/send';

try{
        $post = array('from' => '',
    'fromName' => '',
    'apikey' => '',
    'subject' => 'Testing',
    'to' => '4nm18is061@nmamit.in',
    'bodyHtml' => 'aaa',
    'bodyText' => 'Text Body',
    'isTransactional' => false);
//do check in spam folder for msg
    $ch = curl_init();
    curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => $post,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
      CURLOPT_SSL_VERIFYPEER => false
        ));
    
        $result=curl_exec ($ch);
        curl_close ($ch);
    
        echo $result; 
}
catch(Exception $ex){
  echo $ex->getMessage();
}?>
<html>
<head>
   <style>
*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
  font-family: "Montserrat";
}
section {
  height: 100vh;
  width: 100%;
  background-color: #f3186f;
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
  background-color: white;
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
  </head>
<body>
  <section>
  <div class="container">       

</body>
</html>