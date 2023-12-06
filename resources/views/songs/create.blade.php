<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Maak hier een nummer aan</h1>

    <form action="{{route('song.store')}}" method="POST">
    @csrf
    <label>Vul een titel in</label>
    <input type="text" name="name">
    <br>
    <label>Vul een artiest in</label>
    <input type="text" name="artist">
    <br>
    <label>Vul een duration in </label>
    <input type="number" name="duration">
    <br>
    <label>Vul een releasedate in</label>
    <input type="date" name="releasedate">
    <br>
    <input type="submit" value="send">
    </form>
    
    
</body>
</html>