<?php

use app\src\Characters\Mystic;
use app\src\Characters\WarriorWithShield;
use app\src\Enum\TypeEnum;

require __DIR__.'/vendor/autoload.php';

$service = new WarriorWithShield(30, 20, 10, TypeEnum::HEAVY_ARMOR, 50, 30, 50);

$mag = new Mystic(5, 5, 40, 50, TypeEnum::RED_ROBE, TypeEnum::LORD_OF_DARKNESS, 30);

echo 'Воин со щитом'.'</br>';
echo $service->getPhysique() . '</br>';
echo $service->getAgility() . '</br>';
echo $service->getSpirit() . '</br>';
echo $service->getArmor() . '</br>';
echo $service->getRegenerationXP() . '</br>';
echo $service->getProtection() . '</br>';
echo $service->getBlockChance(). '</br>'. '</br>';
echo 'Мистик' . '</br>';
echo $mag->getPhysique() . '</br>';
echo $mag->getAgility() . '</br>';
echo $mag->getSpirit() . '</br>';
echo $mag->getRegenerationMana() . '</br>';
echo $mag->getTypeOfMantle() . '</br>';
echo $mag->getTypeOfDeity() . '</br>';
echo $mag->getLoyaltyToGod() . '</br>';
