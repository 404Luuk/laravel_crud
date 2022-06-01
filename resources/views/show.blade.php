<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show beer</title>
</head>
<body>

    <div>
        <strong>{{$bier->naam}}</strong> <br>
        <span>{{$bier->soort}}</span> <br>
        <span>alchoholpercentage: {{$bier->alcoholpercentage}}</span>
    </div>
</body>
</html>

<style>

    div {
        border: 1px solid black;
        padding: 20px;
        width: 200px;
        margin: 50px;
    }


</style>