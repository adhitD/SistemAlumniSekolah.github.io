<?php
include '../koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/navbar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.tailwindcss.com">
  </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=person" />
    <style>
   /* Custom styles for dropdown */
   .dropdown-menu {
    display: none;
   }
   .dropdown:focus-within .dropdown-menu {
    display: block;
   }
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

<nav class="p-4 all">
    <div class="container mx-auto flex justify-between items-center">
     <div class="text-white text-lg font-bold">
      WEB 
     </div>
     <div class="flex items-center">
      <a class="text-white nb hover:text-white px-3" href="../web/beranda.php">
       Home
      </a>
      <a class="text-white nb hover:text-white px-3" href="../web/tentang.php">
       About
      </a>
      <a class="text-white nb hover:text-white px-3" href="../web/tabel_gang.php">
       geng
      </a>
      <a class="text-white nb hover:text-white px-3" href="../web/saya.html">
       Contact
      </a>

      <li class="relative dropdown w-48" id="dropdown">
      <a class="text-white hover:text-white nb  cursor-pointer" href="#" onclick="toggleDropdown()">
      test
      <i class="fas fa-usera "></i>
      </a>
      
      <ul class="dropdown-menu absolute bg-white  mt-2 py-2 w-64 shadow-lg right-0 z-20">
       <li>
        <a class="block px-4 py-2  hover:bg-gray-200" href="#">
         test
        </a>
       </li>
       <li>
        <a class="block px-4 py-2 hover:bg-gray-200" href="#">
        test
        </a>
       </li>
       <li>
        <a class="block  px-4 py-2  hover:bg-gray-200" href="#">
         logout
        </a>
       </li>
      </ul>
     </li>
     </div>
    </div>
   </nav>


</body>
</html>
