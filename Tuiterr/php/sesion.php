<?php
session_start();
$_SESSION["usuario"] = "citlallip";
$_SESSION["nombre"] = "Abiagil";
$_SESSION["apellido"] = "Peredo";
echo $_SESSION["usuario"];
?>