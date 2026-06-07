document.getElementById('loginForm').addEventListener('submit', async function(e){

    e.preventDefault();

    const response = await fetch('/api/login', {

        method: 'POST',

        headers: {
            'Content-Type': 'application/json'
        },

        body: JSON.stringify({

            username: document.getElementById('username').value,

            password: document.getElementById('password').value

        })

    });

    const data = await response.json();

    if(response.ok){

        localStorage.setItem('token', data.token);

        window.location.href = '/dashboard';

    }else{

        document.getElementById('error').innerText =
            data.message;
    }

});