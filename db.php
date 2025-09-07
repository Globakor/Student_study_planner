<?php
$servername = "localhost"; 
$username = "root";       
$password = "";
$dbname = "student_planner";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_name = $_POST['student_name'];
    $subject = $_POST['subject'];
    $task = $_POST['task'];
    $due_date = $_POST['due_date'];

    $sql = "INSERT INTO planner (student_name, subject, task, due_date) 
            VALUES ('$student_name', '$subject', '$task', '$due_date')";

    if ($conn->query($sql) === TRUE) {
        echo "New task added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
