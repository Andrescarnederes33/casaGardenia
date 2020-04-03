<?php

    $user = $_POST['name'];
    $tel = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['recomendation'];
    $type = $_POST['type'];

    $domain_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

    $reC = $_POST['g-recaptcha-response'];
    if(isset($reC) && $reC){
   
    $secretKey = "";

    $ip = $_SERVER['REMOTE_ADDR'];

    $validationServer = file_get_contents("https://google.com/recaptcha/api/siteverify?secret=$secretKey&response=$reC&remote=$ip");
    #var_dump($validationServer);
    #echo true;
    $success = json_decode($validationServer);
	if ($success->success) {
	    #--------------------------
	      // pass,
        // sitio_web_administrador,
        // email_receptor,
        // email_developer,
        // nombre_developer,
        // nombre_receptor,
        // asunto,
        // servicio_usuario,
        // celular_usuario,
        // nombre_usuario,
        // email_usuario,
        // mensaje_usuario

        
      $data = array(
      'pass' => '2323',
      'sitio_web_administrador' => $domain_url,
      #'email_receptor' => '{"0":["gerencia@casagardenia.com.co, codigo.turismointeractivo360@gmail.com"]}',
      // 'email_receptor' => 'gerencia@casagardenia.com.co',
      'email_receptor' => 'webmastercloudming@gmail.com',
      'nombre_receptor' => 'Hola Equipo',
      'email_developer'=>'webmastercloudming@gmail.com',
      'nombre_developer'=>'Cto',
      'asunto' => 'Nuevo cliente potencial Google',
      'servicio_usuario' => $type,
      'celular_usuario' => $tel,
      'nombre_usuario' => $user,
      'email_usuario' => $email,
      'mensaje_usuario' => $message
    );
    
    // 'token_notificacion' => '{"0":["fiAZ0uWkjPk6O_F8P0tbyc:APA91bHQvFsO9akDwyEPKJEXFDqShARWtY0M4SfPKLn7VEikp16iPevle0wGcIx6LNa3J3xbNJQ6Y1_BW57uhqYk9wbzyIrnDqNeD0_pXUPifB1bgKCcri5au4M5aSt8gmG125DuP46y"]}',
    // 'titulo_notificacion' => 'Nuevo cliente potencial casa gardenia',
    // 'body_notificacion' => $type . ': ' . $message,
    // 'icono_notificacion' => 'https://cloudming.herokuapp.com/public/img/cropped-logo-192x192.png'
    
    # Create a connection
    $url = 'https://notificaciones-web-d451d.appspot.com/send';
    $ch = curl_init($url);
    # Form data string
    $postString = http_build_query($data, '', '&');
    # Setting our options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    # Get the response
    $response = curl_exec($ch);
    
    // print( array('response' => $response, 'nombre' => $user) );    
    //print($response);
    
    curl_close($ch);
    
    header("Location: /Gracias");
    die();
	    
	    #--------------------------

	} else {
		// Eres un robot!
        print 'ROBOT';
	}

  #{ "success": true, "challenge_ts": "2019-08-11T02:42:38Z", "hostname": "vnarquitectonico.com" }
    
}else{

print "ROBOT";

}
