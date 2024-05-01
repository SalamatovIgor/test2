<?php

use App\From\FormClass;
use App\From\FormWarriorShield;
use App\From\FromMystic;

require __DIR__.'/vendor/autoload.php';

$sew = new FormClass();
$sew->getFormClass();

if(!isset($_POST["characters"])){$_POST["characters"] = null;}

if( $_POST["characters"] == "warrior" )
{
    $sew = new FormWarriorShield();
    $sew->getFormWarriorShield();

} elseif ( $_POST["characters"] == "mag" ){
    $sew = new FromMystic();
    $sew->getFromMystic();
    }


