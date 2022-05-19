<?php 

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //inicio: Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'         
                    )        
                    //termino: Gerente de Vendas
                )
            ), 
            //termino: Diretor Comercial 
            //incio: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //inicio: Gerente de Contas a Pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar', 
                        'subordinados' => array(
                            //incio: Supervisor de Pagamento
                            array(
                                'nome_cargo' => 'Supervisor de Pagamento'
                            ) 
                            //termino: Supervisor de Pagamento  
                        )   
                    ),
                    //termino: Gerente de Contas a Pagar
                    //inicio: Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //inicio: supervisor de sumprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos',
                                'subordinados' => array(
                                    //inicio: Compradores                                       
                                    array(
                                        'nome_cargo' => 'Compradores'
                                    )
                                    //termino: compradores
                                )
                            )
                            //termino: supervisor de suprimentos
                        )
                    ) 
                    //termino: Gerente de Compras                         
                )
            ), 
            //termino: Diretor Financeiro
            //inicio: Diretor Departamento Pessoal
            array(
                'nome_cargo' => 'Diretor Departamento Pessoal',
                'subordinados' => array(
                    //inicio: Gerente DP
                    array(
                        'nome_cargo' => 'Gerente DP'
                    )
                    //termino: Gerente DP    
                )

            )
            //Termino Diretor Departamento Pessoal  
        )
    )
);

function exibe($cargos) {

    $html = '<ul>';
    
    foreach ($cargos as $cargo) {
      
        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);

        }

        $html .= "</li>";

    }

    $html .= "</ul>";

    return $html;

}

echo exibe($hierarquia);

?>