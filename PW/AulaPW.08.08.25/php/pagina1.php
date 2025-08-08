<?php
session_start();

//Criação de uma sessão
$_SESSION["nome"] = "Julia";

header("location:pagina2.php");