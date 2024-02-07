<?php
$files = glob('uploads/*');
foreach($files as $file) {
    echo "<li><a href='$file' download>" . basename($file) . "</a></li>";
}
?>
