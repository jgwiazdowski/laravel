<!DOCTYPE html>

<html>
<head>
    <title></title>
</head>

<body>

<?php
?>
@foreach($tasks as $key => $task)
    <li><a href="/tasks/{{$task->id}}">{{ $task->body }}</a></li>
@endforeach

</body>
</html>