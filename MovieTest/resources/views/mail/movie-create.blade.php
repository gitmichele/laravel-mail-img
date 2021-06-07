<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ntent="ie=edge">
    <title>Document</title>
</head>
<body>

    A new movie has been added to the list.
    <br>
    Title: {{ $movie -> title }}
    <br>
    Rating: {{ $movie -> rating }}
    <br> 
    Actors:
    <ul>
        @foreach ($movie -> actors as $actor)
            <li>
                {{ $actor -> firstname }}
                {{ $actor -> lastname }}
            </li>
        @endforeach
    </ul>
    
</body>
</html>