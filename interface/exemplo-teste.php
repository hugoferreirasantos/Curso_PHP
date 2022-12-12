<?php
// Exércicio baseado no exemplo dessa pasta:

//Criando uma interface:
interface NumeroCelular {

	//Métodos da interface:
	public function dddCelular();
	public function numCelular();

}
//Fim da interface:

//Criando uma interface:
interface ValidaCliente {

	//Método da interface:
	public function validaCPF();
	public function exibeCPF();

}
//Fim da interface:

//Criando uma classe implementando a interface:
class Cliente implements NumeroCelular, ValidaCliente{
	//Atributos:
	protected $ddd;
	protected $numCelular;
	private $cpf;

	//Métodos:
	protected function getDDD(){

		return $this->ddd;
	}

	public function setDDD($ddd){

		$this->ddd = $ddd;
	}

	public function dddCelular(){

		echo "O seu DDD é: ".$this->getDDD();
	}

	protected function getNumCelular(){

		return $this->numCelular;
	}

	public function setCelular($numCelular){

		$this->numCelular = $numCelular;

	}

	public function numCelular(){

		echo "O seu número de Celular é: ".$this->getNumCelular();

	}

	protected function getCPF(){

		return $this->cpf;
	}

	public function setCPF($cpf){

		$this->cpf = $cpf;

	}


	public function validaCPF():bool{

		$cpf = $this->getCPF();

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

	public function exibeCPF(){

		echo "O seu cpf é: ".$this->getCPF();
	}

}

//Fim da Classe:

//Instânciar um objeto:
$cliente1 = new Cliente();

//Fim da Instâncição:

//Atribuir valores:
$cliente1->setDDD("62");
$cliente1->setCelular("945783214");
$cliente1->setCPF("1234");
//Fim da Atribuição:

//Exibição dos resultados da interface:
$cliente1->dddCelular();
echo "<br>";
$cliente1->numCelular();
echo "<br>";
var_dump($cliente1->validaCPF());
echo "<br>";
$cliente1->exibeCPF();
//Fim da exibição da interface:


?>