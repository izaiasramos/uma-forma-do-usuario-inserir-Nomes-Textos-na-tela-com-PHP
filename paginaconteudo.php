
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google Fonts Pre Connect -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts Links (Roboto 400, 500 and 700 included) -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">

  <!-- CSS Files Links -->
  <link rel="stylesheet" href="./styles.css">

  <!-- Title -->
  <title>puxar conteudo</title>
</head>

<body>

  <form method= "POST">
   <label for="nome">Novo nome:</label> <br>
    <input type="text" name="nome">
    <input type="submit" value="Adicionar">
</form>
<h2>Lista de nomes</h2>


<?php 
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $nomes = file_get_contents('nomes.txt');
  
  if($nome){
  $nomes .= "<li>".$nome."</li>";
  file_put_contents('nomes.txt', $nomes);
  echo $nomes;
  } else {
      echo $nomes;
  }

?>

     









  <footer>
    <p>Maneira de o usuário imprimir na tela alguns nomes ou texto.</p>
  </footer>

  <noscript>Your browser don't support JavaScript!</noscript>
  <script src="./scripts.js"></script>
</body>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google Fonts Pre Connect -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts Links (Roboto 400, 500 and 700 included) -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">

  <!-- CSS Files Links -->
  <link rel="stylesheet" href="./styles.css">

  <!-- Title -->
  <title>puxar conteudo</title>
</head>

<body>

  <form method= "POST">
   <label for="nome">Novo nome:</label> <br>
    <input type="text" name="nome">
    <input type="submit" value="Adicionar">
</form>
<h2>Lista de nomes</h2>


<?php 
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $nomes = file_get_contents('nomes.txt');
  
  if($nome){
  $nomes .= "<li>".$nome."</li>";
  file_put_contents('nomes.txt', $nomes);
  echo $nomes;
  } else {
      echo $nomes;
  }

?>

     









  <footer>
    <p>Maneira de o usuário imprimir na tela alguns nomes ou texto.</p>
  </footer>

  <noscript>Your browser don't support JavaScript!</noscript>
  <script src="./scripts.js"></script>
</body>

</html>