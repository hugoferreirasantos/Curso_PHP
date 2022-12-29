<?php
//Inicio: Class Dowload:
class Dowload {
	//Atributos:
	private $iddowload;
	private $desfile;
	private $dtdowload;

	//Métodos:

	 //Inicio: GETS and SETS:
	public function getIddowload(){
		return $this->iddowload;
	}

	public function setIddowload($value){
		$this->iddowload = $value;
	}

	public function getDesfile(){
		return $this->desfile;
	}

	public function setDesfile($value){
		$this->desfile = $value;
	}

	public function getDtdowload(){
		return $this->dtdowload;
	}

	public function setDtdowload($value){
		$this->dtdowload = $value;
	}
	 //Fim: GETS and SETS:

	 //Inicio: Método de Criação de arquivo:
	public function content($url){

		//Passar a url para a vairável link:
		$link = $url;

		//Pegargar o conteúdo:
		$content = file_get_contents($link);

		//Transformar o arquivo que está na url em um arquivo real:
		$parse = parse_url($link);

		$basename = basename($parse["path"]);

		//Criar um arquivo:
		$file = fopen($basename, "w+");
		fwrite($file,$content);
		fclose($file);

		return $basename;

	}

	 //Fim: Método de Criação de arquivo:

	 //Inicio: Método insert();
	public function setData($data){

		$this->setIddowload($data['iddowload']);
		$this->setDesfile($data['desfile']);
		$this->setDtdowload(new DateTime($data['dtdowload']));

	}

	public function insert($url){


		//Atribuir um valor a desfile:
		$this->setDesfile($this->content($url));

		$sql = new Sql();

		$results = $sql->select("CALL sp_dowload_insert(:FILE)",array(
			":FILE"=>$this->getDesfile()
		));

		if(count($results)>0){

			$this->setData($results[0]);

		}

	}

	 //Fim: Método insert();

	 //Inicio: Método getList - Pegar todos os elementos dentro do banco:
	public function getList(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_dowloads ORDER BY desfile");

	}

	 //Fim: Método getList - Pegar todos os elementos dentro do banco:

	 //Inicio: Método __toString():
	public function __toString(){

		return json_encode(array(
			"iddowload"=>$this->getIddowload(),
			"desfile"=>$this->getDesfile(),
			"dtdowload"=>$this->getDtdowload()->format("d/m/Y | H:i:s")
		));

	}

	 //Fim: Método __toString():

}

//Fim: Class Dowload:

?>