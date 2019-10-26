<?php
require_once "Leite.php";
require_once "DVD.php";
date_default_timezone_set("America/Sao_Paulo");
//Estoque de DVDs-ID-Preço-Titulo-Ano----------------------------------------------------------------------------------
$DVD1 = new DVD(1, 15, "Titanic", 1997);
$DVD2 = new DVD(2, 10, "Os Simpsons: o Filme", 2007);
$DVD3 = new DVD(3, 13, "Hachi: A Dog's Tale", 2009);
$DVD4 = new DVD(4, 12, "À Procura da Felicidade", 2006);
//Estoque de leites-ID-Preço-Marca---Volume-Data de validade-----------------------------------------------------------
$Leite1 = new Leite(5, 12, "Nestlé", 1000, "22/10/2019");
$Leite2 = new Leite(6, 13, "Italac", 1000, "26/10/2019");
$Leite3 = new Leite(7, 14, "Ninho", 1000, "26/10/2019");
$Leite4 = new Leite(8, 15, "Parmalat", 1000, "21/10/2019");
$Leite5 = new Leite(9, 16, "Itambé", 1000, "26/10/2019");
$Leite6 = new Leite(10, 17, "Cotochés", 1000, "27/10/2019");
//Array do estoque-----------------------------------------------------------------------------------------------------
$estoque = array($DVD1->codigo => $DVD1,
	$DVD2->codigo => $DVD2,
	$DVD3->codigo => $DVD3,
	$DVD4->codigo => $DVD4,
	$Leite1->codigo => $Leite1,
	$Leite2->codigo => $Leite2,
	$Leite3->codigo => $Leite3,
	$Leite4->codigo => $Leite4,
	$Leite5->codigo => $Leite5,
	$Leite6->codigo => $Leite6);
//Printa filmes do estoque---------------------------------------------------------------------------------------------
for($i = 1; $i <= 4; $i++){
echo "FILME: $i<br>$estoque[$i]<br><hr>";
}
//Printa leites do estoque---------------------------------------------------------------------------------------------
$numero = 1;
for($i = 5; $i <= 10; $i++){
echo "LEITE: $numero<br>$estoque[$i]<br><hr>";
$numero++;
}
//Printa leites vencidos-----------------------------------------------------------------------------------------------
$mensagem = '';
$boolean1 = false;
for($i = 5; $i <= 10; $i++){
	if($estoque[$i]->estaVencido()){
		$mensagem .= $estoque[$i]->getMarca()."<br>"; 
		$boolean1 = true;
		}
}   if($boolean1){
		echo "Os seguintes leite estão vencidos: <br>$mensagem<br><hr>";
	}else{
		echo "Não há leite vencido<br><hr>";
	}


//Printa DVDs correspondente ao ano digitado---------------------------------------------------------------------------
$anoDigitado = 1997;
$mensagemPegaAno = '';
$boolean = false;
for($i = 1; $i <= 4; $i++){
	if($estoque[$i]->getAno() == $anoDigitado){
		$mensagemPegaAno .= $estoque[$i]->getTitulo()."<br>";
		$boolean = true;
	}
}   if($boolean){
		echo "Os DVDs lançados em $anoDigitado são: <br>$mensagemPegaAno<br><hr>";
	}else{
		echo "Nenhum dos DVDs em estoque foi lançado no ano $anoDigitado<br><hr>";
	}
//Soma preço do produtos-----------------------------------------------------------------------------------------------
$somaTotalProdutos = null;
for($i = 1; $i <= 10; $i++){
	$somaTotalProdutos += $estoque[$i]->preco;
}
echo "A soma total do preço dos produtos em estoque é: $somaTotalProdutos<br>";
//---------------------------------------------------------------------------------------------------------------------
//var_dump($estoque);
//print_r($estoque);
?>