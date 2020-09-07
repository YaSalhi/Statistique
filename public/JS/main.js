
var header=document.getElementById('head');
function myFunction() {
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        header.classList.toggle("scrolled" , true);
      } else {
        header.classList.toggle("scrolled" , false);
      }
  }
window.addEventListener('scroll',myFunction);
