
<?php

function factorial($number) {
    if ($number < 0) {
        throw new InvalidArgumentException("Число не може бути від'ємним!");
    }

    if ($number === 0) {
        return 1;
    }

    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }

    return $result;
}

echo factorial(5);
