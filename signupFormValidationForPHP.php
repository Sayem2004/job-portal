<?php
Define variables and set to empty values
$firstname = $lastname = $id = $email = $phone = $password = $dob = $gender = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $id = test_input($_POST["id"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $password = test_input($_POST["password"]);
    $dob = test_input($_POST["dob"]);
    $gender = isset($_POST["gender"]) ? test_input($_POST["gender"]) : "";

    // Validations
    if (empty($firstname)) {
        $errors[] = "First Name is required.";
    }

    if (empty($lastname)) {
        $errors[] = "Last Name is required.";
    }

    if (empty($id) || !is_numeric($id)) {
        $errors[] = "Valid ID is required.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid Email is required.";
    }

    if (empty($phone) ) {
        $errors[] = "Valid Phone Number is required (10-11 digits).";
    }

    if (empty($password) || strlen($password) < 6) {
        $errors[] = "Password is required and should be at least 6 characters.";
    }

    if (empty($dob)) {
        $errors[] = "Date of Birth is required.";
    }

    if (empty($gender)) {
        $errors[] = "Gender is required.";
    }

    
    if (empty($errors)) {
        echo "YESSS SUCESSFULL";
       
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
