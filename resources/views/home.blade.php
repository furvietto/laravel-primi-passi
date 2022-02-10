<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($links as $link)
            <li>
                <a href="/{{$link}}">{{$link}}</a>
            </li>
        @endforeach
    </ul>
    <ul>
        <li>
            <a href="{{route('contact')}}">contatti</a>
        </li>
        <li>
            <a href="{{route('infos')}}">info</a>
        </li>
        <li>
            <a href="{{route('pagine')}}">pagine</a>
        </li>
        
    </ul>
</body>
</html>