<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Biblioteka</title>    
</head>
<body> 
    <div class="flex flex-col flex-wrap h-vh bg-neutral-100  justify-items-center"> 
    <header class="w-screen h-32 flex justify-center m-0  bg-neutral-100 ">
        <div class="flex pl-6 pr-6 h-28 self-center border border-black border-solid rounded-xl bg-[#FAF9F6] ">
        <img class="w-24 h-24 mr-4 self-center" src="/slike/polica.png" alt="Polica s knjigama"> 
        <div class="flex items-center" ><h1 class="text-7xl font-sans mb-0">Biblioteka</h1></div>
        </div>
    </header>
    <div class="w-screen  h-[46rem] flex flex-wrap justify-center mt-8 pt-8 pb-8 gap-4 bg-neutral-100">
        <div class="flex flex-col justify-center items-center gap-4">
            <h1 class="flex text-3xl ">Izaberi 5 knjiga.</h1>
            <span><input type="text" id="unos" placeholder="Unesite naziv knjige."></span>
            <span class=" flex w-24"><button id="dugme" class="w-24 border-2 border-black">Pretraga!</button></span>
        </div>
        <div class="flex gap-4 align-top">
        <div id="ispis1" class="w-64 h-[28rem] relative align-top grid grid-cols-1 m-0 border rounded-xl bg-neutral-200">
            <div id="broj1" class="grid grid-cols-1 justify-self-center self-center justify-items-center margin-auto absolute">
                <p class="text-2xl font-medium opacity-50">Knjiga</p>
                <p class="text-9xl font-medium opacity-50">1</p>
            </div>
            <h1 class="text-xl justify-self-center self-top absolute top-[2rem]" id="naslov1"></h1>
            <p id="autor1" class="justify-self-center self-top absolute top-[4rem]"></p>
            <img class="absolute top-[6rem]  justify-self-center" id="slika1" src="" alt="Slika" style="display:none"><button id="x1" class="absolute top-2 right-4 hidden">&#9747</button>  
        </div>
        <div id="ispis2" class="w-64 h-[28rem] relative align-top  grid grid-cols-1 m-0 border rounded-xl bg-neutral-200">
            <div id="broj2" class="grid grid-cols-1 justify-self-center self-center justify-items-center margin-auto absolute">
                <p class="text-2xl font-medium opacity-50">Knjiga</p>
                <p class="text-9xl font-medium opacity-50">2</p>
            </div>            
            <h1 class="text-xl justify-self-center self-top absolute top-[2rem]" id="naslov2"></h1>
            <p id="autor2" class="justify-self-center self-top absolute top-[4rem]"></p>
            <img class="absolute top-[6rem]  justify-self-center" id="slika2" src="" alt="Slika" style="display:none"><button id="x2" class="absolute top-2 right-4 hidden">&#9747</button> 
        </div>
        <div id="ispis3" class="w-64 h-[28rem] relative align-top  grid grid-cols-1 m-0 border rounded-xl bg-neutral-200">
            <div id="broj3" class="grid grid-cols-1 justify-self-center self-center justify-items-center margin-auto absolute">
                <p class="text-2xl font-medium opacity-50">Knjiga</p>
                <p class="text-9xl font-medium opacity-50">3</p>
            </div>            
            <h1 class="text-xl justify-self-center self-top absolute top-[2rem]" id="naslov3"></h1>
            <p id="autor3" class="justify-self-center self-top absolute top-[4rem]"></p>
            <img class="absolute top-[6rem]  justify-self-center" id="slika3" src="" alt="Slika" style="display:none"><button id="x3" class="absolute top-2 right-4 hidden">&#9747</button> 
        </div>
        <div id="ispis4" class="w-64 h-[28rem] relative align-top  grid grid-cols-1 m-0 border rounded-xl bg-neutral-200">
            <div id="broj4" class="grid grid-cols-1 justify-self-center self-center justify-items-center margin-auto absolute">
                <p class="text-2xl font-medium opacity-50">Knjiga</p>
                <p class="text-9xl font-medium opacity-50">4</p>
            </div>            
            <h1 class="text-xl justify-self-center self-top absolute top-[2rem]" id="naslov4"></h1>
            <p id="autor4" class="justify-self-center self-top absolute top-[4rem]"></p>
            <img class="absolute top-[6rem]  justify-self-center" id="slika4" src="" alt="Slika" style="display:none"><button id="x4" class="absolute top-2 right-4 hidden">&#9747</button>
        </div>
        <div id="ispis5" class="w-64 h-[28rem] relative align-top  grid grid-cols-1 m-0 border rounded-xl bg-neutral-200">
            <div id="broj5" class="grid grid-cols-1 justify-self-center self-center justify-items-center margin-auto absolute">
                <p class="text-2xl font-medium opacity-50">Knjiga</p>
                <p class="text-9xl font-medium opacity-50">5</p>
            </div>            
            <h1 class="text-xl justify-self-center self-top absolute top-[2rem]" id="naslov5"></h1>
            <p id="autor5" class="justify-self-center self-top absolute top-[4rem]"></p>
            <img class="absolute top-[6rem]  justify-self-center" id="slika5" src="" alt="Slika" style="display:none"><button id="x5" class="absolute top-2 right-4 hidden">&#9747</button> 
        </div>
        </div>
        </div>

    <footer class="w-screen h-32 flex justify-between content-center self-end m-0 p-6  bg-neutral-400 border-4 border-neutral-500">
        <p class="self-center">Made by me </p><button href="/">Back to top</button>
    </footer>
    </div>
    @vite('resources/js/api.js')
</body> 
</html>