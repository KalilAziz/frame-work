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
                <h1 class="intermediario">Canvas</h1>
            </div>

            <div class="container">
                <div class="conteudo">
                    <p class="descricao">
                        O canvas é uma tela que podemos desenhar nela. Para que possa ser feito, primeiro precisamos
                        colocar a tag <strong>&lt;canvas&gt; &lt;/canvas&gt;</strong> com seus atributos de
                        <b>&lt;width&gt;</b> e <b>&lt;height&gt;</b>
                    </p>
                    <p class="descricao">
                        <b>OBS</b>: É muito importante a utilização de <b>&lt;width&gt;</b> e <b>&lt;height&gt;</b>,
                        pois serão ná área delimitada por eles que iremos desejar na tela.
                    </p>
                    <p class="descricao">
                        Posteriormente, temos que colocar um <span>getContext("2d")</span> no JavaScript, para que
                        possamos criar seu contexto 2d.
                    </p>

                </div>

                <div class="codepen">
                    <p class="codepen" data-height="550" data-theme-id="dark" data-default-tab="js,result"
                        data-slug-hash="XWedGRE" data-preview="true" data-editable="true" data-user="kalilaziz"
                        style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/XWedGRE">
                                Untitled</a> by KalilAziz (<a href="https://codepen.io/kalilaziz">@kalilaziz</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
                </div>
            </div>





            <div class="title">
                <h1 class="intermediario">Desenhar uma linha</h1>
            </div>

            <div class="container">
                <div class="conteudo">
                    <p class="descricao">
                        Utilizamos o <span>.moveTo(0,0)</span> para desenhar uma linha, que é meio como um pincel que
                        trabalha por cordenadas, onde será fornecido dois valor, um do eixo <b>x</b> e outro do eixo
                        <b>y</b>
                    </p>
                    <p class="descricao">
                        Para que possamos desenhar, precisamos "arrastar" o pincel, e para isso, precisamos do
                        <span>.lineTo( )</span>, que trabalha junto com o <b>.moveTo(0,0)</b> para fazer uma linha
                    </p>
                    <p class="descricao">
                        Utilizamos <span>.lineWidth =</span> para definir a groussura da linha, que por padrão vem com
                        1px
                    </p>
                    <p class="descricao">
                        Utilizamos <span> .strokeStyle = "" </span> para modificar a cor, que por padrão vem preta
                    </p>
                    <p class="descricao">
                        Utilizamos <span>.stroke()</span> para executar os códigos fornecidos
                    </p>
                </div>
                <div class="codepen">
                    <p class="codepen" data-height="550" data-theme-id="dark" data-default-tab="js,result"
                        data-slug-hash="GRMZeYo" data-preview="true" data-editable="true" data-user="kalilaziz"
                        style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/GRMZeYo">
                                01 - Linha-canvas - exemplo 1</a> by KalilAziz (<a
                                href="https://codepen.io/kalilaziz">@kalilaziz</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

                    <p class="codepen" data-height="550" data-theme-id="dark" data-default-tab="js,result"
                        data-slug-hash="PoJNLXz" data-preview="true" data-editable="true" data-user="kalilaziz"
                        style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/PoJNLXz">
                                01 - Linha-canvas - exemplo 2</a> by KalilAziz (<a
                                href="https://codepen.io/kalilaziz">@kalilaziz</a>)
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