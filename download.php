<?php
if (isset($_GET['bestand'])) {
    $bestandsnaam = $_GET['bestand'];
    $bestandslocatie = 'uploads/' . $bestandsnaam;

    if (file_exists($bestandslocatie)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $bestandsnaam . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($bestandslocatie));
        readfile($bestandslocatie);
        exit;
    } else {
        echo "Bestand niet gevonden.";
    }
}
?>
