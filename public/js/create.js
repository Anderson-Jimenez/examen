document.addEventListener('DOMContentLoaded', async () => {
    const token = localStorage.getItem('token');
    if(!token){
        window.location.href = '/login';
    }
    
    // Cargar destinatarios
    const response = await fetch('/api/users', {
        headers: { Authorization: 'Bearer ' + token }
    });
    const users = await response.json();
    const destinatarioSelect = document.getElementById('destinatario');
    users.forEach(user => {
        const option = document.createElement('option');
        option.value = user.id;
        option.textContent = user.name;
        destinatarioSelect.appendChild(option);
    });
});



document.getElementById('enviaMissatge').addEventListener('click', async () => {
    const token = localStorage.getItem('token'); 

    const response = await fetch('/api/missatges', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + token,
        },
        body: JSON.stringify({
            destinatario_id: document.getElementById('destinatario').value,
            assumpte: document.getElementById('assumpte').value,
            missatge: document.getElementById('missatge').value,
        })
    });
    const data = await response.json();
    console.log(data);
    window.location.href = '/dashboard';
});