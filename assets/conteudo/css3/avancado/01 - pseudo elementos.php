<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Peseudo-Elementos</title>
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

            <div class="title"><h1 class="avancado">Peseudo-Elementos</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                            Os pseudos elementos são configurações específicas em elementos que deseja aplicar em uma área específica. Para aplicar o elemento, vc chama o elemento e coloca <b>:{ }</b>
                        </p>
                        <p class="descricao">
                            <strong>::first-line</strong>: Aplica as formatações apenas na primeira linha do texto.
                        </p>
                        <p class="descricao">
                            <strong>::first-letter</strong>: A primeira letra do texto
                        </p>
                        <p class="descricao">
                            <strong>::before</strong>: Permite colocar um conteúdo antes do elemento
                        </p>
                        <p class="descricao">
                            <strong>::after</strong>: Permite colocar um conteúdo antes do elemento
                        </p>
                        <p class="descricao">
                            <strong>::selection</strong>: Define um estilo para o texto selecionado
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