<?php
$usuarios = [
    [
      "usuario" => "User1",
      "senha" => 1234,
      "perfil" => "publico"
    ],
    [
      "usuario" => "User2",
      "senha" => 12345,
      "perfil" => "privado"  
    ],
    [
      "usuario" => "User3",
      "senha" => 123456,
      "perfil" => "publico"
    ]
];

foreach($usuarios as $dados){
    echo 'Nome: '.$dados["usuario"].'<br>';
    echo 'Tipo de perfil: '.$dados["perfil"].'<br>';
    echo '<br>';
}
?>