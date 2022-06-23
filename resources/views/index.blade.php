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

   <nav>
      <div class="nav_buttons">
         <a href="/create" class="btn">Add beer</a>
      </div>
         
            
         
    
      @if(\Session::has('message'))
      <div class="prompt btn">
         <strong>{{\Session::get('message')}}</strong>
      </div>
      @endif
     
   </nav>

   <table style="width: 50%">
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
         <td><a href="/show/{{$bier->biernummer}}">Toon bier</a></td>
         <td><a href="/edit/{{$bier->biernummer}}">Aanpassen</a></td>
         <td>
            <form method="POST" action="{{route('item.remove',$bier->biernummer)}}">
               @method('DELETE') 
               @csrf
               <button onclick="return confirm('Do you really want to delete {{$bier->naam}}')">Delete</button>
            </form>
         </td>
      </tr>
    
      @endforeach
      
   </table>
</body>
</html>


<style>

   nav {
      height: 50px;
   }

   .nav_buttons {
      margin: 40px 8px;
   }

   nav .btn {
  
      padding: 10px 15px;
      border: 1px solid black;
      
   }

   .prompt {
      position: absolute;
      right: 40px;
      top: 30px
   }


</style>

