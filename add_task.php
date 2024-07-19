<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $_POST['task'];

    echo json_encode(['task' => $task]);
}
?>
