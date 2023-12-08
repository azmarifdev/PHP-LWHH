<?php

declare(strict_types=1);

(int) $x = '9';
(int) $y = 10;
// echo var_dump($x + $y);

function calcAge(int $birthDay, string $name)
{
    echo "hey $name, I think you are " . 2023 - $birthDay . " old.";
}

calcAge(2001, 'azm');
echo '</br>';
calcAge(2001, 'arif');
