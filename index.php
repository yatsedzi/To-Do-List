<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial scale=1.0">

    <meta charset="UTF-8">
    <title>Things to do</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<h1>To Do List</h1>
<div class="container">
    <form action="/add.php" method="post">
        <input type="text" name="task" id="task" placeholder="Need to do..." class="form-control">
        <button type="submit" name="sendTask" class="btn btn-success">Send</button>
    </form>

    <?php
    require 'configDB.php';
    echo '<ul>';
    $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
    while($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Delete</button></a></li>';
    }
    echo '</ul>';
    ?>

</div>



</body>
</html>