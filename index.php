<?php
include_once('Incluides/Connect.php');
session_start();

// initialize cart as an empty array
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <style>
        @font-face {
            font-family: blacksword;
            src: url(./font/Blacksword.otf);
        }
    </style>
    <meta charset="UTF-8">
    <title>Exemple Barbershop</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>


<header style="display: flex; align-items: center; justify-content: space-between;">
    <div style="margin-left: 20px;">
        <img src="./img/logo.png" style="height: 120px; width: auto;">
    </div>
    <div style="color: #ffffff; font-size: 35px; font-weight: bold;margin-right: 40%;">
        Nome empresa
    </div>
    <div style="display: flex; align-items: center; margin-right: 20px;">
        <div style="color: #ffffff; font-size: 24px; font-weight: bold; margin-right: 10px;">
            Valor
        </div>
        <div style="color: #008d5b; font-size: 24px; font-weight: bold;">
            R$ 999
        </div>
    </div>
    <div style="display: flex; align-items: center; margin-right: 20px;">
        <div style="color: #ffffff; font-size: 24px; font-weight: bold; margin-right: 10px;">
            Contato
        </div>
        <a href="https://api.whatsapp.com/" style="margin-right: 5%;"><img src="./img/whatsapp.png"></a>
        <a href="https://www.instagram.com/" style="margin-right: 0%;"><img src="./img/insta.png"></a>
    </div>

</header>
<main>
    <div class="products" style="text-align: -webkit-center;">
        <ul>
            <?php
            $result = $mysqli->query("SELECT * FROM PRODUTOS");

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $product_id = $row["Id"]; // get the product ID
                    $product_name = $row["Servico"];
                    $product_price = $row["Valor"];

                    // generate the HTML code for the product image and link
                    echo "<li><a href='product.php?id=$product_id'>";
                    echo "<img src='./img/$product_name.png'/>";
                    echo "</a></li>";
                    
                }
            } else {
                echo "0 results";
            }

            $mysqli->close();
            ?>
        </ul>
    </div>
</main>
<div style="text-align: center; font-size: 41px;">
    <script></script>
    <a href="./page2.html" class="bn3637 bn36">Confirmar</a>
    <a href="login.html" class="bn3637 bn36">Login</a>
</div>



</body>

</html>