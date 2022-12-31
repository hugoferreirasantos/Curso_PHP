<?php
//Inicio: Class Endereco:
Class Endereco{
	//Atributos:
	private $idendereco;
	private $cep;
	private $cidade;
	private $logradouro;
	private $bairro;
	private $uf;
	private $ddd;
	private $dtcadastro;

	//Métodos:

	 //Inicio:GETS and SETS:
	public function getIdendereco(){
		return $this->idendereco;
	}

	public function setIdendereco($value){
		$this->idendereco = $value;
	}

	public function getCep(){
		return $this->cep;
	}

	public function setCep($value){
		$this->cep = $value;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setCidade($value){
		$this->cidade = $value;
	}

	public function getLogradouro(){
		return $this->logradouro;
	}

	public function setLogradouro($value){
		$this->logradouro = $value;
	}

	public function getBairro(){
		return $this->bairro;
	}

	public function setBairro($value){
		$this->bairro = $value;
	}

	public function getUf(){
		return $this->uf;
	}

	public function setUf($value){
		$this->uf = $value;
	}

	public function getDDD(){
		return $this->ddd;
	}

	public function setDDD($value){
		$this->ddd = $value;
	}

	public function getDtcadastro(){
		return $this->dtcadastro;
	}

	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}
	 //Fim: GETS and SETS:

	 //Inicio: Método Insert:

	private function setData($data){

		$this->setIdendereco($data['idendereco']);
		$this->setCep($data['cep']);
		$this->setCidade($data['cidade']);
		$this->setLogradouro($data['logradouro']);
		$this->setBairro($data['bairro']);
		$this->setUf($data['uf']);
		$this->setDDD($data['ddd']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));

	}

	private function setDataEnd($data){

		$this->setCep($data['cep']);
		$this->setCidade($data['localidade']);
		$this->setLogradouro($data['logradouro']);
		$this->setBairro($data['bairro']);
		$this->setUf($data['uf']);
		$this->setDDD($data['ddd']);

	}

	public function insert_endereco($numCep){

		//Pegar o cep e link:
		$cep = $numCep;
		$link = "https://viacep.com.br/ws/$cep/json/";

		//Utilizando a biblioteca cURL:
		$ch = curl_init($link);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);

		$response = curl_exec($ch);

		curl_close($ch);

		//Transformar a variável response em array:
		$data = json_decode($response,true);

		$this->setDataEnd($data);


		$sql = new Sql();

		$results = $sql->select("CALL sp_endereco_insert(:CEP,:CIDADE,:LOG,:BAIRRO,:UF,:DDD)",array(
			":CEP"=>$this->getCep(),
			":CIDADE"=>$this->getCidade(),
			":LOG"=>$this->getLogradouro(),
			":BAIRRO"=>$this->getBairro(),
			":UF"=>$this->getUf(),
			":DDD"=>$this->getDDD()
		));

		if(count($results) > 0){

			$this->setData($results[0]);

		}

		return $data;


	}

	 //Fim: Método Insert:

	 //Inicio: Método getList():
	public function getList(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_endereco ");

	}

	 //Fim: Método getList();

	 //Inicio: Método __toString:
	public function __toString(){

		return json_encode(array(
			"idendereco"=>$this->getIdendereco(),
			"cep"=>$this->getCep(),
			"cidade"=>$this->getCidade(),
			"logradouro"=>$this->getLogradouro(),
			"bairro"=>$this->getBairro(),
			"uf"=>$this->getUf(),
			"ddd"=>$this->getDDD(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y | H:i:s")
		));

	}

	 //Fim: Método __toString:



}

//Fim: Class Endereco:

?>