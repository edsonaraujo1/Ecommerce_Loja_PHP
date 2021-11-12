<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Autor da Rotinas...: Daniel Menezes sacddm@ieg.com.br
 Finalidade.........: Layout Compras
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/

/*
	Classe TCarrinho
*/
class TCarrinho {
var $item_codigo = array();
var $item_quantidade = array();
	
	/*
		ObtemPosicao
		Este metodo obtem a posicao de um item mediante ao seu codigo, retornando um valor booleano e gravando a posicao na variavel de referencia $posicao, caso o codigo do item esteja no carrinho.
	*/
	function ObtemPosicao($codigo,&$posicao){
		//Percorrendo o vetor
		for($i=0;$i<count($this->item_codigo);$i++) {
			if ($this->item_codigo[$i] == $codigo) {
				$posicao = $i;
				return TRUE;
		   }
		 }

	}/* ObtemPosicao() */
	
	/*
		AdicinarItem
		Este metodo adiciona um item no carrinho
	*/
	function AdicionarItem($codigo,$quantidade) 
	{
		//Inicializando parametro
		$posicao = -1; 
		$achou = $this->ObtemPosicao($codigo,$posicao);
		if (!$achou){
			$this->item_codigo[] = $codigo;
			$this->item_quantidade[] = $quantidade;
		}
	} /* AdicionarItem() */

	/*
		RemoverItem
		Este metodo remove um item do carrinho de compra, passando o codigo do produto
	*/
	function RemoverItem($codigo) 
	{
		//Inicializando parametro
		$posicao = -1; 
		$achou = $this->ObtemPosicao($codigo,$posicao);
		if ($achou){
			//Removendo o elemento do vetor
			array_splice($this->item_codigo, $posicao, 1);
			array_splice($this->item_quantidade, $posicao, 1);		
		}
			
	} /* RemoveItem() */

	/*
		QuantosItens
		Este metodo retorna a quantidade de itens incluidas no carrinho de compras
	*/
	function QuantosItens() {
		return count($this->item_quantidade);
	} /* QuantosItens() */

	/*
		ExcluirTodosItens
		Este metodo retira todos os itens contidos no carrinho de compras
	*/
	function ExcluirTodosItens(){
		$this->item_quantidade = null;
		$this->item_codigo = null;
	} /* ExcluirTodosItens() */

	/*
		QuerySQL_ObtemListaDeItens
		Este metodo gera uma parte do codigo SQL que sera usado para buscar os dados
		do carrinho de compra (ID_COD, NOME e PREÇO). O comando SQL final tera como finalidade
		de buscar no banco de dados apenas os dados dos itens incluidos no carrinho.
	*/
	function QuerySQL_ObtemListaDeItens(){
		$itens = "where ";
		$STR = "";
		if ($this->QuantosItens()>0) {
			$fixo = " cod_prod =";
			for ($i=0;$i<$this->QuantosItens();$i++){
				$STR = $STR . $fixo . " " . $this->item_codigo[$i];
				if ($i+1<$this->QuantosItens()) {
					$STR = $STR . " or ";
				}
			}
		}
		if (!$STR == "") {
			return $itens . $STR;
		}else{
			//Caso não exista nenhum item no carrinho o codigo final SQL, procurara por um item que não existe na tabela de produtos, neste caso  -1.
			return "where cod_prod = -1";
		}
	} /* QuerySQL_ObtemListaDeItens() */

	/*
		ObtemQuantidadeItem
		Este metodo obtem a quantidade de um Item
	*/
	function ObtemQuantidadeItem($codigo){
		$posicao = -1;
		$achou = $this->ObtemPosicao($codigo,$posicao);
		if ($achou) {
			return $this->item_quantidade[$posicao];
		}else{
			return "erro ao obter quantidade do item";
		}
		
	} /* ObtemQuantidaItem() */

	/*
		ObtemSubTotalDeUmItem
		Este metodo retorna o subtotal de um item (QUANTIDADE * VALOR UNITARIO)
	*/
	function ObtemSubTotalDeUmItem($ID_COD,$preco){
		$posicao = -1;
		$achou = $this->ObtemPosicao($ID_COD,$posicao);
		if ($achou) {
			return ($this->item_quantidade[$posicao]*$preco);
		}else{
			return "erro ao obter sub total do item";
		}
	} /* ObtemSubTotalDeUmItem() */

	/*
		AtualizarCarrinho
		Este metodo coleta todos as variaveis enviadas pelo FORMULARO (method="POST") 
		e atualiza as quantidades dos itens.
	*/
	function AtualizarCarrinho(&$VAR_ENVIADAS_PELO_BROWSER){
		//Percorrendo a lista de itens e atualizando suas quantidades
		for ($i=0;$i<$this->QuantosItens();$i++){
			$this->item_quantidade[$i] = $VAR_ENVIADAS_PELO_BROWSER[$this->item_codigo[$i]];
		}
	} /* AtualizarCarrinho() */

} /* Classe TCarrinho */
?>