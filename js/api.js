(function($){

  
    $('#new-quote-button').on('click', function(event) {
       event.preventDefault();
       $('.entry-source-link').empty();
       $('.entry-source').empty();
       
       $.ajax({
          method: 'get',
          url: api_vars.root_url + 'wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1'
         
       }).done( function(data) {
          
          var title = (data[0].title.rendered);
          var quote = (data[0].content.rendered);
          var link = (data[0]._qod_quote_source_url);
          var source = (data[0]._qod_quote_source);

         
          
           

          $('.quote-container').html(quote);
          $('.entry-title').html('<p>&mdash; ' + title + '</p>');

          if (link) {
          $('.entry-source-link').html('<a href="' + link + '"> ,' + source + '</a>');
          } else {
          $('entry-source').html(',' + source);
          }
        });
    });



    $('.post-submit').on('click', function(event) {
      event.preventDefault();
        var name = $('.name').val();
        var contentForm = $('.content-form').val();
        var sourceForm = $('.source-form').val();
        var sourceUrl = $('.source-url').val();


      $.ajax({
         method: 'post',
         url: api_vars.root_url + 'wp/v2/posts/',
         data: {
           title: name,
           content: contentForm,
           _qod_quote_source: sourceForm,
           _qod_quote_source_url: sourceUrl,
           status: "publish"

          },
         beforeSend: function(xhr) {
            xhr.setRequestHeader( 'X-WP-Nonce', api_vars.nonce );
         }
      }).done( function() {
         $('.submit-form').hide();
         $('.form-wrapper').append('<p class="thanks">Thanks for submitting your comment yo</p>');
         $('.form-wrapper').append('<button class="refresh"> Click Me </button>');

         $('.refresh').on('click', function(){
            $('.submit-form').show().trigger('reset');
            $('.refresh').hide();
            $('.thanks').hide();
         })

      });
   });
 

})(jQuery);



