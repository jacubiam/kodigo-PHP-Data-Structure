<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $arrayRaw = filter_var($_POST['values-sum'],FILTER_SANITIZE_STRING);  
    }
    
    if (empty($arrayRaw)) {
        echo "Empty array";
        return false;
    }
    
    //Convert the given string into a normal array
    $array_clean = str_word_count($arrayRaw,1,'1234567890');

    $sum = 0;
    //Check if the n number is a even number
    foreach ($array_clean as $number) {
        if ($number % 2 == 0) {
            $sum += (int) $number;
        }
    }
    echo 'The sum of even numbers is: ' . $sum;
?>