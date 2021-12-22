<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Alinhamento Horizontal</title>
    <script>
        var active = 3
        var voltar = "conteudo/css3/css - intermediario.php"
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

            <div class="title"><h1 class="intermediario">Alinhamento Horizontal</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                            Para o alinhamento na horizontal, quando queremos centralizar no meio da tela em horizontal, podemos utilizar o <strong>margin: auto;</strong> Para alinhar o elemento a direita, podemos utilizar  <strong>margin-left: auto;</strong>
                        </p>
                        <p class="descricao">
                            <b>OBS1:</b> Essa técnica funciona com divs, quando é com imagens, temos que mudar o display dela para display:block, funcionando normalmente
                        </p>
                        <p class="descricao">
                            <b>OBS2:</b> Caso o elemento seja inline-block, temos que colocar o elemento dentro de uma div, e nessa div, temos que configurar ela com text-align: left (para colocar o elemento na esquerda, padrão), center (Para centralizar o elemento), right ( para colocar o elemento na direita)

                        </p>

                    </div>
                    
                
                    <div class="codepen">

                    </div>
        
                    
                
            </div>
    
            
    
        </section>
    </main>
    


    <script src="../../../Javascript/script.js"></script>
</body>
</html>