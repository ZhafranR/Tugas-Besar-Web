<?php
$conn = mysqli_connect("localhost", "root", "", "db-zenius");


function bayar($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form sign up
    $name = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);

    //query insert data
    $query = "INSERT INTO user VALUES
                ('', '$name', '$email', '$password')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>