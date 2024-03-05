<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stringRaw = filter_var($_POST['values-word'], FILTER_SANITIZE_STRING);
}

if (empty($stringRaw)) {
    echo "Empty array";
    return false;
}

$letter_counts = [];

// Remove non-alphabetic characters and convert the string to lowercase
$cleaned_string = preg_replace('/\s/', '', strtoupper($stringRaw));

// Iterate through each character in the cleaned string
for ($i = 0; $i < strlen($cleaned_string); $i++) {
    $char = $cleaned_string[$i];
    if (!isset($letter_counts[$char])) {
        $letter_counts[$char] = 1;
    } else {
        $letter_counts[$char]++;
    }
}
echo "The word: " . $stringRaw . ", has the following chars."; 
echo "<pre>";
print_r ($letter_counts);
echo "</pre>";
?>