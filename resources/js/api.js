import jQuery from 'jquery';
window.$ = jQuery;


var dugme = document.querySelector("#dugme");
var brojac=0;

dugme.addEventListener("click",brojanje =>{
    if(brojac<5){
    brojac +=1;
    console.log(brojac);
    
    }        
})


dugme.addEventListener("click",dajKnjige);
var enter = document.querySelector("#unos")
enter.addEventListener("keydown",(e) => {
    if(e.key === "Enter"){
        console.log('enter');
        dugme.click();
    }
});
    


var naslov="";
var autor="";
var slika="";
var broj="";
var x="";

// Funkcija koja ubacuje podatke o knjigama iz Open Library
async function dajKnjige(){
    try{
        var unos = document.querySelector("#unos").value.trim();
        var response = await fetch(`http://openlibrary.org/search.json?q=${unos}`);
        var data = await response.json();
        broj=document.querySelector("#broj"+brojac);
        broj.style.display="none";
        naslov = data.docs[0].title;
        document.querySelector("#naslov"+brojac).innerHTML=naslov;
        autor=data.docs[0].author_name;
        document.querySelector("#autor"+brojac).innerHTML=autor;
        slika= document.querySelector("#slika"+brojac);
        slika.src = 'http://covers.openlibrary.org/b/id/'+data.docs[0].cover_i+'-M.jpg';
        slika.style.display = "block";
        slika.style.margin = "0 auto";
        x= document.querySelector("#x"+brojac);
        x.style.display="block";
        console.log("razmak");
  
      
    }
    catch(error){
        console.error(error);
    }
}
// Uklanjanje informacija pomocu X
document.addEventListener("click", (e)=>{
    let ukloni = e.target.id;
    if(ukloni === "x1" || ukloni === "x2" || ukloni === "x3" || ukloni === "x4" || ukloni === "x5"){

        $(e.target.closest("div")).find("h1").html("");
        $(e.target.closest("div")).find("p").html("");
        $(e.target.closest("div")).find("img").css("display","none");
        $(e.target.closest("div")).find("button").css("display","none");
        broj.style.display = "grid";
        var uklonjeno = ukloni.split("");
        brojac = parseInt(uklonjeno[1])-1;
        console.log(brojac);
     



    }

});



