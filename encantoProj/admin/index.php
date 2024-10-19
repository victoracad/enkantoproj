<?php 
include './config/db.php';

session_start();

include './config/protect.php'
/*if (!isset($_SESSION['userName'])) {
    // Redirecione para a página de login se não estiver autenticado
    header("Location: login.php");
    exit;
}*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './partials/head.php'?>
    <link rel="stylesheet" href="./css/sidebar2.css">
    <title>Encanto - Manager</title>
</head>

<body>

    <?php include_once './partials/sidebar.php'?>

    <section class="home_contet">
        <h1>Bem vindo a DASHBOARD do Encanto</h1>
        <img src="./img/logoEx.png" alt="">
    </section>

    <section style="border: none;" class="main_methods">
        <section style="border: none;" class="meth" id="map_tables">
            <h2 class="title_met">Mapa das mesas</h2>
        </section>
        <section class="meth" id="last_orders">
            <h2 class="title_met">Ultimos pedidos</h2>
        </section>
        <section class="meth" id="last_coments">
            <h2 class="title_met">Ultimas requisições</h2>
        </section>
    </section>

</body>
<script src="./js/sidebar.js"></script>

</html>