<?php
if (empty($_POST['username']) || empty($_POST['password'])) {
    set_flash_message('Todos os campos são de preenchimento obrigatório!');
    url_redirect(['route' => 'login']);
}

$login = $_POST['username']; 
$password = $_POST['password'];

$user = db_query($pdo, 'SELECT * FROM bo_users WHERE login = ? and password = ?', [$login, $password]);


if (!empty($user[0])) {    

    $_SESSION['is_authenticated'] = true; 
    $_SESSION['user'] = $user; 

    set_flash_message('Utilizador autenticado com sucesso!'); 
    url_redirect(['route' => 'user_cadastrar']); 

} else {
    
    set_flash_message('Login Inválido!');
    url_redirect(['route' => 'login']);
}


