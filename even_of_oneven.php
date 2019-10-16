<?php
    echo "Gooi me een nummer" . PHP_EOL;
    $number = readline();
if (($number % 2) == 1) {
    echo "$number is odd." ;
}
else {
    echo "$number is even." ;
}
