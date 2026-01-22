<?php
$firstName = $_POST['firstName'];
// $lastName = $_POST['lastName'];
// $gender = $_POST['gender'];
$email = $_POST['email'];
// $password = $_POST['password'];
$password = $_POST['massage'];
// $number = $_POST['number'];


// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(firstName, email,massage) values(?,?, ?)");
    $stmt->bind_param("sssssi", $firstName,  $email, $massage);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
