
// La modal
let modal = document.getElementById('myModal');
let btn = document.getElementById('menu-item-29');
let btnn = document.getElementById('menu-item-85');
let btn2 = document.getElementById('btn2');
let span = document.getElementsByClassName("close")[0];
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
btnn.onclick = function() {
  modal.style.display = "block";
}

if (btn2!=null)  
btn2.onclick = function() {
  
  modal.style.display = "block";
};
// récupérer la valeur de la référence 
  $(document).ready(function(){
  
   $('#ref').val($('#refref').text());
} );

// afficher plus d'image de meme catégorie 

var affichePlus = document.getElementById('publication-list');
var afficheNon = document.getElementById('card2-img-plus');
var btnAfficher = document.getElementById('btn3');
if (btnAfficher!=null) 
btnAfficher.onclick = function() {
  affichePlus.style.display = "block";
  btnAfficher.style.display = "none";
  afficheNon.style.display = "none";
};
// afficher la pagination d'imager précédente en hover 
var afficheImg = document.getElementById("nav-img1");
var afficheImg2 = document.getElementById("nav-img2");
var hoverFleche2 = document.getElementById("fleche-pp");
//console.log(afficheImg2);
if (hoverFleche2!=null) 
hoverFleche2.onmouseover = function (){
    afficheImg2.style.display = "block";   
    afficheImg.style.display = "none"; 
};
if (hoverFleche2!=null) 
hoverFleche2.onmouseout = function (){
    afficheImg2.style.display = "none";   
    afficheImg.style.display = "block"; 
};
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

/* charger plus avec ajax */

let currentPage = 1;
$('#btn4').on('click', function() {
  currentPage++; // Do currentPage + 1, because we want to load the next page

  $.ajax({
    type: 'POST',
    url: 'http://localhost:8888/photographe-event/wp-admin/admin-ajax.php',
    dataType: 'json',
    data: {
      action: 'weichie_load_more',
      paged: currentPage,
    },
    success: function (res) {
      if(currentPage >= res.max ) {
        $('#btn4').hide();
      }
      $('.card2-img2').append(res.html);
    }
  });
});

