<?php 
if (isset ($post['submit'])) {
    $task = $post['task'];
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="heading">
        <h2>todo list</h2>
    </div>
    <form action="index.php">
        <input type="text" name="task" class="task_input">
        <button type="submit" class="btn" name="submit">add task</button>
    
    </form>


</body>
</html>