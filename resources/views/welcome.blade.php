<!DOCTYPE html>

<html>
<head>
    <title></title>
</head>

<body>

<?php
//var_dump($tasks);
?>
@foreach($tasks as $key => $task)
    <li>{{ $task->body }}</li>
@endforeach

</body>
</html>