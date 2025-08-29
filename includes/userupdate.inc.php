<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try {
        //link to the database
        require_once 'dbh.inc.php';

        //None name parameterized query
        // $query ="INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";

        //Named parameterized query
        $query ="UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 4;";


        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->bindParam(':email', $email);
        
        $stmt->execute();

        //None name parameterized query execution
        //$stmt->execute([$username, $pwd, $email]);

        $pdo = null; // Close the connection
        $stmt = null; // Close the statement
        header("Location: ../index.php?signup=success");

        die("User registered successfully!");

    } catch (PDOException $e) {
       die("Query failed: " . $e->getMessage());
    }
} else {
    // If not a POST request, redirect back to the form
    header("Location: ../index.php");
    exit();
}