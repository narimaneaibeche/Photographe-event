//l'affichage de la lightbox dans la page dacceuil

$(document).ready(function(){ 
  
  $(document).on('click', ".plein-ecran", function (e) {
    e.preventDefault();
    $("#lightbox").show();
    
   // l'affichage de l'image
    var urlImage = $(this).parent().parent().children().children().children().attr("src");
    var real_img='<img src="'+urlImage+'" alt="photo event">';
    $('#image-lightbox').html(real_img);
   
    // l'affichage de la catégorie
     var categorie = $(this).siblings().children().next().find("p").children().attr("href");
     var real_cat='<a href="'+categorie+'">';
     var real_cat_valeur=real_cat.split("//")[1].split("/")[3];
     $('#cat-light').html(real_cat_valeur); 
 
    // l'affichage de la réference
     
     var reference = $(this).siblings().children().next().find("h4").text();
     var real_ref=reference;
    $('#reff-light').html(real_ref);

    //début de pagination
    let indice = $(this).parent().parent().index();
    console.log('indice',(indice/2));

    let slideIndex = indice/2; 
    showSlides(slideIndex);

    // afficher le slide 

    function plusSlides(n) {
     showSlides(slideIndex += n);
    }

    function showSlides(n) {
     //console.log('rima',indice);
      let slides = document.getElementsByClassName('lightbox__container');
     
      if(n > (slides.length)-1) { 
       slideIndex = 0 ;
      }
      console.log('slide number',slides.length);
      if(n < 0 ) { 
        slideIndex = (slides.length)-1 ;
      }
     // Cacher toutes les slides
      for(let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      // Afficher la slide demandée
      slides[slideIndex ].style.display = 'block';
    }
    $(document).on('click', ".lightbox__next", function () {
      plusSlides(-1);
    });
    $(document).on('click', ".lightbox__prev", function () {
      plusSlides(1);
   });

    // fin de pagination*/

  }); 

 // afficher la lightbox dans la page de détaille

  $(document).on('click', "#plein-ecran-1", function () {
    $("#lightbox").show();
    
    // l'affichage de l'image
    var urlImage = $(this).parent().parent().children().children().children().attr("src");
    var real_img='<img src="'+urlImage+'" alt="photo event">';
    $('#image-lightbox').html(real_img);

   // l'affichage de la catégorie 
    var categorie = $("#cat-lightbox").children().attr("href");
    var real_cat='<a href="'+categorie+'">';
    var real_cat_valeur=real_cat.split("//")[1].split("/")[3];
    $('#cat-light').html(real_cat_valeur);

    // l'affichage de la réference
    var referenceSingle = $('#refref').text();
    var real_reff=referenceSingle;
   $('#reff-light').html(real_reff);


   //début de pagination

   let slideIndex = 0; 
   showSlides(slideIndex);

   // afficher le slide 

   function plusSlides(n) {
    showSlides(slideIndex += n);
   }

   function showSlides(n) {
     let slides = document.getElementsByClassName('lightbox__container');
     console.log(slides);
     if(n > (slides.length)-1) { 
      slideIndex = 0 ;
     }
     if(n < 0 ) { 
       slideIndex = (slides.length)-1 
     }
    // Cacher toutes les slides
     for(let i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
     }
   
     // Afficher la slide demandée
     slides[slideIndex].style.display = 'block';
   }
   $(document).on('click', ".lightbox__next", function () {
     plusSlides(-1);
   });
   $(document).on('click', ".lightbox__prev", function () {
     plusSlides(1);
  });

   // fin de pagination*/

   
  });

$(document).on('click', ".lightbox__close", function (e) {

  $(".lightbox").hide();  
});

})

