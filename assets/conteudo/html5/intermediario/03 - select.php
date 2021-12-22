<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Select</title>
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

            <div class="title">
                <h1 class="intermediario">Select</h1>
            </div>

            <div class="container">


                <div class="conteudo">
                    <p class="descricao">
                        O elemento select é representado por <strong>&lt;select name="" id=""&gt;</strong>, que
                        representa um controle que apresenta um menu de opções.
                    </p>
                    <p class="descricao">
                        As opções dentro do menu são representadas pelo elemento <strong>&lt;option value=""&gt;
                            &lt;/option&gt;</strong>, que são opções que podem ser pré-selecionadas para o usuário.
                    </p>
                    <p class="descricao">
                        <b>OBS:</b> Por padrão, a primeira opção sempre será mostrada ao recarregar a página, e para alterar, basta colocar um selected como atributo na tag option desejada
                    </p>
                    <p class="descricao">
                        <b>OBS:</b> Por padrão, apenas uma opção é mostrada por fez, mas se quisermos alterar, basta colocar o atributo size=”” e o número desejado, assim poderemos ver mais de duas opções ao mesmo tempo
                    </p>
                    <p class="descricao">
                        <b>OBS:</b> Por padrão podemos enviar apenas uma opção, mas podemos colocar o atributo “multiple” na tag select para que possamos enviar mais de uma opção
                    </p>
                </div>


                <div class="codepen">
                    <p class="codepen" data-height="350" data-theme-id="dark" data-default-tab="html,result" data-slug-hash="yLzOKxv" data-preview="true" data-editable="true" data-user="kalilaziz" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/yLzOKxv">
                        Select</a> by KalilAziz (<a href="https://codepen.io/kalilaziz">@kalilaziz</a>)
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