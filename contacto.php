<?php
header('Content-Type: text/html; charset=utf-8');

if(isset($_POST['email'])) {
 
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "biogenicaoncocit@gmail.com,gestion@biogenica.org";
 
    $email_subject = "Solicitud Recell";
 
   
    $first_name = $_POST['nombre']; // required 
    $email_from = $_POST['email']; // required
	$phone = $_POST['telefono']; // required
	$tipo = $_POST['tipo']; // required
	
    $comments = $_POST['mensaje']; // required
 
    $email_message = "Detalles del contacto.\n\n";
    $email = "$email_from"; // required
 
    
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
 
    $email_message .= "Nombre: ".clean_string($first_name)."\n";
    $email_message .= "Correo: ".clean_string($email_from)."\n";
	$email_message .= "Telefono: ".clean_string($phone)."\n";
	$email_message .= "Tipo de cancer: ".clean_string($tipo)."\n";
    $email_message .= "Mensaje: ".clean_string($comments)."\n";
 
     
// create email headers

$headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers); 
 
?>
 
<!-- include your own success html here -->
 
<head>
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M7ST2M5');</script>
<!-- End Google Tag Manager -->	
	

	



</head>
 

<body background="assets/images/fondo.jpg">


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7ST2M5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


					
						<h1 style="text-align:center; float:inherit; color:#0077c8; margin-top: 300px; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif" >¡Hemos recibido satisfactoriamente tu solicitud!
							<br><br>
	
					Un asesor se contactará a la brevedad.</h1>
						




						
						</body>
                            

  
<?php
 
}

?>