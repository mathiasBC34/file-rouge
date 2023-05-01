<?php

session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

require("./App/connection/AccesDonnee.php");

$uc = filter_input(INPUT_GET, 'uc');
$action = filter_input(INPUT_GET,'action');

if (!$uc) {
    $uc = 'accueil';
}

switch ($uc) {
    case 'accueil' :
        include './App/controleur/c_consultation.php';
        break;
    case 'connection':
        include './App/controleur/c_compte.php';
        break;
        default:
        break;
}

include("App/vue/template.php");