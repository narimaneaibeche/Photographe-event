<!-- The Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
      <span class="close"></span>
      <img src="<?php echo get_stylesheet_directory_uri() . '/assets/contact1.png'; ?> "  class="contact" alt=" Contact" >
      <div class="modal-body">
	       <?php
		     echo (do_shortcode('[contact-form-7 id="5" title="Formulaire de contact 1"]'));
	       ?>
      </div> 
  </div>
</div>

    