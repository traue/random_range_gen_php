<?php
    function randomGen($min, $max) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0);
    }
?>