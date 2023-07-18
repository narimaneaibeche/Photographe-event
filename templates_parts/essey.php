
<div class="lightbox" id="lightbox">
  <button class="lightbox__close" id="close-lightbox">&times;</button>
  <button class="lightbox__next"> <?php echo get_post_field('post_content', $prev_post_id); ?> &#x2190 Précédente</button>
  <button class="lightbox__prev"><?php next_post_link('%link', 'Suivante &#x2192'); ?></button>

  <button class="lightbox__next1"> <?php previous_post_link('%link', '&#x2190'); ?></button>
  <button class="lightbox__prev1"><?php next_post_link('%link', '&#x2192'); ?></button>
  
  
  <div class="lightbox__container">
  <?php the_content();?> 
   <?php //echo ('post_content', $post->ID); ?>
 
  
   
    <div class="lightbox-ref-cat">
      <p> <?php echo get_the_term_list(get_the_ID(),'catégorie',);?></p>
      <h4><?php the_field('référence'); ?></h4>
    </div>
   
 </div>
</div>





var next = document.getElementsByClassName('lightbox__prev')[0];
var previous = document.getElementsByClassName('lightbox__next')[0];
var index = 0;
var images =[????????];
console.log(images);
next.addEventListener('click', nextImage);
function nextImage() {
  index+=1;
  if (index > images.length - 1) {
   index = 0;
  }

   document.getElementsByClassName('lightbox__container').src = images[index];

}
//'Previous' button

previous.addEventListener('click', previousImage);

function previousImage(){
  index-=1;
  if (index < 0) {
   index = images.length - 1;
  }

   document.getElementsByClassName('lightbox__container').src = images[index];

}


<div id="img-lightbox-next">
  
      <?php  $prev_post = get_previous_post();
        $prev_post_id = $prev_post->ID;  
        echo get_post_field('post_content', $prev_post_id); ?>
 </div>



 var next = document.getElementsByClassName('lightbox__prev')[0];
var previous = document.getElementsByClassName('lightbox__next')[0];
var index = 0;
var images =['logo.png', 'nathalie-1.jpeg', 'nathalie-2.jpeg'];
//var images = $(this).parent().parent().prev()
//var urlImage = images.attr('src');

next.addEventListener('click', nextImage);
function nextImage() {
  index+=1;
  if (index > images.length - 1) {
   index = 0;
  }

   document.getElementsByClassName('lightbox__container')[0].src = images[index];
   console.log(images[index]);
}

//'Previous' button

previous.addEventListener('click', previousImage);

function previousImage(){
  index-=1;
  if (index < 0) {
   index = images.length - 1;
  }

   document.getElementsByClassName('lightbox__container')[0].src = images[index];
   console.log(images[index]);
}



// début de pagination

  let slideIndex = 1; 

  showSlides(slideIndex);

  // afficher le slide 

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function showSlides(n) {
    console.log(n);
    let slides = document.getElementsByClassName('lightbox__container');
    console.log(slides);
    if(n > slides.length) { slideIndex = 1 }
    if(n < 1 ) { slideIndex = slides.length }
    // Cacher toutes les slides
      for(let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      // Afficher la slide demandée
    slides[slideIndex - 1 ].style.display = 'block';
  }
  $(document).on('click', ".lightbox__next,.lightbox__next1", function () {
    plusSlides(-1);
  });
  $(document).on('click', ".lightbox__prev,.lightbox__prev1", function () {
   plusSlides(1);
  });

  // fin de pagination
  

  // début de pagination

let slideIndex = indice; 

showSlides(slideIndex);

// afficher le slide 

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  console.log('rima',indice);
  let slides = document.getElementsByClassName('lightbox__container');
  console.log(slides);
  
  if(n > (slides.length)-1) { 
    slideIndex = 0 ;
  }
  console.log('longeur',slides.length)
  if(n < 0 ) { slideIndex = (slides.length)-1 }
 
  // Cacher toutes les slides
    for(let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    // Afficher la slide demandée
  slides[slideIndex ].style.display = 'block';
}
$(document).on('click', ".lightbox__next,.lightbox__next1", function () {
  plusSlides(-1);
});
$(document).on('click', ".lightbox__prev,.lightbox__prev1", function () {
 plusSlides(1);
});

// fin de pagination
