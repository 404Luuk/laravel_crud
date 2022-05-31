<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Create</title>
</head>
<body>

   <h3>Add a beer to the table</h3>

   <form action="" method="POST">
      @csrf
      <label for="naam">Bier naam:</label>
      <input type="text" id="naam" name="naam"> <br>
      <label for="soort">Bier soort:</label>
      <input type="text" id="soort" name="soort"> <br>
      <label for="alcoholpercentage">Alcoholpercentage:</label>
      <input type="text" id="alcoholpercentage" name="alcoholpercentage">
      <br> <br>

      <button type="submit">Create..</button>
   </form>

</body>
</html>