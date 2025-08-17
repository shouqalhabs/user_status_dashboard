<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    $result = $conn->query("SELECT status FROM users WHERE id=$id");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $newStatus = ($row['status'] == 1) ? 0 : 1;
        $conn->query("UPDATE users SET status=$newStatus WHERE id=$id");
        echo json_encode(['success' => true, 'newStatus' => $newStatus]);
        exit;
    }
}
echo json_encode(['success' => false]);
?>
