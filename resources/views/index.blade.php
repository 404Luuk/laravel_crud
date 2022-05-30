<!DOCTYPE html>
<html lang="en">
   <style>
      table, th, td {
        border:1px solid rgba(0, 0, 0, 0.515);
      }
      </style>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Home</title>
</head>
<body>
   <table style="width: 30%">
      <tr>
         <th>Naam</th>
         <th>Soort</th>
         <th>Alchol %</th>
      </tr>
      @foreach ($bieren as $bier)

      <tr>
         <td>{{$bier->naam}}</td>
         <td>{{$bier->soort}}</td>
         <td>{{$bier->alcoholpercentage}}%</td>
      </tr>
    
      @endforeach
      
   </table>
</body>
</html>

