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
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="../estilo1.css" type="text/css" media="screen,projection" />

<style type="text/css">
<!--
.style1 {	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}
.style3 {font-size: 12px}
.style4 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
.style22 {font-size: 10px}
.style23 {font-size: 14px; font-weight: bold;}
-->
</style>


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

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF">
<table width="100%" height="1229" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="1229" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="154"><table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="19" bgcolor="#005151"><div align="right"><font color="#FFFFFF" size="1" face="Verdana"><b>http://www.isysmp.com.br<img src="../graphics/px1.gif" width="20" height="8"></b></font></div></td>
            </tr>
          </table>
            <table width="100%" height="69" border="0" cellpadding="0" cellspacing="0" background="../graphics/banner_sys1b.png">
              <tr>
                <td width="613" height="68">&nbsp;</td>
                <td width="58">&nbsp;</td>
                <td width="322" align="right" background="../graphics/user.png" bgcolor="#FC9107">
                  <div align="right"></div>
                  <table width="233" height="53" border="0" cellpadding="0" cellspacing="0">
                  
                  
                   <? 
                   if ($falha_login == "falhou")
				   {
                   ?>
				   
				    <form name="form1" method="post" autocomplete="off" action="../login_sair.php">

                      <tr>
                        <td width="188" height="5" valign="bottom"><div align="right"><span class="style1"> <img src="../graphics/px1.gif" width="1" height="5"><img src="../graphics/px1.gif" width="1" height="1"></span> </div></td>
                        <td width="45" align="right" valign="bottom"></td>
                      </tr>
                      <tr>
                        <td height="46" align="right"><div align="right"><span class="style4"> <font color="#FF0000">Falha no Login</font> <br>
                               Usuario ou Senha Incorretos <br>
                              &nbsp;<font color="#FF0000">ERRO !!!</font> &nbsp;  </span> </div></td>
                        <td align="left" valign="bottom"><input type=image name="Sair" src="../graphics/sair.png" width="28" height="11"> </td>
                      </tr>
                    </form>
				   

                   <?
				   }else{
				   ?>                    
                  
                  
		                  <?
		                  if ($ser_name3_c == "VISITANTE"){
		                  ?>
		                  
		                    <form name="form1" method="post" autocomplete="off" action="../logar.php?acao=logar">
		
		                      <tr>
		                        <td width="113" height="30" valign="bottom"><div align="right"><span class="style1"> <img src="../graphics/px1.gif" width="1" height="1"/><span class="style3">login.</span>:<img src="../graphics/px1.gif" width="5" height="1"/><img src="../graphics/px1.gif" width="1" height="1"/></span> </div></td>
		                        <td width="90" align="right" valign="bottom">
								<input type="text" name="log_name_c" style="height:20px; width:90px; "/></td>
		                        <td width="30" valign="bottom"><div align="center"><a href="../lembra/senha_4i.php"><img src="../graphics/ajud-1.png" width="13" height="13" border="0" alt="Recuperar Senha"/></a></div></td>
		                      </tr>
		                      <tr>
		                        <td height="16" align="right"><div align="right"><span class="style4"> <img src="../graphics/px1.gif" width="1" height="1"/>senha.:<img src="../graphics/px1.gif" width="5" height="1"/></span> </div></td>
		                        <td align="right">
								<input type="password" name="pwd" style="height:20px; width:90px; "/></td>
		                        <td>&nbsp;</td>
		                      </tr>
		                      <tr>
		                        <td height="19" align="right" valign="top">&nbsp; </td>
		                        <td align="right" valign="top">&nbsp;</td>
		                        
		                        
		                        <td align="center" valign="top"><input type='image' name="Entrar" src="../graphics/enter.png" width="28" height="11"/></td>
		                        
		                      </tr>
		                    </form>
		
		                    
		                   <?
						   }else{
						   ?> 
						   
						    <form name="form1" method="post" autocomplete="off" action="../login_sair.php">
		
		                      <tr>
		                        <td width="188" height="5" valign="bottom"><div align="right"><span class="style1"> <img src="../graphics/px1.gif" width="1" height="2"></span> </div></td>
		                        <td width="45" align="right" valign="bottom"></td>
		                      </tr>
		                      <tr>
		                        <td height="44" align="right"><div align="right"><span class="style4"> Ola.: <?=$ser_name3_c;?> <br>
		                              Seu Ultimo acesso foi em: <br>
		                              &nbsp;<?=trim($acesso_2);?>&nbsp;  </span> </div></td>
		                        <td align="left" valign="bottom"><input type=image name="Sair" src="../graphics/sair.png" width="28" height="11"> </td>
		                      </tr>
		                    </form>
		
						   <?	
		                   }	
		                   ?>
				   
				   <?
				   }
				   ?>
                    
                </table>
                </td>
              </tr>
            </table>
            <table width="100%%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="17%" height="27" background="../sites/site13/HTML/images/fon03.gif"><img src="../graphics/px1.gif" width="10" height="1"><span class="style15"><span class="style22"><font color="#005151"><?=trim($usuarios);?>&nbsp;&nbsp;usu&aacute;rio(s) on-line</font></span></span></td>
                <td width="83%" background="../sites/site13/HTML/images/fon03.gif"> <font size="2" face="Verdana"><span class="style1"><span class="style3">
				
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
				
				
				 <i><font color="#009999">Se vo&ccedil;&ecirc; n&atilde;o e cadastrado </font></i></span></span> </font><font size="2"><a href="../<?=$progr_7;?>"><b><font color="#000000">clique aqui</font></b></a></font> </td>
              </tr>
            </table>
            <table width="100%" height="44" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="33%" height="44" bgcolor="#FFB368"><div align="center">
                    <table width="231" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                      
                      <form name="form" method="post" action="../buscar/buscar.php?acao=buscar">

                        <td width="64"><b><font size="2" face="Verdana">Buscar:<img src="../graphics/px1.gif" width="5" height="1"></font></b></td>
                        <td width="115"><input name="buscar" type="text" size="15"></td>
                        <td width="52"><div align="center"><input type=image name="Pesquisa" src="../graphics/ok_2.png" width="29" height="20"></div></td>
                       </form>
					    
                      </tr>
                    </table>
                </div></td>
                <td width="34%" bgcolor="#FFB368"><img src="../graphics/banner3.gif" width="416" height="43" border="1"></td>
                <td width="33%" bgcolor="#FFB368"><div align="center">
                    <table width="200" border="0" cellpadding="0" cellspacing="0">
                      <tr>

                      <?
                      include('bot_atalho.php');
                      ?>
                      
                        
                      </tr>
                    </table>
                </div></td>
              </tr>
          </table></td>
      </tr>
    </table>
      <table width="100%" height="23" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="23" valign="top" bgcolor="#FC9107">
          
		   <?
		   include('lay_menu_x.php');
	 	   ?>		  
		  
		  </td>
        </tr>
      </table>
      <table width="100%" height="998" border="0">
        <tr>
          <td width="11%" height="994" align="left" valign="top" bgcolor="#FFB368"><table width="100%" height="960" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="923" align="center" valign="top" bgcolor="#FFFFFF">
			  
			  
			  <?
			  include('lay_menu.php');
			  ?>

<table width="128" border="0">
  <tr>
    <td width="130" align="center"> <strong>N&ordm; de visitas </strong> </td>
  </tr>
  <tr>
    <td align="center"><?=$qtd_ivisita;?></td>
  </tr>
</table>
                </td>
				
				
            </tr>
			
          </table>
            <table width="100%" height="34" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="146" height="27" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
          </table>          </td>
          <td width="73%" valign="top" bgcolor="#FFB368">            
		    <table width="100%" height="994" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="100%" height="28" valign="top" bgcolor="#FFFFFF">
				
		  <?
          @session_start();
		  $_SESSION["alte_url_pag"] = "dsds32";
          ?>
          
          <iframe src="layout.php?entra_no_web1=at2" name="idPrincipal" width='100%' height='995' scrolling="auto" frameborder="0"  borderCOLOR="#3A72BC" align="left" allowtransparency="true" ></iframe>
				
				</td>
              </tr>
          </table>            </td>
          <td width="11%" align="left" valign="top" bgcolor="#FFB368">
            <table width="100%" height="960" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="172" height="942" align="center" valign="top" bgcolor="#FFFFFF">
				
				<?
				include('destaque.php');
				?>
				
				</td>
              </tr>
            </table>      
            <table width="100%" height="34" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="146" height="27" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
            </table>          
          </td>
        </tr>
      </table>
      <table width="100%" height="79" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="17" valign="top" bgcolor="#005151"><div align="center" class="style3">
              <font color="#FFFFFF"><?=$createby;?></font>
          </div></td>
        </tr>
        <tr>
          <td height="61" align="center" bordercolor="#FFFFFF" bgcolor="#FF850E">
            <DIV align=center><span class="style15"><STRONG><font color="#FFFFFF">iSysmp.com</font></STRONG><font color="#FFFFFF"> - Portal da Troca - Forum - Programa&ccedil;&atilde;o PHP - Discurs&atilde;o - e muito mais <br>
      Todo conte&uacute;do deste site &eacute; protegido pela Lei 9.610, de Fevereiro de 1998.<BR>
                  <A class=linkbranco href="../<?=$progr_0;?>">Home</A> |
				  <A class=linkbranco href="../<?=$progr_11;?>">Sistema</A> |
				  <A class=linkbranco href="../<?=$progr_5;?>">Vender</A> |
				  <A class=linkbranco href="../<?=$progr_1;?>">Forum</A> |
				  <A class=linkbranco href="../<?=$progr_4;?>">Loja Virtual</A> |
				  <A class=linkbranco href="../<?=$progr_25;?>">PHP</A> |
				  <A class=linkbranco href="../<?=$progr_13;?>">Fale Conosco </A>
				  </font></span>
                <DIV class=invisivel>
                  <CENTER class="style14">
                  </CENTER>
                </DIV>
            </DIV>
            <DIV class=invisivel>
              <CENTER class="style14">
                <font color="#FFFF00"><span class="style15"><FONT face=verdana size=1>Criado por iSysmp.com</FONT></span></font>
              </CENTER>
          </DIV></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
<?
}else{
	
	
	header('Location:../index.php');

}
?>