const response = document.getElementById('response')
response.style.display = 'none;'
document.querySelector('form').addEventListener('submit', (e)=>{
    e.preventDefault();    //stop form from submitting

    form = document.querySelector('form')
    let formData = new FormData(form)
    
    var request = new XMLHttpRequest();
    request.open("POST", form.getAttribute('action'));
    request.send(formData);

    request.onreadystatechange = () =>{
        if (request.readyState == XMLHttpRequest.DONE) {
            data = request.responseText
            data = JSON.parse(data)
            if(data.redirect !== undefined) {
                window.location = data.redirect;
                // redirect to index
            } else if(data.error !== undefined) {
                response.innerText = data.error;
                response.style.display = 'flex;';
                // error
            }
        }
    }
});