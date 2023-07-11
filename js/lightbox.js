//l'affichage de la lightbox

$(document).ready(function(){ 
  
  $(document).on('click', ".plein-ecran,#plein-ecran-1", function () {
    $("#lightbox").show();
  
   // l'affichage de l'image
    var urlImage = $(this).parent().parent().children().children().children().attr("src");
    var real_img='<img src="'+urlImage+'" alt="photo event">';
    $('#image-lightbox').html(real_img);
    console.log(real_img);

 });
 
 // Lightbox de la page d'acceuil

  
  $(document).on('click', ".plein-ecran", function () {
    $("#lightbox").show();

   // l'affichage de la catégorie
    
    var categorie = $(this).siblings().children().next().find("p").children().attr("href");
    console.log(categorie);
    var real_cat='<a href="'+categorie+'">';
    var real_cat_valeur=real_cat.split("//")[1].split("/")[3];
    $('#cat-light').html(real_cat_valeur); 

    // l'affichage de la réference
    
    var reference = $(this).siblings().children().next().find("h4").text();
    var real_ref=reference;
   $('#reff-light').html(real_ref);
   
  });

// lightbox de la page de détaile

  $(document).on('click', "#plein-ecran-1", function () {
    $("#lightbox").show();

   // l'affichage de la catégorie
    
    var categorie = $("#cat-lightbox").children().attr("href");
    console.log(categorie);
    var real_cat='<a href="'+categorie+'">';
    var real_cat_valeur=real_cat.split("//")[1].split("/")[3];
    $('#cat-light').html(real_cat_valeur);

    // l'affichage de la réference
    
    var referenceSingle = $('#refref').text();
    var real_reff=referenceSingle;
   $('#reff-light').html(real_reff);
   

  });
  $("#close-lightbox").click(function(){
    $("#lightbox").hide();
  });


  //pagination des photos
    
  $(document).on('click', ".plein-ecran,#plein-ecran-1", function () {
  // début de pagination

  let slideIndex = 1; 
  showSlides(slideIndex);
  // afficher le slide 
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function showSlides(n) {
    let slides = document.getElementsByClassName('lightbox__container');
    if(n > slides.length) { slideIndex = 1 }
    if(n < 1 ) { slideIndex = slides.length }
      for(let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
    slides[slideIndex - 1].style.display = 'block';
  }
  $(document).on('click', ".lightbox__next,.lightbox__next1", function () {
    plusSlides(-1)
  });
  $(document).on('click', ".lightbox__prev,.lightbox__prev1", function () {
   plusSlides(1)
  });

  // fin de pagination
  })

  $("#close-lightbox").click(function(){
    $("#lightbox").hide();
   });
})

  













/*


   var url = $(location).attr("href");
// début de pagination
    let slideIndex = 1;
showSlides(slideIndex);
// afficher le slide 
function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
	let slides = document.getElementsByClassName('card-link');
	
	
	if(n > slides.length) { slideIndex = 1 }
	
	if(n < 1 ) { slideIndex = slides.length }
	
	// Cacher toutes les slides
	for(let i = 0; i < slides.length; i++) {
	  slides[i].style.display = "none";
	}
	
	
	
	// Afficher la slide demandée
	slides[slideIndex - 1].style.display = 'block';
	
	
  }
 // pagination des images next
    $(".lightbox__prev").click(function (){
      $("#lightbox-img").html("<img src='" + nextImg+ "'>");
      $('#reff').html(nexref);
  });
  
    // fin de pagination 
*/