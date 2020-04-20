 
  function filterNames(){
    // Get value of input
    let filterValue = document.getElementById('filterInput').value.toUpperCase();
 
    // Get names tr
    let row = document.querySelectorAll('.row');
 
    // Loop through 
    for(let i = 0;i < row.length;i++){
         let names = row[i].querySelector('.names');
         // If matched
         if(names.innerHTML.toUpperCase().indexOf(filterValue) > -1){
             row[i].style.display = '';
         } else {
             row[i].style.display = 'none';
         }
     }
 
  }
 // Get input element
 let filterInput = document.getElementById('filterInput');
 // Add event listener
 filterInput.addEventListener('keyup', filterNames);

