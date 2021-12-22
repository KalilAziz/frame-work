<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Tipos de Inputs</title>
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

            <div class="title"><h1 class="intermediario">Tipos de Input</h1></div>
     
            <div class="container">


                    <div class="conteudo">
                        <p class="descricao">
                            O elemento HTML <strong>&lt;input type="" name="" id=""&gt;</strong> é usado para criar controles interativos para formulários baseados na web para receber dados do usuário. A semântica de um <strong>&lt;input&gt;</strong> varia consideravelmente dependendo do valor de seu atributo type, sendo os principais <strong>&lt;type=""&gt;</strong> são:
                        </p>
                        <p class="descricao">
                            <strong>type="text"</strong>: Campo de texto utilizado para receber informações como nome ou alguma informação em caracteres.
                        </p>
                        <p class="descricao">
                            <strong>type="password"</strong>: Campo de senha que já vem pré formatado, onde os valores digitados aparecem como *.
                        </p>
                        <p class="descricao">
                            <strong>type="checkbox"</strong>: Campo de seleção utilizado para caixas de escolha, onde pode ser marcado muitos de uma vez ao mesmo tempo.
                        </p>
                        <p class="descricao">
                            <strong>type="radio"</strong>: Utilizado normalmente onde deseja escolher uma das opções, muito utilizado para escolha de gênero, e para que fique responsivo, temos que colocar com o mesmo <b>name=””</b> e no <b>value=””</b>, colocamos a identificação do gênero
                            .
                        </p>
                        <p class="descricao">
                            <strong>type="reset"</strong>: Campo reset serve para limpar as informações digitadas pelo usuário no formulário automaticamente.
                        </p>
                        <p class="descricao">
                            <strong>type="color"</strong>: Abre uma paleta de cor que o usuário possa fazer sua escolha
                        </p>
                        <p class="descricao">
                            <strong>type="date"</strong>: Campo para colocar datas, onde podemos colocar um atributo <b>max=””</b> que podemos definir a data máxima e <b>min=””</b> que podemos definir a data mínima, lembrando que tem que ser em formato internacional e separado por <b>“-”</b>, como: 2021-11-19;
                        </p>
                        <p class="descricao">
                            <strong>type="datetime"</strong>: 
                        </p>
                        <p class="descricao">
                            <strong>type="datetime-local"</strong>: Campo para colocar data e horas
                        </p>
                        <p class="descricao">
                            <strong>type="file"</strong>: Campo para colocar arquivos
                        </p>
                        <p class="descricao">
                            <strong>type="number"</strong>: Campo para digitar números, onde odemos colocar o atributo <b>min=”” </b> e <b>max=””</b> para limitar os números
                        </p>
                        <p class="descricao">
                            <strong>type="range"</strong>: Campo de range, onde podemos colocar o atributo <b>min=””</b> e <b>max=”” </b> para limitar os números de envios, Podemos também definir o valor inicial =, colocando o atributo value=”” com o número
                        </p>
                        <p class="descricao">
                            <strong>type="email"</strong>: Campo para email que já vem pré formatado, onde aceita apenas endereços emails
                        </p>
                        <p class="descricao">
                            <strong>type="tel"</strong>: Campo para colocar números de telefone. A pensar de aparecer um campo de texto comum, quando aberto no celular, aparece um teclado numérico em vez de um teclado de texto

                        </p>
                        <p class="descricao">
                            <strong>type="submit"</strong>: Campo de botão para enviar o formulário
                        </p> 

                        
                    </div>
                    
                
                    <div class="codepen">
                        <p class="codepen" data-height="800" data-theme-id="dark" data-default-tab="html,result" data-slug-hash="vYeGdYp" data-preview="true" data-editable="true" data-user="kalilaziz" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/vYeGdYp">
                            Tipos de input</a> by KalilAziz (<a href="https://codepen.io/kalilaziz">@kalilaziz</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                          </p>
                          <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
                    </div>


                    <div class="conteudo">
                        

                        <p class="descricao">
                            Temos vários tipos de atributos que podemos colocar dentro da tag input, dentre eles: 
                        </p>

                        <p class="descricao">
                            <strong>checked</strong>: Marcará automaticamente aquela opção quando o formulário for aberto.
                        </p>

                        <p class="descricao">
                            <strong>autocomplete</strong>: Seus valores completados automaticamente pelo navegador.
                        </p>


                        <p class="descricao">
                            <strong>disabled</strong>: Indica se o usuário pode ou não interagir com o elemento.
                        </p>

                        <p class="descricao">
                            <strong>maxlength</strong>: Define o núemro máximo de caracteres permitido no elemento.
                        </p>

                        <p class="descricao">
                            <strong>pattern</strong>: Define uma espreção regular na qual o valor do elemento será validado de encontro.
                        </p>

                        <p class="descricao">
                            <strong>placeholder</strong>: Fornece uma sugestão ao usuário de o que pode ser inserido no campo.
                        </p>

                        <p class="descricao">
                            <strong>required</strong>: Indica se este elemento é requerido para preencher ou não.
                        </p>

                        <p class="descricao">
                            <strong>value</strong>: Define o valor padrão na qual será mostrado no elemento no carregar da página.
                        </p>
 
                    </div>
        
                    
                
            </div>
            

            
    
        </section>
    </main>


    <script src="../../../Javascript/script.js"></script>
</body>
</html>