const token = localStorage.getItem('token');
if (!token) window.location.href = '/login';

document.addEventListener('DOMContentLoaded', async () => {
    const response = await fetch(`/api/projects/${projectId}`, {
        headers: { 'Authorization': 'Bearer ' + token }
    });
    if (!response.ok) {
        alert('Error al cargar el proyecto');
        window.location.href = '/dashboard';
    }
    const project = await response.json();
    // Rellenar formulario
    console.log(project);
    document.getElementById('name').value = project.nom;
    document.getElementById('description').value = project.descripcio;
    document.getElementById('start_date').value = project.data_ini;
    document.getElementById('end_date').value = project.data_fi;
});





document.getElementById('editProject').addEventListener('click', async () => {
    const response = await fetch(`/api/projects/${projectId}`, {
        method: 'PUT',
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
    if (response.ok) {
        window.location.href = '/dashboard';
    } else {
        const error = await response.json();
        alert('Error: ' + (error.message || 'No se pudo actualizar'));
    }
});