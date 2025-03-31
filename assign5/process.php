<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_SERVER['HTTP_REFERER'] != 'https://gabrielatabb.github.io/cis4930/assign5/index.php'){
        die("Unauthorized request.");
    }

    $name = $_POST['name'];
    $q1 = $_POST['q1'];
    $names = isset($_POST['names']) ? $_POST['names'] : [];
    $og_name = $_POST['og_name'];

    if ($q1 == "Paris") {
        echo "Correct! Le Sex in le City<br>";
    } else {
        echo "Wrong. The correct answer is Paris.<br>";
    }

    if (in_array("Elizabeth Taylor", $names) && in_array("Scout", $names) && in_array("Pete", $names) && in_array("Fatty", $names)) {
        echo "Correct! Elizabeth Taylor, Scout, Pate, and Fatty are some pet names on SATC!<br>"
    } else {
        echo "Incorrect. Make sure you select the correct names.<br>";
    }

    if ($og_name == "Jerry Jerrod") {
        echo "Correct! Jerry Jerrod Awful!<br>"
    } else {
        echo "Incorrect!<br>"
    }

    $file = fopen("data.csv", "a");

    if ($file) {
        $names_str = implode(", ", $names);

        fputcsv($file, [$name, $q1, $names_str, $og_name]);

        fclose($file);

        echo "Your responses have been saved. <br>";
    } else {
        echo "Error saving your responses.<br>";
    }
    
}
?>