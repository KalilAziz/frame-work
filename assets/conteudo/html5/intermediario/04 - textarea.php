<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Textarea</title>
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

            <div class="title"><h1  class="intermediario">Textarea</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                            O elemento  HTML <strong>&lt;textarea name="" id=""&gt; &lt;/textarea&gt;</strong> é útil quando você quer permitir ao usuário informar um texto extenso em formato livre, como um comentário ou formulário de retorno.
                        </p>
 
                    </div>
                    
                
                    <div class="codepen">
                        <p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="html,result" data-slug-hash="abLNYXM" data-preview="true" data-editable="true" data-user="kalilaziz" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/abLNYXM">
                            Textarea</a> by KalilAziz (<a href="https://codepen.io/kalilaziz">@kalilaziz</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                          </p>
                          <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
                    </div>
                    <div class="conteudo">
                        <p class="descricao">
                            Temos vários tipos de atributos que podemos colocar dentro da tag <strong>&lt;textarea&gt; &lt;/textarea&gt;</strong>, dentre eles: 
                        </p>
                        <p class="descricao">
                            <strong>autocomplete</strong>: Este atributo indica se o valor do controle pode ser preenchido automaticamente pelo navegador.
                        </p>
                        <p class="descricao">
                            <strong>autofocus</strong>: Esse atributo permite especificar que um controle de formulário tenha foco de entrada quando a página for carregada.
                        </p>
                        <p class="descricao">
                            <strong>disabled</strong>:Esse atributo indica que o usuário não pode interagir com o controle.
                        </p>
                        <p class="descricao">
                            <strong>maxlength</strong>: O número máximo de caracteres que o usuário pode inserir. Se esse valor não for especificado, o usuário poderá inserir um número ilimitado de caracteres.
                        </p>
                        <p class="descricao">
                            <strong>minlength</strong>: O número mínimo de caracteres exigidos pelo usuário.
                        </p>
                        <p class="descricao">
                            <strong>placeholder</strong>: Uma dica para o usuário sobre o que pode ser inserido no controle. 
                        </p>
                        <p class="descricao">
                            <strong>required</strong>: Este atributo especifica que o usuário deve preencher um valor antes de enviar um formulário.
                        </p>
                        <p class="descricao">
                            <strong>resize: none; (css)</strong>: Retira a capacidade de manipular o tamanho da box
                        </p>

                    </div>
        
                    
                
            </div>
    
            
    
        </section>
    </main>


    <script src="../../../Javascript/script.js"></script>
</body>
</html>