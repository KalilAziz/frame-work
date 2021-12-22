<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Background</title>
    <script>
        var active = 3
        var voltar = "conteudo/css3/css - basico.php"
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

            <div class="title"><h1 class="basico">Background</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                            A propriedade background serve para alterar o fundo de um elemento, sendo dividido entre vários tipos, sendo eles:
                        </p>
                        <p class="descricao">
                            <strong>background-color:;</strong>: Define a cor de fundo.
                        </p>
                        <p class="descricao">
                            <strong>background-image:url();</strong>: Define uma imagem de fundo de um elemento. 
                        </p>
                        <p class="descricao">
                            <strong>background-repeat: no-repeat;</strong>: Se a imagem de fundo for muito pequena e o elemento for muito grande, a imagem irá se repetir até ocupar o espaço total, para que não aconteça, utilizamos essa propriedade.
                        <p class="descricao">
                            <strong>background-repeat: repeat-x;</strong> e <strong>background-repeat: repeat-y</strong>: Utilziado para que a imagem se repita em um das direções.
                        </p>
                        <p class="descricao">
                            <strong>background-size: cover</strong>: Se acontecer que a imagem for muito grande e o elemento for muito pequeno, pode utilizar a propriedade, que irá reduzir a imagem, sem distorcê-la e centralizá-la.
                        </p>
                        <p class="descricao">
                            <strong>background-position:;</strong>: Define a direção que a imagem será posicionado
                        </p>
                        <p class="descricao">
                            <strong>background-attachment:;</strong>: Um de seus valores é o “fixed”, que fixa o background-image do elemento na tela e quando scrolla a página, gera um efeito muito legal

                        </p>
                    </div>
                             
            </div>
        </section>
    </main>
    


    <script src="../../../Javascript/script.js"></script>
</body>
</html>