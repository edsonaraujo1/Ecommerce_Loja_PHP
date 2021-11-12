<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Desenvolvido por...: Jean Carlos de Araujo
 
 Finalidade.........: logar do Sistema
 Criado em Data.....: 06/07/2009
 Ultima Atualizaчуo : 18/08/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include_once("config.php");

$nome2 = escapestrings2($_POST['log_name_c']);
$senh2 = escapestrings2($_POST['pwd']);

include_once('sql_injection.php');

if ($servletjs2 == '20$$20'){


if($_GET['acao'] == "logar") {

    // Abre Conexуo com o MySql
    include("conexao.php");
    //  Chama o Banco de Dados
    $link = @mysql_connect($host,$user,$pass);

    @mysql_select_db($db);
    
    
    if (!empty($_POST['log_name_c'])){
    	
        // OK
        
    }else{
    	//echo "nome branco";
    	header("Location: senha_erro.php?login=falhou&causa=".urlencode(''));
    	exit;
    }
    if (!empty($_POST['pwd'])){
    	
        // OK
        
    }else{
    	//echo "nome branco";
    	header("Location: senha_erro.php?login=falhou&causa=".urlencode(''));
    	exit;
    }
    
    // Consulta Autenticacao   
    $consulta1  = "SELECT * FROM tt_ser_01 WHERE login = '". anti_sql_injection($nome2) ."'";
		
    // Retorno o Resultado da Pesquisa
    $resultado1 = @mysql_query($consulta1);

    $row1       = @mysql_fetch_array($resultado1);

    $id1        = @$row1["id"];

    if (!empty($id1)){

	    // Consulta Autenticacao   
	    $consulta2  = "SELECT * FROM tt_ser_01 WHERE senha = '". anti_sql_injection($senh2) ."'";
			
	    // Retorno o Resultado da Pesquisa
	    $resultado2 = @mysql_query($consulta2);
	
	    $row2       = @mysql_fetch_array($resultado2);
	
	    $id2        = @$row2["id"];

        if (!empty($id2)){

            header("Location: principal.php");
            
            $edi1        = @$row2["edi1"];
            $edi2        = @$row2["edi2"];
            $edi3        = @$row2["edi3"];
            $data_atual  = @$row2["data_entrada"];
            $data_log_2  = @$row2["ultima_dt"];
			$data_hj     = date("d/m/Y")." as ".date("H:i");
            $senha_user  = addslashes($_POST['pwd']);
            $data_agora  = substr($data_atual,0,10);
            $acesso_site = @$row2["acess_site"];    

            $so_1 = $acesso_site+1;
            
            @session_start();	
            $_SESSION['data_log_2']   = trim($data_log_2);
		    $_SESSION["log_name_c"]   = trim(strtoupper($nome2));	
		
	        $consulta_log = "UPDATE tt_ser_01 SET ultima_dt     = '$data_atual',
	                                              data_entrada  = '$data_hj',
												  acess_site    = '$so_1' WHERE login = '". anti_sql_injection($nome2) ."' AND senha = '". anti_sql_injection($senha_user) ."'";			
	        @mysql_query($consulta_log, $link);

			// Atualiza arquivo Log
			$data_log = date("d/m/Y");
			$hora_log = date("H:i:s"); 
			$even_log = "ENTRADA NO SISTEMA";


            // Atualiza Usuarios Logados
            $tempmins = ($tempmins) ? $tempmins : 480;  // 480 e = a 8  540 e igual a 9 horas
            @mysql_query("DELETE FROM user_logados WHERE timestamp<".(time()-($tempmins*60)));

			  //--- Informa quantos usuarios estao conectados ao sistema
			  $date_time = date("d/m/Y");
			  $hora_time = date("H:i:s");
			  $timestamp=time(); 
			  $timeout=time()-100; // valor em segundos 
			  $result=@mysql_db_query($db, "INSERT INTO user_logados VALUES ('$timestamp','$REMOTE_ADDR','$PHP_SELF','$date_time','$hora_time','$nome2')");
     
			exit;
      	
        	
        }else{
        	
             header("Location: senha_erro.php?login=falhou&causa=".urlencode(''));
             exit;
        	
        }	

}else{
	
	
	 header("Location: senha_erro.php?login=falhou&causa=".urlencode(''));
     exit;

	
}
}
// Verifica se o login esta correto
//if(@session_is_registered("log_name_c") == false) {
//    header("Location: login.php");
//}

}

function escapestrings2($b) {
    //se magic_quotes nуo estiver ativado, escapa a string
    if (!get_magic_quotes_gpc()) {
        return @mysql_escape_string($b); // funчуo nativa do php para escapar variсveis.
    } else { 
        // caso contrario
        return $b; // retorna a variсvel sem necessidade de escapar duas vezes
    }
}

?>