<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main2.css">
    <link rel="stylesheet" href="./css/listDishes3.css">
    <link rel="stylesheet" href="./css/disheOpen2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=shopping_cart" />

    <title>Bem vindo ao Enkanto</title>
</head>

<body>


    <section class="sec_main">
        <input type="checkbox" id="toggle-sidebar" hidden>
        <nav>
            <div class="logo">
                <a href="./index.php"><img id="img_logo" src="../admin/img/logoEx.png" alt="logoPicanhaBeto"></a>
            </div>

            <div>
                <h1 class="title_main">ENCANTO</h1>
            </div>

            <div class="Menu" id="open-sidebar">

                <label for="toggle-sidebar" class="buttons__burger">
                    <input type="checkbox" id="burger" hidden>
                    <span></span>
                    <span></span>
                    <span></span>
                </label>

            </div>

        </nav>

        <div class="main-container">

            <section class="list_pratofeito">
                <h1>Pratos Feitos</h1>

                <?php include './methods/list_dishes_client.php';
                list_dishes(1);
                ?>


            </section>
            <a href="./seupedido.php">
                <div class="div_cart">
                    <span id="qItens" class="quant_itens">0</span>
                    <span id="div_cart" class="material-symbols-outlined">
                        shopping_cart
                    </span>
                </div>
            </a>

            <div id="sidebar" class="sidebar">
                <h1 id="title_sidebar">Encanto</h1>
                <section class="show_info_comanda">
                    <div class="number_comanda">
                        <span>№ da Comanda - </span><span>//</span>
                    </div>
                    <div class="number_comanda">
                        <span>Tot Pedidos Feitos -</span><span> ///</span>
                    </div>
                    <div class="number_comanda">
                        <span>Total Comanda -</span><span> ///</span>
                    </div>
                    <div class="number_comanda">
                        <a id="link_detalhes" href=""><span>Acessar detalhes comanda -</span><span> ///</span></a>
                    </div>
                </section>
                <hr>
            </div>
            <div class="hide_sidebar">
            </div>


        </div>
    </section>

    <?php
            // Verifica se o parâmetro 'id' foi passado na URL
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                if($id != 0){
                    include '../admin/config/db.php';
                    $sql = "SELECT * FROM dishes1 WHERE id = $id";
                    $result = $db->query($sql);
                    $user_data = mysqli_fetch_assoc($result);
                    echo "
                    <div class=\"dishe_open\">
                        <div class=\"div_img_open\">
                            <img class=\"img_divopen\" src=\"./assets/imgpratofeitoexNEW.png\" alt=\"\">
                        </div>
                        <hr>
                        <span class=\"nameDishe\">{$user_data['nameDishe']}</span>
                        <span class=\"descDishe\">{$user_data['descDishe']} </span>
                        <span class=\"precoDesc\">R\${$user_data['priceDishe']}</span>
                        <div class=\"buttons\">
                            <div class=\"input-number\">
                                <button onclick=\"decrement()\">-</button>
                                <input type=\"number\" id=\"quantidade\" value=\"1\" min=\"1\">
                                <button onclick=\"increment()\">+</button>
                            </div>
                            <button onclick=\"addToCar()\" class=\"btn_add_car\">Adicionar ao carrinho</button>
                        </div>
                    </div>
                    <div class=\"div_close\" onclick=\"retiraId()\"></div>"
                ;
                }
                
            }
            ?>



    <script onclick="" src="./js/script11.js"></script>
    <script src="./js/carrinho.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>