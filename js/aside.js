
 let openElements=document.querySelectorAll('.open-element');
 let sideBarToggle=document.getElementById('sideBar-toggle');

 sideBarToggle.addEventListener('click' , function() {
     
        for (let index = 0; index < openElements.length; index++) {
            const element = openElements[index];
            element.classList.toggle('open');
        }
    //  openElements.classList.toggle('open');
      }
 );


 let list=document.querySelectorAll('.list-item');
 list.forEach(element => {
     element.addEventListener('click',(e)=>{
         element.classList.toggle('active');
         element.lastElementChild.classList.toggle('active');
        let subList=element.nextElementSibling;
        subList.classList.toggle('active');
     });
 });


    let subList=document.querySelectorAll('.subList');
    subList.forEach(element => {
    element.addEventListener('click',(e)=>{
        let url = 'Services.php?'; // Début de l'URL
        url += 'module=' +e.target.id; // On ajoute les valeurs 
        document.location.href = url; // Et on envoie à PHP
    });
});
