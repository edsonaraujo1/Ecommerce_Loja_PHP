<?
/*
Função prox_nivel ,retorna uma corrente com as mensagens.

$conn variavel para conexao no mysql
$pai  variavel que informa  o pai da mensagem
$topico variavel que informa o topico
$irmao variavel que informa quantos irmaõs s mensagem tem
$hist  variavel com historia das correntes
$cont  variavel com a possição do array
$mesg  variavel contendo as mensagens
*/
function prox_nivel($conn,$pai,$topico,$irmao,$hist,&$cont,&$mesg)
{
   $val=1; //Posição em na hieraquia dos filhos
   if($pai == 0)
   {
      $query="SELECT * FROM msg WHERE (pai=\"0\" AND topico=$topico)";
   }else{
      $query="SELECT * FROM msg WHERE  pai=\"$pai\" ORDER BY `codigo` ASC";
   }
   $consulta=mysql_query($query,$conn);
   while($linha=mysql_fetch_row($consulta)){
      $consulta2 = "SELECT COUNT(*) as total FROM msg WHERE pai=\"$linha[0]\"";
      $quantidade = mysql_query($consulta2, $conn);
      $total = mysql_result($quantidade, 0, "total");
      /*
        $total igual a 0 ,a mensagem não tem filhos
      */
      $x=0;
      $y=1;
      /*
        Se $val igual $irmao ,filho caçula.
      */
      if($val==$irmao){
        $x=2;
        $y=3;
      }
      $titulo="Re:$linha[3]";
      $xhist[0]=$hist[$x];
      $xhist[1]=$hist[$y];
      $mesg[$cont][1]="&nbsp;<a href=\"./ler.php?pai=$linha[0]&res=0&titulo=$titulo&topico=$linha[7]&codigo=$linha[0]#mesg\">$linha[3]</a>";
      $mesg[$cont][2]=$linha[1];
      $mesg[$cont][3]=$linha[5];
      $mesg[$cont][4]=$linha[4];
      $mesg[$cont][5]=$linha[9];
	  	  
      if($total == 0){
         if($xhist[0] == "<img src=\"../graphics/trans(2).gif\" width=\"12\" height=\"21\">"){
            $mesg[$cont][0]="$xhist[0]<img src=\"../graphics/n.gif\">";
            $cont++;
         }else{
            $mesg[$cont][0]="$xhist[0]<img src=\"../graphics/m.gif\">";
            $cont++;
         }
      }else{
         $mesg[$cont][0]="$xhist[0]<img src=\"../graphics/m.gif\">";
         $cont++;
         
         if ($linha[6] > 1){
         	
         //$mesg[$cont][0]="$xhist[0]<img src=\"graphics/c.gif\">";
         	
         }
        
       
         /*
           Possibilidades de images no proximo nivel,armazenadas em $newhist
         */
         
         //$newhist[0]="$xhist[1]<img src=\"graphics/t.gif\">";
         //$newhist[1]="$xhist[1]<img src=\"graphics/m.gif\">";
         //$newhist[2]="$xhist[1]<img src=\"graphics/i.gif\">";
         //$newhist[4]="$xhist[1]<img src=\"graphics/i.gif\">";
         
         $newhist[3]="$xhist[1]<img src=\"../graphics/trans(2).gif\" width=\"12\" height=\"21\">";
         prox_nivel($conn,$linha[0],"",$total,$newhist,$cont,$mesg);
      }
     
      $val++;
   }
}
?>