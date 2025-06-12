<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libro de Reclamaciones</title>
    <link rel="stylesheet" href="reclamos.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="contenedor">
        <h1>📕 Libro de Reclamaciones</h1>
        <form id="formReclamo">
            <label for="nombre">Nombre completo</label>
            <input type="text" id="nombre" required>

            <label for="email">Correo electrónico</label>
            <input type="email" id="email" required>

            <label for="comentario">Comentario o Reclamo</label>
            <textarea id="comentario" rows="5" required></textarea>

            <button type="submit" class="enviar-reclamo">Enviar Comentario</button>
        </form>

        <a href="/promociones" class="volver">← Volver a la página</a>
    </div>
</body>
</html>
<style>
    body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', sans-serif;
    background-color: #121212;
    color: #fff;
}

.contenedor {
    background-color: #1e1e1e;
    width: 90%;
    max-width: 600px;
    margin: 50px auto;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
}

h1 {
    text-align: center;
    color: #ff3b3b;
    margin-bottom: 30px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 15px;
    margin-bottom: 5px;
    color: #ffffff;
    font-weight: bold;
}

input, textarea {
    padding: 12px;
    border: 2px solid #ff3b3b;
    border-radius: 6px;
    background-color: #2c2c2c;
    color: white;
    font-size: 1em;
    outline: none;
}

input:focus, textarea:focus {
    border-color: #ff0000;
    background-color: #333;
}

button {
    margin-top: 25px;
    padding: 12px;
    background-color: #ff3b3b;
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #d60000;
}

.volver {
    display: block;
    text-align: center;
    margin-top: 30px;
    color: #ff3b3b;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s;
}

.volver:hover {
    color: #ffffff;
    text-decoration: underline;
}
</style>


<script>
    document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("formReclamo");

    if (form) {
        form.addEventListener("submit", (e) => {
            e.preventDefault();
            const nombre = document.getElementById("nombre").value;
            const email = document.getElementById("email").value;
            const comentario = document.getElementById("comentario").value;

            const nuevoComentario = { nombre, email, comentario };
            let comentarios = JSON.parse(localStorage.getItem("comentarios")) || [];
            comentarios.push(nuevoComentario);
            localStorage.setItem("comentarios", JSON.stringify(comentarios));

            window.location.href = "/comentarios";
        });
    }

    const lista = document.getElementById("listaComentarios");
    if (lista) {
        let comentarios = JSON.parse(localStorage.getItem("comentarios")) || [];

        if (comentarios.length === 0) {
            lista.innerHTML = "<p>No hay comentarios aún.</p>";
        } else {
            comentarios.forEach((c, i) => {
                const div = document.createElement("div");
                div.className = "comentario";
                div.innerHTML = `
                    <h3>${c.nombre}</h3>
                    <p class="email">${c.email}</p>
                    <p class="texto">${c.comentario}</p>
                    <button class="btn eliminar" data-index="${i}">Eliminar</button>
                `;
                lista.appendChild(div);
            });

            // Botón eliminar individual
            document.querySelectorAll(".eliminar").forEach(boton => {
                boton.addEventListener("click", (e) => {
                    const index = e.target.getAttribute("data-index");
                    comentarios.splice(index, 1);
                    localStorage.setItem("comentarios", JSON.stringify(comentarios));
                    location.reload();
                });
            });
        }

        // Botón borrar todos
        const borrarTodos = document.getElementById("borrarTodos");
        if (borrarTodos) {
            borrarTodos.addEventListener("click", () => {
                if (confirm("¿Estás seguro de borrar todos los comentarios?")) {
                    localStorage.removeItem("comentarios");
                    location.reload();
                }
            });
        }
    }
});
</script>