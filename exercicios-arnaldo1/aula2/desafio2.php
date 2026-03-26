<?php
$contas = [
    [
        "descricao" => "conta de luz",
        "valor" => 320,
        "tipo" => "pagar"
    ],
    [
        "descricao" => "salario",
        "valor" => 2300,
        "tipo" => "receber"
    ],
    [
        "descricao" => "conta de agua",
        "valor" => 100,
        "tipo" => "pagar"
    ],
    [
        "descricao" => "pé de meia",
        "valor" => 200,
        "tipo" => "receber"
    ]
];

    foreach($contas as $dados){
        if($dados["tipo"] == "receber"){
        echo 'Descricao: '.$dados["descricao"].'<br>';
        echo 'Tipo de conta: '.$dados["tipo"].'<br>';
        echo '<br>';
        }
    }
?>