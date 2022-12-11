<?php
// Herança no PHP:


//Class:
class Documento{
	//Atributos:
	private $numero;

	//Métodos:
	protected function getNumero(){
		return $this->numero;
	}

	public function setNumero($num){

		$this->numero = $num;

	}


}

//Class que é herdeira de Documento:
class CPF extends Documento {

	//Métodos:
	public function validaCPF():bool{

		$cpf = $this->getNumero();

		//Verifica se um número foi informado:
		if(empty($cpf)) return false;

		//Elimina uma possível mascara:
		$cpf = preg_replace('[^0-9]', '',$cpf);
		$cpf = str_pad($cpf, 11, '0',STR_PAD_LEFT);

		//Verifica se o número de digitos informados é igual a 11:
		if(strlen($cpf) != 11){
			return false;
		}

		//Verifica se nenhuma das sequências invalida baixo:
		//foi digitada caso afirmativo retorna falso:
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

		//Calcula os digitos verificados para verificar se o CPF é válido:
		else{
			for($t = 9; $t < 11; $t++){

				for($d = 0, $c = 0; $c < $t; $c++){
					$d += $cpf{$c} * (($t +1) -$c);
				}

				$d = ((10 * $d) % 11) % 10;
            	if ($cpf{$c} != $d) {
                return false;
            	}
			}

			return true;
		}


	}

	public function exibeCPF(){
		$numCPF = $this->getNumero();
		echo "Número do CPF: ".$numCPF;
	}

}


//Instânciar 
$doc = new CPF();
$doc->setNumero("04498283015");

var_dump($doc->validaCPF());
echo "<br>";
echo $doc->exibeCPF();


?>