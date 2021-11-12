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
	$mes_a1 = "Março";
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
Termos e Condições Gerais de uso do Compraai 
Estes Termos e Condições Gerais aplicam-se ao uso dos serviços oferecidos por Compraai Atividades de Internet Ltda.,que inclui os serviços para compra e venda de bens, produtos e serviços. Qualquer pessoa, doravante nominada Usuário, que pretenda utilizar os serviços do Compraai deverá aceitar os Termos e Condições Gerais, e todas as demais políticas e princípios que o regem.

A ACEITAÇÃO DESTES TERMOS E CONDIÇÕES GERAIS É ABSOLUTAMENTE INDISPENSÁVEL À UTILIZAÇÃO DO SITE E SEUS SERVIÇOS

O usuário deverá ler, certificar-se de haver entendido e aceitar todas as condições estabelecidas nos Termos e Condições Gerais e nas Políticas de Privacidade, assim como nos demais documentos incorporados aos mesmos por referência, antes de seu cadastro como Usuário do Compraai.

01 - Objeto . 

Os serviços objeto dos presentes Termos e Condições Gerais de Uso consistem em ofertar ao Usuário um espaço para que anuncie e venda produtos ou serviços dos quais tenha a faculdade de vender e/ou adquirir de outros usuários bens ou serviços por eles anunciados, portanto possibilita aos usuários travarem conhecimento uns dos outros e permiter que eles negociem entre si diretamente, sem sua intervenção na finalização dos negócios, não sendo, nesta qualidade, fornecedora de quaisquer produtos e/ou serviços anunciados exclusivamente por seus usuários.

02 - Capacidade para cadastrar-se . 

Os serviços do Compraai estão disponíveis apenas para as pessoas que tenham capacidade legal para contratá-los. Não podem utilizá-los, assim, pessoas que não gozem dessa capacidade, inclusive menores de idade, ou pessoas que tenham sido inabilitadas, temporária ou definitivamente. 

Também não é permitido que uma mesma pessoa tenha mais de um cadastro. Se for detectado, através do sistema de verificação de dados, cadastros duplicados irá inabilitar definitivamente todos os cadastros. 

Pessoas Jurídicas poderão cadastrar-se mediante seu representante legal. 

03 - Cadastro . 

Apenas será confirmado o cadastramento do interessado que preencher todos os campos do cadastro. O futuro Usuário deverá completá-lo com informações exatas, precisas e verdadeiras, e assume o compromisso de atualizar os Dados Pessoais sempre que neles ocorrer alguma alteração. O Compraai se reserva o direito de utilizar todos os meios válidos e possíveis para identificar seus usuários.

O Compraai não se responsabiliza pela correção dos Dados Pessoais inseridos por seus usuários. Os usuários garantem e respondem, em qualquer caso, pela veracidade, exatidão e autenticidade dos Dados Pessoais cadastrados.

O Compraai se reserva o direito de utilizar todos os meios válidos e possíveis para identificar seus usuários, bem como de solicitar dados adicionais e documentos que estime serem pertinentes a fim de conferir os Dados Pessoais informados. 

Caso seja necessario checar a veracidade dos dados cadastrais de um usuário e se constate haver entre eles dados incorretos ou inverídicos, ou ainda caso o usuário se furte ou negue a enviar os documentos requeridos, O usuario sera bloqueado para usar o Forum e demais Serviços temporariamente ou cancelada definitivamente o cadastro, sem prejuízo de outras medidas que entender necessárias e oportunas. 

Havendo a aplicação de qualquer das sanções acima referidas, automaticamente serão cancelados os anúncios por ele veiculados, não assistindo ao usuário, por essa razão, qualquer sorte de indenização ou ressarcimento.

O Usuário acessará sua conta através de apelido e senha e compromete-se a não informar a terceiros esses dados, responsabilizando-se integralmente pelo uso que deles seja feito.
O Usuário compromete-se a notificar o Compraai imediatamente, e através de meio seguro, a respeito de qualquer uso não autorizado de sua conta, bem como o acesso não autorizado por terceiros à mesma. O usuário será o único responsável pelas operações efetuadas em sua conta, uma vez que o acesso à mesma só será possível mediante a aposição da senha, cujo conhecimento é exclusivo do usuário.

Em nenhuma hipótese será permitida a cessão, venda, aluguel ou outra forma de transferência da conta (incluindo-se qualificações e reputação). Também não se permitirá a manutenção de mais de um cadastro por uma mesma pessoa, ou ainda a criação de novos cadastros por pessoas cujos cadastros originais tenham sido cancelados por infrações às políticas do Compraai

O apelido que o Usuário utiliza no Compraai não poderá guardar semelhança com o nome Compraai. Tampouco poderá ser utilizado qualquer apelido que insinue ou sugira que os produtos anunciados pertencem ao Compraai ou que fazem parte de promoções suas. Também serão eliminados apelidos considerados ofensivos, bem como os que contenham dados pessoais do usuário ou alguma URL ou endereço eletrônico. O Compraai se reserva o direito de recusar qualquer solicitação de cadastro e de cancelar um cadastro previamente aceito, a seu exclusivo critério.

04 - Modificações dos Termos e Condições Gerais . 

O Compraai poderá alterar, a qualquer tempo, estes Termos e Condições Gerais, visando seu aprimoramento e melhoria dos serviços prestados. Os novos Termos e Condições entrarão em vigor 10 dias após publicados no site. No prazo de 5 (cinco) dias contados a partir da publicação das modificações, o Usuário deverá comunicar-se por e-mail, clicando aqui, caso não concorde com os termos alterados.. Nesse caso, o vínculo contratual deixará de existir, desde que não haja contas ou dívidas em aberto. Não havendo manifestação no prazo estipulado, entender-se-á que o Usuário aceitou tacitamente os novos Termos e Condições e o contrato continuará vinculando as partes. 
As alterações não vigorarão em relação a negociações e anúncios já iniciados ao tempo em que as mesmas alterações sejam publicadas. Para estes, os Termos e Condições Gerais de Uso valerão com a redação anterior.

05 - Produtos anunciados . 

5.1 Anúncios/ofertas.
O Usuário poderá oferecer à venda produtos ou serviços em suas respectivas categorias e subcategorias. O anúncio pode conter gráficos, textos, descrições e fotos do produto ou serviço oferecido, O produto ou serviço oferecido pelo Usuário Vendedor deve ser descrito com clareza quanto a suas características relevantes. Ao incluir uma fotografia, esta deverá corresponder especificamente ao produto que está sendo oferecido, salvo quando se trate de um produto novo. Presumir-se-á que, mediante a inclusão do anúncio, o Usuário manifesta a intenção e declara possuir o direito de vender o produto oferecido, ou que está facultado para tal por seu titular, além de dispor do produto para entrega imediata. Os preços dos produtos anunciados devem conter todos os tributos sobre eles incidentes. 

5.1 Produtos Proibidos.
Poderão ser anunciados/ofertados aqueles produtos ou serviços cuja venda não esteja expressamente proibida pelos Termos e Condições Gerais e demais políticas vigente.

06 - Legislação Aplicável e Foro de eleição . 

Todos os itens destes Termos e Condições Gerais estão regidos pelas leis vigentes na República Federativa do Brasil. Para todos os assuntos referentes à interpretação e ao cumprimento deste Contrato, as partes se submetem ao Foro Central da Cidade de São Paulo, exceção feita a reclamações apresentadas por usuários que se enquadrem no conceito legal de consumidores, que poderão submeter as mesmas no foro de seu domicílio. 


Informaçao na seçao de perguntas e respostas ou fóruns 

O Compraai permite realizar perguntas e respostas nos anúncios e além disso mantém fóruns públicos ("fóruns") que sao fáceis de usar e navegar. Nestas seçoes os usuários podem realizar comentários, dar opinioes, iniciar discussoes e temas de seu interesse em um ambiente amigável, sempre sujeitos as regras aplicáveis nestas políticas.
A Informaçao Pessoal inserida na seçao de perguntas e respostas ou nos fóruns pode ser lida, coletada ou utilizada por qualquer pessoa. O Compraai nao será responsável pelo uso dessa Informaçao Pessoal publicada pelo usuário nestes campos do website. 
 

Direito de cancelamento e retificaçao de Dados Pessoais . 

O Usuário, ao cadastrar-se, manifesta conhecer e pode exercitar seus direitos de acessar, cancelar e atualizar seus Dados Pessoais. O Usuário garante e responde pela veracidade, exatidao, vigencia e autenticidade dos Dados Pessoais, e se compromete a mante-los devidamente atualizados.

Uma vez cadastrado no Compraai¸ o Usuário poderá revisar e alterar a informaçao que houver fornecido durante o processo de cadastro, incluindo-se:
•	O apelido e endereço de e-mail. Sem prejuízo das mudanças que efetue, o Compraai conservará os Dados Pessoais originais por motivos de segurança e controle de fraudes; 
•	A informaçao do cadastro como: número de telefone, etc. 
•	A senha pessoal. 
Em determinados casos, serao mantidos nos arquivos do Compraai os Dados Pessoais que nos tenha sido solicitados para remoçao com o objetivo de utilizaçao na soluçao de litígios ou reclamaçoes, detectar problemas ou incidentes e e dar cumprimento ao disposto nos Termos e Condiçoes Gerais de Uso. Em qualquer caso, os Dados Pessoais do Usuário nao serao imediatamente retirados dos arquivos por razoes legais e técnicas, incluindo os sistemas de suporte e segurança.</textarea>
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