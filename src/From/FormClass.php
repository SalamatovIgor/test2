<?php

namespace App\From;

class FormClass
{
    public function getFormClass():void
    {
        echo '
            <form action="" method="post">
            
            <div>
            
            <label>Выбирете класс: </label>
            
            <select name="characters">
            
            <option value="warrior">Воин</option>
            
            <option value="mag">Маг</option>
            
            </select>
            
            <p><input type="submit" value="Выбрать" class="btncls"></p>
            
            </div>
            
            </form>';
    }
}