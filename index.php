<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Listar Herança Mysql</title>
    <nav>
        <a class="a-header" href="index.php">Listar</a><br>
        <a class="a-header" href="create.php">Cadastrar</a>
    </nav>
</head>
<body>
    <h1>Listar Usuários</h1>

    <?php
    
    if(isset($_SESSION["msg"])){
        echo $_SESSION["msg"];
        unset($_SESSION["msg"]);
    }

    require "./Conn.php";
    require "./User.php";

    $listUsers = new User();
    $result_users = $listUsers->list();

    foreach ($result_users as $row_user) {
       extract($row_user);

       echo "<div class='user-info'>";
       echo "<p>ID: $id </p>";
       echo "<p>Nome: $name </p>";
       echo "<p>E-mail: $email </p> <br>";
       echo "<a class='a-user-info' href='view.php?id=$id'>Visualizar</a> <br>";
       echo "<a class='a-user-info' href='edit.php?id=$id'>Editar</a> <br>";
       echo "<a class='a-user-info' href='delete.php?id=$id'>Apagar</a>";
       echo "<hr>";
       echo "</div>";
    }

    ?>
</body>
</html>