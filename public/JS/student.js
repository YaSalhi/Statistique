var studentCA = document.querySelectorAll('.row');

studentCA.forEach(element => {

    element.addEventListener('click', function(e){

        console.log(element.id);
        window.location.href = "index.php?student="+element.id; 
    });
});