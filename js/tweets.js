
     //$.getJSON( "https://api.twitter.com/1.1/statuses/oembed.json?hide_media=true&omit_script=true&align=left&id=782260410540056576", function( json ) { //Connexion XHR
     $.getJSON( "tweet.json", function( json ) { //Connexion locale
      

         $.each(json, function(key,value){
            $("#container-tweets").append(value.html)
         });
  });
  
  
