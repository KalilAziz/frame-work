<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Formulários</title>
    <script>
        var active = 2
        var voltar = "conteudo/html5/html-intermediario.php"
        var link_geral = "../../../index.php"
        var caminho_camada  = "../../../../"
        var icon = "../../../../assets"

      </script>
      
  </head>
  <body>
      <?php
              include '../../../../modules/active.php';
      ?>
  
          <?php
              include '../../../../modules/header.php';
          ?>
    

    <main>
        <section>

            <div class="title"><h1 class="intermediario">Criação de formulários</h1></div>
     
            <div class="container">


                    <div class="conteudo">
                        <p class="descricao">
                            Formulários HTML são um dos principais pontos de interação entre um usuário e um web site ou aplicativo. Eles permitem que os usuários enviem dados para o web site. Na maior parte do tempo, os dados são enviados para o servidor da web, mas a página da web também pode interceptar para usá-los por conta própria.
                        </p>
                        <p class="descricao">
                            Para criar uma formulario, primeiro precisamos declarar a tag <strong>&lt;form action="" method=""&gt; &lt;/form&gt;</strong>.
                        </p>
                        <p class="descricao">
                            <strong>action=""</strong> que é o local que o usuário será enviado depois de submeter o formulário. 
                        </p>
                        <p class="descricao">
                            <strong>method=""</strong> é o tipo de envio, podendo ser <b>“GET”</b> (dados do usuário aparecem na URL) ou <b>“POST”</b>(dados do usuário não aparecem na URL)
                        </p>      
                    </div>
                    
                

        
                    
                    
                
            </div>
    
            
    
        </section>
    </main>


    <script src="../../../Javascript/script.js"></script>
</body>
</html>