<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Flex-box</title>
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

            <div class="title"><h1 class="avancado">Flex-box</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                            O flexbox é uma caixa flexível que se adapta ao elemento <b>pai</b> deles, criando um design flexível para qualquer design de tela. Para que possamos colocar as propriedades, temos que primeiro colocar <strong>display:flex</strong> no elemento <b>pai</b>.
                        </p>
                    </div>
                    
                
                    <div class="codepen">
                    </div>

            </div>

            <div class="title"><h1 class="avancado">Flex Direction</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                            A propriedade CSS flex-direction define como os itens flexíveis são colocados no contêiner flexível, definindo o eixo principal e a direção (normal ou invertido).
                        </p>
                        <p class="descricao">
                            <strong>flex-direction: row;</strong>: Por padrão, os elementos são alinhados em linha.
                        </p>
                        <p class="descricao">
                            <strong>flex-direction: column;</strong>:  Para alinhar em colunas
                        </p>
                        <p class="descricao">
                            <strong>flex-direction: row-reverse;</strong>: Para alinhar do lado oposto na linha
                        </p>
                        <p class="descricao">
                            <strong>flex-direction: row-reverse;</strong>: Para alinhar do lado oposto na coluna
                        </p>
                    </div>
                    
                
                    <div class="codepen">
                        <p class="codepen" data-height="350" data-theme-id="dark" data-default-tab="html" data-slug-hash="MWEyorQ" data-preview="true" data-editable="true" data-user="kalilaziz" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/MWEyorQ">
                            Estruturas basicas html</a> by KalilAziz (<a href="https://codepen.io/kalilaziz">@kalilaziz</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                          </p>
                          <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
                    </div>

            </div>

            <div class="title"><h1 class="avancado">Flex Wrap</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                            Propriedade do flex box responsável pela quebra de linha entre os elementos, onde por padrão, enfileira tudo em uma única linha, independente do tamanho, mesmo que o width deles somados sejam muito maiores do que a tela
                        </p>
                        <p class="descricao">
                            <strong>flex-wrap: nowrap;</strong>:  Vem por padrão
                        </p>
                        <p class="descricao">
                            <strong>flex-wrap:wrap</strong>: Para que possa ocorrer a quebra de linha
                        </p>
                        <p class="descricao">
                            <strong>flex-wrap: wrap-reverse;</strong>: Quebra da linha inverso
                        </p>
                    </div>
                    
                
                    <div class="codepen">
                        <p class="codepen" data-height="350" data-theme-id="dark" data-default-tab="html" data-slug-hash="MWEyorQ" data-preview="true" data-editable="true" data-user="kalilaziz" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/MWEyorQ">
                            Estruturas basicas html</a> by KalilAziz (<a href="https://codepen.io/kalilaziz">@kalilaziz</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                          </p>
                          <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
                    </div>

            </div>

            <div class="title"><h1 class="avancado">Flex-flow</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                            O Flex flow é a junção do flex direction com flex wrap, podendo ser: 
                        </p>
                        <p class="descricao">
                            <strong>flex-flow: column wrap;</strong>
                        </p>
                        <p class="descricao">
                            <strong>flex-flow: row wrap;</strong>
                        </p>
                        <p class="descricao">
                            <strong>flex-flow: row-reverse</strong>
                        </p>
                        <p class="descricao">
                            ...
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