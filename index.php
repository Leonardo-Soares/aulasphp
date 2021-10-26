<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>
    <h1 class="text-center">01 - FUNDAMENTOS BÁSICOS</h1>
    <?php
      echo "Teste echo <br>";
      print "Teste print";
    ?>

    <h2 class="text-center">02 - VARIÁVEIS</h2>
    <?php
      $nome = "Leonardo";
      $nasc = "26/08/2021";
      $numero = "99";

      echo "Nome: $nome <br> Número: $numero <br>";
      echo "Data de Nascimento: $nasc";

      echo "<br> <br> Novo usuário com variáveis: <br>";

      $nome = "Soares";
      $nasc = "08/08/2021";
      $numero = "01";

      echo "Nome: $nome <br> Número: $numero <br>";
      echo "Data de Nascimento: $nasc <br>";

      echo "<br><p>Nomes valídos para variáveis: </p>";
      echo "nome <br> _meunome <br> meunome10 <br> Meunome <br><br>";


      echo "Nomes invalídos para variáveis: <br>  ";
      echo "123nome <br> nome*&!@# <br> nome nome";

      

    ?>

    <h2>03 - VARIÁVEIS DINÂMICAS</h2>
    <?php 
      $agencia = "Brawn";
      $$agencia = "Grafica";

      echo $Brawn;
      echo "<br> $agencia";    
    ?>
    
    <h2>04 - TIPOS DE DADOS</h2>
    <h3>ESCALARES</h3>
    <?php 
      echo "String <br>";
      $dadoString = "Texto e Números";
      var_dump($dadoString);
      if (is_string($dadoString)):
        echo "Positivo String";
      else:
        echo "Negativo String";
      endif;

      echo "<br>Inteiro <br>";
      $agencia = 123;
      var_dump($agencia); // Tipo, (Tamanho) e conteúdo da variável
      if(is_string($agencia)):
        echo "Isso é um Inteiro !!!";
      else: 
        echo "Isso não é uma Inteiro !!!";
      endif;

      echo "<br> Float <br>";
      $dadoFloat = 123.5;
      var_dump($dadoFloat);
      if (is_float($dadoFloat)):
        echo "Positivo Float";
      else:
        echo "Negativo Float";
      endif;
    ?>

    <br><br>
    <h3>COMPOSTOS</h3>
    <?php
      echo "<br> Array <br>";
      $dadoArray = array(
      "C#",5,
      "HTML",7,
      "JavaScript",8,
      "Atualização", true
      );
      var_dump($dadoArray);

      if (is_array($dadoArray)):
        echo "Positivo Array";
      else:
        echo "Negativo Array";
      endif;

      echo "<br> OBJETO <br>";
      
      class Cliente
      {
        public $nome;
        public function atribuirNome($nome){
          $this->$nome = $nome;
        }
      }
      
      $cliente = new Cliente();
      $cliente->atribuirNome("Leonardo");
      var_dump($cliente);

      if(is_object($cliente)):
        echo "Positivo Objeto";
      else:
        echo "Negativo Objeto";
      endif;

    ?>

    <br><br>
    <h3>ESCOPO DE VARIAVÉIS</h3>
    <?php 
      echo "<br> ESCOPO GLOBAL <br>";
      $nome = "Leonardo";

      function exibeNome()
      {
        global $nome;
        echo $nome;
      }
      exibeNome();

      
      echo "<br> ESCOPO LOCAL <br>";
      function exibiNumero()
      {
        global $numero;
        $numero = 12341111;
      }

      exibiNumero();
      echo $numero;

      echo "<hr>";
      
      $a = 10;
      $b = 15;
      $c = 25;

      function soma()
      {
        echo $GLOBALS['a'] % $GLOBALS['b'];
      }

      soma();
       

    
    ?>

    <br><br>
    <h3>CONSTANTES</h3>
    <?php
      echo "Indentificador para um valor ÚNICO <br><br>";

      define("NOME", "Leonardo");
      define("ID", 1);
      echo NOME;
      echo ID;

      define("PRODUTOS", ['CAMISA 1', 'CAMISA 2', 'CAMISA 3']);
      echo "<br>";
      echo PRODUTOS[2];

      echo '<br>Meu nome é '.NOME.', minha indentificação é '.ID. '.';

      function exibir()
      {
        echo "<hr> Nossa função exibir: ";
        echo NOME;
      }

      exibir();

    ?>


    <br><br>
    <h3>ARRAYS #1</h3>

    <p>Índice: Posição especifica de um array</p>
    <?php
     $livros = array("Laravel", "PHP", "Flutter");
     echo "<br>";
     echo "Indíce: posição do elemento no array";
     echo "<br>";
     echo "Indíce zero do array livros, chamada especifíca de um array: <b>",$livros[0],"</b>";
     echo "<br>";
     echo "Chamada de um array inteiro: ";
     print_r($livros); // Print especial para exibir arrays
     echo "<hr>";

     $pacientes = array(1=>"Paciente 123", 2=>"Paciente 23");
     print_r($pacientes);
     echo "<br>";
     $pacientes[10] = "Paciente 99";
     print_r($pacientes);
     echo "<br>";
     echo $pacientes[10]; // Incremento em uma posição especifíca de um array

     echo "<hr>";
     echo "O array não precisa iniciar com elementos, ele pode ser vazio.";
     echo "No exemplo abaixo vamos incrementar em um array vazio";
     echo "<br>";
     $linguagem = array();
     $linguagem[] = "C#";
     $linguagem[] = "C++";
     $linguagem[] = "Python";
     print_r($linguagem);
     
    ?>

    <br><br>
    <h3>Aula 13 - ARRAYS #2</h3>
    <?php
      echo "count(nomearray): exibi a quantidade de ELEMENTOS dentro de um array";
      $brinquedos = array("Boneco", "Carro");
      $total = count($brinquedos);
      echo "Total de briquedos agora é: <b>", $total, "</b>";
      echo "<br>";
      // incrementa
      $brinquedos[] = "Barco";
      $brinquedos[] = "Avião";
      $total = count($brinquedos);
      echo count($brinquedos);
      echo "Total de briquedos agora é: <b>", $total, "</b>";

      echo "<h8>", $brinquedos[0], "</h8>";
      echo "<br>";
      foreach ($brinquedos as $valor) {
        
        echo $valor." - R$: <br> [beta] ";  
        # code...
      }

    ?>

    <br><br>
    <h3>Aula 14 - ARRAYS #3</h3>
    <?php
    ?>


    <br><br><br><br><br>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>