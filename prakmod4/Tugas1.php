<?php
function generator($n)
{
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "Helloworld";
        }
        elseif ($i % 3 == 0) {
            echo "Hello";
        }
        elseif ($i % 5 == 0) {
            echo "World";
        }
        else {
            echo $i;
        }

        echo PHP_EOL;
    }
}

generator(15);