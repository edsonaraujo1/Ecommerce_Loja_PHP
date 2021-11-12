<? 
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Autor da Rotinas...: Daniel Menezes sacddm@ieg.com.br
 Finalidade.........: Layout Compras
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/

class TMySQL { 
 var $host;
 var $db;
 var $user;
 var $pass;
 var $soquete;

 function connect($host,$db,$user,$pass) { 
   $this->host = $host; 
   $this->db  = $db; 
   $this->user = $user; 
   $this->pass = $pass; 
   $this->soquete=mysql_connect($this->host,$this->user,$this->pass);
   if (!$this->soquete) { 
     echo "Não foi possível conectar-se ao Bando de Dados MySQL"; 
   }
   else
   {
   if (!mysql_select_db($this->db,$this->soquete)) { 
     echo "Banco de dados não encontrado"; 
   } 
   }
 }

 function query ($string) { 
   $myquery = mysql_query($string,$this->soquete); 
   if (!$myquery) { 
      echo "Erro na consulta da query!<br>" . $string;
   } 
   else
   { 
	  return $myquery;
   }
 }
}
?>