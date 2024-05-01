<?php

namespace App\create;

use App\Characters\WarriorWithShield;

require __DIR__.'/../vendor/autoload.php';

if(($_POST["physique"] != '') and ($_POST["agility"] != '') and ($_POST["spirit"] != '') and ($_POST["armor"] != '')
    and ($_POST["regenerationHealths"] != '') and ($_POST["protection"] != '') and ($_POST["blockChance"] != ''))
{
    $war = new WarriorWithShield($_POST["physique"], $_POST["agility"], $_POST["spirit"], $_POST["armor"], $_POST["regenerationHealths"], $_POST["protection"], ($_POST["blockChance"]));

    echo 'Воин со щитом' . '</br>';
    echo $war->getPhysique() . '</br>';
    echo $war->getAgility() . '</br>';
    echo $war->getSpirit() . '</br>';
    echo $war->getArmor() . '</br>';
    echo $war->getRegenerationXP() . '</br>';
    echo $war->getProtection() . '</br>';
    echo $war->getBlockChance(). '</br>'. '</br>';
    
}
