<?php

	header('Content-Type: text/html; charset=utf-8');

  // include the medoo library for easier DB access
	include 'medoo.php';

	$database = new medoo([
    // 'database_type' => 'mysql',
    //   'database_name' => 'landingpage_leads',
    //   'server' => 'localhost',
    //   'username' => 'root',
    //   'password' => 'root',
    //   'charset' => 'utf8'

	'database_type' => 'mysql',
    'database_name' => 'd02a4ba6',
    'server' => 'localhost',
    'username' => 'd02a4ba6',
    'password' => '3VuyXXG56F3wbLcM',
    'charset' => 'utf8'
	]);

	$referrer = $_POST['referrer'];
	$name = $_POST['name'];
	$email = $_POST['mail'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$content="Von:     $name<br>E-Mail:  $email<br>Telefon: $phone<br><br>$message";
	$to = "ls@dreiqbik.de";
	$subject = "Kontaktaufnahme über Landingpage";
	$header = "From: $name <$email> \r\n".
            "MIME-Version: 1.0\r\n".
            "Content-type: text/html; charset=UTF-8";


	if( isset( $name, $email, $message ) ) {

	    $result = mail( $to, $subject, $content, $header );

	    if (!$result) {
	        echo "Da ist leider etwas schief gelaufen!";
	    } else {

	    		// create new database entry
	    		$id = $database->insert( "leads", [
	    			"source" 		=> 'partnerschaft_selbstaendige',
	    			"referrer" 	=> $referrer,
	    			"name" 			=> $name,
	    			"email"	 		=> $email,
	    			"phone"			=> $phone,
	    			"message"		=> $message,
	    			"timestamp" => date("Y-m-d H:i:s")
	    		]);


	        header('Location: /');
	    }
	}

?>
