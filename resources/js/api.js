import jQuery from 'jquery';
window.$ = jQuery;


var dugme = document.querySelector("#dugme");
var brojac=0;

dugme.addEventListener("click",brojanje =>{
    brojac +=1;
    console.log(brojac);
})
dugme.addEventListener("click",dajKnjige);

if(brojac>5){
    dugme.removeEventListener("click",dajKnjige);
    dugme.removeEventListener("click",brojanje);
}
var naslov="";
var autor="";
var slika="";
var broj="";

// Funkcija koja ubacuje podatke o knjigama iz Open Library
async function dajKnjige(){
    try{
        const pretraga = document.querySelector("#unos").value.trim();
        const response = await fetch(`http://openlibrary.org/search.json?q=${pretraga}`);
        const data = await response.json();
        naslov = data.docs[0].title;
        document.querySelector("#naslov"+brojac).innerHTML=naslov;
        autor=data.docs[0].author_name;
        document.querySelector("#autor"+brojac).innerHTML=autor;
        slika= document.querySelector("#slika"+brojac);
        slika.src = 'http://covers.openlibrary.org/b/id/'+data.docs[0].cover_i+'-M.jpg';
        slika.style.display = "block";
        slika.style.margin = "0 auto";
        document.querySelector("#x"+brojac).innerHTML="&#9747;";
        broj=document.querySelector("#broj"+brojac);
        console.log("razmak");
        broj.style.display="none";
  
      
    }
    catch(error){
        console.error(error);
    }
}
// Uklanjanje X
document.addEventListener("click", (e)=>{
    let ukloni = e.target.id;
    if(ukloni === "x1" || ukloni === "x2" || ukloni === "x3" || ukloni === "x4" || ukloni === "x5"){

        $(e.target.closest("div")).find("h1").html("");
        $(e.target.closest("div")).find("p").html("");
        $(e.target.closest("div")).find("img").css("display","none");
        $(e.target.closest("div")).find("button").css("display","none");

    }

});


