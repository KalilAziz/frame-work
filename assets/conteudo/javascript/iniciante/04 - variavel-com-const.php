<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Variável com Const</title>
    <script>
        var active = 4
        var voltar = "conteudo/javascript/js - iniciante.php"
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

            <div class="title"><h1 class="basico">Variável com Const</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                        As variáveis tem a função de salvar valores na memória em tempo de execução do sistema. Para numbers, podemos colocar o valor normal, mas para caracteres, colocamos entre aspas.
                        </p>
                        <p class="descricao">
                        O comportamento do const de uma vez declarado, não podemos reatribuir seu valor é uma característica bem desejável, já que no desenvolvimento de um sistema, se sem querer reatribuissemos o valor de uma variável, poderia causar uma mudança no software inteiro, onde na maioria da vezes causará um bug que será difícil de identificar. Caso no meio do sistema reesolvermos que aquela variável const guarda um valor que precisa ser reatribuido, é só mudar de const para let e ela funcionará tudo normalmente
                        </p>
                        <p class="descricao">
                        Existem algumas regras para criar variáveis, sendo elas:
                        </p>
                        <p class="descricao">
                        Não podemos criar variáveis com palavras reservadas
                        </p>
                        <p class="descricao">
                        Não podendo utilizar umas palavras do próprio JS, como "const const(nome da variável)", ou "let console"
                        </p>
                        <p class="descricao">
                        Não devemos começar uma vairável com números, sempre comece com letras, minúsculos de preferência, depois da primeira letra, podemos colocar números
                        </p>
                        <p class="descricao">
                        O nome das variáveis não podem conter espaços ou traços (-)
                        </p>
                        <p class="descricao">
                        Para criar variáveis com nomes compostos, utilizamos camelCase, ou seja, o primeiro nome vem com sua primeira letra minúscula, e os próximos nomes terão sua primeira letra maiúscula, como: nomeCliente, nomeCompleto, nomeCompletoDoCliente
                        </p>
                        <p class="descricao">
                        E por ultimo, todas as variáveis são case-sensitive, ou seja, uma variável tem o mesmo nome, mas uma começa com letra maiúscula e outra com letra minúscula são diferentes para o motor do JS.
                        </p>
                        <p class="descricao">
                        Não podemos modificar o valor de uma constante, ou seja, declarar uma constante e mudar seu valor
                        </p>

                        <p class="descricao">
                        As variáveis precisam ter nomes significativos, ou seja, precisa ser claro o nome da variável ao valor que será atribuido, não por que não funcionará, mas por meio de organização de código, pois em um código gigante, com dezenas de variáveis, atrapalharia muito se causasse uma confusão de variáveis por causa do nome, então é necessário deixar o mais claro possível pelo nome o que ela reseva em sua memória.
                        </p>
                        <p class="descricao">
                            
                        </p>
                        <p class="descricao">
                            
                        </p>
                        <p class="descricao">
                            
                        </p>
                    </div>
                    
                
                    <div class="codepen">
                    <p class="codepen" data-height="700" data-theme-id="dark" data-default-tab="js" data-slug-hash="PoJGGPN" data-preview="true" data-editable="true" data-user="kalilaziz" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/PoJGGPN">
  014 - Constantes com const</a> by KalilAziz (<a href="https://codepen.io/kalilaziz">@kalilaziz</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
                    </div>
        
                    
                
            </div>
    
            
    
        </section>
    </main>
    


    <script src="../../../Javascript/script.js"></script>
</body>
</html>