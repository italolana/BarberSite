<?php
$bd = 'barberbd';
$host = 'localhost';
$login = 'root';
$senha = '';


$mysqli = new mysqli($host, $login, $senha, $bd);


if ($mysqli->errno) {
    echo "Error: $mysqli->errno";
    die();

}

?>