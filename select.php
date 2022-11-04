<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family= Roboto & display=swap" rel="stylesheet">
    <title>gestao de clientes</title>
</head>
<body>
    <div class="login">
        <div class="usuario1">
            <?php
                error_reporting(0);
                session_start();
                $_SESSION['id_cad'] = 0;
                $_SESSION['nomecad'] = 0;
                $_SESSION['tel'] = 0;

                include "../config.php";
                $select = "SELECT * FROM clientes ORDER BY nomecad ASC";
                $result = $conn->query($select);
                if ($result->num_rows > 0) {
                    echo "<div class='container'>";
                    echo "<h3 class='titulo'>Clientes Cadastrados</h3>";
                    echo "<table border='1' align='center'>";
                        echo "<tr>";
                            echo "<td width='150px'>Cód Cliente:</td>";
                            echo "<td width='150px'>Name:</td>";
                            echo "<td width='150px'>Telefone:</td>";
                            echo "<td width='80px'></td>";
                            echo "<td width='80px'></td>";
                        echo "</tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                            echo "<td>". $row["id_cad"] ."</td>";
                            echo "<td>". $row["nomecad"] ."</td>";
                            echo "<td>". $row["tel"] ."</td>";
                            echo "<td><button onclick=\"location.href='../editar.php?nomecad=".$row["nomecad"]."'\">Editar</button></td>";
                            echo "<td><button>Excluir</button></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "</div>";
                } else {
                    echo "Nada Encontrado !";
                }
                $conn->close();
            ?>
        </div>
    </body>