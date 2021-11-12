<?
include_once("../config.php");

@session_start();
$ser_name3_c    = escapestrings(strtoupper($_SESSION["log_name_c"]));
$acesso_2       = escapestrings($_SESSION['data_log_2']);


if ($servletjs2 == '20$$20'){


if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = trim(strtoupper("Visitante"));
}

include('help.php');

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
    <title><?=$Titulo;?></title>
    <link rel="shortcut icon" href="../graphics/favicon.ico"/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="../estilo1.css" type="text/css">

		<script type="text/javascript">
                  
		//relogio
		
		
		function startTime()
		{
		var today=new Date()
		var h=today.getHours()
		var m=today.getMinutes()
		var s=today.getSeconds()
		// add a zero in front of numbers<10
		m=checkTime(m)
		s=checkTime(s)
		document.getElementById('txt').innerHTML=h+":"+m+":"+s
		t=setTimeout('startTime()',500)
		}
		
		function checkTime(i)
		{
		if (i<10) 
		  {i="0" + i}
		  return i
		}
		</script>

</head>
<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; " onload="startTime()">
<table width="100%" height="602" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="162" align="center" valign="top" ><div align="center"><img src="../graphics/lixo1.png" ></div></td>
        <td width="100%" valign="bottom" background="../graphics/banner_sys1b.png"><table width="510" height="93" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="358" height="59"><div align="center">
                <table width="319" height="47" border="0">
                  <tr>
                    <td><!-- <img src="../graphics/banner.gif" width="320" height="47">--></td>
                  </tr>
                </table>
            </div></td>
            <td width="152">&nbsp;</td>
          </tr>
          <tr>
            <td height="27" valign="bottom"><table width="304" border="0" cellpadding="0" cellspacing="0">
 
 <?
if ($ser_name3_c != "VISITANTE"){
?>                  

                <tr>
                  <td height="24" valign="bottom"><a href="../<?=$progr_15;?>"><img src="../graphics/botoes1.png" width="87" height="16" border="0"/></a></td>
                  <td valign="bottom"><a href="../<?=$progr_16;?>"><img src="../graphics/botoes2.png" width="87" height="16" border="0"/></a></td>
                  <td valign="bottom"><a href="../<?=$progr_17;?>"><img src="../graphics/botoes3.png" width="87" height="16" border="0"/></a></td>
                  <td valign="bottom"><a href="../<?=$progr_18;?>"><img src="../graphics/botoes4.png" width="87" height="16" border="0"/></a></td>
                  <td valign="bottom"><img src="../graphics/espacador_tb.gif" width="15" height="10"/></td>
                </tr>
              
               
<?
}
?>                
            </table></td>
            <td valign="bottom">&nbsp;</td>
          </tr>
        </table></td>
        <td width="298" bgcolor="#FC9107">
        
		
<?
if ($ser_name3_c == "VISITANTE"){
?>		<div align="center">
          <table width="201" border="0" cellpadding="0" cellspacing="0" background="../graphics/area_user2.png">
            <tr>
              <td width="272">&nbsp;</td>
            </tr>
            <tr>
              <td>
			  
			  
			  <table width="198" height="74" border="0" cellpadding="0" cellspacing="0">
			  
<?
if ($ser_name3_c == "VISITANTE"){
?>                  
			  
              <form name="form1" method="post" autocomplete="off" action="../logar.php?acao=logar">


<?
}else{
?>

			  <form name="form1" method="post" autocomplete="off" action="../login_sair.php">

<?	
}	
?>			    
									
              
<?
if ($falha_login == "falhou"){
?>                  

                <tr>
                  <td width="268">
				  <div align="left"><span class="style1">
				  <img src="../graphics/px1.gif" width="8" height="1"><span class="style3">login.</span>:<img src="../graphics/px1.gif" width="9" height="8"></span>
                        <input type="text" name="log_name_c" style="height:22px; width:90px ">
                        <a href="../lembra/senha_4i.php"><img src="../graphics/ajud-1.png" width="13" height="13" alt="Esqueci minha Senha" border="0"></a>
                  </div></td>  
                  
                </tr>
                <tr>
                  <td><div align="left"><span class="style4">
				  <img src="../graphics/px1.gif" width="10" height="1">senha.:</span>
                        <input type="password" name="pwd" style="height:22px; width:90px ">
                  </div></td>
                  </tr>

                <tr>
                  <td height="20" align="right" valign="top"><div align="right"><span class="style19"><span class="style20">Falha no Login</span> <img src="../graphics/px1.gif" width="8" height="1"></span> <input type=image name="Entrar" src="../graphics/enter.png" width="58" height="20"><img src="../graphics/px1.gif" width="13" height="1"></div></td>
                  </tr>

<?
}else{
?>

                <tr>
                  <td width="268"><div align="left"><span class="style1">
				  <img src="../graphics/px1.gif" width="10" height="1"><span class="style3">login.</span>:<img src="../graphics/px1.gif" width="7" height="8"></span>
                        <input type="text" name="log_name_c" style="height:22px; width:90px ">
                        <a href="../lembra/senha_4i.php"><img src="../graphics/ajud-1.png" width="13" height="13" alt="Esqueci minha Senha" border="0"></a>

                  </div></td>  
                  
                </tr>
                <tr>
                  <td><div align="left"><span class="style4">
				  <img src="../graphics/px1.gif" width="10" height="1">senha.:</span>
                        <input type="password" name="pwd" style="height:22px; width:90px ">
                  </div></td>
                  </tr>



<?
if ($ser_name3_c == "VISITANTE"){
?>						            

                <tr>
                  <td height="20" align="right" valign="top"><img src="../graphics/px1.gif" width="8" height="1"><input type=image name="Entrar" src="../graphics/enter.png" width="58" height="20"><img src="../graphics/px1.gif" width="13" height="1"></td>
                  </tr>

<?
}else{
?>

                <tr>
                  <td height="20" align="right" valign="top"><img src="../graphics/px1.gif" width="8" height="1"><input type=image name="Entrar" src="../graphics/sair.png" width="58" height="20"><img src="../graphics/px1.gif" width="13" height="1"></td>
                  </tr>



<?
}
?>	

<?	
}   
?>   


                <tr>
                  <td height="21">&nbsp;</td>
                  </tr>
                  </form>
              </table>
			  
			  
			  </td>
            </tr>
          </table>
        </div>
<?
}else{
?>

<table width="201" height="102" border="0" cellpadding="0" cellspacing="0" background="../graphics/area_user2.png">
			  <form name="form1" method="post" action="../login_sair.php">

            <tr>
              <td width="272" height="27"><div align="left"><span class="style1"><br>
                      <img src="../graphics/px1.gif" width="8" height="8"><span class="style3">Ola.: <?=$ser_name3_c;?><br>
                      <img src="../graphics/px1.gif" width="8" height="1">Seu Ultimo acesso foi em:<br>
                      <img src="../graphics/px1.gif" width="8" height="1">&nbsp;<?=trim($acesso_2);?>&nbsp;<br>
                      </span></span></div></td>
            </tr>
            <tr>
              <td height="33" align="right" valign="top"><input type=image name="Sair" src="../graphics/sair.png" width="58" height="20"><img src="../graphics/px1.gif" width="10" height="1"></td>
            </tr>
            </form>
          </table>
<?	
}
?>		</td>
        <td width="298" bgcolor="#FC8704"><img src="../graphics/espacador_tb.gif" width="15" height="10"></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#FFB368"><div align="left" class="style15"><img src="../graphics/px1.gif" width="10" height="1"><span class="style17"><?=trim($usuarios);?>&nbsp;&nbsp;usu&aacute;rio(s) on-line</span> </div></td>
        <td width="100%" bgcolor="#FFB368"><span class="style1">  <span class="style3">
		
		</span></span>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="70%"><span class="style1"><span class="style3">
                <img src="../graphics/px1.gif" width="20" height="5">
                <?
        if ($ser_name3_c == "VISITANTE"){
        ?>
                <?=$bomdia;?>
                <?
		}else{
		?>
                <?=trim($situa_1);?>
                &nbsp;
                <?=$ser_name3_c;?>
                &nbsp;Seja Bem vindo.
                <?
		}
		?>
              </span></span></td>
              <td width="1%">&nbsp;</td>
              <td width="29%"><div align="right">

                <table width="105" border="0">
                  <tr>
              <form name="form" method="post" action="../buscar/buscar.php?acao=buscar">

                    <td width="99" align="center"><b><font size="2" face="Verdana">Busca:</font></b></td>
                    <td width="99" align="center"><input name="buscar" type="text" size="13" style="height:22px;"></td>
                    <td width="99" align="center"><input type=image name="Pesquisa" src="../graphics/ok_2.png" width="28" height="20"></td>
                </form>

                  </tr>
                </table>

              </div></td>
            </tr>
          </table>
          <span class="style1"><span class="style3">		 </span></span></td>
        <td bgcolor="#FFB368"><div align="center" class="style4">


        <?
		
		include("bot_atalho.php");
		
		?>				  

		  <div id="txt"></div>
		
		</div></td>
        <td bgcolor="#FFB368">&nbsp;</td>
      </tr>
    </table>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
	<td>
	<center>
	
	</center>
	</td>
	</table>
      <table width="100%" height="100" border="0" cellpadding="0" cellspacing="0">
      
        <tr>
          <td width="145" height="873" align="center" valign="top">
		  <table width="126" border="0" cellpadding="0" cellspacing="0">

          <?
          
          include("lay_menu.php");
          
          ?>

            <tr>
              <td><span class="style18">.</span></td>
            </tr>
            <tr>
              <td align="center"> <strong>N&ordm; de visitas </strong> </td>
            </tr>
            <tr>
              <td align="center"><?=$qtd_ivisita;?></td>
            </tr>
          </table>
            <table width="130" height="360" border="0">
            
            <?
			
			include("lay_menu2.php");
			
			?>              
              
              
              
          </table>            
          <br>     
		  
          </td>
          <td width="100%" valign="top" bordercolor="#FF850E" bgcolor="#FFFFFF">
          
          <?
          @session_start();
		  $_SESSION["alte_url_pag"] = "dsds32";
          ?>
          
    <iframe src="layout.php?entra_no_web1=at2" name="idPrincipal" width='100%' height='1080' scrolling="auto" frameborder="0"  borderCOLOR="#3A72BC" align="left" allowtransparency="true" ></iframe>		  </td>
          <td width="19" align="center" valign="top" bgcolor="#FF850E">
<table width="100%" height="715" border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td height="100%" align="center" valign="top" bgcolor="#FFFFFF">
	      <?
		  include("destaque.php");
		  ?>
		  </td>
  </tr>
</table>		  
 </td>
        </tr>
      </table>
      <table width="100%" height="17" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="16%" height="17" valign="top" bgcolor="#FFB368"><div align="center" class="style3"><?=$createby;?></div></td>
        </tr>
      </table>      
      <table width="100%" height="50" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="100%" height="50" align="center" bordercolor="#FFFFFF" bgcolor="#FF850E">
		  
		  <DIV align=center><span class="style15"><STRONG><font color="#FFFFFF">iSysmp.com</font></STRONG><font color="#FFFFFF"> - Portal da Troca - Forum - Programa&ccedil;&atilde;o PHP - Discurs&atilde;o - e muito mais <br>
  Todo conteúdo deste site é protegido pela Lei 9.610, de 
            Fevereiro de 1998.<BR>
            <A class=linkbranco href="../<?=$progr_0;?>">Home</A> |
			<A class=linkbranco href="../<?=$progr_11;?>">Sistema</A> |
			<A class=linkbranco href="../<?=$progr_5;?>">Vender</A> |
			<A class=linkbranco href="../<?=$progr_1;?>">Forum</A> |
			<A class=linkbranco href="../<?=$progr_4;?>">Loja Virtual</A> |
			<A class=linkbranco href="../<?=$progr_25;?>">PHP</A> |
			<A class=linkbranco href="../<?=$progr_13;?>">Fale Conosco </A> </font></span>
		    <DIV class=invisivel>
              <CENTER class="style14"></CENTER>
            </DIV>
            </DIV>
            <DIV class=invisivel>
            <CENTER class="style14">
                    <font color="#FFFF00"><span class="style15"><FONT face=verdana size=1>Criado por iSysmp.com</FONT></span></font>
            </CENTER>
</DIV>
		  
		  
		  </td>
        </tr>
      </table>      </td>
  </tr>
</table>
</body>
</html>
<?
}else{
	
	
	header('Location:../index.php');

}
?>