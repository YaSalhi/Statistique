const activeElements = document.querySelectorAll('.active-element');
const menuToggle=document.getElementById('menu-toggle');
menuToggle.addEventListener('click',function(){
    for(var activated = 0; activated < activeElements.length; activated++){
                  activeElements[activated].classList.toggle('active');
                  console.log('hello');
             }
});
