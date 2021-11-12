<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: layout do Sistema
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 13/07/2009

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

require("../config.php");

// Abre Conexão com o MySql
include("../conexao.php");

session_start();
$ser_name3_c    = strtoupper($_SESSION["log_name_c"]);

require("../funcoes2.php");

// Chama o Banco de Dados
$link = @mysql_connect($host,$user,$pass)

    or die( require("../login.php"));

@mysql_select_db($db);

// Consulta Tabela Estados
$consulta2  = "SELECT * FROM estados";
					
$resultado2 = @mysql_query($consulta2);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>

<style type="text/css">
<!--

body {
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}

.style1 {
	color: #FF0000;
	font-family: Arial;
	font-size: 14px;
	font-weight: bold;
	
}
.style3 {
	color: #FF0000;
	font-family: Arial;
	font-weight: bold;
	font-size: 14px;
}
.style4 {
	font-size: 12px;
	font-family: Arial;
	font-weight: bold;
	}
	
.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}
	
-->
</style>


<script>
// Valida Campo
function validaCampo()
{
if(document.Form1.nome1.value=="")
{
	alert("O Campo Nome é Obrigatorio!");
	return false;
}
else	
if(document.Form1.sobrenome.value=="")
{
	alert("O Campo Sobre Nome é Obrigatorio!");
	return false;
}
if(document.Form1.dia.value=="")
{
	alert("O Campo Data Nascimento é Obrigatorio!");
	return false;
}
else
if(document.Form1.mes.value=="")
{
	alert("O Campo Data Nascimento é Obrigatorio!");
	return false;
}
else
if(document.Form1.ano.value=="")
{
	alert("O Campo Data Nascimento é Obrigatorio!");
	return false;
}
else
if(document.Form1.sexo.value=="")
{
	alert("O Campo Sexo é Obrigatorio!");
	return false;
}
else
if(document.Form1.secreto.value=="")
{
	alert("Utilize uma palavra secreta para recuperar sua senha caso perca !!!");
	return false;
}
else
if(document.Form1.login.value=="")
{
	alert("O Campo Login é Obrigatorio!");
	return false;
}
else
if(document.Form1.senha1.value=="")
{
	alert("O Campo Senha é Obrigatorio!");
	return false;
}
else
if(document.Form1.senha2.value=="")
{
	alert("O Campo Confirmar Senha é Obrigatorio!");
	return false;
}
else
if (document.Form1.senha1.value != document.Form1.senha2.value)
{
	alert("O Campo Senha: e Campo Comfirma Senha: não são iguais!");
	return false;
}
else
if(document.Form1.email1.value=="")
{
	alert("O Campo E-mail é Obrigatorio!");
	return false;
}
else
if(document.Form1.email2.value=="")
{
	alert("O Campo Confirmar E-mail é Obrigatorio!");
	return false;
}
else
if (document.Form1.email1.value != document.Form1.email2.value)
{
	alert("O Campo E-Mail: e Campo Comfirma E-Mail: não são iguais!");
	return false;
}
else
if(document.Form1.rg.value=="")
{
	alert("O Campo R.G: é Obrigatorio!");
	return false;
}
else
if(document.Form1.cpf1.value=="")
{
	alert("O Campo CPF é Obrigatorio!");
	return false;
}
else
if(document.Form1.cep.value=="")
{
	alert("O Campos CEP e Obrigatorio!");
	return false;
}
else
if(document.Form1.fone2.value=="")
{
	alert("O Campo Celular e Obrigatorio!");
	return false;
}
else
return true;	
}        
</script>

<script>
// Valida CPF
 function validarCPF(){
   var cpf = document.Form1.cpf1.value;
    
   if(cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" ||
	  cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" ||
	  cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" ||
	  cpf == "88888888888" || cpf == "99999999999"){
	  window.alert("CPF inválido. Tente novamente.");
	  return false;
   }

   soma = 0;
   for(i = 0; i < 9; i++)
   	 soma += parseInt(cpf.charAt(i)) * (10 - i);
   resto = 11 - (soma % 11);
   if(resto == 10 || resto == 11)
	 resto = 0;
   if(resto != parseInt(cpf.charAt(9))){
	 window.alert("CPF inválido. Tente novamente.");
	 return false;
   }
   soma = 0;
   for(i = 0; i < 10; i ++)
	 soma += parseInt(cpf.charAt(i)) * (11 - i);
   resto = 11 - (soma % 11);
   if(resto == 10 || resto == 11)
	 resto = 0;
   if(resto != parseInt(cpf.charAt(10))){
     window.alert("CPF inválido. Tente novamente.");
	 return false;
   }
   return true;
 }
</script>

<script>
// Valida email
function ValidaEmail()
{
  var obj = eval("document.Form1.email1");
  var txt = obj.value;
  if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7)))
  {
    alert('Email incorreto');
	obj.focus();
  }
}
function ValidaEmail2()
{
  var obj = eval("document.Form1.email2");
  var txt = obj.value;
  if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7)))
  {
    alert('Email incorreto');
	obj.focus();
  }
}

function txtBoxFormat(objForm, strField, sMask, evtKeyPress) {
var i, nCount, sValue, fldLen, mskLen,bolMask, sCod, nTecla;
if(document.all) { 
nTecla = evtKeyPress.keyCode; }
else if(document.layers) { 
nTecla = evtKeyPress.which;}
sValue = objForm[strField].value;
sValue = sValue.toString().replace( "-", "" );
sValue = sValue.toString().replace( "-", "" );
sValue = sValue.toString().replace( ".", "" );
sValue = sValue.toString().replace( ".", "" );
sValue = sValue.toString().replace( "/", "" );
sValue = sValue.toString().replace( "/", "" );
sValue = sValue.toString().replace( "(", "" );
sValue = sValue.toString().replace( "(", "" );
sValue = sValue.toString().replace( ")", "" );
sValue = sValue.toString().replace( ")", "" );
sValue = sValue.toString().replace( " ", "" );
sValue = sValue.toString().replace( " ", "" );
fldLen = sValue.length;
mskLen = sMask.length;
i = 0;
nCount = 0;
sCod = "";
mskLen = fldLen;
while (i <= mskLen) {
bolMask = ((sMask.charAt(i) == "-") || (sMask.charAt(i) == ".") || (sMask.charAt(i) == "/"))
bolMask = bolMask || ((sMask.charAt(i) == "(") || (sMask.charAt(i) == ")") || (sMask.charAt(i) == " "))
if (bolMask) {
sCod += sMask.charAt(i);
mskLen++; }
else {
sCod += sValue.charAt(nCount);
nCount++;
}
i++;
}
objForm[strField].value = sCod;
if (nTecla != 8) { 
if (sMask.charAt(i-1) == "9") { 
return ((nTecla > 47) && (nTecla < 58)); } 
else { 
return true;
} }
else {
return true;
}
}

</script>

</head>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF">

<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Cadastro de Usuário </span></td>
            </tr>
          </table>

<form style="margin-bottom: 0" id="Form1" name="Form1" method="post"  action="incluir.php" onsubmit="return validaCampo(); return false;">

<table width="100%%" height="736" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th valign="top" bgcolor="#FFFFFF"><table width="569" border="0">
      <tr>
        <td align="right"><span class="style4">Nome.:</span></td>
        <td align="left"><input name="nome1" type="text" id="nome1" size="45" maxlength="45">
          <span class="style1">*</span></td>
      </tr>
      <tr>
        <td align="right"><span class="style4">Sobre Nome.: </span></td>
        <td align="left"><input name="sobrenome" type="text" id="sobrenome" size="45" maxlength="45">
          <span class="style1">*</span></td>
      </tr>
      <tr>
        <td align="right"><span class="style4">Data de Nascimento.: </span></td>
        <td align="left"><select name="dia" type="text" id="dia" value="">
        

            <option value="">   </option>
            <option value="01"> 01   </option>
            <option value="02"> 02   </option>
            <option value="03"> 03   </option>
            <option value="04"> 04   </option>
            <option value="05"> 05   </option>
            <option value="06"> 06   </option>
            <option value="07"> 07   </option>
            <option value="08"> 08   </option>
            <option value="09"> 09   </option>
            <option value="10"> 10   </option>
            <option value="11"> 11   </option>
            <option value="12"> 12   </option>
            <option value="13"> 13   </option>
            <option value="14"> 14   </option>
            <option value="15"> 15   </option>
            <option value="16"> 16   </option>
            <option value="17"> 17   </option>
            <option value="18"> 18   </option>
            <option value="19"> 19   </option>
            <option value="20"> 20   </option>
            <option value="21"> 21   </option>
            <option value="22"> 22   </option>
            <option value="23"> 23   </option>
            <option value="24"> 24   </option>
            <option value="25"> 25   </option>
            <option value="26"> 26   </option>
            <option value="27"> 27   </option>
            <option value="28"> 28   </option>
            <option value="29"> 29   </option>
            <option value="30"> 30   </option>
            <option value="31"> 31   </option>

</select>

        
        
          <select name="mes" type="text" id="mes" value="">
          
            <option value="">   </option>
            <option value="01"> 01   </option>
            <option value="02"> 02   </option>
            <option value="03"> 03   </option>
            <option value="04"> 04   </option>
            <option value="05"> 05   </option>
            <option value="06"> 06   </option>
            <option value="07"> 07   </option>
            <option value="08"> 08   </option>
            <option value="09"> 09   </option>
            <option value="10"> 10   </option>
            <option value="11"> 11   </option>
            <option value="12"> 12   </option>

          </select>

          
          <select name="ano" type="text" id="ano" value="">
		  
            <option value="">   </option>
            <option value="1950"> 1950   </option>
            <option value="1951"> 1951   </option>
            <option value="1952"> 1952   </option>
            <option value="1953"> 1953   </option>
            <option value="1954"> 1954   </option>
            <option value="1955"> 1955   </option>
            <option value="1956"> 1956   </option>
            <option value="1957"> 1957   </option>
            <option value="1958"> 1958   </option>
            <option value="1959"> 1959   </option>
            <option value="1960"> 1960   </option>
            <option value="1961"> 1961   </option>
            <option value="1962"> 1962   </option>
            <option value="1963"> 1963   </option>
            <option value="1964"> 1964   </option>
            <option value="1965"> 1965   </option>
            <option value="1966"> 1966   </option>
            <option value="1967"> 1967   </option>
            <option value="1968"> 1968   </option>
            <option value="1969"> 1969   </option>
            <option value="1970"> 1970   </option>
            <option value="1971"> 1971   </option>
            <option value="1972"> 1972   </option>
            <option value="1973"> 1973   </option>
            <option value="1974"> 1974   </option>
            <option value="1975"> 1975   </option>
            <option value="1976"> 1976   </option>
            <option value="1977"> 1977   </option>
            <option value="1978"> 1978   </option>
            <option value="1979"> 1979   </option>
            <option value="1980"> 1980   </option>
            <option value="1981"> 1981   </option>
            <option value="1982"> 1982   </option>
            <option value="1983"> 1983   </option>
            <option value="1984"> 1984   </option>
            <option value="1985"> 1985   </option>
            <option value="1986"> 1986   </option>
            <option value="1987"> 1987   </option>
            <option value="1988"> 1988   </option>
            <option value="1989"> 1989   </option>
            <option value="1990"> 1990   </option>
            <option value="1991"> 1991   </option>
            <option value="1992"> 1992   </option>
            <option value="1993"> 1993   </option>
            <option value="1994"> 1994   </option>
            <option value="1995"> 1995   </option>
            <option value="1996"> 1996   </option>
            <option value="1997"> 1997   </option>
            <option value="1998"> 1998   </option>
            <option value="1999"> 1999   </option>
            <option value="2000"> 2000   </option>
            <option value="2001"> 2001   </option>
            <option value="2002"> 2002   </option>
            <option value="2003"> 2003   </option>
            <option value="2004"> 2004   </option>
            <option value="2005"> 2005   </option>
            <option value="2006"> 2006   </option>
            <option value="2007"> 2007   </option>
            <option value="2008"> 2008   </option>
            <option value="2009"> 2009   </option>

</select>

		  
		  
		  </td>
      </tr>
      <tr>
        <td align="right"><span class="style4">Sexo.:</span></td>
        <td align="left"><select name="sexo" type="text" id="sexo" value="">
        
            <option value="">   </option>
             <option value="MASCULINO"> MASCULINO   </option>
             <option value="FEMININO"> FEMININO   </option>

             </select>

        
        
          <span class="style1">*</span></td>
      </tr>
      <tr>
        <td align="right"><span class="style4">Palavra Secreta.: </span></td>
        <td align="left"><input name="secreto" type="text" id="secreto" size="45">
          <span class="style1">*</span></td>
      </tr>
      <tr>
        <td align="right"><span class="style4"></span></td>
        <td align="left"><span class="style3">Area de Seguran&ccedil;a </span></td>
      </tr>
      <tr bgcolor="#FFCC66">
        <td align="right"><span class="style4">Login.:</span></td>
        <td align="left"><input name="login" type="text" id="login" size="20">
          <span class="style1">*</span></td>
      </tr>
      <tr bgcolor="#FFCC66">
        <td align="right"><span class="style4">Senha.:</span></td>
        <td align="left"><input name="senha1" type="password" id="senha1" size="25">
          <span class="style1">*</span></td>
      </tr>
      <tr bgcolor="#FFCC66">
        <td align="right"><span class="style4">Confirmar Senha.:</span></td>
        <td align="left"><input name="senha2" type="password" id="senha2" size="25">
          <span class="style1">*</span></td>
      </tr>
      <tr>
        <td align="right"><span class="style4"></span></td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right"><span class="style4">e-Mail.:</span></td>
        <td align="left"><input name="email1" type="text" id="email1" size="45" onblur="ValidaEmail()">
          <span class="style1">*</span></td>
      </tr>
      <tr>
        <td align="right"><span class="style4">Confirmar e-Mail.:</span></td>
        <td align="left"><input name="email2" type="text" id="email2" size="45" onblur="ValidaEmail2()">
          <span class="style1">          *</span></td>
      </tr>
      <tr>
        <td align="right"><span class="style4">RG.:</span></td>
        <td align="left"><input name="rg" type="text" id="rg" size="25">
          <span class="style1">*</span></td>
      </tr>
      <tr>
        <td align="right"><span class="style4">C.P.F.:</span></td>
        <td align="left"><input name="cpf1" type="text" id="cpf1" size="25" onblur="validarCPF()">
          <span class="style1">*</span></td>
      </tr>
      <tr>
        <td align="right"><span class="style4">Logradouro.:</span></td>
        <td align="left"><select name="logra" type="text" id="logra" value="">
		
			        <option value="RUA"> RUA </option>
            <option value="ALAMEDA">  ALAMEDA </option>
            <option value="AVENIDA">  AVENIDA </option>
            <option value="BAIXADA">  BAIXADA </option>
            <option value="CORREGO">  CORREGO </option>
            <option value="CRUZAMENTO">  CRUZAMENTO </option>
            <option value="ESCADARIA">  ESCADARIA </option>
            <option value="ESTRADA">  ESTRADA </option>
            <option value="MORRO">  MORRO </option>
            <option value="PASSAGEM">  PASSAGEM </option>
            <option value="PONTE">  PONTE </option>
            <option value="PRACA">  PRACA </option>
            <option value="ROTATORIA">  ROTATORIA </option>
            <option value="RUA">  RUA </option>
            <option value="VIADUTO">  VIADUTO </option>
            <option value="VIELA">  VIELA </option>

            </select>

		
		
		
		          </td>
      </tr>
      <tr>
        <td align="right"><span class="style4">Endere&ccedil;o.:</span></td>
        <td align="left"><input name="endereco" type="text" id="endereco" size="45">          </td>
      </tr>
      <tr>
        <td align="right"><span class="style4">Bairro.:</span></td>
        <td align="left"><input name="bairro" type="text" id="bairro" size="40">          </td>
      </tr>
      <tr>
        <td align="right"><span class="style4">Cidade.:</span></td>
        <td align="left"><input name="cidade" type="text" id="cidade" size="25">
           <span class="style4">Estado.: 
            </span>           <select name="estado" type="text" id="estado" value="">
            
            
						        <option value="">  </option>
							    <?
							    while ($linha = @mysql_fetch_array($resultado2))
							    {
							       $estado2 = $linha["estado"];
								   $uf2     = $linha["uf"];	
							    ?>
							    
								<option value="<?=$estado2." - ".$uf2;?>"> <?=$estado2." - ".$uf2;?> </option>
						        <?
								}
								?>  
							
							    </select>

            
          </td>
      </tr>
      <tr>
        <td align="right"><span class="style4">CEP.:</span></td>
        <td align="left"><input name="cep" type="text" id="cep" size="15">
          <span class="style1">*</span></td>
      </tr>
      <tr>
        <td align="right"><span class="style4">Fone Fixo.: </span></td>
        <td align="left"><input name="fone1" type="text" id="fone1" size="25" onkeypress="return txtBoxFormat(document.Form1, 'fone1', '(99)9999-9999', event);">
          <span class="style1">*</span> <span class="style4">Celular.:</span>          <input name="fone2" type="text" id="fone2" size="25" onkeypress="return txtBoxFormat(document.Form1, 'fone2', '(99)9999-9999', event);">
          </td>
      </tr>
      <tr>
        <td align="right"><span class="style4"></span></td>
        <td align="left">&nbsp;</td>
      </tr>
    </table>
    <table width="542" border="0">
      <tr>
        <th width="536" height="123" align="left" scope="col"><textarea name="textarea" cols="65" rows="6" readonly>
Termos e Condições Gerais de uso do Portal iSysMp.com 
Estes Termos e Condições Gerais aplicam-se ao uso dos serviços oferecidos por SysMp.com Atividades de Internet Ltda.,que inclui os serviços para compra e venda de bens, produtos e serviços. Qualquer pessoa, doravante nominada Usuário, que pretenda utilizar os serviços do SysMp.com deverá aceitar os Termos e Condições Gerais, e todas as demais políticas e princípios que o regem.

A ACEITAÇÃO DESTES TERMOS E CONDIÇÕES GERAIS É ABSOLUTAMENTE INDISPENSÁVEL À UTILIZAÇÃO DO SITE E SEUS SERVIÇOS

O usuário deverá ler, certificar-se de haver entendido e aceitar todas as condições estabelecidas nos Termos e Condições Gerais e nas Políticas de Privacidade, assim como nos demais documentos incorporados aos mesmos por referência, antes de seu cadastro como Usuário do SysMp.com.

01 - Objeto . 

Os serviços objeto dos presentes Termos e Condições Gerais de Uso consistem em ofertar ao Usuário um espaço para que anuncie e venda produtos ou serviços dos quais tenha a faculdade de vender e/ou adquirir de outros usuários bens ou serviços por eles anunciados, portanto possibilita aos usuários travarem conhecimento uns dos outros e permiter que eles negociem entre si diretamente, sem sua intervenção na finalização dos negócios, não sendo, nesta qualidade, fornecedora de quaisquer produtos e/ou serviços anunciados exclusivamente por seus usuários.

02 - Capacidade para cadastrar-se . 

Os serviços do SysMp.com estão disponíveis apenas para as pessoas que tenham capacidade legal para contratá-los. Não podem utilizá-los, assim, pessoas que não gozem dessa capacidade, inclusive menores de idade, ou pessoas que tenham sido inabilitadas, temporária ou definitivamente. 

Também não é permitido que uma mesma pessoa tenha mais de um cadastro. Se for detectado, através do sistema de verificação de dados, cadastros duplicados irá inabilitar definitivamente todos os cadastros. 

Pessoas Jurídicas poderão cadastrar-se mediante seu representante legal. 

03 - Cadastro . 

Apenas será confirmado o cadastramento do interessado que preencher todos os campos do cadastro. O futuro Usuário deverá completá-lo com informações exatas, precisas e verdadeiras, e assume o compromisso de atualizar os Dados Pessoais sempre que neles ocorrer alguma alteração. O SysMp.com se reserva o direito de utilizar todos os meios válidos e possíveis para identificar seus usuários.

O SysMp.com não se responsabiliza pela correção dos Dados Pessoais inseridos por seus usuários. Os usuários garantem e respondem, em qualquer caso, pela veracidade, exatidão e autenticidade dos Dados Pessoais cadastrados.

O SysMp.com se reserva o direito de utilizar todos os meios válidos e possíveis para identificar seus usuários, bem como de solicitar dados adicionais e documentos que estime serem pertinentes a fim de conferir os Dados Pessoais informados. 

Caso seja necessario checar a veracidade dos dados cadastrais de um usuário e se constate haver entre eles dados incorretos ou inverídicos, ou ainda caso o usuário se furte ou negue a enviar os documentos requeridos, O usuario sera bloqueado para usar o Forum e Portal de Trocas temporariamente ou cancelada definitivamente o cadastro, sem prejuízo de outras medidas que entender necessárias e oportunas. 

Havendo a aplicação de qualquer das sanções acima referidas, automaticamente serão cancelados os anúncios por ele veiculados, não assistindo ao usuário, por essa razão, qualquer sorte de indenização ou ressarcimento.

O Usuário acessará sua conta através de apelido e senha e compromete-se a não informar a terceiros esses dados, responsabilizando-se integralmente pelo uso que deles seja feito.
O Usuário compromete-se a notificar o SysMp.com imediatamente, e através de meio seguro, a respeito de qualquer uso não autorizado de sua conta, bem como o acesso não autorizado por terceiros à mesma. O usuário será o único responsável pelas operações efetuadas em sua conta, uma vez que o acesso à mesma só será possível mediante a aposição da senha, cujo conhecimento é exclusivo do usuário.

Em nenhuma hipótese será permitida a cessão, venda, aluguel ou outra forma de transferência da conta (incluindo-se qualificações e reputação). Também não se permitirá a manutenção de mais de um cadastro por uma mesma pessoa, ou ainda a criação de novos cadastros por pessoas cujos cadastros originais tenham sido cancelados por infrações às políticas do portal

O apelido que o Usuário utiliza no Portal não poderá guardar semelhança com o nome SysMp.com. Tampouco poderá ser utilizado qualquer apelido que insinue ou sugira que os produtos anunciados pertencem ao SysMp.com ou que fazem parte de promoções suas. Também serão eliminados apelidos considerados ofensivos, bem como os que contenham dados pessoais do usuário ou alguma URL ou endereço eletrônico. O SysMp.com se reserva o direito de recusar qualquer solicitação de cadastro e de cancelar um cadastro previamente aceito, a seu exclusivo critério.

04 - Modificações dos Termos e Condições Gerais . 

O SysMp.com poderá alterar, a qualquer tempo, estes Termos e Condições Gerais, visando seu aprimoramento e melhoria dos serviços prestados. Os novos Termos e Condições entrarão em vigor 10 dias após publicados no site. No prazo de 5 (cinco) dias contados a partir da publicação das modificações, o Usuário deverá comunicar-se por e-mail, clicando aqui, caso não concorde com os termos alterados.. Nesse caso, o vínculo contratual deixará de existir, desde que não haja contas ou dívidas em aberto. Não havendo manifestação no prazo estipulado, entender-se-á que o Usuário aceitou tacitamente os novos Termos e Condições e o contrato continuará vinculando as partes. 
As alterações não vigorarão em relação a negociações e anúncios já iniciados ao tempo em que as mesmas alterações sejam publicadas. Para estes, os Termos e Condições Gerais de Uso valerão com a redação anterior.

05 - Produtos anunciados . 

5.1 Anúncios/ofertas.
O Usuário poderá oferecer à venda produtos ou serviços em suas respectivas categorias e subcategorias. O anúncio pode conter gráficos, textos, descrições e fotos do produto ou serviço oferecido, O produto ou serviço oferecido pelo Usuário Vendedor deve ser descrito com clareza quanto a suas características relevantes. Ao incluir uma fotografia, esta deverá corresponder especificamente ao produto que está sendo oferecido, salvo quando se trate de um produto novo. Presumir-se-á que, mediante a inclusão do anúncio, o Usuário manifesta a intenção e declara possuir o direito de vender o produto oferecido, ou que está facultado para tal por seu titular, além de dispor do produto para entrega imediata. Os preços dos produtos anunciados devem conter todos os tributos sobre eles incidentes. 

5.1 Produtos Proibidos.
Poderão ser anunciados/ofertados aqueles produtos ou serviços cuja venda não esteja expressamente proibida pelos Termos e Condições Gerais e demais políticas vigente.

06 - Legislação Aplicável e Foro de eleição . 

Todos os itens destes Termos e Condições Gerais estão regidos pelas leis vigentes na República Federativa do Brasil. Para todos os assuntos referentes à interpretação e ao cumprimento deste Contrato, as partes se submetem ao Foro Central da Cidade de São Paulo, exceção feita a reclamações apresentadas por usuários que se enquadrem no conceito legal de consumidores, que poderão submeter as mesmas no foro de seu domicílio. 


Informaçao na seçao de perguntas e respostas ou fóruns 

O Portal permite realizar perguntas e respostas nos anúncios e além disso mantém fóruns públicos ("fóruns") que sao fáceis de usar e navegar. Nestas seçoes os usuários podem realizar comentários, dar opinioes, iniciar discussoes e temas de seu interesse em um ambiente amigável, sempre sujeitos as regras aplicáveis nestas políticas.
A Informaçao Pessoal inserida na seçao de perguntas e respostas ou nos fóruns pode ser lida, coletada ou utilizada por qualquer pessoa. O Portal nao será responsável pelo uso dessa Informaçao Pessoal publicada pelo usuário nestes campos do website. 
 

Direito de cancelamento e retificaçao de Dados Pessoais . 

O Usuário, ao cadastrar-se, manifesta conhecer e pode exercitar seus direitos de acessar, cancelar e atualizar seus Dados Pessoais. O Usuário garante e responde pela veracidade, exatidao, vigencia e autenticidade dos Dados Pessoais, e se compromete a mante-los devidamente atualizados.

Uma vez cadastrado no Portal¸ o Usuário poderá revisar e alterar a informaçao que houver fornecido durante o processo de cadastro, incluindo-se:
•	O apelido e endereço de e-mail. Sem prejuízo das mudanças que efetue, o Portal conservará os Dados Pessoais originais por motivos de segurança e controle de fraudes; 
•	A informaçao do cadastro como: número de telefone, etc. 
•	A senha pessoal. 
Em determinados casos, serao mantidos nos arquivos do Portal os Dados Pessoais que nos tenha sido solicitados para remoçao com o objetivo de utilizaçao na soluçao de litígios ou reclamaçoes, detectar problemas ou incidentes e e dar cumprimento ao disposto nos Termos e Condiçoes Gerais de Uso. Em qualquer caso, os Dados Pessoais do Usuário nao serao imediatamente retirados dos arquivos por razoes legais e técnicas, incluindo os sistemas de suporte e segurança.</textarea></th>
      </tr>
      <tr>
        <td align="left"><b><ul>
          <li>Li e aceito os Termos e Politica de anuncio e utiliza&ccedil;&atilde;o do Forum acima.</li>
          <li>Sou maior de idade.  </li>
        </ul></b></td>
      </tr>
      <tr>
        <td align="center"><input type="submit" name="Button" value="Aceito os Termos e Normas do Portal" style="background-color: #ffffff;">
        
        </form>
        <form action="../layout.php">

           <input name="sair" type="submit" id="sair" value="N&atilde;o Aceito" style="background-color: #ffffff;">
		   </form>
		   </td>
      </tr>
    </table></th>
  </tr>
</table>

</body>
</html>
