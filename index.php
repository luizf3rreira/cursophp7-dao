<?php 

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuario");

echo json_encode($usuarios);
*/

//Carrega 1 usuário
// $root = new Usuarios;

// $root->loadById(1);

// echo $root;

//Carrega uma lista de usuários
// $lista = Usuarios::getList();
// echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
// $search = Usuarios::search("jo");
// echo json_encode($search);

//Carrega um usuario usando o login e a senha
// $usuario = new Usuarios();
// $usuario->login("jose", "123456");
// echo json_encode($usuario);

//Criando um novo usuário
/*
$aluno = new Usuarios("aluno", "@alun0");

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");

$aluno->insert();

echo $aluno;
*/

//Alterar um usuario
/*
$usuario = new Usuarios();

$usuario->loadById(8);

$usuario->update("professor", "!@#$%");

echo $usuario;
*/

$usuario = new Usuarios();

$usuario->loadById(3);

$usuario->delete();

echo $usuario;



 ?>