#!/usr/local/bin/php
<?php
    session_start();

    // Redirect if not logged in
    if (!isset($_SESSION['valid']) || $_SESSION['valid'] !== "session_active") {
        header('Location: ../index.php');
        exit();
    }

    // Database connection
    $db = new mysqli("localhost", "your_user", "your_password", "your_database");

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Fetch records from table
    $sql = "SELECT * FROM movies"; // Change to your table name
    $result = $db->query($sql);
?>

<h1>Movie List (Assignment 6)</h1>

<!-- Link to ERD image -->
<p><a href="erd.png" target="_blank">View ERD Diagram</a></p>

<!-- Display the records -->
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Director</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Rating</th>
        <th>Actions</th>
    </tr>

<?php
    if ($result && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".htmlspecialchars($row['id'])."</td>";
            echo "<td>".htmlspecialchars($row['title'])."</td>";
            echo "<td>".htmlspecialchars($row['director'])."</td>";
            echo "<td>".htmlspecialchars($row['genre'])."</td>";
            echo "<td>".htmlspecialchars($row['year'])."</td>";
            echo "<td>".htmlspecialchars($row['rating'])."</td>";
            echo "<td>
                    <a href='update.php?id=".$row['id']."'>Update</a> | 
                    <a href='delete.php?id=".$row['id']."' onclick=\"return confirm('Are you sure?');\">Delete</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No records found</td></tr>";
    }

    $db->close();
?>

</table>

<br>
<a href="insert.php">Add New Movie</a>
<br><br>
<a href="../index.php">Log out</a>
