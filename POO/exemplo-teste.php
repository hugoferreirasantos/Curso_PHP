<?php
// Exemplo teste, baseado nos exemplos 01,02,03:

//Class:
class Pessoa{
	//Atributos:
	private $nome;
	private $idade;
	private $cpf;

	//Métodos:
	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getIdade():int{
		return $this->idade;
	}

	public function setIdade($idade){
		$this->idade = $idade;
	}

	public function getCPF(){
		return $this->cpf;
	}

	public function setCPF($numero){

		$resultado = Pessoa::validaCPF($numero);

		//Fazer a comparação:
		if($resultado === false){
			throw new Exception("O cpf informado não é válido:",1);
		}

		$this->cpf = $numero;
	} 

	//Método estático:
	public static function validaCPF($cpf):bool{

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

// Instânciar um objeto:
$maria = new Pessoa();
$ana = new Pessoa();
//-----------------------------------------------------------------------------------------------------
// Pessoa Maria: 
//Atribuir valores para os atributos:
$maria->setNome("Maria");
$maria->setIdade("15");
//$maria->setCPF("81140754068");
echo "<br>";

//Exibir Resultado:
echo $maria->getNome();
echo "<br>";
echo $maria->getIdade();
echo "<br>";
//var_dump($maria->getCPF());

//ou só fazer um var_dump() com o método estático:
var_dump(Pessoa::validaCPF("81140754068"));
echo "<br>";
//-----------------------------------------------------------------------------------------------------
// Pessoa Ana:
//Atribuir valores para os atributos:
$ana->setNome("Ana");
$ana->setIdade("30");
//$ana->setCPF("87262518097");

//Exibir resultado:
echo $ana->getNome();
echo "<br>";
echo $ana->getIdade();
echo "<br>";
//echo $ana->getCPF();
var_dump(Pessoa::validaCPF("87262518097"));



?>