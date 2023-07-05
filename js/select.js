 /* les filtre pour format image */

 (function($){
    $(document).ready(function selected(){
        $('#format-select').change(function(e){
            e.preventDefault();
            var category_var = $(this).val();
            console.log(category_var);
            $.ajax({
                url: wp_ajax.ajax_url,
                data: { action: 'filter', category: category_var },
                type: 'post',
                success: function(result) {                    
                    $('#card2-img-plus').html(result);                  
                },
                error: function(result) {
                    console.warn(result);                   
                }
            });
        });
    });
  
  })(jQuery);

  /* les filtre pour catégorie  image*/

  (function($){  
    $(document).ready(function selected(){
        $('#js-filter-itemm').change(function(e){
            e.preventDefault();
            var category_var = $(this).val();          
            $.ajax({
                url: wp_ajax.ajax_url,
                data: { action: 'filter', category_1: category_var },
                type: 'post',
                success: function(result) {
                    $('#card2-img-plus').html(result);                   
                },
                error: function(result) {
                    console.warn(result);
                }
            });
        });
    });
  
  })(jQuery);

 /* les filtre pour date */
 (function($){
    $(document).ready(function selected(){
        $('#trier-select').change(function(e){
            e.preventDefault();
            var sortby = '';
            var sort = '';
            var sortInput = $('#trier-select').val();
            if(sortInput == 'date-asc') {
                sortby = 'date';
                sort = 'ASC';
            }else if(sortInput == 'date-desc') {
                sortby = 'date';
                sort = 'DESC';
            }else{
                sortby = 'date';
                sort = 'DESC';
            }
           
            console.log('f1', sortInput);
            $.ajax({
                url: wp_ajax.ajax_url,
                data: { action: 'filter', 
                       category_2: sortInput,
                       sortby: sortby,
                       sort: sort,
                    },
                type: 'post',
                success: function(result) {
                    $('#card2-img-plus').html(result);
                },
                error: function(result) {
                    console.warn(result);                  
                }
            });
        });
    });
  
  })(jQuery);

  