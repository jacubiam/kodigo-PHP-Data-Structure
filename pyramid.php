<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $height = filter_var($_POST['height'], FILTER_SANITIZE_STRING);
}

if (empty($height)) {
    echo "Empty array";
    return false;
}

for ($i = 0; $i < $height; $i++) {
    $space = $height - 1 - $i;
    $floor = [];
    for ($j = 0; $j < $height; $j++) {
        if ($space > 0) {
            array_push($floor, " ");
            $space--;
        } else {
            for ($k = 0; $k < $i + 1; $k++) {
                array_push($floor, "*");
                if ($k < $i) {
                    array_push($floor, " ");
                }
            }
            break;
        }
    }
    $floor_line = implode($floor);
    echo "<pre style ='margin: 0 auto;'>";
    echo $floor_line . "<br/>";
    echo "</pre>";
}
