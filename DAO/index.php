<?php

require_once ("config.php");


//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Carrega um usuário através do ID
//$root = new Usuario();
//$root->loadById(3);
//echo $root;



//carrega uma lista de usuarios
//$lista = Usuario::getList();

//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login
//$lista = Usuario::search("admin");
//echo json_encode($lista);


// Carrega o usuário através da autenticação
//$usuario = new Usuario();
//$usuario->login("admin", "12345");
//echo $usuario;


// Criando novo usuario
//$aluno = new Usuario("aluno2", "12345678");
//$aluno->insert();
//echo $aluno;


// alterar um usuário 
/*
$usuario = new Usuario();

$usuario->loadById(5);

$usuario->update("Professor", "!@#$%¨&*");

echo $usuario; 
*/


$usuario = new usuario();
$usuario->loadById(7);
$usuario->delete();


echo $usuario;


?>