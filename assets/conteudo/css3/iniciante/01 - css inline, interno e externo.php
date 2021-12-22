<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>CSS inline, CSS interno e CSS externo</title>
    <script>
        var active = 3
        var voltar = "conteudo/css3/css - basico.php"
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

            <div class="title"><h1 class="basico"> CSS inline, CSS interno e CSS externo</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                            O css inline é uma maneira de modificar a aparência de um elemento no próprio elemento, não sendo muito recomendável, já que não será tão eficiente. Para declarar o css inline, precisamos colocar o atributo <b>style=""</b> em alguma div.
                        </p>
                        <p class="descricao">
                            O css interno é uma maneira de modificar a aparência de um elemento em uma estrutura que ainda está dentro da página HTML, sendo necessário declarar a tag 	<strong>&lt;style	&gt;	&lt;/style	&gt;</strong> dentro da tag 	<strong>&lt;head	&gt;	&lt;/head	&gt;</strong> , mas também não é muito recomendável, já que não será tão eficiente.
                        </p>

                        <p class="descricao">
                            A declaração do css externo é a melhor opção, já que ficam em uma página própria, facilitando muito na hora da manutenção ou edição do código.  Para que possa ser feito, primeiramente criamos uma página com extensão <b>“.css”</b>, sendo o mais comum “style.css”, posteriormente basta fazer um link na tag 	<strong>&lt;head	&gt;	&lt;/head	&gt;</strong>, ligando a página css a página HTML. Esse link pode ser feito da seguinte forma: 	<strong>&lt;link rel="stylesheet" href="style.css"	&gt;</strong>, onde o <b>href=""</b> será o nome e local da página css
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