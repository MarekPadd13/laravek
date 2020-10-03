<html lang="ru">
<head>
    <title>Tasks</title>
</head>
<body>
    <ul>
        @foreach($tasks as $task)
            <li>
                <a href="tasks/{{$task->id}}"> {{$task->name}} </a> <br />
                {{$task->text}}
            </li>
        @endforeach
    </ul>
</body>
</html>
