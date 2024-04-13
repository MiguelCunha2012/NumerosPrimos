<?php
    $num = $_GET ['num'];

    $i = 2;
    $primo = 1;
    while ($i < $num) {
            if ($num % $i ==0 ) {
                $primo = 0;
                break;
        }
            $i++;
    }
    if ($primo) {
        print " É primo";
    } else{
        print " Não é primo"
    }



?>