<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Operadores aritméticos</title>
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

            <div class="title"><h1 class="basico">Operadores aritméticos</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                        Operadores aritiméticos: + - / * **
                        </p>
                        <p class="descricao">
                        <span>+</span>: Utilizado para fazer a adição de números e concatenação de strings
                        </p>
                        <p class="descricao">
                        <span>-</span>: Faz a subtração de números
                        </p>
                        <p class="descricao">
                        <span>/</span>: Faz a divisão de números
                        </p>
                        <p class="descricao">
                        <span>*</span>: faz a multiplicação
                        </p>
                        <p class="descricao">
                        <span>**</span>: Potenciação
                        </p>
                        <p class="descricao">
                        <span>%</span>: Resto da divisão, se o resultado da divisão for inteiro, o resto será zero
                        </p>
                        <p class="descricao">
                            <strong>OBS</strong>: Temos que tomar cuidado com o uso dos sinais aritméticos, por que o sinal de +, funciona para soma de string com números fazendo a concatenação e com number, exercendo o sinal de soma matemático, mas se utilizarmos o sinal de *, /, **, %, () entre number e string ou entre string e string, o resultado vai ser "inesperado", representado pelo motor do JS como "NaN", significando que sua operação deu erro, mas podemos tratar esses erros.
                        </p>


                    </div>
                    
                
                    <div class="codepen">
                    <p class="codepen" data-height="547" data-theme-id="dark" data-default-tab="js" data-slug-hash="LYzRywO" data-preview="true" data-editable="true" data-user="kalilaziz" style="height: 547px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/LYzRywO">
  20 - Operadores aritméticos</a> by KalilAziz (<a href="https://codepen.io/kalilaziz">@kalilaziz</a>)
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