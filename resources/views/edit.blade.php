<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <strong>Edit this beer</strong>

    <form method="POST">
        @csrf
        @method('PUT')
        <label for="naam">Biernaam: </label> <br>
        <input type="text" id="naam" name="naam" value="{{$bier->naam}}" required> <br> <br>
        <label for="soort">Biersoort: </label> <br>
        <input type="text" id="soort" name="soort" value="{{$bier->soort}}" required> <br> <br>
        <label for="alcohol">Alcoholpercentage: </label> <br>
        <input type="text" id="alcoholpercentage" name="alcoholpercentage" value="{{$bier->alcoholpercentage}}" required> <br> <br>
        <button type="submit">edit</button>
    </form>
</body>
</html>