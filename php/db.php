<?php

//
use limea\db;
$dbManager = db\DbManager::getInstance();


if(!empty($_SESSION["id"])) {
    $_SESSION["yandex_token"] = $dbManager->getYandexToken($_SESSION["id"]);
}

$db = mysql_connect("limea.mysql","limea_mysql","HLCr+Dk8");
mysql_select_db("limea_db",$db);
