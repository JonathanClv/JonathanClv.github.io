<?php
if(isset($_POST['submit'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "Het bestand " . htmlspecialchars(basename($_FILES["file"]["name"])) . " is geüpload.";
    } else {
        echo "Sorry, er was een probleem bij het uploaden van het bestand.";
    }
}
?>
