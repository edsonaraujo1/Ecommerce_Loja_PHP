<?php

session_name("pesq_nome");
session_start();
$Edit0_x = $_SESSION['Edit0x'];


	if (!empty($Edit0_x)){
	
		$sql  = "SELECT * FROM produto2 WHERE nome LIKE '%$Edit0_x%'";
		
		$result_1 = @mysql_query($sql);
		
		$row_1    = @mysql_fetch_array($result_1);
		
		$cod_nome = @$row_1['nome'];
		
		if (!empty($cod_nome)){  // Se o nome for diferente de branco
		
		    if (!empty($Edit2_x)){ // Se ordem de valor e branco
		    		
		    	if ($Edit2_x == 1){ // se order for 1 valor maior
		    			
		    		$sql  = "SELECT * FROM produto2 WHERE nome LIKE '%$Edit0_x%' ORDER BY valor2 ASC";
	    			
		    	}else{              // se nao valor menor
		    			
		    	    $sql  = "SELECT * FROM produto2 WHERE nome LIKE '%$Edit0_x%' ORDER BY valor2 DESC";
		    	}
		    	
		     }else{
		     	
		    	 $sql  = "SELECT * FROM produto2 WHERE nome LIKE '%$Edit0_x%' ORDER BY nome ASC";
		     }	
	
	
	         session_start();
             $_SESSION['Edit1'] = "";

		  }else{
		  	
		    if (!empty($Edit2_x)){ // Se ordem de valor e branco
		    		
		    	if ($Edit2_x == 1){ // se order for 1 valor maior
		    			
		    		$sql  = "SELECT * FROM produto2 ORDER BY valor2 ASC";
	    			
		    	}else{              // se nao valor menor
		    			
		    	    $sql  = "SELECT * FROM produto2 ORDER BY valor2 DESC";
		    	}
		    	
		     }else{
		     	
		    	 $sql  = "SELECT * FROM produto2 ORDER BY nome ASC";
		     }	
		  	  //$Edit0_x = "";
		  	  $sql  = "SELECT * FROM produto2 ORDER BY nome ASC";
		  }  		
	
	   		
	}else{
		
		    if (!empty($Edit2_x)){ // Se ordem de valor e branco
		    		
		    	if ($Edit2_x == 1){ // se order for 1 valor maior
		    			
		    		$sql  = "SELECT * FROM produto2 ORDER BY valor2 ASC";
	    			
		    	}else{              // se nao valor menor
		    			
		    	    $sql  = "SELECT * FROM produto2 ORDER BY valor2 DESC";
		    	}
		    	
		     }else{
		     	
		    	 $sql  = "SELECT * FROM produto2 ORDER BY nome ASC";
		     }	
		
	}


if (!empty($Edit1_x)){
	

    $sql  = "SELECT * FROM produto2 WHERE categoria = '$Edit1_x' ORDER BY nome ASC";

	$result_1 = @mysql_query($sql);
		
	$row_1    = @mysql_fetch_array($result_1);
		
	$cod_nome = @$row_1['nome'];
		
	if (empty($cod_nome)){  // Se o nome for diferente de branco

       $Edit1_x = "";
       $mens_1 = "Categoria não Cadastrada";

		    if (!empty($Edit2_x)){ // Se ordem de valor e branco
		    		
		    	if ($Edit2_x == 1){ // se order for 1 valor maior
		    			
		    		$sql  = "SELECT * FROM produto2 ORDER BY valor2 ASC";
	    			
		    	}else{              // se nao valor menor
		    			
		    	    $sql  = "SELECT * FROM produto2 ORDER BY valor2 DESC";
		    	}
		    	
		     }else{
		     	
		    	 $sql  = "SELECT * FROM produto2 ORDER BY nome ASC";
		    	 

		     }	


    }else{
    	
    	
    	if (!empty($Edit2_x)){ // Se ordem de valor e branco
		    		
		    if ($Edit2_x == 1){ // se order for 1 valor maior
		    			
		    	$sql  = "SELECT * FROM produto2 WHERE categoria = '$Edit1_x' ORDER BY valor2 ASC";
	    			
		    }else{              // se nao valor menor
		    			
		    	$sql  = "SELECT * FROM produto2 WHERE categoria = '$Edit1_x' ORDER BY valor2 DESC";
		    }
		    	
		 }else{
		     	
		     $sql  = "SELECT * FROM produto2 WHERE categoria = '$Edit1_x' ORDER BY nome ASC";
		 }	

    	
    	session_name("pesq_nome");
        session_start();
        $_SESSION['Edit0x']    = "";

    	
    }

    
}else{

}

?>