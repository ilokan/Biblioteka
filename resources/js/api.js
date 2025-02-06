document.querySelector("#dugme").addEventListener("click",dajKnjige);

async function dajKnjige(){
    try{
        const pretraga = document.querySelector("#unos").value.trim();
        const response = await fetch(`http://openlibrary.org/search.json?q=${pretraga}`);
        const data = await response.json();
        const naslov = data.docs[0].title;
        document.querySelector("#naslov").innerHTML=naslov;
        const autor =data.docs[0].author_name;
        document.querySelector("#autor").innerHTML=autor;
        const slika = document.querySelector("#slika");
        slika.src = 'http://covers.openlibrary.org/b/id/'+data.docs[0].cover_i+'-M.jpg'
        slika.style.display = "block";

    }
    catch(error){
        console.error(error);
    }
}
