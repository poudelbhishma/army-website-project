window.onscroll = function() {myFunction()};


var navbar = document.getElementById("navbar");


var sticky = navbar.offsetTop;


function myFunction() {
    
    navbar.classList.add("show")
    if (window.scrollY >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
    
}
window.addEventListener("scroll", function() {

    if (window.scrollY === 0) {
        navbar.classList.remove("show")
    }
});


let slideIndex = 1;

showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}


function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let slides2 = document.getElementsByClassName("mySlides2");
  //let dots = document.getElementsByClassName("demo");

  if (n > slides.length) {
    slideIndex = 1
  } 
  if (n < 1) {
    slideIndex = slides.length
    }

  if (n > slides2.length) {
    slideIndex = 1
    } 
  if (n < 1) {
    slideIndex = slides2.length
    }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
  slides[slideIndex-1].style.display = "block";
  //dots[slideIndex-1].className += " active";

  for (i = 0; i < slides2.length; i++) {
    slides2[i].style.display = "none";
  }
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
  slides2[slideIndex-1].style.display = "block";
  //dots[slideIndex-1].className += " active";
}









