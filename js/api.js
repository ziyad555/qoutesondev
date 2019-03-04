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
        
        
   // var quoteMaster = [
    { quote: "Do; or do not. There is no //TODO.", 
       name: 'James Shore', },
    
     { quote: "When your hammer is C++, everything begins to look like a thumb.",
    name: 'Steve Haflich' },
    
    { quote: "Unix will give you enough rope to shoot yourself in the foot. If you didn’t think rope would do that, you should have read the man page.",
    name: "Mike Hoye" }, 
    
    {quote: "Debugging is like being the detective in a crime movie where you are also the murderer.", 
     name: 'Filipe Fortes'}, 
    
    {quote: "Some people, when faced with a problem, think, “I know, I’ll use binary.” Now they have 10 problems.", 
     name: 'Ned Batchelder'},
    
    {quote: "Some people, when confronted with a problem, think “I know, I’ll use versioning.” Now they have 2.1.0 problems.", 
     name: 'Jason Coyle'}, 
    
    {quote: "Some people, when confronted with a problem, think “I know, I’ll use multithreading”. Nothhw tpe yawrve o oblems.", 
     name: "Erik Osheim"},
    
    {quote: "Some programmers, when confronted with a problem, think “I know, I’ll use floating point arithmetic.” Now they have 1.999999999997 problems.", 
     name: 'Tom Scott'}, 
    
    {quote: "Programmer’s motto: “We’ll cross that bridge when it’s burning underneath us.", 
     name: 'Gary Bernhardt'},
  ];
  num = quoteMaster.length;
  
  var quoteRendered = document.getElementById('h3');
  
  var quoteRenderedBy = document.getElementById('h4');
  
  var handler = function(event) {
    for (var i = 0; i < num; i++) {
   
    var x = Math.floor(Math.random() * num);
     var quoteText = quoteMaster[x].quote;
    var quoteTextBy = quoteMaster[x].name;
  }
    quoteRendered.innerHTML = quoteText; 
    quoteRenderedBy.innerHTML = quoteTextBy;
  };
  
  var button = document.getElementById('but');
  
  button.addEventListener('click', handler);
  
  

         
      });
   });
})( jQuery );
console.log( api_vars.success );
