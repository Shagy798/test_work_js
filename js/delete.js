const  row = document.getElementsByTagName('tr');

[].forEach.call(row, function(elem){
    elem.addEventListener('click', function (el) { 
        id = this.children[0].innerHTML; 
        if(id>=0){finallId=id;
        
            const formData = new FormData();
            formData.append('id',finallId);
            const request = new XMLHttpRequest();
            request.open("POST", "formDelete.php");
            request.send(formData);
            location.reload();
        }
    })
});