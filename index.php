<?php
//frontController:
//маскировка URL через .htaccess
$id = "main";
if (isset($_GET["id"])){
    $id = $_GET["id"];
    
}

if ($id == "") {
    $id = "main";
}

include ("pages/$id.php"); //отдельно загруз контентную часть и отдел шаблон
include ("templates/base.php");
?> 