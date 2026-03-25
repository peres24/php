<?php
$produtos = [
    [
      "nome" => "Manga",
      "preco" => 6  
    ],
    [
      "nome" => "Banana",
      "preco" => 3  
    ],
    [
      "nome" => "Morango",
      "preco" => 8
    ]
];
    foreach($produtos as $dados){
        echo "Nome: ".$dados["nome"]."<br>";
        echo "Preço: ".$dados["preco"]."<br>";
        echo "<br>";
    }
?>