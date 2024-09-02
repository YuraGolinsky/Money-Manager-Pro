<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['registerUsername'];
    $password = $_POST['registerPassword'];

    $file = 'LoginRegistration.json';

    if (!file_exists($file)) {
        // If file does not exist, create it with an empty array
        $json_array = [];
    } else {
        $data = file_get_contents($file);
        $json_array = json_decode($data, true);
    }

    // Check if username already exists
    if (isset($json_array[$username])) {
        echo json_encode(['status' => 'error', 'message' => 'Username already exists.']);
    } else {
        $json_array[$username] = $password;
        file_put_contents($file, json_encode($json_array, JSON_PRETTY_PRINT));
        echo json_encode(['status' => 'success', 'redirect' => '/']);
    }
}
?>
