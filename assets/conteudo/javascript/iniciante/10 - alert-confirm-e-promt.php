<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Alert, Confirm e prompt</title>
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

            <div class="title"><h1 class="basico">Alert, Confirm e prompt</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                        O <span>alert</span> é responsável por aparecer uma notificação na tela com a informação que foi digitada entre parenteses, junto com um botão de <strong>ok</strong>, enquando o usuário não clicar em ok, ele ficará impossibilitado de usar a página. Como ela não retorna nenhuma informação, seu valor é undefined
                        </p>
                        <p class="descricao">
                        O <span>confirm</span> é muito parecido com alert, mas a diferença é que ele dá opções de <strong>ok</strong> e <strong>cancelar</strong> na mensagem, enquanto o alert é apenas um <strong>ok</strong>. Caso clique em cancelar, ele retorna um valor boolean false, e se clicar em ok, retorna um valor boolean true
                        </p>
                        <p class="descricao">
                        O <span>prompt</span> é uma notificação com a possibilidade do usuário inserir seus dados e mandar para o sistema, também acompanhando dois botões, um de <strong>ok</strong> e outro <strong>cancelar</strong>.
                        </p>
                    </div>
                    
                
                    <div class="codepen">
                    <p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="js" data-slug-hash="GRMjwmz" data-preview="true" data-editable="true" data-user="kalilaziz" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/GRMjwmz">
  021 - Alert, confirm e prompt</a> by KalilAziz (<a href="https://codepen.io/kalilaziz">@kalilaziz</a>)
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