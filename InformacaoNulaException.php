<?php
class InformacaoNulaException extends Exception{

	public function __toString() {
        return "ERRO! O CONSTRUTOR NÃO PODE SER NULO";
    }
}
?>