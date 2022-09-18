<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</head>
<body class="h-screen bg-gray-100">

    <div class="bg-white h-10 shadow-lg flex text-md lg:text-lg">
        <div class="mx-10 font-extrabold tracking-widest text-gray-500 max-w-lg flex items-center">QuickList
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-600 inline">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
        </div>

        <div class="flex items-center text-gray-600">
        <ul class="flex space-x-4  font-bold  items-center  text-xs sm:text-sm md:text-base">
            <li><a href="{{ route('home') }}" class="hover:text-orange-700">Home</a></li>
            <li><a href="{{ route('sobre_isso') }}" class="hover:text-orange-700">Sobre</a></li>
        </ul>
    </div>
        
    </div>
    
    @yield('pagina')
</body>
</html>
