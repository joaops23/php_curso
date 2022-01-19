<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //inicio: diretor comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //inicio: Gerente de Vendas
                    array(
                        'nome_cargo'=>'Gerente de Vendas',
                    )
                    //Término: diretor comercial
                )
            ),
            //término: diretor comercial
            //inicio: diretor Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //inicio: Gerente de Contas a Pagar
                    array(
                        'nome_cargo'=>'Gerente de Contas a Pagar',
                        'subordinados'=>array(
                            //inicio: Supervisor de Pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos',
                            )
                            //inicio: diretor comercial
                        )
                    ),
                    //Término: Gerente de contas a pagar
                    //inicio: Gerente de Compras
                    array(
                        'nome_cargo'=>'Gerente de compras',
                        'subordinados'=>array(
                            //inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo'=>'Supervisor de Suprimentos',
                                'subordinados'=>array(
                                    //início: Vendedor
                                    array(
                                        'nome_cargo'=> 'Vendedor'
                                    )
                                    //fim: Vendedor
                                )
                            )
                            //término: Supervisor de Suprimentos
                        )

                    )
                    //Término: Gerente de compras
                ),
            )
            //Término: diretor Financeiro
        )
    )
);

function exibe($cargos){
    
    $html = "<ul>";

    foreach ($cargos as $cargo){
        $html .="<li>";
        $html .= $cargo['nome_cargo'];

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            $html .= exibe($cargo['subordinados']);
        }
        $html .= "</li>";
    }

    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia)

?>