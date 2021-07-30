const response = document.getElementById('response')
response.style.display = 'none;'
document.querySelector('form').addEventListener('submit', (e)=>{
    e.preventDefault();    //stop form from submitting

    dataObj = {}
    // The information submited is based on the form id

    // Select login form
    if (typeof document.getElementById('login') !== 'undefined' &&
        document.getElementById('login') !== null){
        url='/inc/login.php'
        dataObj['user'] =   document.querySelector('input[type=text]').value,
        dataObj['password'] = document.querySelector('input[type=password]').value
    }

    // Select register form
    else if (typeof document.getElementById('register') !== 'undefined' &&
    document.getElementById('register') !== null){
         url='/inc/register.php'
        dataObj['user'] =   document.querySelector('input[type=text]').value,
        dataObj['password'] = document.querySelector('input[type=password]').value
        dataObj['level'] =   document.querySelector('select').value;
        dataObj['email'] =   document.querySelector('input[type=email]').value;
        dataObj['phone'] =   document.querySelector('input[type=tel]').value;
    }

    // Select update_password form
    else if (typeof document.getElementById('update_password') !== 'undefined' &&
    document.getElementById('update_password') !== null){
        url='/inc/update_password.php'
        dataObj['old_password'] =   document.getElementById('old_password').value,
        dataObj['old_password_again'] = document.getElementById('old_password_again').value
        dataObj['new_password'] =   document.getElementById('new_password').value
    }

    // Select update_data form
    else if(typeof document.getElementById('update_data') !== 'undefined' &&
    document.getElementById('update_data') !== null){
        url='/inc/update_data.php'
        dataObj['email'] =   document.getElementById('email').value,
        dataObj['phone'] = document.getElementById('phone').value
    }
    
    // send AJAX
    $.ajax({
        type: 'POST',
        url: url,
        data: dataObj,
        dataType: 'json',
        async: true,
    })
    .done((data)=>{
        console.log(data['response'])

            // Whatever data is 
            if(data.redirect !== undefined) {
                window.location = data.redirect;
            } else if(data.error !== undefined) {
                response.innerText = data.error;
                response.style.display = 'flex;';
            }
        })
});