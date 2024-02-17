<?php

$num1 = readline("Enter in the first Number:");
$num2 = readline("Enter in the second Number:");
$num3 = readline("Enter in the third Number:");
$num4 = readline("Enter in the fourth Number: ");

$ans1 = $num1+$num2/($num3*$num4)-$num2;
echo "Your answer is: " . $ans1;
echo "\n";
$ans2 = ($num1-$num2) + ($num3/$num4);
echo "Your other answer is: " . $ans2;
echo "\n";
$ans3 = $num1*$num2 + ($num3/$num4);
echo "Your last answer is: " . $ans3;
echo "\n";



?>
