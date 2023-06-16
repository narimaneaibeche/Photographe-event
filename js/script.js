// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("menu-item-29");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// modale pour le bouton
var modall = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("btn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modall.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modall.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modall) {
        modall.style.display = "none";
    }
}
// val()
  $(document).ready(function(){
  
   $('#ref').val($('#refref').text());
} );

