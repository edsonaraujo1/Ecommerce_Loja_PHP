<?php

/**
 * @author holodek
 * @copyright 2009
 */

$sql  = "SELECT * FROM produto2 WHERE excluido = 'NAO' ORDER BY nome ASC";

session_name("pesq_nome");
session_start();
$Edit0_x = $_SESSION['Edit0x'];

// Consulta pelo nome
if (!empty($Edit0_x)){

   $sql  = "SELECT * FROM produto2 WHERE nome LIKE '%$Edit0_x%' AND excluido = 'NAO'";
   
   if (!empty($Edit2_x)){
   	   if ($Edit2_x == '1'){
   	   	
   	   	  $sql  = "SELECT * FROM produto2 WHERE nome LIKE '%$Edit0_x%' AND excluido = 'NAO' ORDER BY valor2 ASC";
   	   	
   	   	
   	   }else{
   	   	
   	   	  $sql  = "SELECT * FROM produto2 WHERE nome LIKE '%$Edit0_x%' AND excluido = 'NAO' ORDER BY valor2 DESC";
   	   	
   	   }
   	
   }else{
   	
   	   	  $sql  = "SELECT * FROM produto2 WHERE nome LIKE '%$Edit0_x%' AND excluido = 'NAO' ORDER BY valor2 ASC";
   	
   	
   }
}


// Consulta pelo Categoria
if (!empty($Edit1_x)){

   $sql  = "SELECT * FROM produto2 WHERE categoriaa = '$Edit1_x' AND excluido = 'NAO'";
   
   if (!empty($Edit2_x)){
   	   if ($Edit2_x == '1'){
   	   	
   	   	  $sql  = "SELECT * FROM produto2 WHERE categoriaa = '$Edit1_x' AND excluido = 'NAO' ORDER BY valor2 ASC";
   	   	
   	   	
   	   }else{
   	   	
   	   	  $sql  = "SELECT * FROM produto2 WHERE categoriaa = '$Edit1_x' AND excluido = 'NAO' ORDER BY valor2 DESC";
   	   	
   	   }
   	
   }

}

?>