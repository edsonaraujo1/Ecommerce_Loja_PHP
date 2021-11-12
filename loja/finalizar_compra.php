<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Finalizar Compra Loja Virtual
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 07/07/2008 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include('titulo.php');

include_once("../config.php");

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2 = $_SESSION['data_log_2'];

$link = @mysql_connect($host,$user,$pass)

    or die( include("../login.php"));

@mysql_select_db($db);


$erros = "";

$send_sesao = session_id();

include_once('../sql_injection.php');

include_once('phpmailer/class.phpmailer.php');

?>

<style type="text/css">
<!--

.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}

-->
</style>

<html>
<body bgcolor="#FFFFFF" style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; " >

<?

if (!empty($HTTP_POST_VARS["FORM"])){

		if(empty($HTTP_POST_VARS["TNOME"])){
		   $erros .= "O nome deve ser preenchido.<br />";
		}
				
		if(empty($HTTP_POST_VARS["TMAIL"]) ){
		   $erros .= "O E-mail deve ser preenchido.<br />";
		}else{
		   $email = $HTTP_POST_VARS["TMAIL"];
		   eregi("([\._0-9A-Za-z-]+)@([0-9A-Za-z-]+)(\.[0-9A-Za-z\.]+)",$email,$match);
		   if(!isset($match)){
		      $erros .= "O e-mail informado é inválido.<br />";
		   }
		}
		if($HTTP_POST_VARS["PAGTO"] == "Selecione"){
		   $erros .= "O Tipo de Pagamento deve ser Informado.<br />";
		}
	
		if(empty($HTTP_POST_VARS["TCEP"])){
		   $erros .= "O CEP deve ser preenchido.<br />";
		}
	


		$receber_0 = 0;
		
		if ($HTTP_POST_VARS["PAGTO"] == "A Combinar")
		{
		    $receber_0 = 2;	
		}
		if ($HTTP_POST_VARS["PAGTO"] == "No Ato da Entraga")
		{
		    $receber_0 = 2;	
		}
		if ($HTTP_POST_VARS["PAGTO"] == "Dinheiro")
		{
		    $receber_0 = 1;	
		}
		if ($HTTP_POST_VARS["PAGTO"] == "Cartão de Credito")
		{
		    $receber_0 = 1;	
		}
		if ($HTTP_POST_VARS["PAGTO"] == "Cheque")
		{
		    $receber_0 = 1;	
		}
		if ($HTTP_POST_VARS["PAGTO"] == "Depósito Bancario")
		{
		    $receber_0 = 1;	
		}
		if ($HTTP_POST_VARS["PAGTO"] == "Sedex a cobrar")
		{
		    $receber_0 = 2;	
		}
		if ($HTTP_POST_VARS["PAGTO"] == "Pagamento Seguro (Pagseguro)")
		{
		    $receber_0 = 1;	
		}
		
		if ($receber_0 == 1){  // Cartao,Cheque,Deposito,Boleto
	
			if( empty($erros) ){
			
			
			
			
			
					//Requisitanto o codigo do pedido
					$consulta  = "select * from pedidos_cliente ORDER BY ID_PEDIDO_CLIENTE DESC LIMIT 0,1";
					
					$resultado = @mysql_query($consulta);
					
					$row = @mysql_fetch_array($resultado);
					
					$id_ped_cli  = @$row["ID_PEDIDO_CLIENTE"];
					
					$nov_id_cli  = $id_ped_cli + 1;
					 
					// Gravando os Dados do Cliente
					$consulta0 = "INSERT INTO pedidos_cliente (ID_PEDIDO_CLIENTE, Nome, Endereco, Cidade, Estado, CEP, CPF, tipo_pagto)
						 VALUES ('". $nov_id_cli ."',
						         '". $HTTP_POST_VARS["TNOME"] ."',
								 '". $HTTP_POST_VARS["TENDERECO"] ."',
								 '". $HTTP_POST_VARS["TCIDADE"] ."',
								 '". $HTTP_POST_VARS["TESTADO"] ."',
								 '". $HTTP_POST_VARS["TCEP"] ."',
								 '". $HTTP_POST_VARS["TCPF"] ."',
								 '". $HTTP_POST_VARS["PAGTO"] . "')";
					
								@mysql_query($consulta0, $link) or
					
					                         die("echo '<script>alert('Erro: Falha incluindo !!!');</script>'	
									              echo '<script>history.go(-2);</script>'");	
					
					// Abrir tabela tbl_carrinho e atualizando pedidos do cliente
					
					$consulta  = "UPDATE tbl_carrinho SET ID_PEDIDO_CLIENTE = '". anti_sql_injection($nov_id_cli)."' WHERE `sessao` = '". anti_sql_injection($send_sesao)."'";
					
					@mysql_query($consulta, $link);
					
					
					// Consultando Pedidos do Cliente
					$consulta1  = "select * from tbl_carrinho WHERE ID_PEDIDO_CLIENTE = '". anti_sql_injection($nov_id_cli) ."'";
					
					$resultado1 = @mysql_query($consulta1);
					
					
					// Consultando Nome do Cliente
					$consulta2  = "select * from pedidos_cliente WHERE ID_PEDIDO_CLIENTE = '". anti_sql_injection($nov_id_cli) ."'";
					
					$resultado2 = @mysql_query($consulta2);
					
					$row2       = @mysql_fetch_array($resultado2);
					
					$ser_ped    = @$row2["ID_PEDIDO_CLIENTE"];
					$nome2      = @$row2["Nome"];
					$endereco2  = @$row2["Endereco"];
					$nume2      = @$row2["numero"];
					$cep2       = retirar_pontoevirgula(@$row2["CEP"]);
					$cidade2    = @$row2["Cidade"];
					$estado2    = @$row2["Estado"];
					$bairro2    = @$row2["Bairro"];
					$ddd2       = @$row2["ddd"];
					$fone2      = retirar_pontoevirgula(@$row0["fone_fix"]);
					$mail_des   = $HTTP_POST_VARS["TMAIL"];
								   
					$nume2      = "";
					$ddd2       = "11";
								        
					$valor_inf1 = 0;
					$i          = 0;
					
					// -- Informacoes para o Pagseguro
					?>
					
					
									<form target="pagseguro" name='form2' method="post" action="https://pagseguro.uol.com.br/security/webpagamentos/webpagto.aspx">
									  <div align="center">
									  <input type="hidden" name="email_cobranca" value="edsonaraujo1@hotmail.com"/>
									  <input type="hidden" name="tipo" value="CP"/>
									  <input type="hidden" name="moeda" value="BRL"/>
									  
									<?
								
										while ($linha = @mysql_fetch_array($resultado1))
										{
					
										    $id          = $linha["id"]; 
										  	$cod_prod_2  = $linha["cod"];
											$prod_nome   = $linha["nome"];
											$prod_valor  = $linha["preco"];
					                        $qtd_1       = $linha["qtd"];
					                        
										    $valor_to_2  = 0;
						
										    $valor_to_2  = $prod_valor *  $qtd_1;
											$valor_fim_2 = $valor_fim_2 + $valor_to_2; 
									
								            $valor_inf1 = retirar_pontoevirgula(number_format($prod_valor, 2, '',''));
								
										    $i = $i + 1;
										
										    $var_1 = trim("item_id_".$i);  
										    $var_2 = trim("item_descr_".$i);  
										    $var_3 = trim("item_quant_".$i);  
										    $var_4 = trim("item_valor_".$i);  
										    $var_5 = trim("item_frete_".$i);  
										    $var_6 = trim("item_peso_".$i);  
								
											?>
											  
											<input type="hidden" name="<?=$var_1;?>" value="<?=$cod_prod_2;?>"/>
											  <input type="hidden" name="<?=$var_2;?>" value="<?=$prod_nome;?>"/>
											  <input type="hidden" name="<?=$var_3;?>" value="<?=$qtd_1;?>"/>
											  <input type="hidden" name="<?=$var_4;?>" value="<?=$valor_inf1;?>"/>
											  <input type="hidden" name="<?=$var_5;?>" value="0"/>
											  <input type="hidden" name="<?=$var_6;?>" value="0"/>
											  
											<?
								
								            }
								
								            $valor_inf2 = number_format($valor_fim_2, 2, '.',',');
								
								
											?>
											  
											<input type="hidden" name="tipo_frete"     value="EN"/>
											  <input type="hidden" name="cliente_nome"   value="<?=$nome2;?>"/>
											  <input type="hidden" name="cliente_cep"    value="<?=$cep2;?>"/>
											  <input type="hidden" name="cliente_end"    value="<?=$endereco2;?>"/>
											  <input type="hidden" name="cliente_num"    value="<?=$nume2;?>"/>
											  <input type="hidden" name="cliente_compl"  value=""/>
											  <input type="hidden" name="cliente_bairro" value="<?=$bairro2;?>"/>
											  <input type="hidden" name="cliente_cidade" value="<?=$cidade2;?>"/>
											  <input type="hidden" name="cliente_uf"     value="<?=$estado2;?>"/>
											  <input type="hidden" name="cliente_pais"   value="BRA"/>
											  <input type="hidden" name="cliente_ddd"    value="<?=$ddd2;?>"/>
											  <input type="hidden" name="cliente_tel"    value="<?=$fone2;?>"/>
											  <input type="hidden" name="cliente_email"  value="<?=$mail_des;?>"/>
											  
											<br />
											  <br />
											  
											<center>
											  <b>ATENÇÃO para concretizar sua compra clique</b><br />
						              </div>
									  <center><b>no botao a baixo e preencha as informacoes</b><br/></center>
								            <center><b>solicitadas corretamente<b><br /><br />
								
											
											<input type="image" src="../graphics/btnConcluirBR.jpg" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!"/><br />
											
											
											<input type="image" src="../graphics/portalloja.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!"/>
											
											</center>
</form>
		
		
								<?
		                        // Envia Email de confirmacao de compra
		                        
		                        $mail_des    = trim($HTTP_POST_VARS["TMAIL"]);
							    $nome        = trim($HTTP_POST_VARS["TNOME"]);
							    $cpf         = trim($HTTP_POST_VARS["TCPF"]);
							    $pagto_for   = "Aguardando Confirmação";
							    $valor_fim_2 = 0;
							    $cpf = substr($cpf,0,5)."XXXXXX";
							    

						    	$phpmail = new PHPMailer();
							
							
							    $phpmail->IsSMTP();                         // Envia por SMTP
							    $phpmail->Mailer   = "smtp";
								$phpmail->Host     = "74.55.238.114";       // SMTP servers
								$phpmail->SMTPAuth = true;                  // Caso o servidor SMTP precise de autenticação
								$phpmail->Port     = 25;
								$phpmail->Username = "isysmp@isysmp.com";   // SMTP username
								$phpmail->Password = "tty%909$";            // SMTP password
							
							    $phpmail->IsHTML(true);
							    $phpmail->From     = "isysmp@isysmp.com";   // Retorno CC
							    $phpmail->FromName = "Portal Compraai.com.br";
							
							    $phpmail->AddAddress($HTTP_POST_VARS["TMAIL"]);       // Destino
							    $phpmail->AddAddress("isysmp@isysmp.com"); // Trocar CCo

						    
						    
							    // Inicio do Relatorio enviado por E-mail
							    
								$ser_ped = $ser_ped_2x;
								
								
								// Consultando Pedidos do Cliente
								$consulta1z  = "select * from tbl_carrinho WHERE ID_PEDIDO_CLIENTE = '". anti_sql_injection($nov_id_cli) ."'";
								
								$resultado1z = @mysql_query($consulta1z);

								// Consulta Cliente
								$consulta11  = "SELECT * FROM pedidos_cliente Where ID_PEDIDO_CLIENTE = '". anti_sql_injection($nov_id_cli) ."'";
										
								$resultado11 = @mysql_query($consulta11);
										
								$row11 = @mysql_fetch_array($resultado11);
										
								$ser_ped   = @$row11["ID_PEDIDO_CLIENTE"];
								$nome2     = @$row11["Nome"];
								$endereco2 = @$row11["Endereco"];
								$cep2      = @$row11["CEP"];
								$cidade2   = @$row11["Cidade"];
								$estado2   = @$row11["Estado"];

							
								$message .= "<html>
											<head>
											<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
											<style type='text/css'>
											<!--
											.style1 {
												color: #FF0000;
												font-weight: bold;
											}
											.style2 {
												color: #0000CC;
												font-weight: bold;
											}
											.style3 {
												color: #FFFFFF;
												font-weight: bold;
											}
											-->
											</style>
											</head>
											
											<body bgcolor='#ffffff'>
											<table width='100%' height='118' border='0'>
											  <tr>
											    <td height='114' align='center' valign='top'><table width='100%' border='1' align='center' cellpadding='0' cellspacing='0' bordercolor='#006699' bgcolor='#FFFFFF'>
											      <tr bgcolor='#FF9900'>
											        <td width='263' align='center'><span class='style3'>Descricao</span></td>
											        <td width='37' align='center'><span class='style3'>Qtd</span></td>
											        <td width='144' align='center'><span class='style3'>Pre&ccedil;o Unitario</span></td>
											        <td width='113' align='center'><span class='style3'>Pre&ccedil;o Total</span></td>
											        </tr>";
							
							
									while ($linha = @mysql_fetch_array($resultado1z))
									{
											
										$id          = $linha["id"]; 
										$cod_prod_2  = $linha["cod"];
										$prod_nome   = $linha["nome"];
										$prod_valor  = $linha["preco"];
					                    $qtd_1       = $linha["qtd"];
									    $valor_to_2  = 0;
							
									    $valor_to_2  = $prod_valor *  $qtd_1;
										$valor_fim_2 = $valor_fim_2 + $valor_to_2; 
								
							            $valor_inf1 = number_format($valor_to_2, 2, '.',',');
							
								$message .=" <tr>
									        <td align='center'><font size='2'> $prod_nome </td>
									        <td align='center'><font size='2'> $qtd_1</td>
									        <td align='right'><font size='2'>  $prod_valor </td>
									        <td align='right'><font size='2'>  $valor_inf1</td>
									      </tr>";
							
							        }
							
							            $valor_inf2 = number_format($valor_fim_2, 2, '.',',');
							
							
								$message .=" <tr>
									        <td align='center'>&nbsp; </td>
									        <td align='center'>&nbsp;</td>
									        <td align='right'><span class='style1'><font size='2'>Total Compra </span></td>
									        <td align='right'><b>$valor_inf2</b></td>
									      </tr>
									      <tr>
									        <td align='center'>&nbsp; </td>
									        <td align='center'>&nbsp;</td>
									        <td align='right'><span class='style2'><font size='2'>Forma de Pagamento </span></td>
									        <td align='center'><strong>$pagto_for</strong></td>
									      </tr>
									    </table>
									      <strong><em>Obrigado pela Compra</em></strong> <br></td>
									  </tr>
									</table>
									</body>
									</html>";
							    
							    $message .= "<html>
								            <head>
											</head>
											<body>
											
											<table width='100%' border='0'>
											  <tr>
											    <td width='438'><strong>Dados Para Entrega </strong></td>
											  </tr>
											  <tr>
											    <td>$nome2 </td>
											  </tr>
											  <tr>
											    <td>$endereco2</td>
											  </tr>
											  <tr>
											    <td>CEP.: $cep2 - $cidade2 - $estado2 </td>
											  </tr>
											</table>				
											
											<table>
											   <tr>
											      <td>
												  <center><b><h3>Aguardando Confirmação do pagamento!</h3></b></center>
												  </td>
											   </tr>
											</table>
											</body>
											</html>";
							    
							    
							    $phpmail->Subject = "Envio de email do Portal Compraai.com.br";
							    $phpmail->Body .= "Nome: ".$_POST["TNOME"]."<br />";
							    $phpmail->Body .= "E-mail: ".$_POST["TMAIL"]."<br />";
							    $phpmail->Body .= "CPF: " . $cpf . "<br />";
							    $phpmail->Body .= "Assunto: Compra de Produtos Compraai".$_POST['assunto']."<br />";
							    $phpmail->Body .= "$message";
							    $phpmail->Body .= " ".nl2br($_POST['mensagem'])."<br />";
							    
							    $send = $phpmail->Send();
							
							    if($send){
							    	
							    	
							    	// Retorno Pagseguro
																    	
									$faz_x1 = 1;
							    	
							    	// Destroi Sessao do cliente
					
									$consulta_up1  = "UPDATE tbl_carrinho SET `sessao` = ' ' WHERE ID_PEDIDO_CLIENTE = '". anti_sql_injection($nov_id_cli) ."'";
					
					                @mysql_query($consulta_up1, $link);
							    	
							    	@session_start();
                                    $_SESSION['meu_carrinho'] = 0;

							    }else{


?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Finalizar Compra</font></b></td>
      </tr></table></td>
  </tr>
</table>
<?


							    	
							    	echo "<body bgcolor='#FFFFFF'><br><br>";
							    	echo "<center><font face=Tahoma><font size=4 color='#FF0000'><b>A T E N Ç Ã O</b></center>";
									echo "<center><b>Sua Compra não podera ser EFETUADA !!!</b><br></center>";
									echo "<center><b>Você não esta conectado a Internet ou ocorreu</b><br></center>";
									echo "<center><b>um erro de Servidor Reconecte, e tente de novo.</b></center><br>";
							    	echo "<center><a href='loja.php'><img src='../graphics/retorno.png' border='0'/></a></center><br><br><br>";

							    }
		
		                        
		                        // Fim Confirmação
		
		
			}else{
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Finalizar Compra</font></b></td>
      </tr></table></td>
  </tr>
</table>
<?				
		
			     echo "<br><br><br><center><font color='#FF0000' face='Arial' size='4'><b>ATENÇÃO</b></font></center><br>";
			     echo "<center><b>" . $erros . "</b></center><br><br>";
			     
			     echo "<center><a href='carrinho_fim.php'><img src='../graphics/voltar_.png' border='0'/></a></center><br><br><br>";
			}

     }else{  // Sedex a Cobrar ou Ato da Entrega
     	
     	  
     	   			if( empty($erros) ){
			
			
						//Requisitanto o codigo do pedido
						$consulta  = "select * from pedidos_cliente ORDER BY ID_PEDIDO_CLIENTE DESC LIMIT 0,1";
						
						$resultado = @mysql_query($consulta);
						
						$row = @mysql_fetch_array($resultado);
						
						$id_ped_cli  = @$row["ID_PEDIDO_CLIENTE"];
						
						$nov_id_cli  = $id_ped_cli + 1;
						 
						// Gravando os Dados do Cliente
						$consulta0 = "INSERT INTO pedidos_cliente (ID_PEDIDO_CLIENTE, Nome, Endereco, Cidade, Estado, CEP, CPF, tipo_pagto)
							 VALUES ('". $nov_id_cli ."',
							         '". $HTTP_POST_VARS["TNOME"] ."',
									 '". $HTTP_POST_VARS["TENDERECO"] ."',
									 '". $HTTP_POST_VARS["TCIDADE"] ."',
									 '". $HTTP_POST_VARS["TESTADO"] ."',
									 '". $HTTP_POST_VARS["TCEP"] ."',
									 '". $HTTP_POST_VARS["TCPF"] ."',
									 '". $HTTP_POST_VARS["PAGTO"] . "')";
						
									@mysql_query($consulta0, $link) or
						
						                         die("echo '<script>alert('Erro: Falha incluindo !!!');</script>'	
										              echo '<script>history.go(-2);</script>'");	
						
						// Abrir tabela tbl_carrinho e atualizando pedidos do cliente
						
						$consulta  = "UPDATE tbl_carrinho SET ID_PEDIDO_CLIENTE = '". anti_sql_injection($nov_id_cli) ."' WHERE `sessao` = '". anti_sql_injection($send_sesao) ."'";
						
						@mysql_query($consulta, $link);
						
						
						// Consultando Pedidos do Cliente
						$consulta1  = "select * from tbl_carrinho WHERE ID_PEDIDO_CLIENTE = '". anti_sql_injection($nov_id_cli) ."'";
						
						$resultado1 = @mysql_query($consulta1);
						
						
						// Consultando Nome do Cliente
						$consulta2  = "select * from pedidos_cliente WHERE ID_PEDIDO_CLIENTE = '". anti_sql_injection($nov_id_cli) ."'";
						
						$resultado2 = @mysql_query($consulta2);
						
						$row2       = @mysql_fetch_array($resultado2);
						
						$ser_ped    = @$row2["ID_PEDIDO_CLIENTE"];
						$nome2      = @$row2["Nome"];
						$endereco2  = @$row2["Endereco"];
						$nume2      = @$row2["numero"];
						$cep2       = retirar_pontoevirgula(@$row2["CEP"]);
						$cidade2    = @$row2["Cidade"];
						$estado2    = @$row2["Estado"];
						$bairro2    = @$row2["Bairro"];
						$ddd2       = @$row2["ddd"];
						$fone2      = retirar_pontoevirgula(@$row0["fone_fix"]);
						$mail_des   = $HTTP_POST_VARS["TMAIL"];
									   
						$nume2      = "";
						$ddd2       = "11";
									        
						$valor_inf1 = 0;
						$i          = 0;
	

		                // Envia Email de confirmacao de compra
		                        
		                $mail_des    = trim($HTTP_POST_VARS["TMAIL"]);
						$nome        = trim($HTTP_POST_VARS["TNOME"]);
						$cpf         = trim($HTTP_POST_VARS["TCPF"]);
						$pagto_for   = trim($HTTP_POST_VARS["PAGTO"]);
							    
						$valor_fim_2 = 0;
						$cpf = substr($cpf,0,5)."XXXXXX";
							    
						include_once('phpmailer/class.phpmailer.php');
							
						$phpmail = new PHPMailer();
							
						$phpmail->IsSMTP();                              // Envia por SMTP
						$phpmail->Mailer   = "smtp";
						$phpmail->Host     = "74.55.238.114";            // SMTP servers
						$phpmail->SMTPAuth = true;                       // Caso o servidor SMTP precise de autenticação
						$phpmail->Port     = 25;
						$phpmail->Username = "isysmp@isysmp.com";        // SMTP username
						$phpmail->Password = "tty%909$";                 // SMTP password
							
						$phpmail->IsHTML(true);
						$phpmail->From     = "isysmp@isysmp.com";        // Retorno CC
						$phpmail->FromName = "Portal Compraai.com.br";
							
						$phpmail->AddAddress($HTTP_POST_VARS["TMAIL"]);  // Destino
						$phpmail->AddAddress("isysmp@isysmp.com");       // Trocar CCo
							    
							    // Inicio do Relatorio enviado por E-mail
							    
								$ser_ped = $ser_ped_2x;
								
								// Consulta Cliente
								$consulta11  = "SELECT * FROM pedidos_cliente Where ID_PEDIDO_CLIENTE = '". anti_sql_injection($nov_id_cli) ."'";
										
								$resultado11 = @mysql_query($consulta11);
										
								$row11 = @mysql_fetch_array($resultado11);
										
								$ser_ped   = @$row11["ID_PEDIDO_CLIENTE"];
								$nome2     = @$row11["Nome"];
								$endereco2 = @$row11["Endereco"];
								$cep2      = @$row11["CEP"];
								$cidade2   = @$row11["Cidade"];
								$estado2   = @$row11["Estado"];
							
								$message .= "<html>
											<head>
											<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
											<style type='text/css'>
											<!--
											.style1 {
												color: #FF0000;
												font-weight: bold;
											}
											.style2 {
												color: #0000CC;
												font-weight: bold;
											}
											.style3 {
												color: #FFFFFF;
												font-weight: bold;
											}
											-->
											</style>
											</head>
											
											<body>
											<table width='100%' height='118' border='0'>
											  <tr>
											    <td height='114' align='center' valign='top'><table width='100%' border='1' align='center' cellpadding='0' cellspacing='0' bordercolor='#006699' bgcolor='#FFFFFF'>
											      <tr bgcolor='#FF9900'>
											        <td width='263' align='center'><span class='style3'>Descricao</span></td>
											        <td width='37' align='center'><span class='style3'>Qtd</span></td>
											        <td width='144' align='center'><span class='style3'>Pre&ccedil;o Unitario</span></td>
											        <td width='113' align='center'><span class='style3'>Pre&ccedil;o Total</span></td>
											        </tr>";
							
							
									while ($linha = @mysql_fetch_array($resultado1))
									{
											
										$id          = $linha["id"]; 
										$cod_prod_2  = $linha["cod"];
										$prod_nome   = $linha["nome"];
										$prod_valor  = $linha["preco"];
					                    $qtd_1       = $linha["qtd"];
									    $valor_to_2  = 0;
							
									    $valor_to_2  = $prod_valor *  $qtd_1;
										$valor_fim_2 = $valor_fim_2 + $valor_to_2; 
								
							            $valor_inf1 = number_format($valor_to_2, 2, '.',',');
							
								$message .=" <tr>
									        <td align='center'><font size='2'> $prod_nome </td>
									        <td align='center'><font size='2'> $qtd_1</td>
									        <td align='right'><font size='2'>  $prod_valor </td>
									        <td align='right'><font size='2'>  $valor_inf1</td>
									      </tr>";
							
							        }
							
							            $valor_inf2 = number_format($valor_fim_2, 2, '.',',');
							
							
								$message .=" <tr>
									        <td align='center'>&nbsp; </td>
									        <td align='center'>&nbsp;</td>
									        <td align='right'><span class='style1'><font size='2'>Total Compra </span></td>
									        <td align='right'><b>$valor_inf2</b></td>
									      </tr>
									      <tr>
									        <td align='center'>&nbsp; </td>
									        <td align='center'>&nbsp;</td>
									        <td align='right'><span class='style2'><font size='2'>Forma de Pagamento </span></td>
									        <td align='center'><strong>$pagto_for</strong></td>
									      </tr>
									    </table>
									      <strong><em>Obrigado pela Compra</em></strong> <br></td>
									  </tr>
									</table>
									</body>
									</html>";
							    
							    $message .= "<html>
								            <head>
											</head>
											<body>
											
											<table width='100%' border='0'>
											  <tr>
											    <td width='438'><strong>Dados Para Entrega </strong></td>
											  </tr>
											  <tr>
											    <td>$nome2 </td>
											  </tr>
											  <tr>
											    <td>$endereco2</td>
											  </tr>
											  <tr>
											    <td>CEP.: $cep2 - $cidade2 - $estado2 </td>
											  </tr>
											</table>				
											
											<table>
											   <tr>
											      <td>
												  <center><b><h3>Parabéns sua compra foi realizada com sucesso!!</h3></b></center>
												  </td>
											   </tr>
											</table>
											</body>
											</html>";
							    
							    
							    $phpmail->Subject = "Envio de email do Compraai";
							    $phpmail->Body .= "Nome: ".$_POST["TNOME"]."<br />";
							    $phpmail->Body .= "E-mail: ".$_POST["TMAIL"]."<br />";
							    $phpmail->Body .= "CPF: " . $cpf . "<br />";
							    $phpmail->Body .= "Assunto: Compra de Produtos Compraai".$_POST['assunto']."<br />";
							    $phpmail->Body .= "$message";
							    $phpmail->Body .= " ".nl2br($_POST['mensagem'])."<br />";
							    
							    $send = $phpmail->Send();
							
							    if($send){



?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Finalizar Compra</font></b></td>
      </tr></table></td>
  </tr>
</table>
<?
							    	echo "<body bgcolor='#FFFFFF'><br><br>";
									echo "<center><b>PARABÉNS sua compra foi realizada com sucesso!</b><br></center>";
									echo "<center><b>Você recebera um e-mail com os procedimentos</b><br></center>";
									echo "<center><b>Caso nao receba o e-mail, entre em contato</b></center>";
									echo "<center><b>com o Portal Compraai.com.br</b></center>";
									echo "<center><b>pelo telefone ou acesse <a href=../fale/layout.php?entra_no_web1=at2>Fale com o Compreai</a></b></center>";
									echo "<center><b>Obrigado</b></center><br>";
									echo "<center><a href='loja.php'><img src='../graphics/retorno.png' border='0'/></a></center><br><br><br></body>";
									$faz_x1 = 1;
							    	
							    	
							    	// Destroi Sessao do cliente
					
									$consulta_up1  = "UPDATE tbl_carrinho SET `sessao` = ' ' WHERE ID_PEDIDO_CLIENTE = '". anti_sql_injection($nov_id_cli) ."'";
					
					                @mysql_query($consulta_up1, $link);
							    	
							    	@session_start();
                                    $_SESSION['meu_carrinho'] = 0;
							    	
							    }else{

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Finalizar Compra</font></b></td>
      </tr></table></td>
  </tr>
</table>
<?
							    	
							    	echo "<body bgcolor='#FFFFFF'><br><br>";
							    	echo "<center><font face=Tahoma><font size=4 color='#FF0000'><b>A T E N Ç Ã O</b></center>";
									echo "<center><b>Sua Compra não podera ser EFETUADA !!!</b><br></center>";
									echo "<center><b>Você não esta conectado a Internet ou ocorreu</b><br></center>";
									echo "<center><b>um erro de Servidor Reconecte, e tente de novo.</b></center><br>";
							    	echo "<center><a href='carrinho_fim.php'><img src='../graphics/retorno.png' border='0'/></a></center><br><br><br>";

							    }
		
		
		                        // Fim Confirmação
	     	
			      }else{
				
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Finalizar Compra</font></b></td>
      </tr></table></td>
  </tr>
</table>
<?				
					     echo "<br><br><br><center><font color='#FF0000' face='Arial' size='4'><b>ATENÇÃO</b></font></center><br>";
					     echo "<center><b>" . $erros . "</b></center><br><br>";
					     
					     echo "<center><a href='carrinho_fim.php'><img src='../graphics/voltar_.png' border='0'/></a></center><br><br><br>";
				  }
     		
     		
     		
     	} // Segundo if tipo pagto
     	
} // Primeiro If do FORM

// --- Fim das Informacoes Pagseguro
?>
</body>
</html>
<?
include('rodape.php');

// Função que valida o CPF
function verificaCPF($cpf)
{	// Verifiva se o número digitado contém todos os digitos
    $cpf = str_pad(ereg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);
	
	// Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
    if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999')
	{
	return false;
	// echo '<center><font color="#FF0000" size="4">CNPJ Inválido, por favor digite um CNPJ válido.</b></font>'; 
    }
	else
	{   // Calcula os números para verificar se o CPF é verdadeiro
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }

            $d = ((10 * $d) % 11) % 10;

            if ($cpf{$c} != $d) {
                return false;
                // echo '<center><font color="#FF0000" size="4">CNPJ Inválido, por favor digite um CNPJ válido.</b></font>'; 
            }
        }

        return true;
    }
}


/*
 --------------------------------
 Funcao para Retirar os caracter
 estranhos e acentos na hora de
 atualizar Table 
---------------------------------
*/

Function retirar_pontoevirgula($var){

$var = str_replace(".",            "",$var);
$var = str_replace(",",            "",$var);
$var = str_replace("-",            "",$var);

return($var);
}

?>