<?php

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//Inicio :Diretor
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					array(
						'nome_cargo'=>'Gerente de Venda'
					)
				)
			),
			
			// Inicio : Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(

					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(

							array(
								'nome_cargo'=>'Supervisor de Pagamento'
							)
						)
					),

					array(

						'nome_cargo'=>'Gerente de Compra',
						'subordinados'=>array(

							array(
								'nome_cargo'=>'Supervisor de Suprimento'
							)
						)
					)
				)
			)
		)
	)

);


function exibe($cargos){


	$html = '<ul>';

	foreach ($cargos as $cargo) {
		

		$html .= "<li>";

		$html .= $cargo['nome_cargo'];
		
		if(isset($cargo['subordinados'])&& count($cargo['subordinados'])>0){

			$html .= exibe($cargo['subordinados']);
		}

		$html .= "</li>";



	}

	$html .= '</ul>';

	return $html;
}


echo exibe($hierarquia);

?>