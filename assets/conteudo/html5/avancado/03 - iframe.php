<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Iframe</title>
    <script>
        var active = 2
        var voltar = "conteudo/html5/html-avancado.php"
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

            <div class="title"><h1 class="avancado">Iframe</h1></div>
     
            <div class="container">


                    <div class="conteudo">
                        <p class="descricao">
                            O iframe é uma maneira de colocar um conteúdo de outra página, na minha página atual com a tag e atributo <strong>&lt;iframe src=""&gt; &lt;/iframe&gt;</strong> 
                        </p>
                        <p class="descricao">
                            <b>src=""</b>: Colocamos o diretório onde desejamos pegar o conteúdo
                        </p>
                    </div>
                    
                
                    <div class="codepen" style="text-align: center;">
                        <img src="../../../image/iframe1.png" width="70%" alt="">
                        <img src="../../../image/iframe.png" width="70%" alt="">
                    </div>
        
                    
                
            </div>
    
            
    
        </section>
    </main>


    <script src="../../../Javascript/script.js"></script>
</body>
</html>

