<?php
$file = fopen("data.csv", "r");

if ($file) {
    $user_data = [];
    while ($row = fgetcsv($file)) {
        $user_data[] = $row;
    }
    fclose($file);

    $total_users = count($user_data);

    $correct_q1 = 0;
    foreach ($user_data as $row) {
        if ($row[1] == "Paris") {
            $correct_q1++;
        }
    }

    $q1_percentage = ($correct_q1 / $total_users) * 100;

    // Display the summary in a table
    echo "<table border='1'>
            <tr>
                <th>User</th>
                <th>Question 1 (Correct/Total)</th>
            </tr>";

    foreach ($user_data as $index => $row) {
        echo "<tr>
                <td>{$row[0]}</td>
                <td>" . ($row[1] == "Paris" ? "Correct" : "Wrong") . "</td>
              </tr>";
    }

    echo "</table>";

    echo "<p>Question 1 Correctness: $q1_percentage% correct.</p>";
} else {
    echo "Error reading the CSV file.";
}
?>

