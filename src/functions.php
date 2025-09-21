<?php

function saludar($nombre = "visitante") {
    return "¡Hola, " . htmlspecialchars($nombre) . "! Bienvenido a nuestro sitio desde FUNCIONALIDAD-1.";
}

function mensajePersonalizado($mensaje = "Este es un mensaje por defecto") {
    return "📢 " . htmlspecialchars($mensaje);
}

?>