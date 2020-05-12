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
$usuario = new Usuario();
$usuario->login("root", "xaxa");

echo $usuario;




//Select simples
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

 ?>