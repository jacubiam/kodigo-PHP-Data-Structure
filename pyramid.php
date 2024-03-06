<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $height = filter_var($_POST['height'], FILTER_SANITIZE_STRING);
}

if (empty($height)) {
    echo "Empty array";
    return false;
}

//Level 1 loop: The whole pyramid
for ($i = 0; $i < $height; $i++) {
    $space = $height - 1 - $i;
    $floor = [];
    //Level 2 loop: The floor loop
    for ($j = 0; $j < $height; $j++) {
        //Iterate and set a blank space until the condition isn't met
        if ($space > 0) {
            array_push($floor, " ");
            $space--;
        } else {
            //Level 3 loop: The stareisk vs the space
            //Once the left trail space is over, place a asterisk before a blank space
            for ($k = 0; $k < $i + 1; $k++) {
                array_push($floor, "*");
                if ($k < $i) {
                    array_push($floor, " ");
                }
            }
            break;
        }
    }
    //Print a floor
    $floor_line = implode($floor);
    echo "<pre style ='margin: 0 auto;'>";
    echo $floor_line . "<br/>";
    echo "</pre>";
}
