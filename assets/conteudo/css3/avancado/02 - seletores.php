<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Seletores</title>
    <script>
        var active = 3
        var voltar = "conteudo/css3/css - intermediario.php"
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

            <div class="title"><h1 class="avancado">Seletores</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                            Os seletores são maneiras de selecionar algum elemento, o que utilizamos anteriormente a class , id e o nome da tag, mas temos alguns outros, sendo eles:
                        </p>
                        <p class="descricao">
                            <strong>*</strong>: É um seletor que seleciona todos os elementos da página
                        </p>
                        <p class="descricao">
                            <strong>,</strong>: colocar vírgula entre seletores, onde aplica para ambos os elementos
                        </p>
                        <p class="descricao">
                            <strong>seletor de especificação</strong>: Como <b>div p{}</b>, que só aplica a elementos <b>p</b> que estão em <b>divs</b>.
                        </p>
                        <p class="descricao">
                            <strong>></strong> :Com exemplo <b>header > p</b>, estou pegando todos os elementos <b>p</b>, cujo cujo <b>pai</b> é o <b>header</b>, ou seja, se em <b>header</b>, tiver uma <b>section</b> e dentro da <b>section</b> tiver um elemento <b>p</b>, esse <b>p</b> não receberia formatação, enquanto <b>p</b> em <b>header</b> receberia;
                        </p>
                        <p class="descricao">
                            <strong>+</strong>: Pega o elemento <b>p</b> que está logo após o <b>header</b>
                        </p>
                        <p class="descricao">
                            <strong>~</strong> : É um seletor que pegará todos os elementos que o sucedem, ou seja, <b>header ~ p</b>, todos os elementos <b>p</b> que sucedem o header vai ter aquela formatação aplicada;
                        </p>
                        <p class="descricao">
                            <strong>[ ]</strong>: Utiliza o atributo como seletor, onde que todo elemento com aquele atributo, receberá formatação, onde podemos ir além e selecionar o valor desse atributo
                        </p>
  
                    </div>
                    
                
                    <div class="codepen">
                    </div>
        
                    
                
            </div>
    
            
    
        </section>
    </main>
    


    <script src="../../../Javascript/script.js"></script>
</body>
</html>