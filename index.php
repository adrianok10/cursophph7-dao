<?php 

require_once("config.php");

//carrega apenas um usuario para funcionar tem que tirar o static na linha doo getlist.
//$root = new Usuario();
//$root->loadbyId(5);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "xaxa");
//echo $usuario;


//Criando um novo usuário.
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//aletera uma usuario
//$usuario = new Usuario();
//$usuario->loadById(11);
//$usuario->update("professor", "QAZXSW");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;




//Select simples
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

 ?>