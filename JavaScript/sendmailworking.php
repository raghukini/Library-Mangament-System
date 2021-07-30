<?php

$url = 'https://api.elasticemail.com/v2/email/send';

try{
  if(isset($_POST["submit"]))
{
      $to = strip_tags($_POST['to']);
      $sub = $_POST['subject'];
      $body = $_POST['body'];
        $post = array('from' => 'loganstrikesback@gmail.com',
		'fromName' => 'Raghu',
		'apikey' => 'E1B394C639FE9DFC630F939112648C6C7FAE3B9E417AE353B3FAD5FE9F8FEF74F3255460DD5869F9FAA4B2D57B6AF7FA',
		'subject' => 'Testing',
		'to' => '4nm18is128@nmamit.in',
		'bodyHtml' => 'Body',
		'bodyText' => 'body',
		'isTransactional' => false);
		
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
}
catch(Exception $ex){
	echo $ex->getMessage();
}
?>