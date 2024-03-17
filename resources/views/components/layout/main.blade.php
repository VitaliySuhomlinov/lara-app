@props([
   'title',
   'h1' => ''   
])

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> {{ $title }} </title>
   @vite(['resources/css/app.scss'])
</head>
<body>
   <header>
      <div class="container border-bottom pb-2" style="background-color:blue">
         Header
      </div>
   </header>
   <div>
      <div class="container">
         <h1>{{ $h1 }}</h1>
         {{ $slot }}
      <div>
   </div>
   <footer>
      <div class="container border-top pt-2" style="background-color:coral">
         Footer
      </div>
   </footer>
   @vite(['resources/js/app.js'])
   <script type="module">
      $(document).ready(function(){
            console.log('jquery work');
      });
   </script>
</body>
</html>



