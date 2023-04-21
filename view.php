<?php
 session_start();

 ob_start();

 $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Herança Mysql</title>
</head>
<body>

    <a href="index.php">Listar</a><br>
    <a href="create.php">Cadastrar</a><br>
    <h1>Detalhes do Usuário</h1>

    
    <?php
    
    if(isset($_SESSION["msg"])){
        echo $_SESSION["msg"];
        unset($_SESSION["msg"]);
    }

    if(!empty($id)){
        require "./Conn.php";
        require "./User.php";

        $viewUser = new User();
        $viewUser->id = $id;
        $valueUser = $viewUser->view();
        extract($valueUser);
        echo "ID do usuário: $id <br>";
        echo "Nome do usuário: $name <br>";
        echo "E-mail do usuário: $email <br>";
        echo "Usuário criado em: " . date("d/m/Y H:i:s",
        strtotime($createdAt))." <br>";

        echo "Última atualização do usuário: ";
        if(!empty($updatedAt)){
            echo date("d/m/Y H:i:s",
            strtotime($updatedAt));
        }else{
            echo "Sem atualização";
        }
        echo "<br>";
    

    }else{
        $_SESSION['msg'] =  "<p style='color: #f00;'>Usuário não encontrado!</p>";
        header("Location: index.php");
    }

    ?>

</body>
</html>