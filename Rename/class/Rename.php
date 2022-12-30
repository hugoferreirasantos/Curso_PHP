<?php

//Inicio: Class Rename:
class Rename {
	//Atributos:
	private $idrename;
	private $desfile;
	private $origin;
	private $destino;
	private $dtrename;

	//Métodos:

	 //Inicio:GETS and SETS:
	public function getIdrename(){
		return $this->idrename;
	}

	public function setIdrename($value){
		$this->idrename = $value;
	}

	public function getDesfile(){
		return $this->desfile;
	}

	public function setDesfile($value){
		$this->desfile = $value;
	}

	public function getOrigin(){
		return $this->origin;
	}

	public function setOrigin($value){
		$this->origin = $value;
	}

	public function getDtrename(){
		return $this->dtrename;
	}

	public function setDtrename($value){
		$this->dtrename = $value;
	}

	public function getDestino(){
		return $this->destino;
	}

	public function setDestino($value){
		$this->destino = $value;
	}

	 //Fim: GETS and SETS:

	 //Inicio: Método insert:

		//Inicio: Método setData():
	private function setData($data){

		$this->setIdrename($data['idrename']);
		$this->setDesfile($data['desfile']);
		$this->setOrigin($data['origin']);
		$this->setDestino($data['destino']);
		$this->setDtrename(new DateTime($data['dtrename']));

	}

		//Fim: Método setData():

		//Incio: Método de criação de arquivos na pasta folder 1:
	private function file_folder1($dirname,$file_name){

		//Nome do arquivo:
		$filename = $file_name;

		if(!file_exists($dirname . DIRECTORY_SEPARATOR . $filename)){

			//Criando o arquivo:
			$file = fopen($dirname . DIRECTORY_SEPARATOR . $filename, "w+");

			//Escrevendo dentro do arquivo:
			fwrite($file,date("Y-m-d | H-i-s"));

			fclose($file);

		}

		return $filename;

	}

		//Fim: Método de criação de arquivos na pasta folder 1:

	 //Inicio: Método de retorna de todas as informações do banco:
	public function getList(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_rename");

	}

	 //Fim: Método de retorna de todas as informações do banco:

	public function insert_rename($dr1,$dr2,$fname){

		//Criando diretórios:
		$dir1 = $dr1;
		$dir2 = $dr2;

		if(!is_dir($dir1)) mkdir($dir1);
		if(!is_dir($dir2)) mkdir($dir2);

		//Nome do arquivo:
		$filename = $fname;


		$this->file_folder1($dir1,$filename);

		//Função para mover arquivos:
		rename($dir1 .DIRECTORY_SEPARATOR.$filename, $dir2 .DIRECTORY_SEPARATOR.$filename);

		//Atribuir valores:
		$this->setDesfile($filename);
		$this->setOrigin($dir1);
		$this->setDestino($dir2);

		$sql = new Sql();

		$results = $sql->select("CALL sp_rename_insert(:DF,:O,:DIS)",array(

			":DF"=>$this->getDesfile(),
			":O"=>$this->getOrigin(),
			":DIS"=>$this->getDestino()

		));

		if(count($results) > 0){

			$this->setData($results[0]);

		}


	}

	 //Fim: Método insert:


	 //Inicio: Método __toString();
	public function __toString(){

		return json_encode(array(

			"idrename"=>$this->getIdrename(),
			"desfile"=>$this->getDesfile(),
			"origin"=>$this->getOrigin(),
			"destino"=>$this->getDestino(),
			"dtrename"=>$this->getDtrename()->format("d/m/Y | H:i:s")

		));

	}

	 //Fim: Método __toString();
	


}

//Fim: Class Rename:

?>