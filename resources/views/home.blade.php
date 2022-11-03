<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Laravel Movies</title>
</head>
<body>
    <div class="container">
        @foreach($movies as $movie)
        
            <div class="movie">
                <h3>
                    {{$movie['title']}}
                </h3>
                <p>
                    Nationality - {{$movie['nationality']}}
                </p>
                <p>
                    Data uscita - {{$movie['date']}}
                </p>
            </div>
        
        @endforeach
    </div>
</body>
</html>

