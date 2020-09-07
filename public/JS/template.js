// recuperer la page 
currentPage = function(event){
    let url = 'index.php?';
    url +='currentPage='+event.target.innerHTML;
    document.location.href = url ;
}

let menuList = document.getElementById('menu-list');
let firstList = document.getElementById('firstList');

menuList.addEventListener('click',currentPage);
firstList.addEventListener('click',currentPage);
