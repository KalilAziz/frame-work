<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Alinhamento Vertical</title>
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

            <div class="title"><h1 class="intermediario">Alinhamento Vertical</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                            Para o alinhamento vertical, podemos utilizar o <strong>line-height:px;</strong> mas a desvantagem é que temos que conhecer a altura, caso ela seja variável ou não sabemos, esse método não irá funcionar.
                        </p>
                        <p class="descricao">
                            Para que possamos resolver, podemos utilizar um position absolute, colocando o top com 50%, mas não alinha totalmente, e para corrigir, colocamos um transform: <strong>translateY(-50%)</strong>; 
                        </p>
                        <p class="descricao">
                            Por utilizar o position absolute, o text-align: center; perde efeito no alinhamento na horizontal, e para que possamos corrigir, podemos fazer left com 50% e <strong>transform: translate(-50%, -50%)</strong>;
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