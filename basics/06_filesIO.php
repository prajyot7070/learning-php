<?php

$file = "example.txt";
$data = "Learning PHP File I/O\nDate: " . date("d-m-Y") . "\n";

file_put_contents($file, $data);

if (file_exists($file)) {
    echo "File content using file_get_contents:\n";
    echo file_get_contents($file);
}

file_put_contents($file, "Adding more data via FILE_APPEND\n", FILE_APPEND);

echo "\nReading line by line using fopen/fgets:\n";
$handle = fopen($file, "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        echo $line;
    }
    fclose($handle);
}

// Date and Time operations
echo "Current Unix Timestamp: " . time() . "\n";
echo "Current Date (Y-m-d H:i:s): " . date("Y-m-d H:i:s") . "\n";
echo "Tomorrow's Date: " . date("Y-m-d", strtotime("+1 day")) . "\n";
echo "Next Sunday: " . date("Y-m-d", strtotime("next Sunday")) . "\n";
