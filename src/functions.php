<?php

function saludar($nombre = "visitante") {
    return "¡Hola, " . htmlspecialchars($nombre) . "! Bienvenido a nuestro sitio.";
}

function mensajePersonalizado($mensaje = "Este es un mensaje por defecto") {
    return "📢 " . htmlspecialchars($mensaje);
}

?>