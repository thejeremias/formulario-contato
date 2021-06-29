<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
        <!--Import style.css-->
        <link href="css/style.css" rel="stylesheet"/> 
        <!--Import favincon-->
        <link href="img/favicon.png" rel="shortcut icon"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <meta charset="UTF-8" />

        <title>Contato</title>
    </head>

    <body>

        <div class="container">


            <div class="row">
                <div class="col s12"> 
                    <h1 class="center-align">Formulário de Contato</h1>
                    <p class="center-align">Entre em contato comigo por aqui.</p>
                </div>
            </div>
       

  
            <div class="row">

             

                <form id="form" class="col s12" method="POST" action="/processamento.php">


                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input name="nome" id="input_text" type="text" data-length="10" required="true" />
                            <label for="input_text">Nome</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">alternate_email</i>
                            <input name="email" id="email" type="email" class="validate" required="true" />
                            <label for="email">E-mail</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">subject</i>
                            <input name="assunto" id="input_text" type="text" data-length="10" required="true" />
                            <label for="input_text">Assunto</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">message</i>
                            <textarea name="mensagem" id="textarea1" class="materialize-textarea" required="true"></textarea>
                            <label for="textarea1">Mensagem</label>
                        </div>
                    </div>



                    <div class="row center">
                        <div class="col s12">
                            

                            <button class="btn waves-effect waves-light" name="action" onclick="confirmar()">Enviar
                                <i class="material-icons right">send</i>
                            </button>
        
                            <button class="btn waves-effect waves-light" type="reset" name="action">
                                Limpar
                                <i class="material-icons right">clear_all</i>
                            </button>

                        </div>

                    </div>




                   

                </form>


            </div>


           <div class="row">
               <div class="col s12">
                    <p class="center-align">Desenvolvimento: 
                        <a href="https://instagram.com/jeremias221b" target="_blank">Jeremias Saldanha</a> 
                    </p>
                    <p class="center-align">Desde 2021</p>
               </div>
           </div>

        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>


            if (document.getElementByName('nome').value == '' OR
                document.getElementByName('assunto').value == '' OR
                document.getElementByName('mensagem').value == '') {



            } else {

            }


  


            function confirmar() {
        
            resposta = confirm("Tem certeza que quer enviar?");

        
            if (resposta == true) {
                document.getElementById('form').submit();
            }


            submit = document.getElementById()
            


         }

        </script>
    </body>
</html>