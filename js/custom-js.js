// Smooth Scroll
$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;
  
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
  
        window.location.hash = hash;
      });
    } 
  });
});

// Back to top	
$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) {        
    $('#return-to-top-btn').fadeIn(200);   
  } else {
    $('#return-to-top-btn').fadeOut(200);   
  }
});
$('#return-to-top-btn').click(function() {      
  $('body,html').animate({
      scrollTop : 0                       
  }, 500);
});

// Count
$(document).ready(function() {

var counters = $(".count");
var countersQuantity = counters.length;
var counter = [];

for (i = 0; i < countersQuantity; i++) {
  counter[i] = parseInt(counters[i].innerHTML);
}

var count = function(start, value, id) {
  var localStart = start;
  setInterval(function() {
    if (localStart < value) {
      localStart++;
      counters[id].innerHTML = localStart;
    }
  }, 10);
}

for (j = 0; j < countersQuantity; j++) {
  count(0, counter[j], j);
}
});


