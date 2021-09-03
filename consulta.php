<html>
    <body>
            <head>
        <link href="http://fonts.cdnfonts.com/css/segoe-ui-4" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="finphp.css">
        <link href="http://fonts.cdnfonts.com/css/tw-cen-mt" rel="stylesheet">
    </head>
</html>
<body>      
<div class="mensaje">
        <table class="aviso" >
            <tr align="center" >
                 <td style="padding: 0px; margin: 0px;">
                     <img src="correcto.png">
                </td> 
             <td>
                    <hr>
                </td>
                <td>
                    <h2>Operacion realizada con exito</h2>
                    <h3>Si desea volver al inicio haga click sobre la casa.</h3>
                    <h3>Si desea ir a la pagina anterior haga click sobre retroceder.</h3>
                </td>
         </tr>
    </table>
    </div>   
    <?php
    $to='salvadormacri@gmail.com';
    $subject = $_REQUEST["type"];
    $mensaje = $_REQUEST['mensaje'];
    $telefono = $_REQUEST['telefono'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $mail = $_REQUEST['mail'] ;
  if($subject=='lista'){
        $asunto="lista de precios";
    }
     if($subject=='an'){
        $asunto="linea asa negra";
    }
     if($subject=='reposteria'){
        $asunto="linea reposteria";
    }
     if($subject=="gastronomia"){
        $asunto="linea gastronomica";
    }
     if($subject=="propuesta"){
        $asunto="propuesta";
    }
     if($subject=="otras"){
        $asunto="otros";
    }
    $headers = 'From: consultaweb' . "\r\n" ;
    $mensaje="$nombre \n $apellido \n $telefono \n $mail \n $mensaje";
    $verificacion=mail($to,$asunto,$mensaje,$headers);
    ?> 
   
    <div class="links">
        <table class="tablink" >
            <tr align="center" >
                 <td style="padding: 0px; margin: 0px;">
                    <a href="index.html"> <img src="inicio.png"></a>
                </td> 
             <td>
                    <hr>
                </td>
                <td>
               <a href="contacto.html"> <img src="back.png" style="width: 49px;height: 49px;"></a>
                </td>
         </tr>
    </table>
    </div>
    </body>
</html>