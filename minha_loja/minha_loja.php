<?
include('aguarde.php');

include('titulo.php');

// Resgata a Sessao
session_start();
$ser_name3_c = $_SESSION["log_name_c"];

if ($ser_name3_c == "VISITANTE"){
	
	include("../informe.php");
	exit;
}
if (empty($ser_name3_c)){
	
	include("../informe.php");
	exit;
}

$link = @mysql_connect($host,$user,$pass)

    or die( include("../server.php"));

@mysql_select_db($db);

$consulta4  = "SELECT * FROM tt_ser_01 WHERE `login` = '$ser_name3_c'";
					
$resultado4 = @mysql_query($consulta4);
				
$row4 = @mysql_fetch_array($resultado4);
					
$id           = @$row4["codigo"];
$ligon        = @$row4["login"];
$nome         = @$row4["nome"];      		
$sobrenome    = @$row4["sobrenome"];
$id_email     = @$row4["e_mail"];
$rua          = @$row4["rua"];
$endereco     = @$row4["endereco"];
$bairro       = @$row4["bairro"];
$cidade       = @$row4["cidade"];
$estado       = @$row4["estado"];
$cep          = @$row4["cep"];
$fone_fix     = @$row4["fone_fix"];
$id_fone      = @$row4["fone_cel"];
$positivo     = @$row4["positivo"];
$negativo     = @$row4["negativo"];
$data_2       = @$row4["data"];
$excluido     = @$row4["excluido"];

if ($excluido == "SIM"){
	
	$user_ativ = "EXCLUIDO";
}else{

	$user_ativ = "ATIVO";
	
}
$mes_a = substr($data_2,3,2);

if ($mes_a == 1){
	$mes_a1 = "Janeiro";
}
if ($mes_a == 2){
	$mes_a1 = "Fevereiro";
}
if ($mes_a == 3){
	$mes_a1 = "Mar�o";
}
if ($mes_a == 4){
	$mes_a1 = "Abril";
}
if ($mes_a == 5){
	$mes_a1 = "Maio";
}
if ($mes_a == 6){
	$mes_a1 = "Junho";
}
if ($mes_a == 7){
	$mes_a1 = "Julho";
}
if ($mes_a == 8){
	$mes_a1 = "Agosto";
}
if ($mes_a == 9){
	$mes_a1 = "Setembro";
}
if ($mes_a == 10){
	$mes_a1 = "Outubro";
}
if ($mes_a == 11){
	$mes_a1 = "Novembro";
}
if ($mes_a == 12){
	$mes_a1 = "Dezembro";
}
$ano_a = substr($data_2,6,4);

//echo "combinar ".$negociacao."<br>";

if (empty($foto1)){
	
	$foto1 = "fotos/sem_foto.jpg";
	
}

$query_Recordset2 = "SELECT cod_categ, descricao FROM categoria_prod";
$Recordset2 = @mysql_query($query_Recordset2, $link); // or die(mysql_error());
$row_Recordset2 = @mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = @mysql_num_rows($Recordset2);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Cadastro * Minha Vitrine * </font></b></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="1%">            <img src="../graphics/px1.gif" width="10" height="10"><br>    </td>
    <td width="98%" valign="top">
	<!-- Inicioda do Layout -->

    <table width="100%" border="0">
      <tr>
        <td><div align="center"><img src="../graphics/criar_vitrine.png" width="501" height="67"></div></td>
        </tr>
      <tr>
        <td height="653"><div align="center">
          <table width="570" border="0">
            <tr>
              <td width="117"><b><font size="2" face="Verdana">Proprietario.:</font></b></td>
              <td width="154"><i><font face="Arial"><b><?=$nome;?></b></font></i></td>
              <td width="135"><b><font size="2" face="Verdana">Usuario desde.:</font></b></td>
              <td width="136"><b><i><font face="Arial"><?=$mes_a1;?>/<?=$ano_a;?></font></i></b></td>
            </tr>
          </table>
		  <form id="form1" name="form1" method="post"  action="incluir.php">
          <table border="0" cellpadding="0" cellspacing="1" bgcolor="#FF9900">
            <tr>
              <td width="593" height="135"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                <tr>
                  <td width="31%" height="31"> <b><font size="2" face="Verdana">&nbsp;Nome da Loja.:</font></b> </td>
                  <td width="69%"><input name="nome_loja" type="text" id="nome_loja" size="60"></td>
                </tr>
                <tr>
                  <td height="31"><b><font size="2" face="Verdana">&nbsp;Endere&ccedil;o.:</font></b> </td>
                  <td><input name="endereco" type="text" id="endereco" size="55"></td>
                </tr>
                <tr>
                  <td height="31"><b><font size="2" face="Verdana">&nbsp;Bairro.:</font></b> </td>
                  <td><input name="bairro" type="text" id="bairro" size="45"></td>
                </tr>
                <tr>
                  <td height="31"><b><font size="2" face="Verdana">&nbsp;CEP.:</font></b> </td>
                  <td><input name="cep" type="text" id="cep" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:115px;" onkeypress="return txtBoxFormat(document.form1, 'cep', '99999-999', event);"/></td>
                </tr>
                <tr>
                  <td height="31"><b><font size="2" face="Verdana">&nbsp;Zona.:</font></b> </td>
                  <td><input name="zona" type="text" id="zona"></td>
                </tr>
                <tr>
                  <td height="31"><b><font size="2" face="Verdana">&nbsp;Fones.:</font></b> </td>
                  <td><input name="fone" type="text" id="fone" size="50"></td>
                </tr>
                <tr>
                  <td height="31"><b><font size="2" face="Verdana">&nbsp;Site.:</font></b> </td>
                  <td><input name="site" type="text" id="site" size="60"></td>
                </tr>
                <tr>
                  <td height="31"><b><font size="2" face="Verdana">&nbsp;Mapa.:</font></b> </td>
                  <td><input name="mapa" type="text" id="mapa" size="60"></td>
                </tr>
                <tr>
                  <td height="31"><b><font size="2" face="Verdana">&nbsp;Cadegoria da Loja .:</font></b> </td>
                  <td>
				  
				  <select type="text" id="Edit2a" name="Edit2a" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:200px;"    tabindex="0"    >

				  <option value="<?php echo $row_Recordset2['cod_categ']?>"><?php echo $row_Recordset2['descricao']?></option>
					
					<?
					Do {  
					?>
					      <option value="<?php echo $row_Recordset2['cod_categ']?>"><?php echo $row_Recordset2['descricao']?></option>
					<?
					}
					while ($row_Recordset2 = mysql_fetch_assoc($Recordset2));
					      $rows2 = mysql_num_rows($Recordset2);
					      if($rows2 > 0) {
					         mysql_data_seek($Recordset2, 0);
						     $row_Recordset2 = mysql_fetch_assoc($Recordset2);
					      }
					?>
					
				  </select>
				  
				  </td>
                </tr>
                <tr>
                  <td height="1"><b></b></td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
              </tr>
          </table>
                    <table width="536" border="0">
            <tr>
              <td width="247" height="28"><b><font size="2" face="Verdana">Logotipo da Loja</font></b></td>
              <td width="279">&nbsp;</td>
            </tr>
            <tr>
              <td height="138"><div align="center"><img src="../graphics/avon.png" width="219" height="107"></div></td>
              <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
                <tr>
                  <td><b><font size="2" face="Verdana">&nbsp;Termos de uso dos Anuncios</font></b> </td>
                </tr>
                <tr>
                  <td height="117">
				  
				    <div align="center">
				    <textarea name="textarea" cols="42" rows="7" readonly>
Termos e Condi��es Gerais de uso do Compraai 
Estes Termos e Condi��es Gerais aplicam-se ao uso dos servi�os oferecidos por Compraai Atividades de Internet Ltda.,que inclui os servi�os para compra e venda de bens, produtos e servi�os. Qualquer pessoa, doravante nominada Usu�rio, que pretenda utilizar os servi�os do Compraai dever� aceitar os Termos e Condi��es Gerais, e todas as demais pol�ticas e princ�pios que o regem.

A ACEITA��O DESTES TERMOS E CONDI��ES GERAIS � ABSOLUTAMENTE INDISPENS�VEL � UTILIZA��O DO SITE E SEUS SERVI�OS

O usu�rio dever� ler, certificar-se de haver entendido e aceitar todas as condi��es estabelecidas nos Termos e Condi��es Gerais e nas Pol�ticas de Privacidade, assim como nos demais documentos incorporados aos mesmos por refer�ncia, antes de seu cadastro como Usu�rio do Compraai.

01 - Objeto . 

Os servi�os objeto dos presentes Termos e Condi��es Gerais de Uso consistem em ofertar ao Usu�rio um espa�o para que anuncie e venda produtos ou servi�os dos quais tenha a faculdade de vender e/ou adquirir de outros usu�rios bens ou servi�os por eles anunciados, portanto possibilita aos usu�rios travarem conhecimento uns dos outros e permiter que eles negociem entre si diretamente, sem sua interven��o na finaliza��o dos neg�cios, n�o sendo, nesta qualidade, fornecedora de quaisquer produtos e/ou servi�os anunciados exclusivamente por seus usu�rios.

02 - Capacidade para cadastrar-se . 

Os servi�os do Compraai est�o dispon�veis apenas para as pessoas que tenham capacidade legal para contrat�-los. N�o podem utiliz�-los, assim, pessoas que n�o gozem dessa capacidade, inclusive menores de idade, ou pessoas que tenham sido inabilitadas, tempor�ria ou definitivamente. 

Tamb�m n�o � permitido que uma mesma pessoa tenha mais de um cadastro. Se for detectado, atrav�s do sistema de verifica��o de dados, cadastros duplicados ir� inabilitar definitivamente todos os cadastros. 

Pessoas Jur�dicas poder�o cadastrar-se mediante seu representante legal. 

03 - Cadastro . 

Apenas ser� confirmado o cadastramento do interessado que preencher todos os campos do cadastro. O futuro Usu�rio dever� complet�-lo com informa��es exatas, precisas e verdadeiras, e assume o compromisso de atualizar os Dados Pessoais sempre que neles ocorrer alguma altera��o. O Compraai se reserva o direito de utilizar todos os meios v�lidos e poss�veis para identificar seus usu�rios.

O Compraai n�o se responsabiliza pela corre��o dos Dados Pessoais inseridos por seus usu�rios. Os usu�rios garantem e respondem, em qualquer caso, pela veracidade, exatid�o e autenticidade dos Dados Pessoais cadastrados.

O Compraai se reserva o direito de utilizar todos os meios v�lidos e poss�veis para identificar seus usu�rios, bem como de solicitar dados adicionais e documentos que estime serem pertinentes a fim de conferir os Dados Pessoais informados. 

Caso seja necessario checar a veracidade dos dados cadastrais de um usu�rio e se constate haver entre eles dados incorretos ou inver�dicos, ou ainda caso o usu�rio se furte ou negue a enviar os documentos requeridos, O usuario sera bloqueado para usar o Forum e demais Servi�os temporariamente ou cancelada definitivamente o cadastro, sem preju�zo de outras medidas que entender necess�rias e oportunas. 

Havendo a aplica��o de qualquer das san��es acima referidas, automaticamente ser�o cancelados os an�ncios por ele veiculados, n�o assistindo ao usu�rio, por essa raz�o, qualquer sorte de indeniza��o ou ressarcimento.

O Usu�rio acessar� sua conta atrav�s de apelido e senha e compromete-se a n�o informar a terceiros esses dados, responsabilizando-se integralmente pelo uso que deles seja feito.
O Usu�rio compromete-se a notificar o Compraai imediatamente, e atrav�s de meio seguro, a respeito de qualquer uso n�o autorizado de sua conta, bem como o acesso n�o autorizado por terceiros � mesma. O usu�rio ser� o �nico respons�vel pelas opera��es efetuadas em sua conta, uma vez que o acesso � mesma s� ser� poss�vel mediante a aposi��o da senha, cujo conhecimento � exclusivo do usu�rio.

Em nenhuma hip�tese ser� permitida a cess�o, venda, aluguel ou outra forma de transfer�ncia da conta (incluindo-se qualifica��es e reputa��o). Tamb�m n�o se permitir� a manuten��o de mais de um cadastro por uma mesma pessoa, ou ainda a cria��o de novos cadastros por pessoas cujos cadastros originais tenham sido cancelados por infra��es �s pol�ticas do Compraai

O apelido que o Usu�rio utiliza no Compraai n�o poder� guardar semelhan�a com o nome Compraai. Tampouco poder� ser utilizado qualquer apelido que insinue ou sugira que os produtos anunciados pertencem ao Compraai ou que fazem parte de promo��es suas. Tamb�m ser�o eliminados apelidos considerados ofensivos, bem como os que contenham dados pessoais do usu�rio ou alguma URL ou endere�o eletr�nico. O Compraai se reserva o direito de recusar qualquer solicita��o de cadastro e de cancelar um cadastro previamente aceito, a seu exclusivo crit�rio.

04 - Modifica��es dos Termos e Condi��es Gerais . 

O Compraai poder� alterar, a qualquer tempo, estes Termos e Condi��es Gerais, visando seu aprimoramento e melhoria dos servi�os prestados. Os novos Termos e Condi��es entrar�o em vigor 10 dias ap�s publicados no site. No prazo de 5 (cinco) dias contados a partir da publica��o das modifica��es, o Usu�rio dever� comunicar-se por e-mail, clicando aqui, caso n�o concorde com os termos alterados.. Nesse caso, o v�nculo contratual deixar� de existir, desde que n�o haja contas ou d�vidas em aberto. N�o havendo manifesta��o no prazo estipulado, entender-se-� que o Usu�rio aceitou tacitamente os novos Termos e Condi��es e o contrato continuar� vinculando as partes. 
As altera��es n�o vigorar�o em rela��o a negocia��es e an�ncios j� iniciados ao tempo em que as mesmas altera��es sejam publicadas. Para estes, os Termos e Condi��es Gerais de Uso valer�o com a reda��o anterior.

05 - Produtos anunciados . 

5.1 An�ncios/ofertas.
O Usu�rio poder� oferecer � venda produtos ou servi�os em suas respectivas categorias e subcategorias. O an�ncio pode conter gr�ficos, textos, descri��es e fotos do produto ou servi�o oferecido, O produto ou servi�o oferecido pelo Usu�rio Vendedor deve ser descrito com clareza quanto a suas caracter�sticas relevantes. Ao incluir uma fotografia, esta dever� corresponder especificamente ao produto que est� sendo oferecido, salvo quando se trate de um produto novo. Presumir-se-� que, mediante a inclus�o do an�ncio, o Usu�rio manifesta a inten��o e declara possuir o direito de vender o produto oferecido, ou que est� facultado para tal por seu titular, al�m de dispor do produto para entrega imediata. Os pre�os dos produtos anunciados devem conter todos os tributos sobre eles incidentes. 

5.1 Produtos Proibidos.
Poder�o ser anunciados/ofertados aqueles produtos ou servi�os cuja venda n�o esteja expressamente proibida pelos Termos e Condi��es Gerais e demais pol�ticas vigente.

06 - Legisla��o Aplic�vel e Foro de elei��o . 

Todos os itens destes Termos e Condi��es Gerais est�o regidos pelas leis vigentes na Rep�blica Federativa do Brasil. Para todos os assuntos referentes � interpreta��o e ao cumprimento deste Contrato, as partes se submetem ao Foro Central da Cidade de S�o Paulo, exce��o feita a reclama��es apresentadas por usu�rios que se enquadrem no conceito legal de consumidores, que poder�o submeter as mesmas no foro de seu domic�lio. 


Informa�ao na se�ao de perguntas e respostas ou f�runs 

O Compraai permite realizar perguntas e respostas nos an�ncios e al�m disso mant�m f�runs p�blicos ("f�runs") que sao f�ceis de usar e navegar. Nestas se�oes os usu�rios podem realizar coment�rios, dar opinioes, iniciar discussoes e temas de seu interesse em um ambiente amig�vel, sempre sujeitos as regras aplic�veis nestas pol�ticas.
A Informa�ao Pessoal inserida na se�ao de perguntas e respostas ou nos f�runs pode ser lida, coletada ou utilizada por qualquer pessoa. O Compraai nao ser� respons�vel pelo uso dessa Informa�ao Pessoal publicada pelo usu�rio nestes campos do website. 
 

Direito de cancelamento e retifica�ao de Dados Pessoais . 

O Usu�rio, ao cadastrar-se, manifesta conhecer e pode exercitar seus direitos de acessar, cancelar e atualizar seus Dados Pessoais. O Usu�rio garante e responde pela veracidade, exatidao, vigencia e autenticidade dos Dados Pessoais, e se compromete a mante-los devidamente atualizados.

Uma vez cadastrado no Compraai� o Usu�rio poder� revisar e alterar a informa�ao que houver fornecido durante o processo de cadastro, incluindo-se:
�	O apelido e endere�o de e-mail. Sem preju�zo das mudan�as que efetue, o Compraai conservar� os Dados Pessoais originais por motivos de seguran�a e controle de fraudes; 
�	A informa�ao do cadastro como: n�mero de telefone, etc. 
�	A senha pessoal. 
Em determinados casos, serao mantidos nos arquivos do Compraai os Dados Pessoais que nos tenha sido solicitados para remo�ao com o objetivo de utiliza�ao na solu�ao de lit�gios ou reclama�oes, detectar problemas ou incidentes e e dar cumprimento ao disposto nos Termos e Condi�oes Gerais de Uso. Em qualquer caso, os Dados Pessoais do Usu�rio nao serao imediatamente retirados dos arquivos por razoes legais e t�cnicas, incluindo os sistemas de suporte e seguran�a.</textarea>
				    </div></td>
                </tr>
              </table></td>
            </tr>
          </table>
          <br>
          <table width="236" border="0">
            <tr>
              <td width="100"><input id="Button1" name="Button1" type=image src="../graphics/salvar1.png" width="100" height="32"></td>
              <td width="67">&nbsp;</td>
              <td width="11"><input id="Button2" name="Button2" type=image src="../graphics/descarta1.png" width="100" height="32"></td>
            </tr>
          </table>
		  	</form>

          <br>
        </div></td>
        </tr>
    </table>
    �
</td>
    <td width="1%"><div align="center"><img src="../graphics/px1.gif" width="8" height="10"></div></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td><div align="center"><img src="../graphics/retorno.png" width="30" height="31"><br>
    </div></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>

<?
include('rodape.php');
?>