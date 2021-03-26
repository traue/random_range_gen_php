<?php
    /*
        Algorithm review by EdsonMSouz - https://github.com/EdsonMSouza
    */

    function randomGen($min, $max) {
        $to_shuffle = range($min, $max );
        $shuffled = array();
        while ( count( $to_shuffle ) > 0 ) {
            $i = rand(0, count( $to_shuffle ) -1);
            $shuffled[] = $to_shuffle[$i];
            array_splice($to_shuffle, $i, 1, null);
        }
        return $shuffled;
    }
    
    function orderHTML($min, $max) {
        $sorted = randomGen($min, $max);
        foreach ($sorted as $key => $value) {
            print("<li> " . $value  . "</li>");
        }
    }
?>