<?php
function createCon()
{
    $conn = mysqli_connect("localhost", "root", "", "jobportal");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function insertData($conn, $fname, $lname, $id, $email, $phone, $pass)
{
    $sql = "INSERT INTO registration (fname, lname, id, email, phone, password) 
            VALUES ('$fname', '$lname', '$id', '$email', '$phone', '$pass')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Data Inserted successfully. For login click <a href='../View/Login.php'>here</a>.";
    } else {
        die("Error: " . mysqli_error($conn));
    }
}

function closeCon($conn)
{
    mysqli_close($conn);
}

function checkLogin($conn, $id, $pass) 
{
    $sql = "SELECT * FROM registration WHERE id='$id' AND password='$pass'";
    return mysqli_query($conn, $sql);
}

?>
