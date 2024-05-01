<?php

namespace App\create;

use App\Characters\Mystic;

require __DIR__.'/../vendor/autoload.php';

if(($_POST["physique"] != '') and ($_POST["agility"] != '') and ($_POST["spirit"] != '') and
    ($_POST["typeOfMantle"] != '') and ($_POST["regenerationMana"] != '') and ($_POST["typeOfDeity"] != '') and ($_POST["loyaltyToGod"] != ''))
{
    $mag = new Mystic($_POST["physique"], $_POST["agility"], $_POST["spirit"], $_POST["regenerationMana"], $_POST["typeOfMantle"], $_POST["typeOfDeity"], ($_POST["loyaltyToGod"]));

    echo 'Маг' . '</br>';
    echo $mag->getPhysique() . '</br>';
    echo $mag->getAgility() . '</br>';
    echo $mag->getSpirit() . '</br>';
    echo $mag->getRegenerationMana() . '</br>';
    echo $mag->getTypeOfMantle() . '</br>';
    echo $mag->getTypeOfDeity() . '</br>';
    echo $mag->getLoyaltyToGod(). '</br>'. '</br>';

}