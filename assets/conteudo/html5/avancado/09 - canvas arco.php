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
                <h1 class="intermediario"> Arcos</h1>
            </div>

            <div class="container">
                <div class="conteudo">
                    <p class="descricao">
                        Para definirmos a cor do arco, utilizamos <span>.strokeStyle = ""</span>
                    </p>
                    <p class="descricao">
                        E para definir a circunferência, utilizamos <span>.arc (x,y,raio, inicio, fim)</span>, lembrando
                        que o início e fim são em radianos.
                    </p>
                    <p class="descricao">
                        Para colorir, utilizamos <span>.fillStyle = ""</span>
                    </p>
                    <p class="descricao">
                        obs: Para alterar a forma do arco, podemos apenas mudar os valores de inicio e fim.
                    </p>
                </div>
                <div class="codepen">
                    <p class="codepen" data-height="550" data-theme-id="dark" data-default-tab="js"
                        data-slug-hash="zYEqQQE" data-preview="true" data-editable="true" data-user="kalilaziz"
                        style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/zYEqQQE">
                                3 - path close</a> by KalilAziz (<a href="https://codepen.io/kalilaziz">@kalilaziz</a>)
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