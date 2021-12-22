<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Pseudo-Classes</title>
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

            <div class="title"><h1 class="avancado">Pseudo-Classes</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                            As pseudo classes são um tipo de seletores, onde conseguimos selecionar um elemento baseado em alguma característica dele. A diferença das pseudos classes dos pseudos elementos é que utilizamos somente um <b>:</b> em vez de dois.
                        </p>
                        <p class="descricao">
                            <strong>:focus</strong>: Aplica aquela propriedade ao elemento que está em foco.
                        </p>
                        <p class="descricao">
                            <strong>:first-child</strong>: Se o elemento selecionado for o primeiro filho, também sendo o primeiro elemento receberá as propriedades css.
                        </p>
                        <p class="descricao">
                            <strong>:first-of-type</strong>: É muito parecido com o :first-child, mas a diferença é que o primeiro do seu tipo receberá as formatações, não importa se ele é ou não o primeiro filho do elemento <b>pai</b>.
                        </p>
                        <p class="descricao">
                            Se quisermos escolher qual filho do elemento pai desejamos que seja aplicado a formatação, utilizamos <strong>:nth-child( )</strong>, onde seu valor será o número do <b>filho</b>.
                        </p>
                        <p class="descricao">
                            <strong>:nth-of-type( )</strong>: que pega apenas do seu tipo para aplicar as formatações.
                        </p>
                        <p class="descricao">
                            <b>OBS1:</b> nos valores entre parênteses, podemos colocar o valor de 2n por exemplo, onde aplicará suas formatações em todos os valores que sejam divisíveis por dois, ou pode aplicar apenas nos valores imparas com (odd), ou nos valores pares com (even).
                        </p>
                        <p class="descricao">
                            <strong>nth-last-child( )</strong>: Pega os <b>filhos</b> só que de trás para frente para aplicar as formatações.
                        </p>
                        <p class="descricao">
                            <strong>:last-child( )</strong>: Pega o elemento de trás pra frente e se ele for o primeiro, aplicará as formatações. 
                        </p>
                        <p class="descricao">
                            <strong>last-of-type( )</strong> Pegará o do seu tipo de trás pra frente e aplicará as formatações
                        </p>
                        <p class="descricao">
                            <strong>:not( )</strong>: Para aplicar as aplicações css em todos elementos menos em um específico
                        </p>
                    </div>                
                
            </div>
    
            
    
        </section>
    </main>
    


    <script src="../../../Javascript/script.js"></script>
</body>
</html>