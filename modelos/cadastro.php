<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Alterar Produto
 Criado em Data.....: 07/12/2007
 Ultima Atualiza��o : 13/07/2009

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include('aguarde.php');

include('titulo.php');

// Abre Conex�o com o MySql
include("../conexao.php");
// Chama o Banco de Dados

// Resgata a Sessao
session_start();
$ser_name3_c = $_SESSION["log_name_c"];

$link = @mysql_connect($host,$user,$pass)

    or die( include("../server.php"));

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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script type="text/javascript">
<!--
function Label10ClickWrapper(event, hiddenfield, submitvalue, wrappedfunc)
{

var event = event || window.event;
submit1=true;
submit2=true;
if (typeof(wrappedfunc) == 'function') submit1=wrappedfunc(event);
hiddenfield.value = submitvalue;
if ((hiddenfield.form.onsubmit) && (typeof(hiddenfield.form.onsubmit) == 'function')) submit2=hiddenfield.form.onsubmit();
if ((submit1) && (submit2)) hiddenfield.form.submit();
return false;

}

nextfield = "Edit1";
netscape = "";
ver = navigator.appVersion; len = ver.length;
function keyDown(DnEvents) {
k = (netscape) ? DnEvents.which : window.event.keyCode;
if (k == 13) {
if (nextfield == 'done') {
return false;
} else {
eval('document.Form1.' + nextfield + '.focus()');
return false;}}}
document.onkeydown = keyDown;
if (netscape) document.captureEvents(Event.KEYDOWN|Event.KEYUP);
// End -->

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

<script>
// Valida Campo
function validaCampo()
{
if(document.Form1.Edit1.value=="")
{
	alert("O Campo Nome � Obrigatorio!");
	return false;
}
else	
if(document.Form1.Edit2.value=="")
{
	alert("O Campo Sobre Nome � Obrigatorio!");
	return false;
}
if(document.Form1.Edit3.value=="")
{
	alert("O Campo Data Nascimento � Obrigatorio!");
	return false;
}
else
if(document.Form1.Edit4.value=="")
{
	alert("O Campo Data Nascimento � Obrigatorio!");
	return false;
}
else
if(document.Form1.Edit5.value=="")
{
	alert("O Campo Data Nascimento � Obrigatorio!");
	return false;
}
else
if(document.Form1.Edit6.value=="")
{
	alert("O Campo Sexo � Obrigatorio!");
	return false;
}
else
if(document.Form1.Edit12.value=="")
{
	alert("Utilize uma palavra secreta para recuperar sua senha caso perca !!!");
	return false;
}
else
if(document.Form1.Edit7.value=="")
{
	alert("O Campo Login � Obrigatorio!");
	return false;
}
else
if(document.Form1.Edit8.value=="")
{
	alert("O Campo Senha � Obrigatorio!");
	return false;
}
else
if(document.Form1.Edit9.value=="")
{
	alert("O Campo Confirmar Senha � Obrigatorio!");
	return false;
}
else
if (document.Form1.Edit8.value != document.Form1.Edit9.value)
{
	alert("O Campo Senha: e Campo Comfirma Senha: n�o s�o iguais!");
	return false;
}
else
if(document.Form1.Edit10.value=="")
{
	alert("O Campo E-mail � Obrigatorio!");
	return false;
}
else
if(document.Form1.Edit11.value=="")
{
	alert("O Campo Confirmar E-mail � Obrigatorio!");
	return false;
}
else
if (document.Form1.Edit10.value != document.Form1.Edit11.value)
{
	alert("O Campo E-Mail: e Campo Comfirma E-Mail: n�o s�o iguais!");
	return false;
}
else
if(document.Form1.Edit13.value=="")
{
	alert("O Campo R.G: � Obrigatorio!");
	return false;
}
else
if(document.Form1.Edit14.value=="")
{
	alert("O Campo CPF � Obrigatorio!");
	return false;
}
else
if(document.Form1.Edit15.value=="")
{
	alert("Existe Campos n�o preenchidos!!!!!");
	return false;
}
else
if(document.Form1.Edit16.value=="")
{
	alert("Existe Campos n�o preenchidos!!!!!");
	return false;
}
else
if(document.Form1.Edit17.value=="")
{
	alert("Existe Campos n�o preenchidos!!!!!");
	return false;
}
else
if(document.Form1.Edit18.value=="")
{
	alert("Existe Campos n�o preenchidos!!!!!");
	return false;
}
else                   
if(document.Form1.Edit19.value=="")
{
	alert("Existe Campos n�o preenchidos!!!!!");
	return false;
}
else
if(document.Form1.Edit20.value=="")
{
	alert("Existe Campos n�o preenchidos!!!!!");
	return false;
}
else
if(document.Form1.Edit21.value=="")
{
	alert("Existe Campos n�o preenchidos!!!!!");
	return false;
}
else
if(document.Form1.Edit22.value=="")
{
	alert("Existe Campos n�o preenchidos!!!!!");
	return false;
}
else
if(document.Form1.Edit23.value=="")
{
	alert("Existe Campos n�o preenchidos!!!!!");
	return false;
}
else
if(document.Form1.Edit24.value=="")
{
	alert("Existe Campos n�o preenchidos!!!!!");
	return false;
}
else
if(document.Form1.Edit25.value=="")
{
	alert("Existe Campos n�o preenchidos!!!!!");
	return false;
}
else
return true;	
}        
</script>

<script>
// Valida CPF
 function validarCPF(){
   var cpf = document.Form1.Edit14.value;
    
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
  var obj = eval("document.Form1.Edit10");
  var txt = obj.value;
  if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7)))
  {
    alert('Email incorreto');
	obj.focus();
  }
}
function ValidaEmail2()
{
  var obj = eval("document.Form1.Edit11");
  var txt = obj.value;
  if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7)))
  {
    alert('Email incorreto');
	obj.focus();
  }
}
</script>

</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Cadastro de Usuarios <font size="2">(Compraai)</font> </font></b> </td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="1%"><img src="../graphics/px1.gif" width="10" height="10"></td>
    <td width="98%" align="center"><table width="448" border="0" align="center">
      <tr>
        <td width="131" height="87" align="center"><div align="center"><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id_prod;?>&num_foto=0','','width=510,height=225')"><img src="../graphics/foto_padrao65.jpg" width="85" height="85" border="1"></a></div></td>
        <td width="278"><div align="left">
          <table width="270" border="1">
            <tr>
              <td width="270" bordercolor="#000000" bgcolor="#FF9966"><font size="-2"><b><font color="#000000" face="Verdana">Para incluir uma foto ap&oacute;s o fim do cadastro </font></b></font></td>
            </tr>
          </table>
        </div></td>
        </tr>
    </table>
      <form id="Form1" name="Form1" method="post"  action="incluir.php" onsubmit="return validaCampo(); return false;">
      <table border="0">
        <tr>
          <td height="379" align="left" bgcolor="#DDDCD9"><div align="left">              <table width="100%" border="0" cellpadding="0" cellspacing="1">
                <tr>
                  <td width="193" height="31" align="left"><b><font size="-1" face="Verdana">Nome.: </font></b></td>
                  <td width="393" align="left">
				  
				  <input type="text" id="Edit1" name="Edit1" value="<?=$Edit1;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:208px;"    tabindex="1"    />

				  <font color="#FF0000">*</font>

				  
				  </td>
                </tr>
                <tr>
                  <td height="31" align="left"><b><font size="-1" face="Verdana">Sobrenome.:</font></b></td>
                  <td align="left"><input type="text" id="Edit2" name="Edit2" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:208px;"    tabindex="2"    />

                    <font color="#FF0000">*</font></td>
                </tr>
                <tr>
                  <td height="31" align="left"><b><font size="-1" face="Verdana">Data de Nascimento .:</font></b></td>
                  <td align="left"><select type="text" id="Edit3" name="Edit3" value="" style=" font-family: Verdana; font-size: 12px;  background-color: #FFFFFF;height:20px;width:45px;"    tabindex="3"    />
	<option value="<?=$Edit3;?>"> <?=$Edit3;?> </option>
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
                    <img src="../graphics/px1.gif" width="5" height="1">
                    <select type="text" id="Edit4" name="Edit4" value="" style=" font-family: Verdana; font-size: 12px;  background-color: #FFFFFF;height:20px;width:45px;"    tabindex="4"    />

	<option value="<?=$Edit4;?>"> <?=$Edit4;?> </option>
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

                    <img src="../graphics/px1.gif" width="5" height="1">
<select type="text" id="Edit5" name="Edit5" value="" style=" font-family: Verdana; font-size: 12px;  background-color: #FFFFFF;height:20px;width:73px;"    tabindex="5"    />

	<option value="<?=$Edit5;?>"> <?=$Edit5;?> </option>
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

                    <font color="#FF0000">*</font></td>
                </tr>
                <tr>
                  <td height="31" align="left"><b><font size="-1" face="Verdana">Sexo.:</font></b></td>
                  <td align="left"><select type="text" id="Edit6" name="Edit6" value="" style=" font-family: Verdana; font-size: 12px;  background-color: #FFFFFF;height:20px;width:147px;"    tabindex="6"    />

	<option value="<?=$Edit6;?>"> <?=$Edit6;?> </option>
            <option value="MASCULINO"> MASCULINO   </option>
            <option value="FEMININO"> FEMININO   </option>

</select>

                    <font color="#FF0000">*</font></td>
                </tr>
              </table>
              <table width="100%" border="0">
                <tr>
                  <td width="583" bgcolor="#FFCC66"><div align="center"><font size="-2" face="Verdana"><b> --&gt; O Compraai aconselha a cria&ccedil;&atilde;o de uma
                    palavra secreta<br> 
                    para recuperar senha e
                    nome de acesso.
                    </b></font></div></td>
                </tr>
              </table>
              <table width="100%" height="42" border="0">
                <tr>
                  <td width="185" height="38" align="left"><b><font size="-1" face="Verdana">Palavra Secreta  .: </font></b></td>
                  <td width="384" align="left"><input type="text"  name="Edit12" value=""  style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:22px;width:300px;"   tabindex="0"    />

                    <font color="#FF0000">*</font></td>
                </tr>
              </table>
              <table width="100%" border="0">
                <tr>
                  <td height="100" align="center" bgcolor="#DDDCD9"><table width="67%" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFCC66">
                    <tr>
                      <td width="41%" height="25"><b><font size="-1" face="Verdana">Login .:</font></b></td>
                      <td width="59%"><input type="text" id="Edit7" name="Edit7" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:208px;"    tabindex="7"    />

                        <font color="#FF0000">*</font></td>
                    </tr>
                    <tr>
                      <td height="25"><b><font size="-1" face="Verdana">Senha .:</font></b></td>
                      <td><input type="password" id="Edit8" name="Edit8" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:171px;"    tabindex="9"    />

                        <font color="#FF0000">*</font></td>
                    </tr>
                    <tr>
                      <td height="25"><b><font size="-1" face="Verdana">Comfirmar Senha  .:</font></b></td>
                      <td><input type="password" id="Edit9" name="Edit9" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:171px;"    tabindex="9"    />

                        <font color="#FF0000">*</font></td>
                    </tr>
                  </table>
                    <div align="center"></div></td>
                </tr>
                <tr>
                  <td align="center" bgcolor="#FFFF66">                    <table width="100%" border="0">
                    <tr>
                      <td width="16%" height="78" bgcolor="#FFFFFF"><div align="center"><img src="../graphics/exclam.gif" width="70" height="70"></div></td>
                      <td width="84%"><div align="center"><b><font size="-2" face="Verdana">--&gt; O Compraai pode invalidar seu cadastro caso insira dados falsos, ou que ja seja cadastrado,<br>
n&atilde;o use nomes que tenham direitos autorais assim tambem<br>
com foto de atores e pessoas publicas.. </font></b></div></td>
                    </tr>
                  </table>                    </td>
                </tr>
              </table>
          </div></td>
        </tr>
      </table>            <table width="579" border="0" cellspacing="3">
        <tr>
          <td width="474"> <font color="#FF9933" size="2"><b>DADOS PESSOAIS</b></font></td>
        </tr>
        <tr>
          <td bgcolor="#FFCC66">  		<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
            <tr>
              <td width="34%" height="31"><b><font size="-1" face="Verdana">e-Mails .:</font></b></td>
              <td width="66%"><input type="text" id="Edit10" name="Edit10" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:275px;"    tabindex="10" onblur="ValidaEmail()"   />

                <font color="#FF0000">*</font></td>
            </tr>
            <tr>
              <td height="31"><b><font size="-1" face="Verdana">Comfirmar e-Mails .:</font></b></td>
              <td><input type="text" id="Edit11" name="Edit11" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:275px;"    tabindex="11"  onblur="ValidaEmail2()"  />

                <font color="#FF0000">*</font></td>
            </tr>
            <tr>
              <td height="31"><b><font size="-1" face="Verdana">R.G .:</font></b></td>
              <td><input type="text" id="Edit13" name="Edit13" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:275px;"    tabindex="0"    />

                <font color="#FF0000">*</font></td>
            </tr>
            <tr>
              <td height="31"><b><font size="-1" face="Verdana">C.P.F .:</font></b></td>
              <td><input type="text" id="Edit14" name="Edit14" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:275px;"  tabindex="0"  maxlength="14" onblur="validarCPF()" />

                <font color="#FF0000">*</font></td>
            </tr>
            <tr>
              <td height="31"><b><font size="-1" face="Verdana">Tipo .:</font></b></td>
              <td><select type="text" id="Edit15" name="Edit15" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:163px;"    tabindex="0"    />

	        <option value="RUA"> RUA </option>
	        <option value="AEROPORTO"> AEROPORTO </option>
            <option value="ALAMEDA">  ALAMEDA </option>
            <option value="AREA"> AREA </option>
            <option value="AVENIDA">  AVENIDA </option>
            <option value="BAIXADA">  BAIXADA </option>
            <option value="CAMPO"> CAMPO </option>
            <option value="CHACARA"> CHACARA </option>
            <option value="COLONIA"> COLONIA </option>
            <option value="CONDOMINIO"> CONDOMINIO </option>
            <option value="CONJUNTO"> CONJUNTO </option>
            <option value="CORREGO">  CORREGO </option>
            <option value="CRUZAMENTO">  CRUZAMENTO </option>
            <option value="DISTRITO"> DISTRITO </option>
            <option value="ESCADARIA">  ESCADARIA </option>
            <option value="ESPLANADA"> ESPLANADA </option>
            <option value="ESTACAO"> ESTACAO </option>
            <option value="ESTRADA">  ESTRADA </option>
            <option value="FAZENDA"> FAZENDA </option>
            <option value="JARDIM"> JARDIM </option>
            <option value="LADEIRA"> LADEIRA </option>
            <option value="LAGO"> LAGO </option>
            <option value="LARGO"> LARGO </option>
            <option value="LOTEAMENTO"> LOTEAMENTO </option>
            <option value="MORRO">  MORRO </option>
            <option value="NUCLEO"> NUCLEO </option>
            <option value="PARQUE"> PARQUE </option>
            <option value="PASSARELA"> PASSARELA </option>
            <option value="PASSAGEM">  PASSAGEM </option>
            <option value="PONTE">  PONTE </option>
            <option value="PRACA">  PRACA </option>
            <option value="QUADRA"> QUADRA </option>
            <option value="RECANTO"> RECANTO </option>
            <option value="RESIDENCIAL"> RESIDENCIAL </option>
            <option value="RODOVIA"> RODOVIA </option>
            <option value="ROTATORIA">  ROTATORIA </option>
            <option value="RUA">  RUA </option>
            <option value="SETOR"> SETOR </option>
            <option value="SITIO"> SITIO </option>
            <option value="TRAVESSA"> TRAVESSA </option>
            <option value="TRECHO"> TRECHO </option>
            <option value="TREVO"> TREVO </option>
            <option value="VALE"> VALE </option>
            <option value="VEREDA"> VEREDA </option>
            <option value="VIA"> VIA </option>
            <option value="VIADUTO">  VIADUTO </option>
            <option value="VIELA">  VIELA </option>
            <option value="VILA"> VILA </option>

</select>
</td>
            </tr>
            <tr>
              <td height="31"><b><font size="-1" face="Verdana">Logradouro .:</font></b></td>
              <td><input type="text" id="Edit16" name="Edit16" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:275px;"    tabindex="0"    />
</td>
            </tr>
            <tr>
              <td height="31"><b><font size="-1" face="Verdana">Numero .:</font></b></td>
              <td><input type="text" name="textfield24227"></td>
            </tr>
            <tr>
              <td height="31"><b><font size="-1" face="Verdana">Bairro .:</font></b></td>
              <td><input type="text" id="Edit17" name="Edit17" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:275px;"    tabindex="0"    />
</td>
            </tr>
            <tr>
              <td height="31"><b><font size="-1" face="Verdana">Cidade .:</font></b></td>
              <td><input type="text" id="Edit18" name="Edit18" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:171px;"    tabindex="0"    />
</td>
            </tr>
            <tr>
              <td height="31"><b><font size="-1" face="Verdana">Estado .:</font></b></td>
              <td><select type="text" id="Edit24" name="Edit24" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:140px;"    tabindex="0"    />
        
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
              <td height="31"><b><font size="-1" face="Verdana">CEP .:</font></b></td>
              <td><input type="text" id="Edit19" name="Edit19" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:115px;" onkeypress="return txtBoxFormat(document.Form1, 'Edit19', '99999-999', event);"   tabindex="0"    />
</td>
            </tr>
          </table></td>
        </tr>
      </table>      
      <br>
      <table width="593" border="0">
        <tr>
          <td height="98" bgcolor="#DDDCD9"><table width="100%" border="0">
            <tr>
              <td width="129" height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Fone Fixo.: </font></b></div></td>
              <td width="168" align="left"><div align="left">
                  <input type="text" id="Edit20" name="Edit20" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:155px;"   onkeypress="return txtBoxFormat(document.Form1, 'Edit20', '(99)9999-9999', event);"  tabindex="0"    />

              </div></td>
              <td width="69" align="left"><b><font size="-1" face="Verdana">Celular.: </font></b></td>
              <td width="209" align="left"><input type="text" id="Edit21" name="Edit21" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:168px;" onkeypress="return txtBoxFormat(document.Form1, 'Edit21', '(99)9999-9999', event);"   tabindex="0"    />
</td>
            </tr>
          </table>
            <table width="100%" border="0">
              <tr>
                <td width="30%"><b><font size="-1" face="Verdana">URL http://www .:</font></b></td>
                <td width="70%"><input type="text"  name="Edit22" value=""  style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:22px;width:300px;"   tabindex="0"    />
</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>            
            <div align="center"><img src="../graphics/px1.gif" width="20" height="20"></div>
            <table width="100%" border="0">
              <tr>
                <td><div align="center">
				
				<textarea name="textarea" cols="65" rows="6" readonly>
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
      <table width="542" border="0">
        <tr>
          <td height="32"><img src="../graphics/e_punct_b.gif" width="5" height="5">&nbsp;<b><font size="-1" face="Verdana">Li e aceito os Termos e Politica de anuncio e utiliza&ccedil;&atilde;o do Forum acima. </font></b></td>
        </tr>
        <tr>
          <td height="28"><img src="../graphics/e_punct_b.gif" width="5" height="5">&nbsp;<b><font size="-1" face="Verdana">Sou maior de idade . </font></b></td>
        </tr>
      </table>
      <br>
      <br>      
      <table width="236" border="0">
      <tr>
        <td width="100"><input id="Button1" name="Button1" type=image src="../graphics/salvar1.png" width="100" height="32"></td>
                	</form>

        <td width="67">&nbsp;</td>
        
                <form method="post"  action="../principal.php">

        <td width="11"><input id="Button2" name="Button2" type=image src="../graphics/descarta1.png" width="100" height="32"></td>
      </tr>
    </table>    
	</form>      <br>      
	    <br></td>
    <td width="1%"><div align="center"><img src="../graphics/px1.gif" width="8" height="10"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?
include('rodape.php');
?>