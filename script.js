`use strict`

    //sticky navbar
    var nav = document.getElementById('nav');
        window.onscroll = function () {
        if(window.pageYOffset > 100) { 
        nav.classList.add("shrink");
        }else{
                nav.classList.remove("shrink");
            }
        }
        //testimonials
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


//  ===================  Counter area in Stats section ===========

const counters = document.querySelectorAll('.fact_count');
const speed = 2000 ;
counters.forEach(counter => {
    const updateCount = () =>{
        const target = +counter.getAttribute('data_target');
        const count = +counter.innerText;

        const inc = target/1000;
    
    if(count < target){
        counter.innerText = Math.ceil(  count + inc);
        setTimeout(updateCount, 1)

    }
    else{
        count.innerText= target;

    }
    }
    updateCount();
})






