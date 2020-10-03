<html lang="ru">
<head>
    <title>Hello</title>
</head>
<body>
<ul>
    @foreach($names as $name)
        <li>
            {{$name}}
        </li>
    @endforeach
</ul>

</body>
</html>
