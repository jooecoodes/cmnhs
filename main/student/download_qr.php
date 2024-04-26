<?php
print_r($_POST);

if (isset($_GET['studfullname'])) {
    $studFullName = $_GET['studfullname'];
    

    $filePath = "../../assets/qr/$studFullName" . ".png";
    if (file_exists($filePath)) {

        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Content-Length: ' . filesize($filePath));

        // Clear output buffer to ensure no unintended output is sent
        ob_clean();

        // Flush the output buffer
        flush();
        // Read the file and output its contents
        readfile($filePath);
        exit;
    } else {
        // Handle the case when the file doesn't exist
        echo 'QR not found.';
    }
} else {
    echo "Failed to download qr";
}
