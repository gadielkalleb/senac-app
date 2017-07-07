<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title><?php print $cabecalho_title; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Materialize CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>

</head>

<body class="blue-grey lighten-4">

  <header>
    <nav class=" black">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Senac App</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
         <ul class="left hide-on-med-and-down">
            <li><a href="alunos.php">Alunos</a></li>
            <li><a href="professores.php">Professores</a></li>
            <li><a href="cursos.php">Cursos</a></li>       
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="alunos.php">Alunos</a></li>
            <li><a href="professores.php">Professores</a></li>
            <li><a href="cursos.php">Cursos</a></li>      
      </ul>
      </div>
    </nav>
  </header>
