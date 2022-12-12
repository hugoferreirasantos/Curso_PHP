<?php
// Exercício baseado no exemplo da pasta:

//Criando uma interface:
interface Cliente{

	//Métodos da interface:
	public function atribuirNome($nome);
	public function exibirNome();
	public function atribuirIdade($idade);
	public function exibirIdade();


}
//Fim da interface:

//Criar uma classe abstrata:

//Classe abstrata implementando a interface cliente:
abstract class Pessoa implements Cliente{

	//Atributos:
	protected $nome;
	protected $idade;

	//Métodos:

	protected function getNome(){

		return $this->nome;
	}

	public function atribuirNome($nome){

		$this->nome = $nome;

	}

	public function exibirNome(){

		echo "O nome da Pessoa é: ".$this->getNome();

	}

	protected function getIdade(){

		return $this->idade;
	}

	public function atribuirIdade($idade){

		$this->idade = $idade;

	}

	public function exibirIdade(){

		echo "A idade da pessoa é: ".$this->getIdade();

	}


}
//Fim da classe abstrata implementando a interface cliente:

//Classe filha da classe abstrata:
class Trabalhador extends Pessoa {

	//Método:
	public function validaCPF($cpf){

		//Verificar se o número foi informado:
		if(empty($cpf)) return false;

		//Eliminar uma possível mascara:
		$cpf = preg_replace('[^0-9]','',$cpf);
		$cpf = str_pad($cpf,11,'0',STR_PAD_LEFT);

		//Verificar se o número de digitos é igual a 11:
		if(strlen($cpf) != 11){
			return false;
		}
		//Verificar se nenhuma das sequência abaixo:
		//foi digitada caso afirmativo retornar falso:
		else if($cpf == '00000000000' ||
				$cpf == '11111111111' ||
				$cpf == '22222222222' ||
				$cpf == '33333333333' ||
				$cpf == '44444444444' ||
				$cpf == '55555555555' ||
				$cpf == '66666666666' ||
				$cpf == '77777777777' ||
				$cpf == '88888888888' ||
				$cpf == '99999999999'){
			return false;
		}

		//Fazer o calculo dos digitos para verificar se o cpf é valido:
		else{
			for($t = 9; $t < 11; $t++){

				for($d=0,$c=0; $c < $t; $c++){
					$d += $cpf{$c} * (($t + 1) - $c);
				}
				$d= ((10 * $d) % 11) % 10;
				
				if ($cpf{$c} != $d) {
                return false;
            	}
			}

			return true;
		}

	}


}

//Fim da classe Filha:

//Instânciar um Objeto:
$trabalhador = new Trabalhador();
//Fim da instanciação:

//Atribuir valores:

$trabalhador->atribuirNome("Maria");
$trabalhador->atribuirIdade(15);

//Fim da atribuição:

//Exibição dos resultados:

$trabalhador->exibirNome();
echo "<br>";
$trabalhador->exibirIdade();
echo "<br>";
var_dump($trabalhador->validaCPF("123456789"));

//Fim da exibição:

?>