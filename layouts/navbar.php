
<?php
include './koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./assets/navbar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.tailwindcss.com">
  </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=person" />
    <style>
   /* Custom styles for dropdown */
   
   .all {
    background: linear-gradient(#141e30, #243b55);
	
   }
  </style>
   <script>
   function toggleDropdown() {
    document.getElementById('dropdown').classList.toggle('open');
   }
  </script>
</head>
<body>
<script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</script>

<nav class="p-4 all fixed-top">
    <div class="container mx-auto flex justify-between items-center">
     <div class="text-white text-lg font-bold">
      WEB 
     </div>
     <div class="flex items-center">
      <a class="text-white nb hover:text-primary px-3" href="#beranda">
       beranda
      </a>
      <a class="text-white nb hover:text-primary px-3" href="#loker">
      informasi loker
      </a>
      <a class="text-white nb hover:text-primary px-3" href="#kegiatan">
       kegiatan
      </a>
     <a class="text-white bg-warning rounded nb hover:text-primary px-3" href="#">
     login
     </a>
      
      
     </li>
     </div>
    </div>
   </nav>


</body>
</html>
