<?php

namespace App\From;

class FromMystic
{
    public function getFromMystic():void
    {
        echo '
    <form action="create\CreateMystic.php" method="post">
    
    <div>Маг
    </br></br>
    
    <label>Сила: </label>
    
    <select name="physique">
    
    <option type="int" value="10">Низкая</option>
    
    <option type="int" value="5">Минимальная</option>
    
    </select>
    
    </br></br>
    
    <label>Ловкость: </label>
    
    <select name="agility">
    
    <option type="int" value="10">Низкая</option>
    
    <option type="int" value="5">Минимальная</option>
    
    </select>
    
    </br></br>
    
    <label>Дух: </label>
    
    <select name="spirit">
    
    <option type="int" value="30">Высокий</option>
    
    <option type="int" value="20">Средний</option>
    
    </select>
    
    </br></br>
    
    <label>Тип мантии: </label>
    
    <select name="typeOfMantle">
    
    <option type="string" value="BLUE_ROBE">Синяя</option>
    
    <option type="string" value="RED_ROBE">Красная</option>
    
    </select>
    
    </br></br>
    
    <label>Востоналение маны: </label>
    
    <select name="regenerationMana">
    
    <option type="int" value="50">Высокое</option>
    
    <option type="int" value="40">Среднее</option>
    
    </select>
    
    </br></br>
    
    <label>Божество: </label>
    
    <select name="typeOfDeity">
    
    <option type="string" value="LORD_OF_DARKNESS">Lord of Darkness</option>
    
    <option type="string" value="LORD_OF_DEATH">Lord of Death</option>
    
    </select>
    
    </br></br>
    
    <label>Верность: </label>
    
    <select name="loyaltyToGod">
    
    <option type="int" value="50">Высокая</option>
    
    <option type="int" value="40">Нормальная</option>
    
    </select>
    
    <p><input type="submit" value="Отправить" class="btncls"></p>
    
    </div>
    
    </form>';
    }
}