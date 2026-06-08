// DATOS LOGIN Y USUARIO
const token = localStorage.getItem('token');
if(!token){

    window.location.href = '/login';

}
async function cargarUsuario(){

    const response = await fetch('/api/user', {
        headers: {
            Authorization: 'Bearer ' + token
        }
    });

    if(!response.ok){

        localStorage.removeItem('token');

        window.location.href = '/login';
    }

    const user = await response.json();
    console.log(user);

    document.getElementById('saludo').innerText =
        'Bienvenido, ' + user.name + "!";

    document.getElementById('nomUsuari').textContent = user.name;
}

cargarUsuario();
const missatgeEntradaBtn = document.getElementById('missatgeEntrada');
const missatgeSortidaBtn = document.getElementById('missatgeSortida');
document.getElementById('logout').addEventListener('click', async ()=>{
    await fetch('/api/logout', {

        method: 'POST',

        headers: {
            Authorization: 'Bearer ' + token
        }

    });
    localStorage.removeItem('token');
    window.location.href = '/login';
});
function mostrarMissatge(id) {
    window.location.href = `/missatge/${id}`;
}


document.addEventListener('DOMContentLoaded', async () => {
    const token = localStorage.getItem('token');
    if(!token){
        window.location.href = '/login';
    }

    const missatgesTable = document.getElementById('missatgesTable');

    const response = await fetch('/api/missatges', {
        headers: { Authorization: 'Bearer ' + token }
    });
    const data = await response.json();
    
    if (!response.ok) {
        console.error('Error al cargar los mensajes:', data);
    }
    if (data.length === 0) {
        missatgesTable.innerHTML = "<tr><td>No tienes mensajes.</td></tr>";
    }
    else { 
        console.log(data);
        let html = "<tr><th>Missatges d'entrada</th></tr>";
        html += "<tr><th>Data</th><th>De</th><th>Assumpte</th></tr>";
        data.forEach(missatge => {
            html += `
                <tr style="cursor: pointer;" onclick="mostrarMissatge(${missatge.id})" id="missatge-${missatge.id}">
                    <td>${new Date(missatge.created_at).toLocaleString()}</td>
                    <td>${missatge.remitente.name}</td>
                    <td>${missatge.asunto}</td>
                </tr>
            `;
        });
        missatgesTable.innerHTML = html;
    }
});

missatgeEntradaBtn.addEventListener('click', async () => {
    const response = await fetch('/api/missatges/entrada', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + token,
        },
    });
    
    const data = await response.json();
    
    if (!response.ok) {
        console.error('Error al cargar los mensajes:', data);
    }
    if (data.length === 0) {
        missatgesTable.innerHTML = "<tr><td>No tienes mensajes.</td></tr>";
    }
    else { 
        console.log(data);
        let html = "<tr><th>Missatges d'entrada</th></tr>";
        html += "<tr><th>Data</th><th>De</th><th>Assumpte</th></tr>";
        data.forEach(missatge => {
            html += `
                <tr style="cursor: pointer;" onclick="mostrarMissatge(${missatge.id})" id="missatge-${missatge.id}">
                    <td>${new Date(missatge.created_at).toLocaleString()}</td>
                    <td>${missatge.remitente.name}</td>
                    <td>${missatge.asunto}</td>
                </tr>
            `;
        });
        missatgesTable.innerHTML = html;
    }
});

missatgeSortidaBtn.addEventListener('click', async () => {
    const response = await fetch('/api/missatges/sortida', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + token,
        },
    });
    const data = await response.json();
    
    if (!response.ok) {
        console.error('Error al cargar los mensajes:', data);
    }
    if (data.length === 0) {
        missatgesTable.innerHTML = "<tr><td>No tienes mensajes.</td></tr>";
    }
    else { 
        console.log(data);
        let html = "<tr><th>Missatges d'entrada</th></tr>";
        html += "<tr><th>Data</th><th>De</th><th>Assumpte</th></tr>";
        data.forEach(missatge => {
            html += `
                <tr style="cursor: pointer;" onclick="mostrarMissatge(${missatge.id})" id="missatge-${missatge.id}">
                    <td>${new Date(missatge.created_at).toLocaleString()}</td>
                    <td>${missatge.destinatario.name}</td>
                    <td>${missatge.asunto}</td>
                </tr>
            `;
        });
        missatgesTable.innerHTML = html;
    }
});