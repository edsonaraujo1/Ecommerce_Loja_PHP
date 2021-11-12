<?php

/**
 * @author holodek
 * @copyright 2009
 */

session_name("pesq_nome");
session_start();
$Edit0_x = $_SESSION['Edit0x'];


// Consulta pelo nome
if (!empty($Edit0_x)){

   $sql  = "SELECT * FROM produto2 WHERE nome LIKE '%$Edit0_x%'";
   
   if (!empty($Edit2_x)){
   	   if ($Edit2_x == '1'){
   	   	
   	   	  $sql  = "SELECT * FROM produto2 WHERE nome LIKE '%$Edit0_x%' ORDER BY valor2 ASC";
   	   	
   	   	
   	   }else{
   	   	
   	   	  $sql  = "SELECT * FROM produto2 WHERE nome LIKE '%$Edit0_x%' ORDER BY valor2 DESC";
   	   	
   	   }
   	
   }

}else{
	
	$sql  = "SELECT * FROM produto2 ORDER BY nome ASC";
	
}

// Consulta pela categoria
if (!empty($Edit1_x)){
	
   $sql  = "SELECT * FROM produto2 WHERE categoria = '$Edit1_x'";
	
   if (!empty($Edit2_x)){
   	   if ($Edit2_x == '1'){
   	   	
   	   	  $sql  = "SELECT * FROM produto2 WHERE categoria = '$Edit1_x' ORDER BY valor2 ASC";
   	   	
   	   }else{
   	   	
   	   	  $sql  = "SELECT * FROM produto2 WHERE categoria = '$Edit1_x' ORDER BY valor2 DESC";
   	   	
   	   }
   	
   }
	

}

?>