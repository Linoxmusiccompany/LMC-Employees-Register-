<?php

// Paramètres de la base de données

$servername = "127.0.0.1";

$username = "root";

$password = "";

$dbname = "employees_db";

// Créer une connexion

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion

if ($conn->connect_error) {

die("Échec de la connexion : " . $conn->connect_error);

}

// Vérifier si le formulaire a été soumis

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Récupérer et échapper les données

$full_name = mysqli_real_escape_string($conn, $_POST['Full_Name']);

$address = mysqli_real_escape_string($conn, $_POST['Adress']);

$phone_number = mysqli_real_escape_string($conn, $_POST['Phone_number']);

$email = mysqli_real_escape_string($conn, $_POST['Email']);

$date = mysqli_real_escape_string($conn, $_POST['Date']);

$school = mysqli_real_escape_string($conn, $_POST['School']);

$level = mysqli_real_escape_string($conn, $_POST['Level']);

// Préparer la requête SQL pour l'insertion

$sql = "INSERT INTO employees (Full_Name, Adress, phone_number, Email, Date, School, Level)
        VALUES ('$full_name', '$address', '$phone_number', '$email', '$date', '$school', '$level')";

if ($conn->query($sql) === TRUE) {

echo "Enregistrement de l'employé réussi!";

} else {

echo "Erreur lors de l'enregistrement : " . $conn->error;

}

}

// Fermer la connexion

$conn->close();

?>