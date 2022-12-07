<?php
//Funções Recursivas:

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Inicio: Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					//Termino: Gerente de Vendas
				)
			),
			//Termino: Diretor Comercial
			//Inicio: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//Inicio: Gerente de Contas a pagar:
					array(
						'nome_cargo'=>'Gerente de contas a pagar',
						'subordinados'=>array(
							//Inicio: Supervisor de Pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
							//Termino: Supervisor de Pagamentos
						)
					),
					//Termino: Gerente de Contas a pagar:
					//Inicio: Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//Inicio: Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos',
								'subordinados'=>array(
									//Inicio: Fucionario:
									array(
										'nome_cargo'=>'Funcionário'
									)
									//Termino: Funcionario:
								)
							)
							//Termino: Supervisor de Suprimentos
						)
					)
					//Termino: Gerente de Compras
				)
			)
			//Termino: Diretor Financeiro
		)
	),
);

//Função Recursiva:
function exibe($cargos){

	$html = '<ul>';

	foreach($cargos as $cargo){

		$html.= "<li>";
		$html.= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){ // count() conta quantos elementos tem numa chave de array:
			$html .= exibe($cargo['subordinados']);
		}

		$html.= "</li>";
	}

	$html .= '</ul';

	return $html;

}

echo exibe($hierarquia);

?>