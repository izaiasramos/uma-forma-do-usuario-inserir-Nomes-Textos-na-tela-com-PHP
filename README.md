# uma forma do usuario inserir Nomes/Textos na tela com PHP
 

<?php 
echo "<pre>";

  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); echo "<br>";
  $nomes = file_get_contents('nomes.txt');                                 echo "<br>";
  
  if($nome){                                                               echo "<br>";
  $nomes .= "<li>".$nome."</li>";                                          echo "<br>";
  file_put_contents('nomes.txt', $nomes);                                  echo "<br>";
  echo $nomes;                                                             echo "<br>";
  } else {                                                                 echo "<br>";
      echo $nomes;                                                         echo "<br>";
  }

echo "</pre>";
?>
