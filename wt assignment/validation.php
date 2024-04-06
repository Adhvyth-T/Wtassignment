<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $en_no = $_POST["enrollment"];
    $room = $_POST["room"];

    
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["enrollment_no"] = $en_no;
    $_SESSION["room_no"]=$room;

   
    $host = 'localhost';
    $dbname = 'phpmyadmin';
    $db_username = 'hphost';
    $db_password = 'password';

    $conn = new mysqli($host, $db_username, $db_password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 
 
    $sql = "INSERT INTO student_details (full_name,email,Enrollment_number,Room_number	) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssii", $name, $email, $en_no, $room);

    if ($stmt->execute()) {
        
        header("Location: details.php");
        exit();
    } else {
      
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
} else {
    echo "<h4>Error registering</h4>";
    exit();

}
?>