// Get the modal
var modal = document.getElementById('myModal');
var btn = document.getElementById("menu-item-29");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
 // modale pour le bouton
 var modal = document.getElementById('myModal');
 var btn = document.getElementById("btn2");
 var span = document.getElementsByClassName("close")[0];
 
 btn.onclick = function() {
     modal.style.display = "block";
 }
 span.onclick = function() {
     modal.style.display = "none";
 }
 window.onclick = function(event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }
 


// récupérer la valeur de la référence 
  $(document).ready(function(){
  
   $('#ref').val($('#refref').text());
} );

// afficher plus d'image de meme catégorie 

var affichePlus = document.getElementById('publication-list');
var afficheNon = document.getElementById('card2-img-plus');
var btnAfficher = document.getElementById('btn3');
btnAfficher.onclick = function() {
  affichePlus.style.display = "block";
  btnAfficher.style.display = "none";
  afficheNon.style.display = "none";
}
// afficher la pagination d'imager suivante en hover 
var afficheImg = document.getElementById("nav-img1");
var hoverFleche = document.getElementById("fleche-ss");
hoverFleche.onmouseover = function (){
    afficheImg.style.display = "block";   
}
hoverFleche.onmouseout = function (){
    afficheImg.style.display = "none";   
}
// afficher la pagination d'imager précédente en hover 
var afficheImg2 = document.getElementById("nav-img2");
var hoverFleche2 = document.getElementById("fleche-pp");
console.log(afficheImg2);
hoverFleche2.onmouseover = function (){
    afficheImg2.style.display = "block";   
}
hoverFleche2.onmouseout = function (){
    afficheImg2.style.display = "none";   
}
/* Menu Burgere */
let openBtn = document.getElementById("openBtn");
let closeBtn = document.getElementById("closeBtn");

let backdrop = document.getElementById("backdrop");

openBtn.addEventListener("click", () => {
  if(getComputedStyle(backdrop).display != "none"){
    backdrop.style.display = "none";
    
  } else {
    backdrop.style.display = "block";
    openBtn.style.display = "none";
    closeBtn.style.display = "block";
    
  }
})
closeBtn.addEventListener("click", () => {
    if(getComputedStyle(backdrop).display != "none"){
      backdrop.style.display = "none";
      openBtn.style.display = "block";
      closeBtn.style.display = "none";
    } else {
      backdrop.style.display = "block";
      closeBtn.style.display = "block"; 
      
    }
  })

/* lightbox */

let OpenLightbox = document.getElementById("plein-ecran");
let closeLightbox = document.getElementById("close-lightbox");
let lightbox = document.getElementById("lightbox");

OpenLightbox.onclick = function() {
  lightbox.style.display = "block";
}
closeLightbox.onclick = function() {
  lightbox.style.display = "none";
}
/* lightbox page de détaille */

let OpenLightboxx = document.getElementById("plein-ecran-1");
let closeLightboxx = document.getElementById("close-lightbox");
let lightboxx = document.getElementById("lightbox");

OpenLightboxx.onclick = function() {
  lightboxx.style.display = "block";
}
closeLightboxx.onclick = function() {
  lightboxx.style.display = "none";
}