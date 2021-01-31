var collapse = document.getElementsByClassName("collapse-toggle");
var i;

for (i = 0; i < collapse.length; i++) {
  collapse[i].addEventListener("click", function() {
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
   } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("carousel-slide");
  var dot = document.getElementsByClassName("carousel-dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dot.length; i++) {
    dot[i].className = dot[i].className.replace("active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dot[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}