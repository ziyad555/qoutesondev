(function( $ ) {
   $('#close-comments').on('click', function(event) {
      event.preventDefault();
      $.ajax({
         method: 'post',
         url: red_vars.rest_url + 'wp/v2/posts/' + red_vars.post_id,
         data: {
            comment_status: 'closed'
         },
         beforeSend: function(xhr) {
            xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
         }
      }).done( function(response) {
        $(function() {
            // fetch a new quote
            $('#new-quote-button').on('click', function(event) {
              event.preventDefault();
        
              $.ajax({
                method: 'get',
                url:
                  api_vars.root_url +
                  'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
                cache: false
              }).done(function(data) {
                const post = data.shift(), // get the first and only post array
                  $sourceSpan = $('.source'),
                  quoteSource = post._qod_quote_source,
                  quoteSourceUrl = post._qod_quote_source_url,
                  slug = post.slug,
                  url = api_vars.home_url + '/' + slug + '/';
        
                // update the quote content and name of the quoted person
                $('.entry-content').html(post.content.rendered);
                $('.entry-title').html(
                  '<h2 class="entry-title">&mdash; ' + post.title.rendered + '</h2>'
                );
        
                // display quote source if available
                if (quoteSource.length && quoteSourceUrl.length) {
                  $sourceSpan.html(
                    ', <a href="' + quoteSourceUrl + '">' + quoteSource + '</a>'
                  );
                } else if (quoteSource.length) {
                  $sourceSpan.html(', ' + quoteSource);
                } else {
                  $sourceSpan.text('');
                }
              });
            });
        
          });
      });
   });
   /**
   * Ajax-based front-end post submissions.
   */
  $(function() {
    $('#quote-submission-form').on('submit', function(event) {
      event.preventDefault();

      const data = {
        title: $('#quote-author').val(),
        content: $('#quote-content').val(),
        _qod_quote_source: $('#quote-source').val(),
        _qod_quote_source_url: $('#quote-source-url').val(),
        post_status: 'pending'
      };

      $.ajax({
        method: 'post',
        url: api_vars.root_url + 'wp/v2/posts',
        data,
        beforeSend: function(xhr) {
          xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce);
        }
      })
        .done(function() {
          // clear the form fields and hide the form
          $('#quote-submission-form')
          .slideup()
          .find('input[type="text"], input[type="url"], textarea')
          .val('');
          // show success message
          $('.submit-success-message')
          .text(api_vars.success)
          .slideDown('slow');
        })
        .fail(function() {
          alert(api_vars.failure);
        });
    });
  });
})( jQuery );
console.log( api_vars.success );

