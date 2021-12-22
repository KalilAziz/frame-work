<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/conteudo.css">
    <link rel="stylesheet" href="../../css/style.css">
    <script>
        var active = 4
        var voltar = "index.php"
        var link_geral = "../../../"
        var caminho_camada  = "../../../" 
        var icon = "../../../assets"
      </script>
      
  </head>
  <body>
      <?php
              include '../../../modules/active.php';
      ?>
  
          <?php
              include '../../../modules/header.php';
          ?>


    
    <section>

    <?php
              include '../../../modules-conteudo/javascript/js-basico.php';
          ?>

    </section>


    <section>
    <?php
              include '../../../modules-conteudo/javascript/js-logica-programacao.php';
          ?>
    </section>



    <section>
    <?php
              include '../../../modules-conteudo/javascript/avancado-funcoes.php';
          ?>
    </section>


    <section>
    <?php
              include '../../../modules-conteudo/javascript/avancado-array.php';
          ?>
    </section>

    <section>
    <?php
              include '../../../modules-conteudo/javascript/js-objeto-prototypes.php';
          ?>
    </section>


    <section>
    <?php
              include '../../../modules-conteudo/javascript/js-classes-poo-prototypes.php';
          ?>
    </section>


    <section>
    <?php
              include '../../../modules-conteudo/javascript/js-assincrono.php';
          ?>
    </section>

        
    <script src="../../Javascript/script.js"></script>
</body>
</html>