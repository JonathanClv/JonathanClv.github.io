<?php
$uploadDir = 'uploads/';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bestandsnaam = $_FILES['bestand']['name'];
    $bestandslocatie = $uploadDir . $bestandsnaam;

    if (move_uploaded_file($_FILES['bestand']['tmp_name'], $bestandslocatie)) {
        header("Location: index.html");
        exit();
    } else {
        echo "Fout bij het uploaden van het bestand.";
    }
}
?>
