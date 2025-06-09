<?php
$host = 'localhost';
$user = 'jbugduzc_admin';
$pass = 'Mg1KCd%K7t1#q@L%';
$dbname = 'jbugduzc_wordpress';
$sqlFile = 'jbugduzc_wordpress.sql'; // Path relative to this script

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$templine = '';
$lines = file($sqlFile);
foreach ($lines as $line) {
    if (substr($line, 0, 2) == '--' || $line == '') continue;
    $templine .= $line;
    if (substr(trim($line), -1, 1) == ';') {
        if (!$conn->query($templine)) {
            echo "Error: " . $conn->error . "\n";
        }
        $templine = '';
    }
}
echo "Database import completed successfully.";
$conn->close();
?>
