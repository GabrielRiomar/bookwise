<?php

$db = new PDO('sqlite:database.sqlite');
$query = $db->query("select * from livros");
$livros = $query->fetchAll();


// [
//   ['id' => 1, 'titulo' => 'O Senhor dos Anéis', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'O Senhor dos Anéis (The Lord of the Rings, no original) é um livro de alta fantasia, escrito pelo escritor britânico J. R. R. Tolkien. Escrita entre 1937 e 1949, com muitas partes criadas durante a Segunda Guerra Mundial,[1] a saga é uma continuação de O Hobbit (1937).'],
//   ['id' => 2, 'titulo' => 'Vinte Mil Léguas Submarinas', 'autor' => 'Júlio Verne', 'descricao' => 'Vinte Mil Léguas Submarinas é uma das obras literárias mais famosas do escritor Júlio Verne. '],
//   ['id' => 3, 'titulo' => 'Harry Potter e a Pedra Filosofal', 'autor' => 'J. K. Rowling', 'descricao' => 'Harry Potter and the Philosopher Stone o primeiro dos sete livros da série de fantasia Harry Potter, escrita por J. K. Rowling. O livro conta a história de Harry Potter, um órfão criado pelos tios que descobre, em seu décimo primeiro aniversário, que é um bruxo'],
//   ['id' => 4, 'titulo' => '1984', 'autor' => 'George Orwell', 'descricao' => 'Mil novecentos e oitenta e quatro é um romance distópico do escritor inglês George Orwell. Foi publicado em 8 de junho de 1949 pela Secker & Warburg como o nono e último livro de Orwell concluído em vida.'],
//   ['id' => 5, 'titulo' => 'Moby Dick', 'autor' => 'Herman Melville', 'descricao' => 'Moby-Dick; or, The Whale (em português: Moby Dick, ou, A baleia) é um romance publicado em 1851 pelo escritor estadunidense Herman Melville. No livro, Ishmael narra a busca obsessiva de Ahab, capitão do navio baleeiro Pequod, por Moby Dick, o gigante cachalote branco que, na viagem anterior do navio, arrancara parte da perna do capitão.'],
//   ['id' => 6, 'titulo' => 'x', 'autor' => 'y', 'descricao' => 'z'],
//   ['id' => 7, 'titulo' => 'x', 'autor' => 'y', 'descricao' => 'z']
// ];
