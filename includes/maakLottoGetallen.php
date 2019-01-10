<?php
//maakLottoGetallen.php

class MaakLottoGetallen{
    public function maakLotto(){

        $numbers = range(1, 42);
        shuffle($numbers);
        for ($i=0; $i<6;$i++){
            print $numbers[$i] . "<br />";
        }
}
}