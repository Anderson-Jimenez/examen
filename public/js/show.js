const token = localStorage.getItem('token');
if (!token) window.location.href = '/login';


document.addEventListener('DOMContentLoaded', async () => {
    const response = await fetch(`/api/missatges/${mensajeId}`, {
        headers: { 'Authorization': 'Bearer ' + token }
    });
    if (!response.ok) {
        alert('Error al cargar el mensaje');
        window.location.href = '/dashboard';
    }
    const mensaje = await response.json();
    // Rellenar formulario
    console.log(mensaje);
    document.getElementById('remitente').value = mensaje.remitente.name;
    document.getElementById('destinatario').value = mensaje.destinatario.name;
    document.getElementById('assumpte').value = mensaje.asunto;
    document.getElementById('data').value = new Date(mensaje.created_at).toLocaleString();
    document.getElementById('missatge').value = mensaje.mensaje;

});