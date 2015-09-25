<?php

include "application.php";

$app = new Application();
$app->connect();
$app->addMoto($_POST['marka'],$_POST['model'],$_POST['pojemnosc'],$_POST['rok']);



include "template.php";
