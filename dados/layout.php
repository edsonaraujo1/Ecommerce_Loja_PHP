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

if ($entra_no_web1 == 'at2'){

session_start();
$ser_name3_c    = strtoupper($_SESSION["log_name_c"]);

require("../funcoes2.php");

// Abre Conex�o com o MySql
include("../conexao.php");

// Chama o Banco de Dados
$link = @mysql_connect($host,$user,$pass)

    or die( require("../login.php"));

@mysql_select_db($db);

// Abrir tabela Dados
$consulta  = "SELECT * FROM tt_ser_01 WHERE `login` = '$ser_name3_c'";

$resultado = @mysql_query($consulta);

$row = @mysql_fetch_array($resultado);

$id0       = @$row["id"];
$icod      = @$row["codigo"];             
$Edit1     = @$row["nome"];      		
$Edit2     = @$row["sobrenome"];
$Edit3     = @$row["nasc_dia"];
$Edit4     = @$row["nasc_mes"];
$Edit5     = @$row["nasc_ano"];
$Edit6     = @$row["sexo"];
$Edit7     = @$row["login"];
$Edit8     = @$row["senha"];
$Edit10    = @$row["e_mail"];
$Edit12    = @$row["frase"];
$Edit13    = @$row["rg"];
$Edit14    = @$row["cpf"];
$Edit15    = @$row["rua"];
$Edit16    = @$row["endereco"];
$Edit17    = @$row["bairro"];
$Edit18    = @$row["cidade"];
$Edit24    = @$row["estado"];
$Edit19    = @$row["cep"];
$Edit20    = @$row["fone_fix"];
$Edit21    = @$row["fone_cel"];
$fotos_dad = @$row["foto_peq"];

if(file_exists('../cadastro/'.$fotos_dad))
{
    $fotos_dad = '../cadastro/'.$fotos_dad;	
}else{
	
	$fotos_dad = '../graphics/corpo_msg/foto_padrao65.jpg';
}


// Consulta Tabela Estados
$consulta2  = "SELECT * FROM estados";
					
$resultado2 = @mysql_query($consulta2);


?>
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>

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

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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

<!-- Begin
nextfield = "Edit4";
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

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
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

</head>


<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF">


<table width="100%" height="52" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Cadastro de Usu�rio</span></td>
            </tr>
          </table>

		  <p>&nbsp;</p>
		  <p>&nbsp;</p>


<div id="lay1_outer" style="Z-INDEX: 4; LEFT: -25px; WIDTH: 520px; POSITION: absolute; TOP: -19px; HEIGHT: 84px">

<form style="margin-bottom: 0" id="Form1" name="Form1" method="post"  action="alterar.php?id_dados=<?=$id0;?>">
<table  width="520"   style="height:808px"  border="0" cellpadding="0" cellspacing="0">
<tr><td valign="top">
<div id="Shape3_outer" style="Z-INDEX: 11; LEFT: 48px; WIDTH: 400px; POSITION: absolute; TOP: 221px; HEIGHT: 104px">
<script type="text/javascript">
  var Shape3_Canvas = new jsGraphics("Shape3_outer");
  Shape3_Canvas.setColor("#FFCC66");
  Shape3_Canvas.fillRect(1, 1, 398 - 1, 102 - 1);
  Shape3_Canvas.fillRect(1, 1, 398 - 1 + 1, 102 - 1 + 1);
  Shape3_Canvas.setStroke(1);
  Shape3_Canvas.setColor("#000000");
  Shape3_Canvas.drawRect(1, 1, 398 - 1 + 1, 102 - 1 + 1);
  Shape3_Canvas.paint();
</script>

</div>

<div id="Label1_outer" style="Z-INDEX: 3; LEFT: 48px; WIDTH: 120px; POSITION: absolute; TOP: 98px; HEIGHT: 22px">
<div id="Label1" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:120px;"   ><STRONG>Nome </STRONG></div>
</div>
<div id="Edit1_outer" style="Z-INDEX: 4; LEFT: 205px; WIDTH: 208px; POSITION: absolute; TOP: 96px; HEIGHT: 21px">
<input type="text" id="Edit1" name="Edit1" value="<?=$Edit1;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:208px;"    tabindex="1"    />
</div>
<div id="Label2_outer" style="Z-INDEX: 5; LEFT: 48px; WIDTH: 120px; POSITION: absolute; TOP: 122px; HEIGHT: 22px">
<div id="Label2" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:120px;"   ><STRONG>Sobrenome&nbsp;</STRONG></div>
</div>
<div id="Edit2_outer" style="Z-INDEX: 6; LEFT: 205px; WIDTH: 208px; POSITION: absolute; TOP: 120px; HEIGHT: 21px">
<input type="text" id="Edit2" name="Edit2" value="<?=$Edit2;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:208px;"    tabindex="2"    />
</div>
<div id="Label3_outer" style="Z-INDEX: 7; LEFT: 48px; WIDTH: 152px; POSITION: absolute; TOP: 146px; HEIGHT: 22px">
<div id="Label3" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:152px;"   ><STRONG>Data de Nascimento&nbsp;</STRONG></div>
</div>
<div id="Edit3_outer" style="Z-INDEX: 8; LEFT: 205px; WIDTH: 45px; POSITION: absolute; TOP: 144px; HEIGHT: 21px">
<select type="text" id="Edit3" name="Edit3" value="<?=$Edit3;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:45px;"    tabindex="3"    />

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

</div>
<div id="Edit4_outer" style="Z-INDEX: 9; LEFT: 254px; WIDTH: 45px; POSITION: absolute; TOP: 144px; HEIGHT: 21px">
<select type="text" id="Edit4" name="Edit4" value="<?=$Edit4;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:45px;"    tabindex="4"    />

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

</div>
<div id="Edit5_outer" style="Z-INDEX: 10; LEFT: 303px; WIDTH: 73px; POSITION: absolute; TOP: 144px; HEIGHT: 21px">
<select type="text" id="Edit5" name="Edit5" value="<?=$Edit5;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:73px;"    tabindex="5"    />

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
</div>
<div id="Label4_outer" style="Z-INDEX: 11; LEFT: 48px; WIDTH: 120px; POSITION: absolute; TOP: 170px; HEIGHT: 22px">
<div id="Label4" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:120px;"   > <STRONG>Sexo</STRONG> </div>
</div>
<div id="Edit6_outer" style="Z-INDEX: 12; LEFT: 205px; WIDTH: 147px; POSITION: absolute; TOP: 168px; HEIGHT: 21px">
<select type="text" id="Edit6" name="Edit6" value="<?=$Edit6;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:147px;"    tabindex="6"    />

	<option value="<?=$Edit6;?>"> <?=$Edit6;?> </option>
            <option value="MASCULINO"> MASCULINO   </option>
            <option value="FEMININO"> FEMININO   </option>

</select>

</div>


<?
if (!empty($fotos_dad)){
?>

<div id="Image2_outer" style="Z-INDEX: 66; LEFT: 464px; WIDTH: 80px; POSITION: absolute; TOP: 96px; HEIGHT: 96px">
<div id="Image2_container" style=" width: 80;  height: 96; " ><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id0;?>&num_foto=0','','width=500,height=200')"><img id="Image2" src="<?=$fotos_dad;?>"  width="80"  height="95"  border="0"       /></a></div>
</div>

<?
}else{
?>

<div id="Image2_outer" style="Z-INDEX: 66; LEFT: 464px; WIDTH: 80px; POSITION: absolute; TOP: 96px; HEIGHT: 96px">
<div id="Image2_container" style=" width: 80;  height: 96; " ><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id0;?>&num_foto=0','','width=500,height=200')"><img id="Image2" src="<?=$fotos_dad;?>"  width="80"  height="95"  border="0"       /></a></div>
</div>



<?
}
?>

<div id="Label5_outer" style="Z-INDEX: 14; LEFT: 64px; WIDTH: 120px; POSITION: absolute; TOP: 239px; HEIGHT: 22px">
<div id="Label5" style=" font-family: Verdana; font-size: 13px;  background-color: #FFCC66;height:22px;width:120px;"   > <STRONG>Login</STRONG> </div>
</div>
<div id="Edit7_outer" style="Z-INDEX: 15; LEFT: 221px; WIDTH: 208px; POSITION: absolute; TOP: 237px; HEIGHT: 21px">
<input type="text" id="Edit7" name="Edit7" value="<?=$Edit7;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFC082 ;height:20px;width:208px;"    tabindex="7"  readonly  />
</div>
<div id="Label6_outer" style="Z-INDEX: 16; LEFT: 64px; WIDTH: 120px; POSITION: absolute; TOP: 263px; HEIGHT: 22px">
<div id="Label6" style=" font-family: Verdana; font-size: 13px;  background-color: #FFCC66;height:22px;width:120px;"   > <STRONG>Senha</STRONG> </div>
</div>
<div id="Edit8_outer" style="Z-INDEX: 17; LEFT: 221px; WIDTH: 171px; POSITION: absolute; TOP: 261px; HEIGHT: 21px">
<input type="password" id="Edit8" name="Edit8" value="<?=$Edit8;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:171px;"    tabindex="8"    />
</div>
<div id="Label7_outer" style="Z-INDEX: 18; LEFT: 64px; WIDTH: 152px; POSITION: absolute; TOP: 287px; HEIGHT: 22px">
<div id="Label7" style=" font-family: Verdana; font-size: 13px;  background-color: #FFCC66;height:22px;width:152px;"   > <STRONG>Confirmar Senha</STRONG> </div>
</div>
<div id="Edit9_outer" style="Z-INDEX: 19; LEFT: 221px; WIDTH: 171px; POSITION: absolute; TOP: 285px; HEIGHT: 21px">
<input type="password" id="Edit9" name="Edit9" value="<?=$Edit8;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:171px;"    tabindex="9"    />
</div>
<div id="Label8_outer" style="Z-INDEX: 20; LEFT: 48px; WIDTH: 120px; POSITION: absolute; TOP: 343px; HEIGHT: 22px">
<div id="Label8" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:120px;"   > <STRONG>e-Mail</STRONG> </div>
</div>
<div id="Edit10_outer" style="Z-INDEX: 21; LEFT: 205px; WIDTH: 275px; POSITION: absolute; TOP: 341px; HEIGHT: 21px">
<input type="text" id="Edit10" name="Edit10" value="<?=$Edit10;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:275px;"    tabindex="10"    />
</div>
<div id="Label9_outer" style="Z-INDEX: 22; LEFT: 48px; WIDTH: 152px; POSITION: absolute; TOP: 367px; HEIGHT: 22px">
<div id="Label9" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:152px;"   > <STRONG>Confirmar e-Mail</STRONG> </div>
</div>
<div id="Edit11_outer" style="Z-INDEX: 23; LEFT: 205px; WIDTH: 275px; POSITION: absolute; TOP: 365px; HEIGHT: 21px">
<input type="text" id="Edit11" name="Edit11" value="<?=$Edit10;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:275px;"    tabindex="11"    />
</div>

<div id="Label22_outer" style="Z-INDEX: 40; LEFT: 48px; WIDTH: 152px; POSITION: absolute; TOP: 194px; HEIGHT: 22px">
<div id="Label22" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:152px;"   > <STRONG>Palavra secreta</STRONG> </div>
</div>

<div id="Button3_outer" style="Z-INDEX: 38; LEFT: 205px; WIDTH: 104px; POSITION: absolute; TOP: 193px; HEIGHT: 22px">
<input type="text"  name="Edit12" value="<?=$Edit12;?>"  style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:22px;width:300px;"   tabindex="0"    />
</div>

<div id="Label11_outer" style="Z-INDEX: 39; LEFT: 48px; WIDTH: 152px; POSITION: absolute; TOP: 391px; HEIGHT: 22px">
<div id="Label11" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:152px;"   ><STRONG>R.G.</STRONG></div>
</div>
<div id="Edit13_outer" style="Z-INDEX: 40; LEFT: 205px; WIDTH: 275px; POSITION: absolute; TOP: 389px; HEIGHT: 21px">
<input type="text" id="Edit13" name="Edit13" value="<?=$Edit13;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:275px;"    tabindex="0"    />
</div>
<div id="Label23_outer" style="Z-INDEX: 41; LEFT: 483px; WIDTH: 16px; POSITION: absolute; TOP: 391px; HEIGHT: 24px">
<div id="Label23" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"    ><FONT color=#ff0000><STRONG>*</STRONG></FONT></div>
</div>
<div id="Label24_outer" style="Z-INDEX: 42; LEFT: 48px; WIDTH: 152px; POSITION: absolute; TOP: 415px; HEIGHT: 22px">
<div id="Label24" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:152px;"   ><STRONG>C.P.F</STRONG></div>
</div>
<div id="Edit14_outer" style="Z-INDEX: 43; LEFT: 205px; WIDTH: 275px; POSITION: absolute; TOP: 413px; HEIGHT: 21px">
<input type="text" id="Edit14" name="Edit14" value="<?=$Edit14;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFC082 ;height:20px;width:275px;"  onkeypress="return txtBoxFormat(document.Form1, 'Edit14', '999.999.999-99', event);"  tabindex="0"  maxlength="14" readonly />
</div>
<div id="Label25_outer" style="Z-INDEX: 44; LEFT: 483px; WIDTH: 16px; POSITION: absolute; TOP: 415px; HEIGHT: 24px">
<div id="Label25" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"    ><FONT color=#ff0000><STRONG>*</STRONG></FONT></div>
</div>
<div id="Label26_outer" style="Z-INDEX: 45; LEFT: 48px; WIDTH: 152px; POSITION: absolute; TOP: 439px; HEIGHT: 22px">
<div id="Label26" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:152px;"   ><STRONG>Tipo</STRONG></div>
</div>
<div id="Edit15_outer" style="Z-INDEX: 46; LEFT: 205px; WIDTH: 163px; POSITION: absolute; TOP: 437px; HEIGHT: 21px">
<select type="text" id="Edit15" name="Edit15" value="<?=$Edit15;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:163px;"    tabindex="0"    />


	        <option value="<?=$Edit15;?>"> <?=$Edit15;?> </option>
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

</div>
<div id="Label27_outer" style="Z-INDEX: 47; LEFT: 372px; WIDTH: 16px; POSITION: absolute; TOP: 437px; HEIGHT: 24px">
<div id="Label27" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"    ><FONT color=#ff0000><STRONG>*</STRONG></FONT></div>
</div>
<div id="Label28_outer" style="Z-INDEX: 48; LEFT: 48px; WIDTH: 152px; POSITION: absolute; TOP: 463px; HEIGHT: 22px">
<div id="Label28" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:152px;"   ><STRONG>Logradouro</STRONG></div>
</div>
<div id="Edit16_outer" style="Z-INDEX: 49; LEFT: 205px; WIDTH: 275px; POSITION: absolute; TOP: 461px; HEIGHT: 21px">
<input type="text" id="Edit16" name="Edit16" value="<?=$Edit16;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:275px;"    tabindex="0"    />
</div>
<div id="Label29_outer" style="Z-INDEX: 50; LEFT: 483px; WIDTH: 16px; POSITION: absolute; TOP: 463px; HEIGHT: 24px">
<div id="Label29" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"    ><FONT color=#ff0000><STRONG>*</STRONG></FONT></div>
</div>
<div id="Label30_outer" style="Z-INDEX: 51; LEFT: 48px; WIDTH: 152px; POSITION: absolute; TOP: 487px; HEIGHT: 22px">
<div id="Label30" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:152px;"   ><STRONG>Bairro</STRONG></div>
</div>
<div id="Edit17_outer" style="Z-INDEX: 52; LEFT: 205px; WIDTH: 275px; POSITION: absolute; TOP: 485px; HEIGHT: 21px">
<input type="text" id="Edit17" name="Edit17" value="<?=$Edit17;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:275px;"    tabindex="0"    />
</div>
<div id="Label31_outer" style="Z-INDEX: 53; LEFT: 483px; WIDTH: 16px; POSITION: absolute; TOP: 487px; HEIGHT: 24px">
<div id="Label31" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"   ><FONT color=#ff0000><STRONG>*</STRONG></FONT></div>
</div>
<div id="Label32_outer" style="Z-INDEX: 54; LEFT: 48px; WIDTH: 152px; POSITION: absolute; TOP: 511px; HEIGHT: 22px">
<div id="Label32" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:152px;"   ><STRONG>Cidade</STRONG></div>
</div>
<div id="Edit18_outer" style="Z-INDEX: 55; LEFT: 205px; WIDTH: 171px; POSITION: absolute; TOP: 509px; HEIGHT: 21px">
<input type="text" id="Edit18" name="Edit18" value="<?=$Edit18;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:171px;"    tabindex="0"    />
</div>
<div id="Label33_outer" style="Z-INDEX: 56; LEFT: 380px; WIDTH: 16px; POSITION: absolute; TOP: 510px; HEIGHT: 24px">
<div id="Label33" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"><FONT color=#ff0000><STRONG>*</STRONG></FONT></div>
</div>


<div id="Label32x_outer" style="Z-INDEX: 54; LEFT: 398px; WIDTH: 152px; POSITION: absolute; TOP: 511px; HEIGHT: 22px">
<div id="Label32x" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:3px;"   ><STRONG>Estado</STRONG></div>
</div>

<div id="Edit24_outer" style="Z-INDEX: 55; LEFT: 455px; WIDTH: 171px; POSITION: absolute; TOP: 509px; HEIGHT: 21px">
<select type="text" id="Edit24" name="Edit24" value="<?=$Edit24;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:140px;"    tabindex="0"    />
        
        <option value="<?=$Edit24;?>"> <?=$Edit24;?> </option>
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




<FONT color=#ff0000><STRONG>*</STRONG></FONT>
</div>


<div id="Label34_outer" style="Z-INDEX: 57; LEFT: 48px; WIDTH: 152px; POSITION: absolute; TOP: 535px; HEIGHT: 22px">
<div id="Label34" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:152px;"   ><STRONG>CEP</STRONG></div>
</div>
<div id="Edit19_outer" style="Z-INDEX: 58; LEFT: 205px; WIDTH: 115px; POSITION: absolute; TOP: 533px; HEIGHT: 21px">
<input type="text" id="Edit19" name="Edit19" value="<?=$Edit19;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:115px;"  onkeypress="return txtBoxFormat(document.Form1, 'Edit19', '99999-999', event);"  tabindex="0"    />
</div>
<div id="Label35_outer" style="Z-INDEX: 59; LEFT: 324px; WIDTH: 16px; POSITION: absolute; TOP: 534px; HEIGHT: 24px">
<div id="Label35" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"    ><FONT color=#ff0000><STRONG>*</STRONG></FONT></div>
</div>
<div id="Label36_outer" style="Z-INDEX: 60; LEFT: 48px; WIDTH: 152px; POSITION: absolute; TOP: 559px; HEIGHT: 22px">
<div id="Label36" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:152px;"   ><STRONG>Fone Fixo</STRONG></div>
</div>
<div id="Edit20_outer" style="Z-INDEX: 61; LEFT: 205px; WIDTH: 155px; POSITION: absolute; TOP: 557px; HEIGHT: 21px">
<input type="text" id="Edit20" name="Edit20" value="<?=$Edit20;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:155px;"  onkeypress="return txtBoxFormat(document.Form1, 'Edit20', '(99)9999-9999', event);"  tabindex="0"    />
</div>
<div id="Label37_outer" style="Z-INDEX: 62; LEFT: 364px; WIDTH: 16px; POSITION: absolute; TOP: 558px; HEIGHT: 24px">
<div id="Label37" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"   ><FONT color=#ff0000><STRONG>*</STRONG></FONT></div>
</div>
<div id="Label38_outer" style="Z-INDEX: 63; LEFT: 392px; WIDTH: 64px; POSITION: absolute; TOP: 559px; HEIGHT: 22px">
<div id="Label38" style=" font-family: Verdana; font-size: 13px;  background-color: #ffffff;height:22px;width:64px;"   ><STRONG>Celular</STRONG></div>
</div>
<div id="Edit21_outer" style="Z-INDEX: 64; LEFT: 456px; WIDTH: 168px; POSITION: absolute; TOP: 557px; HEIGHT: 21px">
<input type="text" id="Edit21" name="Edit21" value="<?=$Edit21;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:168px;"  onkeypress="return txtBoxFormat(document.Form1, 'Edit21', '(99)9999-9999', event);"  tabindex="0"    />
</div>
<div id="Label39_outer" style="Z-INDEX: 65; LEFT: 628px; WIDTH: 16px; POSITION: absolute; TOP: 558px; HEIGHT: 24px">
<div id="Label39" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"    ><FONT color=#ff0000><STRONG>*</STRONG></FONT></div>
</div>

<div id="Memo1_outer" style="Z-INDEX: 22; LEFT: 48px; WIDTH: 480px; POSITION: absolute; TOP: 589px; HEIGHT: 112px">
<textarea id="Memo1" name="Memo1" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:111px;width:480px;"    tabindex="0"  readonly  wrap="virtual">Termos e Condi��es Gerais de uso do Portal SysMp.com 
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
Em determinados casos, serao mantidos nos arquivos do Portal os Dados Pessoais que nos tenha sido solicitados para remo�ao com o objetivo de utiliza�ao na solu�ao de lit�gios ou reclama�oes, detectar problemas ou incidentes e e dar cumprimento ao disposto nos Termos e Condi�oes Gerais de Uso. Em qualquer caso, os Dados Pessoais do Usu�rio nao serao imediatamente retirados dos arquivos por razoes legais e t�cnicas, incluindo os sistemas de suporte e seguran�a.
</textarea>
</div>
<div id="Label10_outer" style="Z-INDEX: 25; LEFT: 416px; WIDTH: 16px; POSITION: absolute; TOP: 96px; HEIGHT: 24px">
<div id="Label10" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"   > <FONT color=#ff0000><STRONG>*</STRONG></FONT> </div>
</div>
<div id="Label12_outer" style="Z-INDEX: 26; LEFT: 416px; WIDTH: 16px; POSITION: absolute; TOP: 119px; HEIGHT: 24px">
<div id="Label12" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"   > <FONT color=#ff0000><STRONG>*</STRONG></FONT> </div>
</div>
<div id="Label13_outer" style="Z-INDEX: 27; LEFT: 379px; WIDTH: 16px; POSITION: absolute; TOP: 145px; HEIGHT: 24px">
<div id="Label13" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"   > <FONT color=#ff0000><STRONG>*</STRONG></FONT> </div>
</div>
<div id="Label14_outer" style="Z-INDEX: 28; LEFT: 354px; WIDTH: 16px; POSITION: absolute; TOP: 168px; HEIGHT: 24px">
<div id="Label14" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"   > <FONT color=#ff0000><STRONG>*</STRONG></FONT> </div>
</div>
<div id="Label15_outer" style="Z-INDEX: 29; LEFT: 431px; WIDTH: 16px; POSITION: absolute; TOP: 239px; HEIGHT: 24px">
<div id="Label15" style=" font-family: Verdana; font-size: 10px;  background-color: #FFCC66;height:24px;width:16px;"   > <FONT color=#ff0000><STRONG>*</STRONG></FONT> </div>
</div>
<div id="Label16_outer" style="Z-INDEX: 30; LEFT: 395px; WIDTH: 16px; POSITION: absolute; TOP: 263px; HEIGHT: 24px">
<div id="Label16" style=" font-family: Verdana; font-size: 10px;  background-color: #FFCC66;height:24px;width:16px;"   > <FONT color=#ff0000><STRONG>*</STRONG></FONT> </div>
</div>
<div id="Label17_outer" style="Z-INDEX: 31; LEFT: 395px; WIDTH: 16px; POSITION: absolute; TOP: 287px; HEIGHT: 24px">
<div id="Label17" style=" font-family: Verdana; font-size: 10px;  background-color: #FFCC66;height:24px;width:16px;"> <FONT color=#ff0000><STRONG>*</STRONG></FONT> <input type="hidden" id="Label17SubmitEvent" name="Label17SubmitEvent" value="" /></div>
</div>
<div id="Label18_outer" style="Z-INDEX: 32; LEFT: 483px; WIDTH: 16px; POSITION: absolute; TOP: 343px; HEIGHT: 24px">
<div id="Label18" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"    onclick="return Label10ClickWrapper(event, document.forms[0].Label18SubmitEvent, 'Label18_Label10Click')" > <FONT color=#ff0000><STRONG>*</STRONG></FONT> <input type="hidden" id="Label18SubmitEvent" name="Label18SubmitEvent" value="" /></div>
</div>
<div id="Label19_outer" style="Z-INDEX: 33; LEFT: 483px; WIDTH: 16px; POSITION: absolute; TOP: 367px; HEIGHT: 24px">
<div id="Label19" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:16px;"    onclick="return Label10ClickWrapper(event, document.forms[0].Label19SubmitEvent, 'Label19_Label10Click')" > <FONT color=#ff0000><STRONG>*</STRONG></FONT> <input type="hidden" id="Label19SubmitEvent" name="Label19SubmitEvent" value="" /></div>
</div>

<div id="Label21_outer" style="Z-INDEX: 34; LEFT: 48px; WIDTH: 500px; POSITION: absolute; TOP: 709px; HEIGHT: 24px">
<div id="Label21" style=" font-family: Verdana; font-size: 10px;  background-color: #ffffff;height:24px;width:500px;"   ><UL>
<LI>
<DIV align=left><STRONG>Li e aceito os Termos e Politica de anuncio e utiliza��o do Forum acima. </STRONG></DIV>
<LI>
<DIV align=left><STRONG>Sou maior de idade.</STRONG></DIV></LI></UL></div>
</div>


<div id="Button1_outer" style="Z-INDEX: 36; LEFT: 48px; WIDTH: 280px; POSITION: absolute; TOP: 749px; HEIGHT: 24px">
<input type="submit" id="Button1" name="Button1" value="Aceitar"  style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:24px;width:280px;"   tabindex="0"    />
</div>

</td></tr></table>
</form>

<form method="post"  action="../principal.php">
<div id="Button2_outer" style="Z-INDEX: 35; LEFT: 344px; WIDTH: 96px; POSITION: absolute; TOP: 749px; HEIGHT: 24px">
<input type="submit" id="Button2" name="Button2" value="Sair"  style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF ;height:24px;width:96px;"   tabindex="0"    />
</div>
</form>
</div>
</body>
</html>
<?
}else{
	
	require("inew_undher_files.php");	
}
?>