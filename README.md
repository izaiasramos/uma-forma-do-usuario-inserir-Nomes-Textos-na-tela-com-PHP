# uma forma do usuario inserir Nomes/Textos na tela com PHP
 

<pre> 
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
</pre>
