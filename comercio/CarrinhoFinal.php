<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Carrinho Final
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

include("TCarrinho.php");
include("TMySQL.php");

// Resgata a Sessao
session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2 = $_SESSION['data_log_2'];


if (!session_is_registered("MeuCarrinho")){
	header("Location:Carrinho.php");
}else{
	if ($MeuCarrinho->QuantosItens() == 0) {
		header("Location:Carrinho.php");
	}
}
if (!empty($HTTP_POST_VARS["FORM"])){
	
	$texto_cpf = $HTTP_POST_VARS["TCPF"];
			
	$eliminar1 = str_replace("-"," ",$texto_cpf);
	$eliminar2 = str_replace("."," ",$eliminar1);
	$valor_cp = str_replace(" ","",$eliminar2);
	
	$resu_t = verificaCPF($valor_cp);

	if ($resu_t != 1){

  	    echo "<script>alert('Atenção CPF digitado e INVALIDO VERIFIQUE !!!');</script>";	
        echo "<script>history.go(-1);</script>";
	    exit;
	}

	
	//Abrindo conexao com o banco de dados
	$MySQL = new TMySQL();
	$MySQL->connect($host, $db, $user, $pass);
	
	//Requisitanto o codigo do pedido
	$Resultado = $MySQL->query("select max(ID_PEDIDO_CLIENTE) from pedidos_cliente");

	if (mysql_result($Resultado,0,"max(ID_PEDIDO_CLIENTE)") != ""){
		$CODIGO_PEDIDO = mysql_result($Resultado,0,"max(ID_PEDIDO_CLIENTE)") + 1;
	}else{
		$CODIGO_PEDIDO = 1;
	}

	//Gravando no banco de dados os item contidos no carrinho
	for($i=0;$i<$MeuCarrinho->QuantosItens();$i++) {
		$MySQL->query("INSERT INTO pedidos (ID_PEDIDO, ID_PRODUTO, QUANTIDADE) VALUES (". $CODIGO_PEDIDO .",". $MeuCarrinho->item_codigo[$i] .",". $MeuCarrinho->item_quantidade[$i] .")");
	}

	//Gravando os Dados do Cliente
	$MySQL->query("INSERT INTO pedidos_cliente (ID_PEDIDO_CLIENTE, Nome, Endereco, Cidade, Estado, CEP, CPF) VALUES ('". $CODIGO_PEDIDO ."', '". $HTTP_POST_VARS["TNOME"] ."', '". $HTTP_POST_VARS["TENDERECO"] ."','". $HTTP_POST_VARS["TCIDADE"] ."', '". $HTTP_POST_VARS["TESTADO"] ."', '". $HTTP_POST_VARS["TCEP"] ."', '". $HTTP_POST_VARS["TCPF"] ."')");

	//Removendo o Carrinho
	session_unregister("MeuCarrinho");
}
?>
<?
 if (session_is_registered("MeuCarrinho")){



$link = @mysql_connect($host,$user,$pass)

    or die( require("../login.php"));

@mysql_select_db($db);

$consulta  = "SELECT * FROM tt_ser_01 WHERE login = '$ser_name3_c'";
					
$resultado = @mysql_query($consulta);
					
// Incrementa novo codigo
					
$row = @mysql_fetch_array($resultado);
					
$codigo 	= @$row["codigo"];             
$nome 		= trim(@$row["nome"])." ".trim(@$row["sobrenome"]);      		
$nasc_dia 	= @$row["nasc_dia"];
$nasc_mes 	= @$row["nasc_mes"];
$nasc_ano 	= @$row["nasc_ano"];
$sexo 		= @$row["sexo"];
$mail_des 	= @$row["e_mail"];
$login 		= @$row["login"];
$senha 		= @$row["senha"];
$data 		= @$row["data"];
$hora 		= @$row["hora"];
$permissao 	= @$row["permissao"];
$rg 		= @$row["rg"];
$cpf 		= @$row["cpf"];
$rua 		= @$row["rua"];
$endereco 	= @$row["endereco"];
$bairro 	= @$row["bairro"];
$estado 	= @$row["estado"];
$cep 		= @$row["cep"];
$fone_fix 	= @$row["fone_fix"];
$fone_cel 	= @$row["fone_cel"];

?>

<style>
body {
	BORDER-BOTTOM: #FFC082 3px ridge; BORDER-LEFT: #FFC082 3px ridge; BORDER-RIGHT: #FFC082 3px ridge; BORDER-TOP: #FFC082 3px ridge
}
</style>
<body bgcolor="#FFFFFF"> 
<div id="Image1_outer" style="Z-INDEX: 4; LEFT: 5px; WIDTH: 780px; POSITION: absolute; TOP: 5px; HEIGHT: 84px">
<div id="Image1_container" style=" width: 780;  height: 84; overflow: hidden;" ><img id="Image1" src="imagens/forum.png"  width="777"  height="44"  border="0"       /></div>
</div>

<div id="Image1_outer" style="Z-INDEX: 14; LEFT: 3px; WIDTH: 780px; POSITION: absolute; TOP: 47px; HEIGHT: 84px">
<table align="center">
<td align="center">
<b>Para Finalizar a Compra preencha os campos</b><br />
<b>e verifique se os dados estão corretos</b>
<form method="POST" action="CarrinhoFinal.php">
	<input type="hidden" name="FORM" value="FORM"/>

	<table>

	<tr>
	<td>Nome:</td>
	<td><input type="text" name="TNOME" value="<?=$nome;?>" style="height:25px;width:437px;"></td>
	</tr>

	<tr>
	<td>Endereço:</td>
	<td><input type="text" name="TENDERECO" value="<?=$endereco;?>" style="height:25px;width:437px;"></td>
	</tr>
	
	<tr>
	<td>Bairro:</td>
	<td><input type="text" name="TCIDADE" value="<?=$bairro;?>" style="height:25px;width:437px;"></td>
	</tr>
	
	<tr>
	<td>Estado:</td>
	<td><input type="text" name="TESTADO" value="<?=$estado;?>" style="height:25px;width:437px;"></td>
	</tr>
	
	<tr>
	<td>E-mail:</td>
	<td><input type="text" name="TMAIL" value="<?=$mail_des;?>" style="height:25px;width:437px;"></td>
	</tr>
	
	<tr>
	<td>CPF:</td>
	<td><input type="text" name="TCPF" value="<?=$cpf;?>" style="height:25px;width:237px;">
	CEP:
	<input type="text" name="TCEP" value="<?=$cep;?>" style="height:25px;width:137px;"></td>
	</tr>
	
	</table>
	<input type='image' src="imagens/finalizar.png"/>
</form>

<div id="Image1_outer" style="Z-INDEX: 4; LEFT: -290px; WIDTH: 780px; POSITION: absolute; TOP: 290px; HEIGHT: 84px">
<img id="Image2" src="imagens/secure.jpg"  width="70"  height="70"  border="0"/>
</div>

<center><b>Atenção todas as informações aqui digitadas são criptografadas e enviadas</b><br/></center>
<center><b>automaticamente pelo sistema sem intervenção do Administrador do Site</b><br/></center>
</table>
</div>
<?
}else{
?>
<style>
body {
	BORDER-BOTTOM: #FFC082 3px ridge; BORDER-LEFT: #FFC082 3px ridge; BORDER-RIGHT: #FFC082 3px ridge; BORDER-TOP: #FFC082 3px ridge
}
</style>

<div id="Image1_outer" style="Z-INDEX: 4; LEFT: 5px; WIDTH: 780px; POSITION: absolute; TOP: 5px; HEIGHT: 84px">
<div id="Image1_container" style=" width: 780;  height: 84; overflow: hidden;" ><img id="Image1" src="imagens/forum.png"  width="777"  height="44"  border="0"       /></div>
</div>

<div id="Image1_outer" style="Z-INDEX: 14; LEFT: 3px; WIDTH: 780px; POSITION: absolute; TOP: 65px; HEIGHT: 84px">
<?

    $mail_des = trim($HTTP_POST_VARS["TMAIL"]);
    $nome     = trim($HTTP_POST_VARS["TNOME"]);
    $cpf      = trim($HTTP_POST_VARS["TCPF"]);
    
    // Chama Classe SMPT
    require_once('smtpmail.class.php');

	$smtp = new SMTPMAIL();
	$smtp->Servidor      ='smtp.sindificios.com.br';
	$smtp->Autenticado   = false;
	$smtp->Usuario       = "edson@sindificios.com.br";
	$smtp->Senha         = "tty$%909";
	$smtp->Codificacao   = "UTF-8";
	$smtp->EmailDe       = 'sindificios@sindificios.com.br';
	$smtp->EmailDeVisual = 'Portal da Troca <sysmp@sysmp.com.br>';
	$smtp->Assunto       = 'Obrigado - Portal da Troca';
	$smtp->EmailPara     = $mail_des; // Destinatario
	$smtp->Corpo        .= "   <img src='http://www.sysmp.hd1.com.br/imagens/Logo1.JPG'><br><br>
	                           Portal da Troca SysMp.com <br>
	                           http://www.sysmp.hd1.com.br/<br>
	                           Obrigado por Utilizar nosso sistema de Vendas pela Internet<br>
		                       <b>Aguarde um contato do Portal para finalizar a compra</b><br><br>";
	$smtp->Corpo        .= "   Nome :&nbsp;&nbsp;&nbsp;<b>$nome</b>&nbsp;&nbsp;-&nbsp;&nbsp;CPF:&nbsp;&nbsp;<b>$cpf</b><br>
							   Para Visualizar ou Imprimir = <a href='http://www.sysmp.com.br/sistemaXP/rela.php?cod_recue=$CODIGO_PEDIDO'>Clique aqui</a>&nbsp;&nbsp;<br>";
	$smtp->Corpo        .= "   Ou entre no <a href='http://http://www.sysmp.hd1.com.br//'>www.sysmp.hd1.com.br</a> em Minhas Compras<br>
							   Qualquer Duvida sobre a autenticidade deste entre no Fale com o Portal";
	
    
	if($smtp->Enviar()) {
	   //echo 'ok';
	   
		echo "<center><b>Parabéns sua compra foi realizada com sucesso!</b><br></center>";
		echo "<center><b>Você recebera um e-mail com os procedimentos</b><br></center>";
		echo "<center><b>Caso nao receba o e-mail, entre em contato</b></center>";
		echo "<center><b>com o vendedor ou com o Portal da Troca</b></center>";
		echo "<center><b>pelo telefone ou acesse <a href=faleconosco.php>Fale com o Portal</a></b></center>";
		echo "<center><b>Obrigado</b></center>";
	   
	} else {


        echo "<div style='Z-INDEX: 14; LEFT: 3px; WIDTH: 780px; POSITION: absolute; TOP: 15px; HEIGHT: 84px'>";
    	echo "<body bgcolor='#FFFFFF'><br>";
		echo "<center><b>Sua mensagem não foi enviada !! POSSIVÉL causa!</b><br></center>";
		echo "<center><b>Você não esta conectado a Internet ou ocorreu</b><br></center>";
		echo "<center><b>um erro de Servidor SMTP, tente de novo mais tarde.</b></center></div>";
		
	}    	   	

}
?>
</div>
</body>

<?

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

?>