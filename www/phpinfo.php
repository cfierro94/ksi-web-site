<?php


$to= 'jeadvuf@gmail.com';
$nom = $_POST["nom"];
$prenom=$_POST["prenom"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$enterprise=$_POST["enterprise"];
$subject=$_POST["subject"];
$message = $_POST["mensaje"];
$todo="Nombre: \n $nom \r\n 
		Prenom: \n $prenom \r\n 
		Telefono: \n $phone \r\n
		Empresa: \n $enterprise \r\n 
		Asunto: \n $asunto \r\n  
		Email: \n $email \r\n ";
$headers = 'From: webmaster@example.com' . "\r\n" .
'Reply-To: webmaster@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $todo, $headers);
phpinfo();
?>