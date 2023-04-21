<?php
    session_start();

    ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>Cadastrar  | Herança Mysql</title>
</head>
    <nav>
        <a href="index.php">Listar</a><br>
        <a href="create.php">Cadastrar</a><br>
    </nav>
<body>
    <h1>Cadastrar Usuário</h1>
    
    <?php
    
    require "./Conn.php";
    require "./User.php";

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    if(!empty($formData['SendAddUser'])){
        $createUser = new User();
        $createUser->formData = $formData;
        $value = $createUser->create();

        if($value){
            $_SESSION['msg'] =  "<p style='color: 
            ##7FFF00;'>Usuário cadastrado com sucesso!</p>";
            header("Location: index.php");
        }else{
            echo "<p style='color: #f00;'>Erro ao cadastrar o usuário </p>"; 
        }
    }
    ?>

    <form class="form"name="CreateUser" method="POST" action="">
        <label>Nome: </label>
        <input type="text" name="name" 
        placeholder="Nome Completo" 
        required /> 
        <label>Email: </label>
        <input type="email" name="email" 
        placeholder="E-mail" 
        required /> 

        <input class="input" type="submit" value="Cadastrar" name="SendAddUser">
    </form>
</body>
</html>