<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: layout do Sistema
 Criado em Data.....: 07/12/2007
 Ultima Atualiza��o : 13/07/2009

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

require("../config.php");

// Abre Conex�o com o MySql
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
	alert("O Campo Nome � Obrigatorio!");
	return false;
}
else	
if(document.Form1.sobrenome.value=="")
{
	alert("O Campo Sobre Nome � Obrigatorio!");
	return false;
}
if(document.Form1.dia.value=="")
{
	alert("O Campo Data Nascimento � Obrigatorio!");
	return false;
}
else
if(document.Form1.mes.value=="")
{
	alert("O Campo Data Nascimento � Obrigatorio!");
	return false;
}
else
if(document.Form1.ano.value=="")
{
	alert("O Campo Data Nascimento � Obrigatorio!");
	return false;
}
else
if(document.Form1.sexo.value=="")
{
	alert("O Campo Sexo � Obrigatorio!");
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
	alert("O Campo Login � Obrigatorio!");
	return false;
}
else
if(document.Form1.senha1.value=="")
{
	alert("O Campo Senha � Obrigatorio!");
	return false;
}
else
if(document.Form1.senha2.value=="")
{
	alert("O Campo Confirmar Senha � Obrigatorio!");
	return false;
}
else
if (document.Form1.senha1.value != document.Form1.senha2.value)
{
	alert("O Campo Senha: e Campo Comfirma Senha: n�o s�o iguais!");
	return false;
}
else
if(document.Form1.email1.value=="")
{
	alert("O Campo E-mail � Obrigatorio!");
	return false;
}
else
if(document.Form1.email2.value=="")
{
	alert("O Campo Confirmar E-mail � Obrigatorio!");
	return false;
}
else
if (document.Form1.email1.value != document.Form1.email2.value)
{
	alert("O Campo E-Mail: e Campo Comfirma E-Mail: n�o s�o iguais!");
	return false;
}
else
if(document.Form1.rg.value=="")
{
	alert("O Campo R.G: � Obrigatorio!");
	return false;
}
else
if(document.Form1.cpf1.value=="")
{
	alert("O Campo CPF � Obrigatorio!");
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
	  window.alert("CPF inv�lido. Tente novamente.");
	  return false;
   }

   soma = 0;
   for(i = 0; i < 9; i++)
   	 soma += parseInt(cpf.charAt(i)) * (10 - i);
   resto = 11 - (soma % 11);
   if(resto == 10 || resto == 11)
	 resto = 0;
   if(resto != parseInt(cpf.charAt(9))){
	 window.alert("CPF inv�lido. Tente novamente.");
	 return false;
   }
   soma = 0;
   for(i = 0; i < 10; i ++)
	 soma += parseInt(cpf.charAt(i)) * (11 - i);
   resto = 11 - (soma % 11);
   if(resto == 10 || resto == 11)
	 resto = 0;
   if(resto != parseInt(cpf.charAt(10))){
     window.alert("CPF inv�lido. Tente novamente.");
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
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Cadastro de Usu�rio </span></td>
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
Termos e Condi��es Gerais de uso do Portal iSysMp.com 
Estes Termos e Condi��es Gerais aplicam-se ao uso dos servi�os oferecidos por SysMp.com Atividades de Internet Ltda.,que inclui os servi�os para compra e venda de bens, produtos e servi�os. Qualquer pessoa, doravante nominada Usu�rio, que pretenda utilizar os servi�os do SysMp.com dever� aceitar os Termos e Condi��es Gerais, e todas as demais pol�ticas e princ�pios que o regem.

A ACEITA��O DESTES TERMOS E CONDI��ES GERAIS � ABSOLUTAMENTE INDISPENS�VEL � UTILIZA��O DO SITE E SEUS SERVI�OS

O usu�rio dever� ler, certificar-se de haver entendido e aceitar todas as condi��es estabelecidas nos Termos e Condi��es Gerais e nas Pol�ticas de Privacidade, assim como nos demais documentos incorporados aos mesmos por refer�ncia, antes de seu cadastro como Usu�rio do SysMp.com.

01 - Objeto . 

Os servi�os objeto dos presentes Termos e Condi��es Gerais de Uso consistem em ofertar ao Usu�rio um espa�o para que anuncie e venda produtos ou servi�os dos quais tenha a faculdade de vender e/ou adquirir de outros usu�rios bens ou servi�os por eles anunciados, portanto possibilita aos usu�rios travarem conhecimento uns dos outros e permiter que eles negociem entre si diretamente, sem sua interven��o na finaliza��o dos neg�cios, n�o sendo, nesta qualidade, fornecedora de quaisquer produtos e/ou servi�os anunciados exclusivamente por seus usu�rios.

02 - Capacidade para cadastrar-se . 

Os servi�os do SysMp.com est�o dispon�veis apenas para as pessoas que tenham capacidade legal para contrat�-los. N�o podem utiliz�-los, assim, pessoas que n�o gozem dessa capacidade, inclusive menores de idade, ou pessoas que tenham sido inabilitadas, tempor�ria ou definitivamente. 

Tamb�m n�o � permitido que uma mesma pessoa tenha mais de um cadastro. Se for detectado, atrav�s do sistema de verifica��o de dados, cadastros duplicados ir� inabilitar definitivamente todos os cadastros. 

Pessoas Jur�dicas poder�o cadastrar-se mediante seu representante legal. 

03 - Cadastro . 

Apenas ser� confirmado o cadastramento do interessado que preencher todos os campos do cadastro. O futuro Usu�rio dever� complet�-lo com informa��es exatas, precisas e verdadeiras, e assume o compromisso de atualizar os Dados Pessoais sempre que neles ocorrer alguma altera��o. O SysMp.com se reserva o direito de utilizar todos os meios v�lidos e poss�veis para identificar seus usu�rios.

O SysMp.com n�o se responsabiliza pela corre��o dos Dados Pessoais inseridos por seus usu�rios. Os usu�rios garantem e respondem, em qualquer caso, pela veracidade, exatid�o e autenticidade dos Dados Pessoais cadastrados.

O SysMp.com se reserva o direito de utilizar todos os meios v�lidos e poss�veis para identificar seus usu�rios, bem como de solicitar dados adicionais e documentos que estime serem pertinentes a fim de conferir os Dados Pessoais informados. 

Caso seja necessario checar a veracidade dos dados cadastrais de um usu�rio e se constate haver entre eles dados incorretos ou inver�dicos, ou ainda caso o usu�rio se furte ou negue a enviar os documentos requeridos, O usuario sera bloqueado para usar o Forum e Portal de Trocas temporariamente ou cancelada definitivamente o cadastro, sem preju�zo de outras medidas que entender necess�rias e oportunas. 

Havendo a aplica��o de qualquer das san��es acima referidas, automaticamente ser�o cancelados os an�ncios por ele veiculados, n�o assistindo ao usu�rio, por essa raz�o, qualquer sorte de indeniza��o ou ressarcimento.

O Usu�rio acessar� sua conta atrav�s de apelido e senha e compromete-se a n�o informar a terceiros esses dados, responsabilizando-se integralmente pelo uso que deles seja feito.
O Usu�rio compromete-se a notificar o SysMp.com imediatamente, e atrav�s de meio seguro, a respeito de qualquer uso n�o autorizado de sua conta, bem como o acesso n�o autorizado por terceiros � mesma. O usu�rio ser� o �nico respons�vel pelas opera��es efetuadas em sua conta, uma vez que o acesso � mesma s� ser� poss�vel mediante a aposi��o da senha, cujo conhecimento � exclusivo do usu�rio.

Em nenhuma hip�tese ser� permitida a cess�o, venda, aluguel ou outra forma de transfer�ncia da conta (incluindo-se qualifica��es e reputa��o). Tamb�m n�o se permitir� a manuten��o de mais de um cadastro por uma mesma pessoa, ou ainda a cria��o de novos cadastros por pessoas cujos cadastros originais tenham sido cancelados por infra��es �s pol�ticas do portal

O apelido que o Usu�rio utiliza no Portal n�o poder� guardar semelhan�a com o nome SysMp.com. Tampouco poder� ser utilizado qualquer apelido que insinue ou sugira que os produtos anunciados pertencem ao SysMp.com ou que fazem parte de promo��es suas. Tamb�m ser�o eliminados apelidos considerados ofensivos, bem como os que contenham dados pessoais do usu�rio ou alguma URL ou endere�o eletr�nico. O SysMp.com se reserva o direito de recusar qualquer solicita��o de cadastro e de cancelar um cadastro previamente aceito, a seu exclusivo crit�rio.

04 - Modifica��es dos Termos e Condi��es Gerais . 

O SysMp.com poder� alterar, a qualquer tempo, estes Termos e Condi��es Gerais, visando seu aprimoramento e melhoria dos servi�os prestados. Os novos Termos e Condi��es entrar�o em vigor 10 dias ap�s publicados no site. No prazo de 5 (cinco) dias contados a partir da publica��o das modifica��es, o Usu�rio dever� comunicar-se por e-mail, clicando aqui, caso n�o concorde com os termos alterados.. Nesse caso, o v�nculo contratual deixar� de existir, desde que n�o haja contas ou d�vidas em aberto. N�o havendo manifesta��o no prazo estipulado, entender-se-� que o Usu�rio aceitou tacitamente os novos Termos e Condi��es e o contrato continuar� vinculando as partes. 
As altera��es n�o vigorar�o em rela��o a negocia��es e an�ncios j� iniciados ao tempo em que as mesmas altera��es sejam publicadas. Para estes, os Termos e Condi��es Gerais de Uso valer�o com a reda��o anterior.

05 - Produtos anunciados . 

5.1 An�ncios/ofertas.
O Usu�rio poder� oferecer � venda produtos ou servi�os em suas respectivas categorias e subcategorias. O an�ncio pode conter gr�ficos, textos, descri��es e fotos do produto ou servi�o oferecido, O produto ou servi�o oferecido pelo Usu�rio Vendedor deve ser descrito com clareza quanto a suas caracter�sticas relevantes. Ao incluir uma fotografia, esta dever� corresponder especificamente ao produto que est� sendo oferecido, salvo quando se trate de um produto novo. Presumir-se-� que, mediante a inclus�o do an�ncio, o Usu�rio manifesta a inten��o e declara possuir o direito de vender o produto oferecido, ou que est� facultado para tal por seu titular, al�m de dispor do produto para entrega imediata. Os pre�os dos produtos anunciados devem conter todos os tributos sobre eles incidentes. 

5.1 Produtos Proibidos.
Poder�o ser anunciados/ofertados aqueles produtos ou servi�os cuja venda n�o esteja expressamente proibida pelos Termos e Condi��es Gerais e demais pol�ticas vigente.

06 - Legisla��o Aplic�vel e Foro de elei��o . 

Todos os itens destes Termos e Condi��es Gerais est�o regidos pelas leis vigentes na Rep�blica Federativa do Brasil. Para todos os assuntos referentes � interpreta��o e ao cumprimento deste Contrato, as partes se submetem ao Foro Central da Cidade de S�o Paulo, exce��o feita a reclama��es apresentadas por usu�rios que se enquadrem no conceito legal de consumidores, que poder�o submeter as mesmas no foro de seu domic�lio. 


Informa�ao na se�ao de perguntas e respostas ou f�runs 

O Portal permite realizar perguntas e respostas nos an�ncios e al�m disso mant�m f�runs p�blicos ("f�runs") que sao f�ceis de usar e navegar. Nestas se�oes os usu�rios podem realizar coment�rios, dar opinioes, iniciar discussoes e temas de seu interesse em um ambiente amig�vel, sempre sujeitos as regras aplic�veis nestas pol�ticas.
A Informa�ao Pessoal inserida na se�ao de perguntas e respostas ou nos f�runs pode ser lida, coletada ou utilizada por qualquer pessoa. O Portal nao ser� respons�vel pelo uso dessa Informa�ao Pessoal publicada pelo usu�rio nestes campos do website. 
 

Direito de cancelamento e retifica�ao de Dados Pessoais . 

O Usu�rio, ao cadastrar-se, manifesta conhecer e pode exercitar seus direitos de acessar, cancelar e atualizar seus Dados Pessoais. O Usu�rio garante e responde pela veracidade, exatidao, vigencia e autenticidade dos Dados Pessoais, e se compromete a mante-los devidamente atualizados.

Uma vez cadastrado no Portal� o Usu�rio poder� revisar e alterar a informa�ao que houver fornecido durante o processo de cadastro, incluindo-se:
�	O apelido e endere�o de e-mail. Sem preju�zo das mudan�as que efetue, o Portal conservar� os Dados Pessoais originais por motivos de seguran�a e controle de fraudes; 
�	A informa�ao do cadastro como: n�mero de telefone, etc. 
�	A senha pessoal. 
Em determinados casos, serao mantidos nos arquivos do Portal os Dados Pessoais que nos tenha sido solicitados para remo�ao com o objetivo de utiliza�ao na solu�ao de lit�gios ou reclama�oes, detectar problemas ou incidentes e e dar cumprimento ao disposto nos Termos e Condi�oes Gerais de Uso. Em qualquer caso, os Dados Pessoais do Usu�rio nao serao imediatamente retirados dos arquivos por razoes legais e t�cnicas, incluindo os sistemas de suporte e seguran�a.</textarea></th>
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
