<?php
echo"hello php\n";
if($_SERVER["REQUEST_METHOD"] =="POST") {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";
}

    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Password: " . htmlspecialchars($password);
?>