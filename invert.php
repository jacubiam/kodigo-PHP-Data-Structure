<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $arrayRaw = filter_var($_POST['values'], FILTER_SANITIZE_STRING);
}

if (empty($arrayRaw)) {
    echo "Empty array";
    return false;
}

$array_clean = str_word_count($arrayRaw, 1, '1234567890');
echo 'The normal arrray: ';
print_r($array_clean);
echo '<br/>The reverse array: ';
print_r(array_reverse($array_clean));
