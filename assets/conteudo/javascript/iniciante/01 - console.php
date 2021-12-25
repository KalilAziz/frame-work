<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estrutura.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Console</title>
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

            <div class="title"><h1 class="basico">Console</h1></div>
     
            <div class="container">
                


                    <div class="conteudo">
                        <p class="descricao">
                             O método console.log serve para exibir o conteudo no console, onde pode ser feito com qualquer valor, sempre que for texto, temos que colocar entre aspas, se for números ou variáveis, não precisa. Para as várias forma de declaração de valores que possamos utilizar em console.log, utilizamos da seguinte maneira:
                        </p>
                        <p class="descricao">
                              <span>console.log('Hello World!')</span>: String, precisa ser colocado entre aspas
                        </p>
                        <p class="descricao">
                              <span>console.log("Kalil 'Aziz' ")</span>: Exemplo de situação que queremos utilizar aspas dentro do console.log, mas temos que ter atenção para não dar conflito
                        </p>
                        <p class="descricao">
                              <span>console.log(`"Kalil" 'Aziz'`)</span>: Utilizando crazr, não temos problema com as crazes e conflitos
                        </p>
                        <p class="descricao">
                             <span>console.log(1)</span>: Number, não precisa ser colocado entre aspas
                        </p>
                        <p class="descricao">
                             <span>console.log(123, 456, 'Kalil Aziz')</span>: Podemos exebir vários valores também dentro do console.log, desde que etejam separados por ","
                        </p>

                        
                        
                    </div>
                    
                
                    <div class="codepen">
                    <p class="codepen" data-height="400" data-theme-id="dark" data-default-tab="js" data-slug-hash="GRMqeMb" data-preview="true" data-editable="true" data-user="kalilaziz" style="height: 200px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                    <span>See the Pen <a href="https://codepen.io/kalilaziz/pen/GRMqeMb">
                    Console</a> by KalilAziz (<a href="https://codepen.io/kalilaziz">@kalilaziz</a>)
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