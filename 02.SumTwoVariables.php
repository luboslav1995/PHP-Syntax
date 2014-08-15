<?php
$firstNumber = 1.567808;
$secondNumber = 0.356;
$sum = $firstNumber + $secondNumber;
$roundedNumber = number_format($sum, 2);
echo '$firstNumber + $secondNumber = ' . "$firstNumber + $secondNumber = $roundedNumber";
?>