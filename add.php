<?php
$task = $_POST['task'];
if ($task == '') {
    echo 'Write things you want to do';
    exit();
}

$servername = "localhost";
$username = "root";
$password = "root";

    $pdo = new PDO("mysql:host=$servername;dbname=to-do", $username, $password);

    $sql = 'INSERT INTO tasks(task) VALUES(:task)';
    $query = $pdo->prepare($sql);
    $query->execute([':task' => $task]);

    header('Location: /');

