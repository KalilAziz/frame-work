<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Tabelas</title>
    <script>
        var active = 2
        var voltar = "conteudo/html5/html-basico.php"
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

            <div class="title"><h1 class="basico">Estruturas Básicas</h1></div>
     
            <div class="container">


                    <div class="conteudo">
                        <p class="descricao">
                            Para a construção de tabelas, primeiramente precisamos definir o local onde a tabela será definida, sendo ela a tag <strong>&lt;table&gt;&lt;/table&gt;</strong>.
                            
                        </p>
                        <p class="descricao">
                            Logo em sequência, precisamos definir a tag que marcará as linhas e colunas. A Tag da linha é a <strong>&lt;tr&gt; &lt;/tr&gt;</strong> e a tag das colunas é a <strong>&lt;td&gt; &lt;/td&gt;.</strong>.
                        </p>
                        <p class="descricao">
                            <b>Obs(1):</b> A primeira tag de coluna, como será o título, por motivos semânticos, é necessário colocar a tag <strong>&lt;th&gt; &lt;/th&gt;</strong> em vez do <strong>&lt;td&gt; &lt;/td&gt;</strong>
                        </p>
                        <p class="descricao">
                            <b>Obs(2):</b> Novamente por motivos semânticos, seria bom colocar o conjunto linha que tem a tag <tr></tr> que tem o <strong>&lt;th&gt; &lt;/th&gt;</strong> do cabeçalho dentro de uma outra tag, a <strong>&lt;thead&gt; &lt;/thead&gt;</strong>, e para todos os outros conjuntos pertencentes ao corpo da tabela, seria ideal colocar dentro da tag <strong>&lt;tbody&gt; &lt;/tbody&gt;</strong>.
                        </p>
                        <p class="descricao">
                            <b>Obs(3):</b> A propriedade <b>border="1"</b> foi colocada na tag <strong>&lt;table&gt;&lt;/table&gt;.</strong> apenas por motivo de facilitar a visualização do conteúdo da tabela com uma margem. 
                        </p>
                    </div>
                    
                
                    <div class="codepen">
                        <p class="codepen" data-height="500" data-theme-id="dark" data-default-tab="html,result" data-slug-hash="YzrqYZp" data-preview="true" data-editable="true" data-user="kalilaziz" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/YzrqYZp">
                            Tabelas</a> by KalilAziz (<a href="https://codepen.io/kalilaziz">@kalilaziz</a>)
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