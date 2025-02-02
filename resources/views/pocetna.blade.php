<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteka</title>
    @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-1 grid-rows-4 gap-10 bg-neutral-100 justify-items-center"> 
    <div class="w-screen flex justify-center m-0 bg-neutral-100 ">
        <div class="flex pl-6 pr-6 h-28 self-center border rounded-xl bg-neutral-200 shadow-[0_10px_20px_rgba(0,_0,_0,_0.7)]">
        <img class="w-24 h-24 mr-4 self-center" src="/slike/polica.png" alt="Polica s knjigama"> 
        <div class="flex items-center" ><h1 class="text-7xl font-sans mb-0 ">Biblioteka</h1></div>
        </div>
    </div>
    <div class="w-screen flex justify-between m-0 p-6 row-span-2 bg-neutral-100">
        {{-- <div class="w-60 flex items-center justify-center border rounded-xl bg-neutral-200">Knjiga</div>
        <div class="w-60 flex items-center justify-center border rounded-xl bg-neutral-200">Knjiga</div>
        <div class="w-60 flex items-center justify-center border rounded-xl bg-neutral-200">Knjiga</div>
        <div class="w-60 flex items-center justify-center border rounded-xl bg-neutral-200">Knjiga</div>
        <div class="w-60 flex items-center justify-center border rounded-xl bg-neutral-200">Knjiga</div> --}}
    </div>
    <div class="w-screen h-40 flex justify-between content-center m-0 p-6  bg-neutral-400 border-4 border-neutral-500">
        <p class="self-center">Made by me </p><button href="/">Back to top</button>
    </div>
</body> 
</html>