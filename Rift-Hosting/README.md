# Rift-Hosting v2.0 - SIN ERRORES

## ✅ Arreglos
- Todos los CSS y JS existen (no más 404)
- Logo con fondo transparente
- Links corregidos entre páginas
- PHP no rompe si no hay DB
- Formularios con validación

## Instalación
1. Subir carpeta a tu hosting (htdocs)
2. Opcional DB: CREATE DATABASE rift_hosting; CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50), email VARCHAR(100) UNIQUE, password VARCHAR(255), created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
3. Configurar api/database.php con tus credenciales
4. ¡Listo! Abre index.html

## Estructura
Rift-Hosting/
├── index.html, hosting.html, minecraft.html, vps.html, dedicados.html, panel.html, estado.html, soporte.html, contacto.html, login.html, register.html
├── css/style.css, dashboard.css, animations.css
├── js/app.js, particles.js, slider.js, theme.js
├── img/logo.png, banner.png, icons/icon.png
├── api/login.php, register.php, panel.php, database.php
└── README.md

Creado para Rocio - 2026
