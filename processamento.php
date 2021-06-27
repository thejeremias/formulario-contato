<?php
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['mensagem']);

    $to = "saldanhajeremias295@gmail.com";
    $subject = "Contato - Jeremias Codes";
    $body = "nome: " . $nome . "\r\n" .
            "e-mail: " . $email . "\r\n" .
            "assunto:" . $assunto . "\r\n" .
            "mensagem:" . $mensagem;
    $header = "From:contato@jeremias.codes" . "\r\n" .
               "Reply-To:" . $email . "\r\n" .
               "x=mailer:PHP/" . phpversion();  

    mail($to, $subject, $body, $header)
?>

<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
        <!--Import style.css-->
        <link href="css/style.css" rel="stylesheet"/> 
        <!--Import favinconp2-->
        <link href="img/faviconp2.png" rel="shortcut icon"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <meta charset="UTF-8" />

        <title>Processamento</title>
    </head>

    <body>

        <div class="container">


            <div class="row" style="
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            ">
                <div class="col s12"> 
                    <h1>Mensagem enviada! &#x1F91D; </h1>
                    <a href="/index.html"> &#x1F449; Enviar outra?</a>
                </div>
            </div>
       

        

        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>