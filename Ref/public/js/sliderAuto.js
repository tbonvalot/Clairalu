$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .next()
    .fadeIn(2000)
    .end()
    .appendTo('#slideshow');
},  3000);