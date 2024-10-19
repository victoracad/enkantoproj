<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main2.css">
    <link rel="stylesheet" href="./css/listDishes3.css">
    <link rel="stylesheet" href="./css/disheOpen2.css">
    <link rel="stylesheet" href="./css/resum.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=shopping_cart" />

    <title>Bem vindo ao Enkanto</title>
</head>

<body onload="showCarrinhoEvery(contagem, carrinho);">


    <section class="sec_main">
        <input type="checkbox" id="toggle-sidebar" hidden>
        <nav>
            <div class="logo">
                <a href="./index.php"><img id="img_logo" src="../admin/img/logoEx.png" alt="logoPicanhaBeto"></a>
            </div>

            <div>
                <h1 class="title_main">Seu Pedido</h1>
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

            <div class="div_resumo">
                <div class="div_input">
                    <div class="input">
                        <label for="">Nome</label>
                        <input type="text" placeholder="Digite seu nome">
                    </div>
                    <div class="input">
                        <label for="">№ da Comanda</label>
                        <input type="text" placeholder="Digite o número da comanda ">
                    </div>
                </div>
                <hr>

                <div class="resumo">

                    <h2>Resumo</h2>
                    <hr>
                    <div id="resultado1" class="carrinho">


                    </div>

                    <div class="tot_wish">
                        <span class="total">Total</span>
                        <span>R$ <b id="totPrice">10,99</b> </span>
                    </div>

                    <div class="btn_send_pedido">
                        <button class="btn_send">Fazer Pedido</button>
                    </div>
                </div>
                <div id="somar">

                </div>

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



    <script src="./js/script11.js"></script>
    <script src="./js/carrinho.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>