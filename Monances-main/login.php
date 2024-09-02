<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    $file = 'LoginRegistration.json';

    if (!file_exists($file)) {
        echo json_encode(['status' => 'error', 'message' => 'File not found']);
        exit();
    }

    $data = file_get_contents($file);
    $json_array = json_decode($data, true);

    if (isset($json_array[$username]) && $json_array[$username] === $password) {
        // Correct credentials, redirect to dashboard
        echo json_encode(['status' => 'success', 'redirect' => '/Monances-main/pages/Dashboard/dashboard.php']);
    } else {
        // Incorrect credentials
        echo json_encode(['status' => 'error', 'message' => 'Invalid username or password']);
    }
}
?>
