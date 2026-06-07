
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
        'Bienvenido ' + user.name;
}

cargarUsuario();

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

// ---------------------------------------------- //

document.addEventListener('DOMContentLoaded', async () => {
    const lista = document.getElementById('projects-list');
    const response = await fetch('/api/projects', {
        headers: { Authorization: 'Bearer ' + token }
    });
    const data = await response.json();

    // Generar HTML de una vez
    let html = '';
    data.forEach(projecte => {
        html += `
            <li>
                ${projecte.nom}
                <button onclick="location.href='/projectes/${projecte.id}'">Editar</button>
            </li>
        `;
    });
    lista.innerHTML = html;

    const ultimProjecte = document.querySelector('.featured');
    fetch('/api/latest-projects', {
        headers: { Authorization: 'Bearer ' + token }
    })
    .then(r => r.json())
    .then(data => {
        if(data.length > 0){
            const projecte = data[0];
            ultimProjecte.innerHTML = `
                <h2>${projecte.nom}</h2>
                <p>${projecte.descripcio}</p>
            `;
        } else {
            ultimProjecte.innerHTML = '<p>No hay proyectos aún.</p>';
        }
    });

});




// Función para editar (luego la implementas)
function editarProjecte(id) {
    console.log('Editar proyecto', id);
    // Aquí puedes abrir un modal, redirigir, etc.
}