<?php

namespace App\From;

class FormWarriorShield
{
    public function getFormWarriorShield(): void
    {
        echo '
            <form action="create\CreateWar.php" method="post">
            
            <div>Воин
            </br></br>
            
            <label>Сила: </label>
            
            <select name="physique">
            
            <option type="int" value="30" >Сильный</option>
            
            <option type="int" value="20">Нормальный</option>
            
            </select>
            
            </br></br>
            
            <label>Ловкость: </label>
            
            <select name="agility">
            
            <option type="int" value="20">Средняя</option>
            
            <option type="int" value="15">Низкая</option>
            
            </select>
            
            </br></br>
            
            <label>Дух: </label>
            
            <select name="spirit">
            
            <option type="int" value="5">Минимальный</option>
            
            </select>
            
            </br></br>
            
            <label>Тип брони: </label>
            
            <select name="armor">
            
            <option type="string" value="HEAVY_ARMOR">Тяжолый</option>
            
            <option type="string" value="MEDIUM_ARMOR">Средний</option>
            
            </select>
            
            </br></br>
            
            <label>Востоналение здоровья: </label>
            
            <select name="regenerationHealths">
            
            <option type="int" value="50">Высокое</option>
            
            <option type="int" value="40">Среднее</option>
            
            </select>
            
            </br></br>
            
            <label>Защита: </label>
            
            <select name="protection">
            
            <option type="int" value="40">Высокая</option>
            
            <option type="int" value="30">Средняя</option>
            
            </select>
            
            </br></br>
            
            <label>Блокирование щитом: </label>
            
            <select name="blockChance">
            
            <option type="int" value="50">Высокое</option>
            
            <option type="int" value="40">Нормальное</option>
            
            </select>
            
            <p><input type="submit" value="Отправить" class="btncls"></p>
            
            </div>
            
            </form>';
    }
}