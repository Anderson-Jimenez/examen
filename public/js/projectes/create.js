document.getElementById('addProject').addEventListener('click', async () => {
    const token = localStorage.getItem('token'); 

    const response = await fetch('/api/projects', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + token,
        },
        body: JSON.stringify({
            nom: document.getElementById('name').value,
            descripcio: document.getElementById('description').value,
            data_ini: document.getElementById('start_date').value,
            data_fi: document.getElementById('end_date').value
        })
    });
    const data = await response.json();
    console.log(data);
    window.location.href = '/dashboard';
});