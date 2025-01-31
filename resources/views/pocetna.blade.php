<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-neutral-400 grid grid-cols-1 grid-rows-4 justify-items-center"> 
    <div class="w-screen h-40 flex justify-center m-0 p-6 row-span-1 bg-neutral-400 border-4 border-neutral-500">
        <img class="w-30 h-30 mr-4" src="/slike/polica.png" alt="Polica s knjigama"> 
        <div class="flex items-center" ><h1 class="text-7xl font-sans mb-0 ">Biblioteka</h1></div>
    </div>
    <div class="w-screen flex justify-center m-0 p-6 row-span-2 bg-neutral-400 border-4 border-neutral-500"><p>Tekst</p></div>
    <div class="w-screen h-40 flex justify-center m-0 p-6 row-span-1 bg-neutral-400 border-4 border-neutral-500">
        <p>Made by me <button href="/">Back to top</button></p>
    </div>
</body> 
</html>