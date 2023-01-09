<?php

//Inicio: Class Gd:
class Gd{
	//Atributos:
	private $img;


	//Métodos:

	 //incio: GETS ands SETS:
	protected function getImg(){
		return $this->img;
	}

	protected function setImg($value){
		$this->img = $value;
	}

	 //fim: GETS ands SETS

	 //incio: Método Create_img:
	public function create_img(){

		//Função header:
		header("Content-Type: image/PNG");

		//Variável recurso:
		$this->setImg(imagecreate(500, 500));
		$img = $this->getImg();

		//Criando a paleta de cores:
		$black = imagecolorallocate($img,0,0,0);
		$blue = imagecolorallocate($img,0,0,255);

		//Escrevendo na imagem:
		imagestring($img, 5, 60, 120, "Curso PHP 7", $blue); 

		//Gerar uma imagem no formato PNG:
		imagepng($img);

		//Destruir a imagem:
		imagedestroy($img);

	}

	 //fim: Método Create_img:

	 //inicio: editando_img():
	public function editando_img($image){

		//Variável recurso:
		$this->setImg(imagecreatefromjpeg($image));
		$img = $this->getImg();

		//Paleta de cores:
		$titleColor = imagecolorallocate($img,0,0,0);
		$red = imagecolorallocate($img,255,0,0);

		//Escrever dentro da imagem:
		imagestring($img,5,450,150,"CERTIFICADO",$titleColor); //Titulo da imagem:
		imagestring($img,5,440,350,"Dilson dos Reis",$titleColor); //Nome do aluno que concluiu o curso:
		imagestring($img,3,440,370,utf8_decode("Concluído em ".date("d/m/Y")),$titleColor); //Data da conclusão:

		//Modificar o cabeçalho da imagem:
		header("Content-Type: image/jpeg");

		//Criar uma imagem jpeg:
		imagejpeg($img, "certificado".date("Y-m-d").".jpg");

		//Destruindo a imagem:
		imagedestroy($img);
		


	}
	 //fim: editando_img():

	 //inicio: editando_img_com_fontes():
	public function editando_img_com_fontes($image){

		//Variável recurso:
		$img = imagecreatefromjpeg($image);

		//Paleta de cores:
		$titleColor = imagecolorallocate($img,0,0,0);
		$blue = imagecolorallocate($img,0,0,255);

		//Escrevendo dentro da imagem:
		imagettftext($img,32,0,320,250,$titleColor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","CERTIFICADO"); 
		imagettftext($img,32,0,375,350,$blue,"fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf","Dilson Dos Reis");

		imagestring($img,5,440,370,utf8_decode("Concluído em ".date("d/m/Y")),$titleColor);



		//Modificar o cabeçalho da imagem:
		header("Content-Type: image/jpeg");

		//Criar uma imagem jpeg:
		imagejpeg($img);

		//Destruir a imagem:
		imagedestroy($img);

	}

	 //fim: inicio: editando_img_com_fontes():

	 //inicio: redimencionamento_img():
	public function redimencionamento_img($image){

		//Função header();
		//header("Content-Type: image/jpeg");
		header("Content-Type: image/PNG");

		//Varável arquivo:
		$file = $image;

		//Variável para as nova largura e altura:
		$new_width = 256;
		$new_heith = 256;

		//Pegando as informações da imagem:
		list($old_width, $old_heith) = getimagesize($file);

		/*Criando uma nova tela: */

		//Criando uma nova imagem com as novas dimenções:
		$new_image = imagecreatetruecolor($new_width, $new_heith);

		//Criando uma imagem com as antigas dimenções:
		//$old_image = imagecreatefromjpeg($file);
		$old_image = imagecreatefrompng($file);

		/*Realizano a mesclagem das imagens para o redimencionamento: */
		imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_heith, $old_width, $old_heith);

		//Gerar uma imagem jpeg/png:
		//imagejpeg($new_image);
		imagepng($new_image);

		//Destruir as imagens da mémoria:
		imagedestroy($new_image);
		imagedestroy($old_image);

	}
	 //fim: redimencionamento_img():

}

//Fim: Class Gd:

?>