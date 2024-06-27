<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($planets as $planet)
        <h1>{{$planet['name'] }}</h1>
        <p>{{ $planet['description'] }}</p>
    @endforeach
</body>
</html>