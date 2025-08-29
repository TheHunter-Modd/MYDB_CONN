<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $userSearch = $_POST['usersearch'];

    try {
        //link to the database
        require_once 'includes/dbh.inc.php';

        //None name parameterized query
        // $query ="INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";

        //Named parameterized query
        $query ="SELECT * FROM comments WHERE username = :usersearch;";


        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':usersearch', $userSearch);

        
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //None name parameterized query execution
        //$stmt->execute([$username, $pwd, $email]);

        $pdo = null; // Close the connection
        $stmt = null; // Close the statement
       

    } catch (PDOException $e) {
       die("Query failed: " . $e->getMessage());
    }
} else {
    // If not a POST request, redirect back to the form
    header("Location: ../index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/css/bootstrap.min.css" integrity="sha512-fw7f+TcMjTb7bpbLJZlP8g2Y4XcCyFZW8uy8HsRZsH/SwbMw0plKHFHr99DN3l04VsYNwvzicUX/6qurvIxbxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section>
    <h3>Search results:</h3>

<?php
 if (empty($results)) {
        echo "<div>";
        echo "<p>There were no results!</p>";
        echo "</div>";
 } else {    foreach ($results as $row) {
    echo "<div>";
        echo "<h4>" . htmlspecialchars($row['username']) . "</h4>";
        echo "<p>" . htmlspecialchars($row['comment_text']) . "</p>";
        echo "<p>" . htmlspecialchars($row['created_at']) . "</p>";
    echo "</div>";
    }
 }
?>

</section>

</body>
</html>