<?php 
include './config/db.php';

session_start();

include './config/protect.php'

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './partials/head.php'?>
    <title>Gerentes</title>
</head>

<body>
    <?php include_once './partials/sidebar.php'?>
    <h1 id="h1Ma">Gerentes do Encanto</h1>
    <section id="secViewMagers">
        <div id="div_buttonAdd">
            <div>
                <button id="btn_add">
                    Todas os clientes
                </button>
            </div>
            <div>
                <button id="btn_add">
                    Clientes c/ comanda
                </button>
            </div>
            <a href="registerClients.php">
                <button id="btn_add">
                    Adicionar Cliente
                </button>
            </a>

        </div>




    </section>

    <script src="./js/sidebar.js"></script>
</body>


</html>