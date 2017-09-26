<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
@if(isset($tasks))
    <ul>
        @foreach($tasks as $task)
            <li>
                <a href="tasks/{{$task->id}}">
                    {{ $task->body }}
                </a>
            </li>
        @endforeach
    </ul>
@elseif(isset($task))
    <h1>{{$task->body}}</h1>
@endif
</body>
</html>