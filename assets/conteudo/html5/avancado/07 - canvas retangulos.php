<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Canvas</title>
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
            <div class="title">
                <h1 class="intermediario">Retângulo sólido</h1>
            </div>

            <div class="container">
                <div class="conteudo">
                    <p class="descricao">
                        Para criarmos um retângulo, utilizamos o <span>.fillRect()</span>
                    </p>
                    <p class="descricao">
                        Para definirmos a cor do retângulo, usamos o <span>.fillStyle = ""</span>
                    </p>
                </div>
                <div class="codepen">
                    <p class="codepen" data-height="550" data-theme-id="dark" data-default-tab="js"
                        data-slug-hash="dyVMLPP" data-preview="true" data-editable="true" data-user="kalilaziz"
                        style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/dyVMLPP">
                                02 - canvas - retângulo</a> by KalilAziz (<a
                                href="https://codepen.io/kalilaziz">@kalilaziz</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
                </div>
            </div>







            <div class="title">
                <h1 class="intermediario">Retângulo vazado com cor na borda</h1>
            </div>

            <div class="container">
                <div class="conteudo">
                    <p class="descricao">
                        Para colocarmos cor na borda usamos <span>.strokeStyle()</span>, sendo que por padrão vem preto.
                    </p>
                    <p class="descricao">
                        Para fazer um retângulo vazio, usamos <span>.strokeRect()</span>
                    </p>
                </div>

                <div class="codepen">
                    <p class="codepen" data-height="550" data-theme-id="dark" data-default-tab="js"
                        data-slug-hash="yLzOreq" data-preview="true" data-editable="true" data-user="kalilaziz"
                        style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/yLzOreq">
                                02 - canvas - retângulo vazado</a> by KalilAziz (<a
                                href="https://codepen.io/kalilaziz">@kalilaziz</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
                </div>
            </div>






            <div class="title">
                <h1 class="intermediario"> Retângulo sólido com borda de outra cor</h1>
            </div>

            <div class="container">
                <div class="conteudo">
                    <p class="descricao">
                        Para criar um retangulo que permite colocar borda, utilizamos o <span>.rect()</span>
                    </p>
                    <p class="descricao">
                        Para colocar cor na borda, utilizamos <span>.strokeStyle()</span>
                    </p>
                </div>
                <div class="codepen">
                    <p class="codepen" data-height="550" data-theme-id="dark" data-default-tab="js"
                        data-slug-hash="NWaNmgY" data-preview="true" data-editable="true" data-user="kalilaziz"
                        style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/NWaNmgY">
                                02 - retângulo sólido com borda de outra cor</a> by KalilAziz (<a
                                href="https://codepen.io/kalilaziz">@kalilaziz</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
                </div>
            </div>

            <div class="title">
                <h1 class="intermediario"> Retângulo sólido com parte vazada</h1>
            </div>

            <div class="container">
                <div class="conteudo">
                    <p class="descricao">
                        Podemos limpar uma área do retâgulo sólido <span>.clearRect</span>
                    </p>
                </div>
                <div class="codepen">
                    <p class="codepen" data-height="550" data-theme-id="dark" data-default-tab="js" data-slug-hash="NWaNVaZ" data-preview="true" data-editable="true" data-user="kalilaziz" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/NWaNVaZ">
                        02 - retangulo solido com vazamento</a> by KalilAziz (<a href="https://codepen.io/kalilaziz">@kalilaziz</a>)
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