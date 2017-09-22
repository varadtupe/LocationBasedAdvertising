<?php
$file = $_POST['file'];
echo $file;

$newfile = './LBA/Testcode/new.txt';

if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
?>