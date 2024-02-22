<?php
$decideHash = readline("choose between md5 and sha1 to hash your phrase:");

$phrase = readline("Enter your phrase:");
$lowerPhrase = strtolower(trim($phrase));

//compares 2 strings (case-insensitive): strcasecmp()
//change string to lowercase: strtolower()
//removes white space from right/left of string: trim()

if(strcasecmp($decideHash,"md5") == 0) {
echo ("Your hashed value is: " . md5($lowerPhrase));
}

else if(strcasecmp($decideHash,"sha1") ==0) {
echo ("Your hashed value is: " . sha1($lowerPhrase));
}

else {
    echo "You did not choose a valid hash option...";
}


?>