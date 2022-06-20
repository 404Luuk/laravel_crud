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
        <strong>{{$bier->naam}}</strong> <br> <br>
        <span>{{$bier->soort}}</span> <br>
        <span>alchoholpercentage: {{$bier->alcoholpercentage}}</span> <br> <br>
        <tr>
         <td><button><a href="/edit/{{$bier->biernummer}}">Aanpassen</a></button></td> <br> <br>
         <td>
            <form method="POST" action="{{route('item.remove',$bier->biernummer)}}">
               @method('DELETE') <!-- Define delete method for form -->
               @csrf
               <button onclick="return confirm('Do you really want to delete {{$bier->naam}}')">Delete</button>
            </form>
         </td> <br>
        </tr>
    </div>
</body>
</html>

<style>

    div {
        border: 1px solid black;
        padding: 20px;
        width: 200px;
        margin: 10px;
    }
    button a {
       text-decoration: none;
       color: black
    }

</style>